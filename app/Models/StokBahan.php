<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StokBahan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_bahan',
        'stok_awal',
        'stok_tambah',
        'stok_keluar',
        'stok_sisa',
        'angka_perolehan',
        'angka_penyusutan',
    ];
}
