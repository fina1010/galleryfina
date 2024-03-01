<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlbumController extends Controller
{
    public function index() {
        $albums = Album::where('id_user', Auth::user()->id)->get();
        return view('page.album', compact('albums'));
    }
    public function storeAlbum(Request $request){
        $request->validate([
        'nama_album'  => 'required',
        'deskripsi'  => 'required'
        ]);

        $fotoFile = $request->file('foto');
        $fotoExtention = $fotoFile->getClientOriginalExtension();
        $fotoName   = date('dmyhis').'.'.$fotoExtention;
        $fotoFile->move(public_path('/img'), $fotoName);

        $dataAlbum = [
            'nama_album'  =>$request->nama_album,
            'foto'        => $fotoName,
            'deskripsi'   => $request->deskripsi,
            'id_user'    => Auth::user()->id,
           
        ];
        Album::create($dataAlbum);
        return redirect()->back()->with('success', 'Album Berhasil Di Buat');
    }
    public function detail($id){
        $fotos = Foto::where('album_id', $id)->where('id_user', Auth::user()->id)->get();
        $album = Album::where('id', $id)->first();

        return view('page.detail-album', compact('fotos', 'album'));
    }
}