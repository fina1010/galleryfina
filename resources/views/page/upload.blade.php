@extends('layouts.master')
@push('cssjsexternal')
    <script src="http://code.jquery.com/jquery-3.7.0.js"></script>
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

    <form action="/upload/store" method="post" enctype="multipart/form-data">
        @csrf

      <section class="mt-10">
      <div class="max-w-screen-md mx-auto">
          <div class="flex flex-wrap items-center flex-container">
                <div class="flex flex-row gap-3">
                <div class="mt-6">
                    <div class="flex flex-col px-9">
                         <div class="w-[363px] h-[192px] bg-bgcolor2">
                            <div class="flex items-center justify-center w-full">
                                <label for="dropzone-file" class="flex flex-col items-center justify-center  w-full h-69 border-2 border-gray-900 border-dashed rounded-lg cursor-pointer bg-gray-300 dark:hover:bg-bray-800 dark:bg-gray-300 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                        <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/></svg>
                                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                                        </div>
                                        <input id="dropzone-file" name="url" type="file" class="hidden" />
                                    </label>
                                </div> 
                                </div>
                            </div>
                        </div>
                <!-- <div class="flex mt-2 "> -->
                    <!-- <div class="flex flex-col px-2"> -->
                            <div class="w-[363px] h-[192px]">
                                <div class="mt-4 mb-2">
                                    <label for="default-input" class="ml-2 mb-2 text-xl font-medium dark:text-dark">Judul</label>
                                    <input type="text" id="default-input" name="judul_foto" class=" block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-slate-300 dark:border-gray-300 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 " placeholder="Tambahkan Judul">
                                </div>
                                <div class="mb-2">                                  
                                    <form class="max-w-sm mx-auto">
                                      <label for="message" class="block ml-2 text-xl font-medium text-gray-900 dark:text-dark">Deskripsi</label>
                                        <textarea id="message" rows="4" name="deskripsi_foto" class="block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-slate-300 dark:border-gray-300 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tambahkan deskripsi terperinci"></textarea>
                                        <div class="w-[363px] h-[192px]">
                                            <div class="mb-2">
                                            <h3 class="mt-4 text-xl font-medium">Pilih Album</h3>
                                        <select name="album" id="" class="block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-slate-300 dark:border-gray-300 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            @foreach($albums as $album)
                                                <option value="{{ $album->id }}">{{ $album->nama_album}}</option>
                                            @endforeach
                                        </select>
                                        <div class="mb-2 mt-8">
                                        <Button type="text" id="default-input" class="rounded-md block p-1 border w-32 bg-blue-900 text-white "> Post </Button>
                                    </div>
                                            </div>
                                        </div>
                                        </select>
                                    </form>
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
@endsection
@push('cssjsexternal')
<script src="/javascript"></script>
@endpush