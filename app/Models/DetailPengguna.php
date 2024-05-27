<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailPengguna extends Model
{
    use HasFactory;
    protected $table = 'detail_penggunas';

    protected $fillable = [
        'user_id',
        'nik',
        'nohp',
        'alamat',
        'jenisid',
        'fotobersamaid',
        'fotoid',
        'jenisid'
    ];

    /**
     * Summary of user
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

     public function user():HasOne
     {
         return $this->hasOne(User::class, 'id', 'user_id');
     }
}