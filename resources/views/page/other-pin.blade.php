@extends('layouts.master')
@push('cssjsexternal')
    <script src="http://code.jquery.com/jquery-3.7.0.js"></script>
@section('content')

    <section class="mt-32">
        @csrf
        <div class="items-center max-w-screen-md mx-auto mt-3 ">
            <h3 class="text-5xl text-center font-fontutama">Gallery Foto</h3>
        </div>
    </section>
    <section>
        <div class="flex flex-col items-center max-w-screen-md px-2 mx-auto mt-4">
            <div>
                <img src="/asset/Hair envy.jpg" alt="" class="w-24 h-24 rounded-full" id="imageUser">
            </div>
            <h3 class="text-xl font-semibold mt-4" id="namaUser">
                asep
            </h3>
            <small class="text-xs mt-4" id="bio">In this link, I present my services as well as all the tools that help me in
                drawing</small>
            <div class="flex flex-row mt-3">
            </div>
        </div>
    </section>
    <section class="mt-10">
        <div class="max-w-screen-md mx-auto">
            <div class="flex flex-wrap items-center flex-container" id="exploredata">
                
                </div>
            </div>
        </div>
    </section>
@endsection
@push('footerjsexternal')
        <script src="/javascript/other-pin.js"></script>
@endpush
