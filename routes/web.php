<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PinController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\MypinController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\profileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('page.index');
});

Route::get('/register',[AuthController::class, 'register']);

Route::post('/registered', [AuthController::class,'registered']);
Route::get('/login', function () {
    return view('page.login');
})->name('login');

Route::middleware('auth')->group(function(){

    Route::get('/detail/{id}', function () {
        return view('page.detail');
    });
    Route::get('/detail/getdatadetail/{id}', [ExploreController::class, 'getdatadetail']);
    Route::get('/explore', function () {
        return view('page.explore');
    });

    Route::get('/getDataExplore',[ExploreController::class, 'getdata']);

    Route::post('/likefotos', [ExploreController::class, 'likefotos']);
    Route::post('/detail/kirimkomentar/', [ExploreController::class, 'kirimkomentar']);

    Route::get('/edit_profil', function () {
        $user=auth()->user();
        return view('page.edit_profil', compact ('user'));
    });
    Route::post('/update', [MypinController::class, 'update']);
    
    Route::get('/detail/getComment/{id}', [ExploreController::class, 'ambildatakomentar']);

    Route::get('/other-pin/{id}', function () {
        $user=auth()->user();
        return view('page.other-pin', compact('user'));
    });
    Route::get('/other-pin/getDataPin/{id}',[PinController::class, 'getdatapin']);
    Route::get('/getdataotherpinexplore',[PinController::class, 'getdata']);

    Route::get('/profilsaya', function () {
        return view('page.profilsaya');
    });

    //edit postingan
    Route::get('/edit_postingan/{id}', [FotoController::class, 'editpostingan']);
    Route::get('/hapus/{id}', [FotoController::class, 'hapuspostingan']);
    Route::get('/hapusalbum/{id}', [FotoController::class, 'hapusalbum']);
    Route::get('/edit/{id}', [FotoController::class, 'editfoto']);


    Route::get('/dataprofile/', [MypinController::class, 'getdataprofile']);
    Route::get('/getdataprofile/', [MypinController::class, 'getdata']);

    
    Route::post('/upload/store', [UploadController::class, 'storeFoto']);
    Route::get('/upload', [UploadController::class, 'index']);
   
    Route::get('/album', function () {
        return view('page.album');
    });

    Route::get('/album', [AlbumController::class, 'index']);
    Route::post('/buatalbum', [AlbumController::class, 'storeAlbum']);
    Route::get('/detailalbum/{id}', [AlbumController::class, 'detail']);

    Route::post('/update-password', [MypinController::class, 'ubahpassword']);
    Route::get('/changepassword', function () {
        return view('page.changepassword');
    });

    Route::get('/buatalbum', function () {
        return view('page.buatalbum');
    });



    Route::get('/logout', [AuthController::class, 'logout']);
});
Route::post('/auth', [AuthController::class, 'auth']);

