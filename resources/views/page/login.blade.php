<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/tailwind.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hurricane&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"  rel="stylesheet" />
</head>

<body>


    <nav class="bg-white border-gray-200 shadow-md dark:bg-gray-900">
        <div class="flex flex-wrap items-center justify-between max-w-screen-md p-4 mx-auto">
            <h3 class="text-4xl font-fontutama">Pinki</h3>
            <div class="flex gap-1">
                <a href="/login"><button class="">Login / </button></a>
                <a href="/register"><button class="">Register</button></a>
            </div>
        </div>
    </nav>
    <section class="mt-14">
        <div class="max-w-[364px] bg-white rounded-md shadow-md mx-auto px-6 py-4">
            @if ( $message = Session::get('error'))
            <div id="alert-1"
        class="flex items-center p-4 mb-4 text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400"
        role="alert">
        <svg class="flex-shrink-0 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
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
        <form action="/auth" method="post">
            @csrf
            <div class="flex flex-col">
                <h3 class="mx-auto text-5xl font-fontutama">Pinki</h3>
                <h4 class="mt-3">Email</h4>
                <input type="text" name="email" class="bg-gray-300 py-1 rounded-md text-slate-700">
                <h4 class="mt-3">Password</h4>
                <input type="password" name="password" class="bg-gray-300 py-1 rounded-md text-slate-700"> <br>
               
                <button type="submit" class="bg-blue-900  py-1 mt-3  text-center  rounded-full bg-biru text-white">Login</button>
                </form> 
                
                <h5 class="mx-auto mt-4 text-xs mb-7">Blum punya akun? <a href="register.html" class="text-blue-500">Silahkan daftar disini!</a></h5>
            </div>
           
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>

</html