<?php

namespace App\Http\Controllers;

use auth;
use App\Models\Foto;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function getdataprofile(Request $request)
    {
        $data = auth()->user();
        return response()->json([
            'data'      => $data
        ], 200);
    }

    public function getdata(Request $request){
        $explore = Foto::with(['likefotos', 'user'])->withCount(['likefotos', 'comments'])->where('user_id', auth()->id())->paginate(4);
        return response()->json([
            'datapost'      =>$explore,
            'statuscode'    => 200,
            'id'        => auth()->user()->id
        ]);
    }
   
    public function update(Request $request){
        $user = auth()->user();
        if($request->hasFile('pictures')){
            $picture = $request->file('pictures');
            $extensi = $picture->getClientOriginalExtension();
            $filename = 'users' . now()->timestamp .'.'. $extensi;
            $picture->move('img', $filename);
            $user->pictures = $filename;
        } else {
            $picture = $user->pictures;
        }

        $user->nama_lengkap = $request->nama_lengkap;
        $user->alamat = $request->alamat;
        $user->bio = $request->bio;
        

        $user->save();

        return redirect()->back()->with('success', 'Profile Berhasil Di Perbaharui');;
    }
}
