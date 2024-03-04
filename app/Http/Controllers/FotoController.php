<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FotoController extends Controller
{
    public function editfoto(Request $request, $id){
        $user = auth()->user();
        $albums = Album::where('id_user', Auth::user()->id)->get();
        $foto = Foto::find($id);
        return view('page.edit_postingan', compact('user', 'albums', 'foto'));
    }
    public function editpostingan(Request $request, $id){
        $foto = Foto::find($id);

        $foto->judul_foto       = $request->judul_baru;
        $foto->deskripsi_foto   = $request->deskripsi_baru;
        $foto->album_id         = $request->album;

        $foto->save();

        return redirect()->back()->with('success', 'Postingan Berhasil Diperbarui');
    }

    public function hapuspostingan($id){
        $foto = Foto::find($id);
        $foto->delete();

        return redirect()->back()->with('success', 'Postingan Berhasil Di Hapus');
    }
    
    public function hapusalbum($id){
        $album = Album::find($id);
        $album->delete();

        return redirect()->back()->with('success', 'Postingan Berhasil Di Hapus');
    }
}