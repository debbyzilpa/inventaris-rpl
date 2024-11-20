<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjaman'; // Nama tabel

    // Kolom yang boleh diisi secara mass assignment
    protected $fillable = [
        'id_alat',
        'id_peminjaman',
        'jumlah',
        'tgl_peminjaman',
        'kondisi_pinjam'
    ];

    // Relasi dengan model Inventaris
    public function inventaris()
    {
        return $this->belongsTo(Inventaris::class, 'id_alat');
    }

    // Relasi dengan model User (Peminjam)
    public function user()
    {
        return $this->belongsTo(User::class, 'id_peminjaman');
    }
}
