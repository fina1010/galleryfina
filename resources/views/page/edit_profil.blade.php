@extends('layouts.master')

@section('content')

<section class="mt-32">
        <div class="items-center max-w-screen-md mx-auto ">
            <h3 class="text-4xl text-center font-fontutama">pinkitaa</h3>
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
   
    <form action="update" method="POST" enctype="multipart/form-data">
        @csrf
    
    <section class="max-w-screen-md mx-auto  ">
        <div class="flex flex-wrap justify-between mt-10 flex-container">
            <div class="flex flex-col items-center w-2/6 bg-white rounded-md shadow-md max-[480px]:w-full">
                <img src="{{asset('img/'.$user->picture)}}" alt="" class="rounded-full w-36 h-36">
                <input type="file" name="picture" class="items-center w-48 h-10 mt-4 border rounded-md">
            </div>
            <div class="w-3/5 max-[480px]:w-full">
                <div class="bg-white rounded-md shadow-md ">
                    <div class="flex flex-col px-4 py-4 ">
                        <h4 class="text-3xl text-center font-fontutama">Your Profile</h4>
                        @if ($message = Session::get('succes'))
            <div id="alert-3" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ms-3 text-sm font-medium">
              {{ $message }}
            </div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
              <span class="sr-only">Close</span>
              <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
              </svg>
            </button>
          </div>
@endif
<h5 class="text-3xl text-center font-hurricane">Your Profile</h5>
                        <h5>Username</h5>
                        <input type="text" name="nama_lengkap" value="{{$user->nama_lengkap}}" naclass="h-8 px-4 border rounded-md">
                        <h5>Alamat</h5>
                        <input type="text" name="alamat" value="{{$user->alamat}}" class="py-1 border">
                        <button type="submit" class="py-2 mt-4 text-white rounded-md bg-blue-900">Perbaharui</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>
@endsection