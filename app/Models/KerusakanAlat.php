<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KerusakanAlat extends Model
{
    use HasFactory;

    protected $table = 'kerusakan_alat';

    protected $fillable = [
        'id_alat',
        'spesifikasi',
        'kerusakan',
        'tgl_kerusakan',
        'keterangan'
    ];

    public function inventaris()
    {
        return $this->belongsTo(Inventaris::class, 'id_alat');
    }
}
