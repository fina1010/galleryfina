<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\LikeFoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MypinController extends Controller
{
    public function getdataprofile(Request $request){
        $data = auth()-> user();
        return response()->json([
            'data' => $data
        ],200);
    }
    
    public function getdata(Request $request){
        $explore = Foto::with('likefotos')->withCount(['likefotos', 'comments'])->where('id_user', auth()->id())->paginate(4);
        return response()->json([
            'datapost'  =>$explore,
            'statuscode'=> 200,
            'id'        =>auth()->user()->id,
        ]);
    }

    public function likesfoto(Request $request){
        try {
            $request->validate([
                'idfoto' => 'required'
            ]);

            $existignLike = LikeFoto::where('id_foto', $request->idfoto)->where('id_user', auth()->user()->id)->first(); 
            if(!$existignLike){
                $dataSimpan = [
                    'id_foto'       => $request->idfoto,
                    'id_user'       => auth()->user()->id
                ];
                Likefoto::create($dataSimpan);
            }else{
                Likefoto::where('id_foto', $request->idfoto)->where('id_user', auth()->user()->id)->delete();
            }

            return response()->json('Data berhasil di simpan', 200);
        } catch (\Throwable $th) {
            return response()->json('Somenting went wrong', 500);
        }
    }

    public function update(Request $request){
        $user = auth()->user();
        if ($request->hasFile('picture')) {
            $picture = $request->file('picture');
            $extensi = $picture->getClientOriginalExtension();
            $filename = 'users'. now()->timestamp.'.'. $extensi;
            $picture->move('img', $filename);
            $user->picture = $filename; 
        }else{
            $picture = $user->picture;
        }

        $user->nama_lengkap = $request->nama_lengkap;
        $user->alamat = $request->alamat;

        $user->save();

        return redirect()->back()->with('succes','Profil berhasil diperbarui');
    }
    public function ubahpassword(Request $request){
        $pesan =[
            'password_lama.required'    => 'Password lama harus di isi',
            'password_baru.required'    => 'Password baru harus di isi',
            'password_baru.min'         => 'Password minimal 8 karakter',
            'confirm_password.required' => 'Konfirmasi password harus di isi',
            'confirm_password.same'     => 'Konfirmasi password harus sama dengan password baru'
        ];

        $request->validate([
            'password_lama'     => 'required',
            'password_baru'     => 'required|min:8',
            'confirm_password'  => 'required|same:password_baru'
        ],$pesan);

        $user = auth()->user();
        
        if (!Hash::check($request->password_lama, $user->password)){
            return redirect()->back()->with('eror', 'Password lama salah');
        }else{
            $user->update([
                'password'  => Hash::make($request->password_baru)
            ]);
            return redirect()->back()->with('success', 'Password Berhasil di ubah');
        }
    }
}