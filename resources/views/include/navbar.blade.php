<nav class="fixed top-0 z-20 w-full bg-white shadow-md">
        <div class="flex flex-wrap items-center justify-center max-w-screen-xl p-4 mx-auto">
            <a href="/explore" class="mr-4">Beranda</a>
            <a href="/upload" class="mr-4">Upload</a>
            <form action="/upload" method="get">
                <input type="text" class="px-4 py-1 mr-4 rounded-full border-2 mt-4" placeholder="Search ..." name="cari">
            </form>
            <a href="/edit_profil" class="mr-4">PIN</a>
            <div class="flex justify-end px-4 pt-4">
                <button id="dropdownButton" data-dropdown-toggle="dropdown" class="mb-4" type="button">
                  <img src="/img/gambar9.jpg" alt="" class="w-10 h-10  rounded-full">
                </button>
                <!-- Dropdown menu -->
                <div id="dropdown" class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2" aria-labelledby="dropdownButton">
                    <li>
                        <a href="/profilsaya" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Profil</a>
                    </li>
                    <li>
                        <a href="/changepassword" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">ubah password</a>
                    </li>
                    <li>
                        <a href="/album" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Album</a>
                    </li>
                    <li>
                        <a href="/logout" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">logout</a>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>