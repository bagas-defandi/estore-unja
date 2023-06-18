<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Produk</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between md:justify-normal mx-auto p-4">
            <a href="{{ url('/penjual/dashboard') }}" class="flex items-center">
                <img src="{{ asset('img/logo.png') }}" class="h-8 mr-3" alt="Flowbite Logo" />
            </a>
            <div class="relative hidden md:block">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Search icon</span>
                </div>
                <input type="text" id="search-navbar"
                    class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search...">
            </div>
            <div class="flex items-center md:order-2">
                <button type="button"
                    class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                    data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full" src="{{ asset('img/profile.png') }}" alt="user photo">
                </button>
                <!-- Dropdown menu -->
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                    id="user-dropdown">
                    <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900 dark:text-white">{{ Auth::user()->name }}</span>
                        <span
                            class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{ Auth::user()->email }}</span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <a href="{{ url('/penjual/dashboard') }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                        </li>
                        <li>
                            <a href="{{ route('penjual.products.index') }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Produk</a>
                        </li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); this.closest('form').submit();"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                                    out</a>
                            </form>
                        </li>
                    </ul>
                </div>
                <button data-collapse-toggle="mobile-menu-2" type="button"
                    class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:ml-auto md:mr-8 md:w-auto md:order-1"
                id="mobile-menu-2">
                <div class="relative mt-3 md:hidden">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input type="text" id="search-navbar"
                        class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search...">
                </div>

            </div>
        </div>
    </nav>

    <main>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <section class="bg-white text-black px-5 py-6 rounded-lg mt-6 mb-4 md:mt-9">
                <h2 class="text-xl font-bold pb-1 mb-4 lg:mb-10">{{ Auth::user()->name }} Store</h2>
                <div class="grid justify-items-center gap-4 sm:grid-cols-2 md:grid-cols-3">
                    <div class="dashboard-menu">
                        <a href="{{ url('/penjual/data-pembelian') }}"
                            class="rounded-3xl bg-amber-400 p-6 grid justify-items-center hover:bg-amber-500">
                            <img src="../img/icon-pembelian.png" alt="">
                        </a>
                        <h3 class="ff-raleway font-bold text-lg lg:text-xl lg:mt-2">Data Pembelian</h3>
                    </div>
                    <div class="dashboard-menu pb-2 border-b-2 border-black">
                        <a href="{{ url('/penjual/kelola-produk') }}"
                            class="rounded-3xl bg-amber-400 p-6 grid justify-items-center hover:bg-amber-500">
                            <img src="../img/icon-produk.png" alt="">
                        </a>
                        <h3 class="ff-raleway font-bold text-lg lg:text-xl lg:mt-2">Kelola Produk</h3>
                    </div>
                    <div class="dashboard-menu">
                        <a href="{{ url('/penjual/proses-pesanan') }}"
                            class="rounded-3xl bg-amber-400 p-6 grid justify-items-center hover:bg-amber-500">
                            <img src="../img/icon-pesanan.png" alt="">
                        </a>
                        <h3 class="ff-raleway font-bold text-lg lg:text-xl lg:mt-2">Proses Pesanan</h3>
                    </div>
                </div>
                <div class="mt-14 bg-gray-300 ff-raleway py-6 px-4 grid">
                    <div class="flex items-center ml-auto">
                        <a class="font-bold text-xl mr-2 hover:underline hover:underline-offset-8"
                            href="{{ route('penjual.products.create') }}">Tambah Produk
                        </a>
                        <img style="height: 24px" src="../img/add-black.png" alt="">
                    </div>
                    <div class="grid gap-8 justify-items-center mt-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                        @foreach ($products as $product)
                            <div class="max-width-300">
                                <a href="{{ url('detail-produk') }}">
                                    <img class="product-list rounded-t"
                                        src="{{ asset('storage/' . $product->gambar) }}" alt="">
                                </a>
                                <div class="bg-amber-400 p-3 rounded-b">
                                    <p class="text-md font-bold">{{ $product->nama }}</p>
                                    <p class="text-md font-medium text-sm">{{ $product->deskripsi }}</p>
                                    <p class="font-bold mt-4">
                                        {{ 'Rp.' . number_format($product->harga, 0, ',', '.') }}
                                    </p>
                                    <div class="flex gap-2 mt-4 flex-wrap">
                                        <a href=""
                                            class="inline-block bg-blue-700 hover:bg-blue-500 py-2 px-8 font-semibold text-white"
                                            title="Edit Produk">Edit</a>
                                        <a href=""
                                            class="flex items-center bg-red-700 hover:bg-red-500 py-2 px-6 font-semibold text-white"
                                            title="Hapus Produk">
                                            <svg class="mr-1 -ml-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            Hapus
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
            </section>
        </div>
    </main>

</body>

</html>
