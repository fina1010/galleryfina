@extends('layouts.master')
@push('cssjsexternal')
            <script src="http://code.jquery.com/jquery-3.7.0.js"></script>
@endpush
@section('content')
    <section class="mt-32">
        @csrf
        <div class="items-center max-w-screen-md mx-auto ">
            <h3 class="text-5xl text-center font-fontutama">PinKitaa</h3>
        </div>
    </section>
    <section class="mt-10">
        <div class="max-w-screen-md mx-auto">
            <div class="flex flex-wrap px-2 flex-container">
                <div class="w-3/5 max-[480px]:w-full">
                    <div class="flex justify-center overflow-hidden">
                        <img src="" alt=""
                            class="w-full h-auto max-w-xl px-2 transition duration-500 ease-in-out hover:scale-105" id="fotodetail">
                    </div>
                    <div class="flex flex-col px-2">
                        <div class="font-semibold" id="judulfoto">
                            Judul Foto
                        </div>
                        <div>
                            <small class="text-abuabu" id="deskripsifoto"> Bawah </small>
                        </div>
                    </div>
                </div>
                <div class="w-2/5  max-[480px]:w-full">
                    <div class="flex flex-wrap items-center justify-between ">
                        <div class="flex flex-row items-center gap-2">
                            <div>
                                <img src="/img/gambar6.jpg" class="w-8 h-8 rounded-full" alt="">
                            </div>
                            <div class="flex flex-col">
                                <a href="/other-pin/" class="text-md" id="namaUser" ></a>
                                <small class="text-xs"></small>
                            </div>
                        </div>
                        <div>
                            <button class="px-4 rounded-full bg-bgcolor2"></button>
                        </div>
                    </div>
                    <div class="mt-[33px]">
                        Comments
                    </div>
                    <div class="relative flex flex-col overflow-y-auto h-[200px] scrollbar-hidden" id="listkomentar">
                    </div>
                    <div class="flex gap-2 mt-2">
                        <div class="w-3/4">
                            <input type="text" name="textkomentar" id="" class="w-full px-2 py-1 rounded-full border p-1 bg-white border-slate-300">
                        </div>
                        <!-- <button class="px-4 rounded-full border"><span class="text-white bi bi-send"></span></button> -->
                        <button type='submit' class="border p-1 px-6 rounded-full bg-blue-500  hover:bg-blue-700" onclick="kirimkomentar(event)"><span class="text-white bi bi-send"></span></button>
                            <!-- Kirim -->
                          
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap mt-10 flex-container" id="exploredata">
                
            </div>
        </div>
    </section>
    @endsection
    @push('cssjsexternal')
        <script src="/javascript/detail.js"></script>
    @endpush