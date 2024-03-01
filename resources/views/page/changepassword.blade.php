@extends('layouts.master')

@section('content')


<section class="mt-32">
        <div class="items-center max-w-screen-md mx-auto ">
            <h3 class="text-5xl text-center font-fontutama">PinMe</h3>
        </div>
    </section>

    <section class="max-w-[500px] mx-auto ">
    @if ($message = Session::get('success'))
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
            <form action="/update-password" method="POST">
                 @csrf
            <div class="max-[480px]:w-full">
                <div class="bg-white rounded-md shadow-md ">
                    <div class="flex flex-col px-4 py-4 ">
                        <h5 class="text-3xl text-center font-hurricane">Change Your Password</h5>
                        <h5>Old Password</h5>
                        <input type="password" name="password_lama" class="py-1 rounded-md shadow border">
                        @error('password_lama')
                            <small class="italic text-red-800">{{$message}}</small>
                        @enderror
                        <h5>New Password</h5>
                        <input type="password" name="password_baru" class="py-1 rounded-md shadow border">
                        @error('password_baru')
                            <small class="italic text-red-800">{{$message}}</small>
                        @enderror
                        <h5>Confirm Password</h5>
                        <input type="password" name="confirm_password" class="py-1 rounded-md shadow border">
                        @error('confirm_password')
                            <small class="italic text-red-800">{{$message}}</small>
                        @enderror
                        <button type="submit" class="py-2 mt-4 text-white rounded-md bg-blue-800">Perbaharui</button>
                    </div>
                </div>
            </div>
        </section>
    </form>
  
   
@endsection