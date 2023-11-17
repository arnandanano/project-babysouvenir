<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    use HasFactory;

    protected $table = 'nota';

    protected $fillable = [
        'no_pesanan',
        'nama_pemesan',
        'barang',
        'jumlah',
        'harga',
        'tgl_acara',
        'status_pembayaran',
    ];
}
