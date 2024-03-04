@extends('layouts.master')
@push('cssjsexternal')
    <script src="http://code.jquery.com/jquery-3.7.0.js"></script>
@section('content')

@include('include.navbar')

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

    <section>
        <div class="flex flex-col items-center max-w-screen-md px-2 mx-auto mt-4">
            <div>
                <img src="" alt="" class="w-24 h-24 rounded-full" id="myprofile">
            </div>
            <!-- <a href="profil.html"> -->
                <h3 class="text-2xl font-fontkedua mt-1" id="nama">
                    
                </h3>
            </a>
            
            <div class="flex flex-row mt-3">
                <small class="mr-4 text-abuabu"></small>
                <small class="text-abuabu"></small>
            </div>
        </div>
    </section>
    <section class="mt-10">
        <div class="max-w-screen-md mx-auto">
            <div class="flex flex-wrap items-center flex-container" id="dataprofile">
                <!-- <div class="flex mt-2 bg-white">
                    <div class="flex flex-col px-2">
                        <a href="/detail">
                            <div class="w-[363px] h-[192px] bg-bgcolor2 overflow-hidden">
                                <img src="/img/gambar2.jpg" alt=""
                                    class="w-full transition duration-500 ease-in-out hover:scale-105">
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
                    </div>
                </div>
                <div class="flex mt-2 bg-white">
                    <div class="flex flex-col px-2">
                        <a href="/detail">
                            <div class="w-[363px] h-[192px] bg-bgcolor2 overflow-hidden">
                                <img src="/img/gambar4.jpg" alt=""
                                    class="w-full transition duration-500 ease-in-out hover:scale-105">
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
                    </div>
                </div>
                <div class="flex mt-2 bg-white">
                    <div class="flex flex-col px-2">
                        <a href="/detail">
                            <div class="w-[363px] h-[192px] bg-bgcolor2 overflow-hidden">
                                <img src="/img/gambar5.jpg" alt=""
                                    class="w-full transition duration-500 ease-in-out hover:scale-105">
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
                    </div>
                </div>
                <div class="flex mt-2 bg-white">
                    <div class="flex flex-col px-2">
                        <a href="/detail">
                            <div class="w-[363px] h-[192px] bg-bgcolor2 overflow-hidden">
                                <img src="/img/gambar6.jpg" alt=""
                                    class="w-full transition duration-500 ease-in-out hover:scale-105">
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
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script> -->

@endsection
@push('cssjsexternal')
<script src="/javascript/mypin.js"></script>
@endpush