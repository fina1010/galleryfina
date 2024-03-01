<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class likefoto extends Model
{
    use HasFactory;
    protected $fillable = [
        // 'judul_foto',
        // 'deskripsi_foto',
        // 'url',
        'id_user',
        'id_foto'
    ];

    protected $table = 'likefotos';

    //relasi balik ke table user
    public function user(){
        return $this->belongTo(User::class, 'id_user', 'id');
    }

    //relasi ke table like
    public function likefotos(){
        return $this->hasMany(Likefoto::class, 'id_foto','id');
    }
}
