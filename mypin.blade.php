@extends('layouts.master')
@push('cssjsexternal')
            <script src="http://code.jquery.com/jquery-3.7.0.js"></script>
@endpush
@section('content')

   <div class="p-8 mx-auto rounded text-center text-gray-500 max-w-sm">
            <div class="w-32 h-32 rounded-full overflow-hidden border-2 dark:border-white   mx-auto">
            <img class="w-auto " src="/img/" alt="" id="profile">
            </div>
            <div class="text-lg mt-2">
                <a href="#"
                    class="font-medium leading-none text-gray-900 m hover:text-indigo-600 transition duration-500 ease-in-out" id="nama">
                </a>
                <p class="mt-2 text-sm" id="biomy"><i class="bi bi-envelope gap-2"></i></p>
                <p class="mt-2 text-sm"><i class="bi bi-envelope mr-2" id="alamatmy"></i></p>
            </div>
            <div>
                <a class=" lg:inline-block mt-3 py-2 px-6 bg-blue-500 hover:bg-gray-200 text-sm text-white font-dm  rounded-xl transition duration-200 " href="/editprofil">Edit Profil</a>
            </div>
          </div>
      
    <div class="max-w-screen-md mx-auto px-3">
        <div class="  justify-around mb-4 border-b border-gray-200 dark:border-gray-700 mx-4 -sm:pl-[40px]">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center justify-between lg:justify-normal md:justify-normal sm:pl-[260px] sm:justify-normal"
                id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                <li class="" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="unggahan-tab" data-tabs-target="#unggahan"
                        type="button" role="tab" aria-controls="unggahan" aria-selected="false">Unggahan</button>
                </li>
                <li class="" role="presentation">
                    <button
                        class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                        id="album-tab" data-tabs-target="#album" type="button" role="tab" aria-controls="album"
                        aria-selected="false">Album</button>
                </li>
                
            </ul>
        </div>
    </div>
    <div id="default-tab-content">
        <!-- unggahan -->
       
        <div class="mx-auto max-w-2xl sm:px-6 sm:py-2 lg:max-w-7xl lg:px-8" id="unggahan" role="tabpanel" aria-labelledby="unggahan-tab" >
        @csrf
		<div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8 " id="exploredata" >
            

  
        
         </div>
        </div>
        <!-- Album -->
        <div class="hidden p-4 rounded-lg mb-14" id="album" role="tabpanel" aria-labelledby="album-tab">
            <div class="grid grid-cols-3 sm:grid-cols-5 md:grid-cols-4 lg:grid-cols-6 gap-3 md:pl-[260px] sm:pl-[260px]">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="/img/bg_01.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="/assets/1.jfif" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="/assets/1.jfif" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="/assets/1.jfif" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="/assets/1.jfif" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('assets/folder.jpeg') }}" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('assets/folder.jpeg') }}" alt="">
                </div>
            </div>
        </div>
        
    </div>
    @endsection
    @push('cssjsexternal')
        <script src="/javascript/profile.js"></script>
    @endpush





    // Route::get('/album', [ViewController::class, 'album']);
    // Route::get('/upload/uploadfoto', [UploadController::class, 'uploadfoto']);
    // Route::get('/upload', [ViewController::class, 'upload']);
    // Route::get('/buatalbum', [ViewController::class, 'buatalbum']);
    // Route::post('/buat-album', [AlbumController::class, 'storeAlbum']);
    // Route::get('/detailalbum/{id}', [AlbumController::class, 'detail']);
    // Route::post('/upload/store', [UploadController::class, 'storeFoto']);