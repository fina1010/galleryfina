<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UploadController extends Controller
{
    public function index() {
        $albums = Album::where('id_user', Auth::user()->id)->get();
        return view('page.upload', compact('albums'));
    }
    public function storeFoto(Request $request){
        $request->validate([
            'url'               =>  'required',
            'judul_foto'        => 'required',
            'deskripsi_foto'    => 'required'
        ]);

        $fotoFile = $request->file('url');
        $fotoExtention = $fotoFile->getClientOriginalExtension();
        $fotoName   = date('dmyhis').'.'.$fotoExtention;
        $fotoFile->move(public_path('/img'), $fotoName);

        $dataFoto = [
            'url'               => $fotoName,
            'judul_foto'        => $request->judul_foto,
            'deskripsi_foto'    => $request->deskripsi_foto,
            'album_id'          => $request->album,
            'id_user'           => Auth::user()->id,
        ];

        Foto::create($dataFoto);
        return redirect()->back()->with('success', 'Foto berhasil di upload');
    }
}
