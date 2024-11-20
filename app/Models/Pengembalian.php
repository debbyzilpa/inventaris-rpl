<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    use HasFactory;

    protected $table = 'pengembalian';

    protected $fillable = [
        'id_alat',
        'id_peminjaman',
        'jumlah',
        'tgl_kembali',
        'kondisi_kembali',
    ];
}
