@extends('layouts.master')
@push('cssjsexternal')
    <script src="http://code.jquery.com/jquery-3.7.0.js"></script>
@section('content')


   
    <section class="mt-32">
        <div class="items-center max-w-screen-md mx-auto ">
            <h3 class="text-5xl text-center font-fontutama">PinKita</h3>
        </div>
    </section>
    <section class="mt-10">
        @csrf
        <div class="max-w-screen-md mx-auto">
            <div class="flex flex-wrap items-center flex-container" id='exploredata'>
                <div class="flex mt-2 bg-white">
                    <!-- <div class="flex flex-col px-2">
                        <a href="/detail">
                            <div class="w-[363px] h-[192px] bg-bgcolor2 overflow-hidden">
                                <img src="/img/gambae3.jpg" alt="" class="w-full transition duration-500 ease-in-out hover:scale-105">
                            </div>
                        </a>
                        <div class="flex flex-wrap items-center justify-between px-2 mt-2">
                            <div>
                                <div class="flex flex-col">
                                    <div>
                                        Kebahagiaan
                                    </div>
                                    <div class="text-xs text-abuabu">
                                        15w
                                    </div>
                                </div>
                            </div>
                            <div>
                                <span class="bi bi-chat-left-text"></span>
                                <small>14</small>
                                <span class="bi bi-heart"></span>
                            </div>
                        </div>
                    </div> -->
                </div>
                
            </div>
        </div>
    </section>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script> -->

@endsection
@push('cssjsexternal')
<script src="/javascript/explore.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.30.1/moment.min.js"></script>
@endpush