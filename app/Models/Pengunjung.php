<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengunjung extends Model
{
    use HasFactory;
    protected $table = 'pengunjung';

    protected $fillable = [
        'nama_pengunjung',
        'nomor_hp_pengunjung',
        'tanggal_lahir_pengunjung',
        'jenis_kelamin',
        'email_pengunjung',
        'password',
        'provinsi',
        'kabupaten',
        'kecamatan',
        'alamat',
    ];
}
