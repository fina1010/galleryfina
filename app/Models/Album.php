<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_album',
        'deskripsi',
        'foto',
        'id_user',
     ];
       //untuk konek ke table
       protected $table = 'albums';
       //nilai ke foto
       public function fotos()
       {
          return $this->hasMany(Foto::class,'id_foto','id');
       }
}
