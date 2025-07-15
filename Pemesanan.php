<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    //
    protected $fillable = [
        'user_id',
        'nama',
        'telp',
        'email',
        'alamat_penjemputan',
        'jenis_pemesanan',
        'jenis_layanan',
        'tanggal_penjemputan',
        'jam_penjemputan',
        'pengiriman',
        'status',
        'berat',
        'total_harga',
    ];

    
}
