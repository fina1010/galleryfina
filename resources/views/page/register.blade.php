@extends('layouts.master2')

@section('content2')

 <section class="flex justify-center p-8">
    <div class="box-content w-80 shadow-xl">
        <div class="font-fontutama text-3xl text-center font-medium p-4">pinki</div>
        @if ($message = Session::get('success') )
        <div id="alert-1"
        class="flex items-center p-4 mb-4 text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400"
        role="alert">
        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            fill="currentColor" viewBox="0 0 20 20">
            <path 
                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
        </svg>
        <span class="sr-only">Info</span>
        <div class="text-sm font-medium ms-3">
            {{ $message }}
        </div>
        <button id="close_button" type="button" 
              class="ms-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700" 
              data-dismiss-target="alert-1" aria-label="Close">
              <span class="sr-only">Close</span>        
              <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" 
                  viewBox="0 0 14 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" 
                      stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
              </svg>
          </button>
      </div>
  @endif

        <div>
            <form action="/registered" method="post" class="mt-4 ml-10">
                @csrf
                <div class="">
                        <label for="email" class="text-gray-900 font-medium font-dm">Email</label>
                        <input type="email" name="email" id="email" class="border border-slate-400 px-4 rounded-full py-1 flex w-60 justify-center mt-3">
                        @error('email')
                            <small class="italic text-red-800">{{ $message }}</small>
                        @enderror
                </div>
                <div class="">
                    <label for="password" class="text-gray-900 font-medium font-dm">password</label>
                    <input type="password" name="password" id="password" class="border border-slate-400 px-4 rounded-full py-1 flex w-60 justify-center mt-3">
                    @error('password')
                            <small class="italic text-red-800">{{ $message }}</small>
                        @enderror
                </div>
                <div class="">
                    <label for="Date" class="text-gray-900 font-medium font-dm">Tanggal</label>
                    <input type="date" name="tgl_lahir" id="password" class="border border-slate-400 px-4 rounded-full py-1 flex w-60 justify-center mt-3">
                    
                </div>
                <button type="submit" href="explore.html" class="bg-blue-900  py-1 mt-3 w-60 text-center  rounded-full bg-biru text-white">Register</button>
                
                <h5 class="mx-auto mt-4 text-xs mb-7">Sudah punya akun?<a href="/login" class="text-blue-500">Silahkan daftar disini!</a></h5>
            </div>
        
            </form>
        </div>
        <div>
            
        </div>
    </div>

 </section>
 @endsection
 