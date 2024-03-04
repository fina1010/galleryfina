<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    public function album(Request $request)
    {
        $user = auth()->user();
        $albums = Album::where('id_user', Auth::user()->id)->get();
        return view('page.album', compact('user', 'albums'));
    }
    public function buatalbum(Request $request)
    {
        $user = auth()->user();
        return view('page.buatalbum', compact('user'));
    }
    public function upload(Request $request)
    {
        $user = auth()->user();
        $albums = Album::where('id_user', Auth::user()->id)->get();
        return view('page.upload', compact('albums', 'user'));
    }
}