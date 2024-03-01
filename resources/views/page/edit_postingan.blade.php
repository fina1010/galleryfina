@extends('layout.master')

@section('content')
    <section class="mt-32">
        <div class="items-center max-w-screen-md mx-auto ">
            <h3 class="text-5xl text-center font-fontutama">PinKita</h3>
        </div>
    </section>
    <section class="mt-10">
        <div class="max-w-screen-md mx-auto">
            <div class="flex flex-wrap px-2 flex-container">
                <div class="w-3/5 max-[480px]:w-full">
                    <div class="flex justify-center px-3">
                        <div class="flex items-center justify-center w-full">
                            <div class="w-80 h-60 flex"></div>
                            <img class=" h-full w-full object-cover rounded-lg" src="/img/gambar5.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="w-2/5  max-[480px]:w-full px-2">
                    <div class="flex flex-col flex-wrap">
                        <h3>Judul</h3>
                        <input type="text" name="" id="" class="py-1 rounded-full border-2 border-slate-500">
                        <h3 class="mt-4">Deskripsi</h3>
                        <textarea name="" id="" cols="30" rows="10"
                            class="w-full h-36 border-2 border-slate-500 rounded-xl"></textarea>
                        <div class="flex flex-row justify-between">
                            <div></div>
                            <button class="px-6 py-1 mt-4  text-white rounded-sm bg-slate-500">Post</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection