<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <!-- Navigasi -->
    <nav class="flex justify-between px-10 md:px-20 py-6 items-center">
        <a href="#" class="md:hidden fill-blue-600 scale-125" id="hamburger">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"></path>
            </svg>
        </a>
        <a href="#"><img src="{{ url('images/logo.png') }}" alt=""></a>
        <ul class="hidden md:flex gap-4  ">
            {{-- <li class="mb-2"><a href="#" class="text-blue-400">Home</a></li> --}}
            <li class="mb-2">
                <x-home.nav-link :href="route('home')" :active="request()->routeIs('/')">Home</x-home.nav-link>
            </li>
            <li class="mb-2"><a href="#">About</a></li>
            <li class="mb-2"><a href="./packages.html">Packages</a></li>
            <li class="mb-2"><a href="#">Contact Us</a></li>
            <li class="mb-2"><a href="#">FAQs</a></li>
        </ul>
        <a href="#" class="btn">Register</a>
        <ul class="hidden gap-4 absolute top-20 left-0 bg-white  px-10 w-full py-6" id="menu">
            <li class="mb-2"><a href="#" class="text-blue-400">Home</a></li>
            <li class="mb-2"><a href="#">About</a></li>
            <li class="mb-2"><a href="./packages.html">Packages</a></li>
            <li class="mb-2"><a href="#">Contact Us</a></li>
            <li class="mb-2"><a href="#">FAQs</a></li>
        </ul>
    </nav>
    <!-- End Navigasi -->
    {{ $slot }}
    <!-- Footer -->
    <footer class="pt-10 px-10 md:px-20 md:pt-20 pb-0 bg-[#FBFBFB]">
        <div class="grid grid-cols-1 md:grid-cols-5">
            <div>
                <img src="../dist/images/logo.png" alt="">
                <p class="description mt-5">Our mission is to make everyone able to feel the attachment back to nature
                    by providing an unforgettable experience.</p>
            </div>
            <div class="mx-0 md:mx-auto mt-5 md:mt-0">
                <h2 class="font-semibold mb-4 text-lg text-slate-700">About</h2>
                <ul class="description">
                    <li class="mb-2"><a href="#">About Us</a></li>
                    <li class="mb-2"><a href="#">Features</a></li>
                    <li class="mb-2"><a href="#">News & Blog</a></li>
                </ul>
            </div>
            <div class="mx-0 md:mx-auto mt-5 md:mt-0">
                <h2 class="font-semibold mb-4 text-lg text-slate-700">Movement</h2>
                <ul class="description">
                    <li class="mb-2"><a href="#">What GoTrip</a></li>
                    <li class="mb-2"><a href="#">Support Us</a></li>
                </ul>
            </div>
            <div class="mx-0 md:mx-auto mt-5 md:mt-0">
                <h2 class="font-semibold mb-4 text-lg text-slate-700">Company</h2>
                <ul class="description">
                    <li class="mb-2"><a href="#">Why GoTrip</a></li>
                    <li class="mb-2"><a href="#">Capital</a></li>
                    <li class="mb-2"><a href="#">Security</a></li>
                </ul>
            </div>
            <div class="mx-0 md:mx-auto mt-5 md:mt-0">
                <h2 class="font-semibold mb-4 text-lg text-slate-700">Support</h2>
                <ul class="description">
                    <li class="mb-2"><a href="#">FAQs</a></li>
                    <li class="mb-2"><a href="#">Support Center</a></li>
                    <li class="mb-2"><a href="#">Contact Us</a></li>
                </ul>
            </div>

        </div>
        <div class="description flex justify-between py-10  text-sm">
            <p>
                @2023 GoTrip. All rights reserved
            </p>
            <ul class="flex flex-col md:flex-row gap-2 md:gap-5 ">
                <li>Term & Aggrements</li>
                <li>Privacy Policy</li>
            </ul>
        </div>
    </footer>
    <!-- End Footer -->

    {{-- <script src="{{ url('script.js') }}"></script> --}}
</body>

</html>
