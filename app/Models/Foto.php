<?php

namespace App\Models;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class foto extends Model
{
    use HasFactory;
    protected $fillable = [
      'judul_foto',
      'deskripsi_foto',
      'url',
      'id_user',
      'album_id'
    ];

    protected $table ='fotos';

    //Relasi nilai balik ke table user
    public function user(){
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    //Relasi ke table likefotos
    public function likefotos(){
        return $this->hasMany(Likefoto::class, 'id_foto', 'id');
    }

    //Relasi ke table comment
    public function comments(){
        return $this->hasMany(Comment::class, 'id_foto', 'id');
    }
    public function albums(){
        return $this->belongsTo(Album::class, 'album_id', 'id');
    }
}
