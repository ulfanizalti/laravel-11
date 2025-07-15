<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use App\Models\Pemesanan;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
        $pemesananBaru = Pemesanan::where('status', 'Pending')->count();
        $pemesananProcess = Pemesanan::where('status', 'Process')->count();
        $pemesananFinished = Pemesanan::where('status', 'Finished')->count();
        $members = Membership::get();

        return view('adminPage.index', compact('pemesananBaru', 'pemesananProcess', 'pemesananFinished', 'members'));
    }

    public function daftarPesanan()
    {
        $pemesanan = Pemesanan::whereIn('status', ['Pending', 'Process'])->latest()->get();

        return view('adminPage.daftarPesanan', compact('pemesanan'));
    }

    public function pesananBaru()
    {
        return view('adminPage.pesananBaru');
    }

    public function recap(Request $request, $month = null)
    {
        if ($month == 'all') {
            // Show all data
            $pesanans = Pemesanan::where('status', 'finished')
                ->orderBy('created_at', 'desc')
                ->get();
        } else {
            // Show data for a specific month, default to current month
            $month = $month ?? now()->format('m');

            $pesanans = Pemesanan::whereMonth('created_at', $month)
                ->where('status', 'finished')
                ->orderBy('created_at', 'desc')
                ->get();
        }

        return view('adminPage.recap', compact('pesanans'));
    }

    public function edit($slug)
    {
        $pesanan = Pemesanan::where('id', $slug)->firstOrFail();

        return view('adminPage.pesananBaru', compact('pesanan'));
    }

    public function store(Request $request, $slug)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jenis_pemesanan' => 'required|string|max:255',
            'telp' => 'required|string|max:20',
            'jenis_layanan' => 'required|string|max:255',
            'berat' => 'required|numeric|min:0.1',
            'harga' => 'required|numeric|min:0',
        ]);

        $pesanan = Pemesanan::where('id', $slug)->firstOrFail();

        // Default harga
        $harga = $request->harga;

        if ($request->jenis_layanan == 'Member') {
            $membership = Membership::where('user_id', $pesanan->user_id)->first();

            if ($membership) {
                $sisa_kuota = $membership->member - $request->berat;

                if ($sisa_kuota >= 0) {
                    $harga = 0; // set harga to 0
                    // update membership kuota
                    $membership->member = $sisa_kuota;
                    $membership->save();
                }
            }
        }

        $pesanan->update([
            'nama' => $request->nama,
            'jenis_pemesanan' => $request->jenis_pemesanan,
            'telp' => $request->telp,
            'jenis_layanan' => $request->jenis_layanan,
            'berat' => $request->berat,
            'total_harga' => $harga,
            'status' => 'Process',
        ]);

        return redirect()->route('daftarPesanan');
    }

    public function approve($slug)
    {
        $pesanan = Pemesanan::where('id', $slug)->firstOrFail();

        $pesanan->update([
            'status' => 'Finished'
        ]);

        return redirect()->route('daftarPesanan');
    }

    public function delete($slug)
    {
        $pesanan = Pemesanan::where('id', $slug)->first();

        if (!$pesanan) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }

        $pesanan->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }

    public function deleteMember($slug)
    {
        $member = Membership::where('id', $slug)->firstOrFail();

        if (!$member) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }

        $member->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }

    public function receipt($slug)
    {
        $pesanan = Pemesanan::findOrFail($slug);

        $pdf = Pdf::loadView('adminPage.receipt', compact('pesanan'));

        return $pdf->stream('receipt_' . $pesanan->id . '.pdf');
    }
}
