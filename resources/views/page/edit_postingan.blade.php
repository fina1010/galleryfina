@extends('layouts.master')

@section('content')

    <section class="mt-32">
        <div class="items-center max-w-screen-md mx-auto ">
            <h3 class="text-5xl text-center font-fontutama">PinKitaa</h3>
        </div>
    </section>
    @if ($message = Session::get('success'))
    <div class="flex justify-center mt-4">
        <div id="toast-undo" class="flex items-center justify-center w-full max-w-xs p-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
            <div class="text-sm font-normal text-blue-600">
            {{ $message }}
            </div>
            <div class="flex items-center ms-auto space-x-2 rtl:space-x-reverse">
                <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-undo" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                </button>
            </div>
        </div>
    </div>
    @endif

    <form action="/edit_postingan/{{$foto->id}}" method="GET" enctype="multipart/form-data">
        @csrf

      <section class="mt-1">
      <div class="max-w-screen-md mx-auto flex justify-center">
          <div class="flex flex-wrap items-center flex-container">
                <div class="flex flex-row gap-3">
                <div class="mt-6">
                            <div class="w-[363px] h-[192px]">
                                <div class="mt-4 mb-2">
                                    <label for="default-input" class="ml-2 mb-2 text-xl font-medium dark:text-dark">Judul</label>
                                    <input type="text" id="default-input" name="judul_baru" class=" block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-slate-300 dark:border-gray-300 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 " value="{{$foto->judul_foto}}">
                                </div>
                                <div class="mb-2">                                  
                                    <form class="max-w-sm mx-auto">
                                      <label for="message" class="block ml-2 text-xl font-medium text-gray-900 dark:text-dark">Deskripsi</label>
                                        <input id="message" rows="4" name="deskripsi_baru" class="block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-slate-300 dark:border-gray-300 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$foto->deskripsi_foto}}">
                                        <div class="w-[363px] h-[192px]">
                                            <div class="mb-2">
                                            <h3 class="mt-4 text-xl font-medium">Pilih Album</h3>
                                        <select name="album" id="" class="block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-slate-300 dark:border-gray-300 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            @foreach($albums as $album)
                                                <option value="{{ $album->id }}">{{ $album->nama_album}}</option>
                                            @endforeach
                                        </select>
                                        <div class="mb-2 mt-8">
                                        <Button type="submit" id="default-input" class="rounded-md block p-1 border w-32 bg-blue-900 text-white "> Post </Button>
                                    </div>
                                            </div>
                                        </div>
                                        </select>
                                
                                </div>  
                                <div class=" ">
                                    <!-- <label for="default-input" class="flex mb-1 text-sm font-medium dark:text-dark">Album</label> -->

                                <div class="w-[363px] h-[192px] ">
                                   
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            <div>
                            </div>
                        </div>
                </section>
</form>
@endsection
