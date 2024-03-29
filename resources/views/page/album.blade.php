@extends('layouts.master')
@push('cssjsexternal')
    <script src="http://code.jquery.com/jquery-3.7.0.js"></script>
@section('content')


<section class="mt-32">
        <div class="items-center max-w-screen-md mx-auto ">
            <h3 class="text-5xl text-center font-fontutama">Album</h3>
        </div>
    </section>
    <div class="items-center max-w-screen-md mx-auto ml-72 mt-4">
        <a href="/buatalbum"><button class="px-3 py-1 bg-green-300 rounded-md text-white">+Buat Album</button></a>
    </div>
    <section class="mt-8">
        <div class="max-w-screen-md mx-auto">
            <div class="flex flex-wrap items-center flex-container">

                @foreach ($albums as $album)

                <div class="flex mt-2 bg-white">
                    <div class="flex flex-col px-2">
                        <a href="/detailalbum/{{ $album->id }}">
                            <div class="w-[363px] h-[192px] bg-bgcolor2 overflow-hidden">
                                <img src="{{asset('/img/'.$album->foto)}}" alt="" class="w-full transition duration-500 hover:scale-105">
                            </div>
                        </a>
                        <div class="text-center font-semibold shadow-xl">
                            {{ $album->nama_album }}
                            <a href="/hapusalbum/{{$album->id}}" class="px-2 py-0 bg-red-600 rounded-md"><i class="bi bi-trash3 "></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    @endsection
@push('cssjsexternal')
<script src="/javascript"></script>
@endpush
    
