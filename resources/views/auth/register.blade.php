<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header class="bg-white py-2">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center">
                <img src="../img/logo.png" alt="">
                <h1 class="heading-login text-2xl sm:text-3xl font-bold ml-3 uppercase">E-Store Unja</h1>
            </div>
        </div>
    </header>

    <main>
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid justify-items-center">
            <div class="w-full bg-white p-5 lg:py-7 lg:px-10 mt-16 rounded-md ff-raleway max-w-3xl lg:max-w-6xl">
                <h1 class="font-bold text-center text-black text-2xl">Create Account</h1>
                <form action="{{ route('register') }}" method="POST" class="grid gap-7 mt-11 lg:ml-24">
                    @csrf
                    <div class="">
                        <p class="font-semibold mb-2"><label for="name">Nama Lengkap</label></p>
                        <input class="w-full lg:w-3/5 border-amber-400 border-2" id="name" name="name"
                            type="text" value="{{ old('name') }}">
                        @error('name')
                            <div class="text-left font-semibold text-sm text-red-600 mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <p class="font-semibold mb-2"><label for="email">Email</label></p>
                        <input class="w-full lg:w-3/5 border-amber-400 border-2" id="email" name="email"
                            type="email" value="{{ old('email') }}">
                        @error('email')
                            <div class="text-left font-semibold text-sm text-red-600 mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <p class="font-semibold mb-2"><label for="password">Password</label></p>
                        <input class="w-full lg:w-3/5 border-amber-400 border-2" id="password" name="password"
                            type="password">
                        @error('password')
                            <div class="text-left font-semibold text-sm text-red-600 mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <p class="font-semibold mb-2"><label for="password_confirmation">Konfirmasi Password</label></p>
                        <input class="w-full lg:w-3/5 border-amber-400 border-2" id="password_confirmation"
                            name="password_confirmation" type="password">
                        @error('password_confirmation')
                            <div class="text-left font-semibold text-sm text-red-600 mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="justify-self-center lg:justify-self-start">
                        <input class="bg-amber-400 text-white py-3 px-20 font-bold rounded-full hover:bg-amber-500"
                            type="submit" value="Sign Up">
                    </div>
                </form>

                <p class="mt-6 font-bold lg:ml-24">Sudah mempunyai akun penjual? Silahkan
                    <a class="hover:underline hover:underline-offset-4" href="{{ route('login') }}"
                        style="color: #3A16C9">Login</a>
                </p>
            </div>

        </section>
    </main>
</body>

</html>
