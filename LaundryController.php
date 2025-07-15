<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class LaundryController extends Controller
{
    public function landingPage()
    {
        return view('welcome');
    }

    public function katalogPage()
    {
        return view('laundry.katalog');
    }

    public function kontak_pemesananPage()
    {
        return view('laundry.kontak_pemesanan');
    }

    public function daftarmemberPage()
    {
        return view('laundry.daftar_member');
    }

    public function konfirmasipesananPage()
    {
        return view('laundry.konfirmasi_pemesanan');
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'telp' => 'required|string|max:20',
            'email' => 'required|email',
            'alamat_penjemputan' => 'required|string|max:255',
            'jenis_pemesanan' => 'required|in:Cuci Setrika,Cuci Kering,Setrika Saja,Layanan Sepatu,Layanan Tas',
            'jenis_layanan' => 'required|in:Biasa,Express,Member',
            'tanggal_penjemputan' => 'required|date',
            'jam_penjemputan' => 'required|date_format:H:i',
            'pengiriman' => 'required|in:antar,ambil',
        ]);

        // Tambahkan user_id dari user yang sedang login
        $validated['user_id'] = Auth::id();

        // check if the user has membership
        if ($validated['jenis_layanan'] == 'Member') {
            $hasMembership = Membership::where('user_id', Auth::id())->exists();

            if (!$hasMembership) {
                return back()
                    ->withInput()
                    ->with('error', 'Anda tidak memiliki keanggotaan aktif untuk menggunakan layanan Member. Silakan daftar membership terlebih dahulu.');
            }
        }

        try {
            Pemesanan::create($validated);
        } catch (\Exception $e) {
            // Jika gagal simpan ke DB, kembalikan ke form dengan pesan error
            return back()->with('error', 'Gagal menyimpan pesanan. Silakan coba lagi.');
        }
        // =======================================================

        // Menggunakan Carbon untuk memformat tanggal agar lebih mudah dibaca
        $tanggalFormatted = Carbon::parse($validated['tanggal_penjemputan'])->isoFormat('dddd, D MMMM YYYY');


        // Buat format pesan WhatsApp 
        $pesan = "Halo Admin, saya mau pesan laundry.\n\n" .
            "Nama Pelanggan: *" . $validated['nama'] . "*\n" .
            "No. Telepon: " . $validated['telp'] . "\n" .
            "Alamat Penjemputan: " . $validated['alamat_penjemputan'] . "\n" .
            "Jenis Pemesanan: " . $validated['jenis_pemesanan'] . "\n" .
            "Jenis Layanan: " . $validated['jenis_layanan'] . "\n" .
            "Tanggal Penjemputan: " . $tanggalFormatted . "\n" .
            "Jam Penjemputan: " . $validated['jam_penjemputan'] . "\n" .
            "Pengiriman: " . $validated['pengiriman'] . "\n\n" .
            "Mohon segera diproses ya. Terima kasih!";


        // Tentukan nomor WhatsApp Admin (tetap sama)
        $nomorAdmin = env('WHATSAPP_ADMIN_NUMBER', '6281266567456');
        //  Buat URL WhatsApp (tetap sama)
        $whatsappUrl = "https://wa.me/{$nomorAdmin}?text=" . urlencode($pesan);



        //  Redirect pengguna ke URL WhatsApp (tetap sama)
        return redirect()->away($whatsappUrl);

        // $validated['user_id'] = Auth::id();

        // Pemesanan::create($validated);

        // return redirect()->route('konfirmasi_pesananPage')->with('success', 'Your order is successfully placed');
    }

    public function memberStore(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
            'member' => 'required|in:30,50',
        ], [
            'required' => ':attribute is required',
            'email' => 'Email is not  valid',
            'unique' => 'Email is already registered',
            'confirmed' => 'Confirm password does not match',
            'min' => 'Minimum Password: min 8 characters.',
        ]);

        $validated['user_id'] = Auth::id();

        try {
            Membership::create($validated);
        } catch (\Exception $e) {
            // Jika gagal simpan ke DB, kembalikan ke form dengan pesan error
            return back()->with('error', 'Gagal menyimpan pesanan. Silakan coba lagi.');
        }

        $pesan = "Halo Admin, saya ingin berlangganan Member laundry.\n\n" .
            "Nama Pelanggan: *" . $validated['nama'] . "*\n" .
            "Email Pelanggan: " . $validated['email'] . "\n" .
            "Paket Langganan: " . $validated['member'] . "\n" .
            "Mohon segera diproses ya. Terima kasih!";

        $nomorAdmin = env('WHATSAPP_ADMIN_NUMBER', '6281266567456');

        $whatsappUrl = "https://wa.me/{$nomorAdmin}?text=" . urlencode($pesan);

        return redirect()->away($whatsappUrl);
    }
}
