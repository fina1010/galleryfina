@extends('layouts.master')

@section('content')
    <section class="mt-32">
        <div class="items-center max-w-screen-md mx-auto ">
            <h3 class="text-5xl text-center font-fontutama">PinKita</h3>
        </div>
    </section>
    <form action="/upload/store" method="post" enctype="multipart/form-data">
        @csrf
      <section class="mt-10">
      <div class="max-w-screen-md mx-auto">
          <div class="flex flex-wrap items-center flex-container">
                <div class="flex flex-row">
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
                                    </form>
                                </div> 
                                <div class="mb-2 ">
                                    <!-- <label for="default-input" class="flex mb-1 text-sm font-medium dark:text-dark">Album</label> -->

                                <div class="w-[363px] h-[192px] ">
                                    <div class="mb-2">
                                        <Button type="text" id="default-input" class="rounded-md block p-1 border w-32 bg-blue-900 text-white "> Post </Button>
                                    </div>
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