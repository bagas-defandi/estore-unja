<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header class="bg-white py-2">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center">
                <img src="{{ asset('img/logo.png') }}" alt="">
                <h1 class="heading-login text-2xl sm:text-3xl font-bold ml-3 uppercase">E-Store Unja</h1>
            </div>
        </div>
    </header>
    <main>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:grid grid-cols-2 gap-32">
            <div class="grid py-10 lg:mt-8">
                <img class="justify-self-center" src="{{ asset('img/ilustrasi-login.png') }}" alt="">
                <h2 class="heading-tagline-login justify-self-center max-w-3xl my-5 text-3xl font-black italic">
                    e-Store Kampus Unja:
                    Tempat Terbaik untuk Belanja Online Mahasiswa Unja!
                </h2>
                <p class="max-w-prose justify-self-center">
                    Dengan e-Store Unja, mahasiswa dan dosen dapat menikmati pengalaman belanja online yang
                    menyenangkan,
                    cepat, dan aman. Ribuan produk berkualitas yang ditawarkan oleh baik mahasiswa maupun dosen dari
                    berbagai kategori di e-Store Unja, lengkap dengan deskripsi, foto, dan ulasan dari pengguna lainnya.
                    Kemudahan akses dan navigasi yang intuitif membuat e-Store Unja menjadi pilihan utama untuk memenuhi
                    kebutuhan belanja online seluruh warga kampus.
                </p>
            </div>
            <div class="grid justify-items-center lg:mt-40">
                <div class="grid justify-items-center bg-white w-full max-w-xl pt-14 px-9 pb-10 rounded-xl mb-3">
                    <img src="{{ asset('img/icon-profile-login.png') }}" alt="">
                    <form class="w-full text-center" action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="mb-8  mt-6">
                            <input class="nim-input placeholder-black w-full block p-3 rounded-sm" type="text"
                                id="email" name="email" value="{{ old('email') }}" required placeholder="Email">
                            @error('email')
                                <div class="text-left font-semibold text-sm text-red-600 mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="my-8">
                            <input class="pass-input placeholder-black w-full block p-3 rounded-sm" type="password"
                                name="password" id="password" required placeholder="**************">
                            @error('password')
                                <div class="text-left font-semibold text-sm text-red-600 mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <input class="btn-submit-login w-52 py-3 rounded-3xl" type="submit" value="Login">
                    </form>
                    <p class="font-bold mt-11">Belum mempunyai akun? Silahkan <a
                            class="hover:underline hover:underline-offset-4" style="color: #3A16C9"
                            href="{{ route('register') }}">Daftar</a></p>
                </div>

            </div>
        </div>
    </main>
</body>

</html>
