<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $metaTitle ?: 'LovelyStyle Blog'}}</title>
    <meta name="author" content="MinseoJANG">
    <meta name="description" content="{{ $metaDescription }}">

    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }

        pre {
            padding: 1rem;
            background-color: #1a202c;
            color: white;
            border-radius: 0.5rem;
            margin-bottom: 1rem;
        }
    </style>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</head>
<body class="bg-white font-family-karla">

<!-- Top Bar Nav -->
{{--<nav class="w-full py-4 bg-blue-800 shadow">--}}
{{--    <div class="w-full container mx-auto flex flex-wrap items-center justify-between">--}}

{{--        <nav>--}}
{{--            <ul class="flex items-center justify-between font-bold text-sm text-white uppercase no-underline">--}}
{{--                <li><a class="hover:text-gray-200 hover:underline px-4" href="#">Shop</a></li>--}}
{{--                <li><a class="hover:text-gray-200 hover:underline px-4" href="#">About</a></li>--}}
{{--            </ul>--}}
{{--        </nav>--}}

{{--        <div class="flex items-center text-lg no-underline text-white pr-6">--}}
{{--            <a class="" href="#">--}}
{{--                <i class="fab fa-facebook"></i>--}}
{{--            </a>--}}
{{--            <a class="pl-6" href="#">--}}
{{--                <i class="fab fa-instagram"></i>--}}
{{--            </a>--}}
{{--            <a class="pl-6" href="#">--}}
{{--                <i class="fab fa-twitter"></i>--}}
{{--            </a>--}}
{{--            <a class="pl-6" href="#">--}}
{{--                <i class="fab fa-linkedin"></i>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--</nav>--}}

<!-- Text Header -->
<header class="w-full container mx-auto">
    <div class="flex flex-col items-center py-12">
        <a class="font-bold text-gray-800 uppercase hover:text-gray-700 text-5xl" href="{{ route('home') }}">
            Lovely Style Blog
        </a>
        <p class="text-lg text-gray-600">
            {{ \App\Models\TextWidget::getTitle('header') }}
        </p>
    </div>
</header>

<!-- Topic Nav -->
<nav class="w-full py-4 border-t border-b bg-gray-100" x-data="{ open: false }">
    <div class="block sm:hidden">
        <a href="#" class="block md:hidden text-base font-bold uppercase text-center flex justify-center items-center" @click="open = !open">
            Topics <svg :class="open ? 'fa-chevron-down': 'fa-chevron-up'" class="svg-inline--fa fa-chevron-up fa-w-14 ml-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240.971 130.524l194.343 194.343c9.373 9.373 9.373 24.569 0 33.941l-22.667 22.667c-9.357 9.357-24.522 9.375-33.901.04L224 227.495 69.255 381.516c-9.379 9.335-24.544 9.317-33.901-.04l-22.667-22.667c-9.373-9.373-9.373-24.569 0-33.941L207.03 130.525c9.372-9.373 24.568-9.373 33.941-.001z"></path></svg><!-- <i :class="open ? 'fa-chevron-down': 'fa-chevron-up'" class="fas ml-2 fa-chevron-up"></i> -->
        </a>
    </div>
    <div :class="open ? 'block': 'hidden'" class="w-full flex-grow sm:flex sm:items-center sm:w-auto hidden">
        <div class="w-full container mx-auto flex flex-col sm:flex-row items-center justify-center text-sm font-bold uppercase mt-0 px-6 py-2">
            <a href="{{ route('home') }}" class="hover:bg-blue-600 hover:text-white rounded py-2 px-4 mx-2">Home</a>
            @foreach($categories as $category)
                <a href="{{ route('by-category', $category) }}" class="hover:bg-blue-600 hover:text-white rounded py-2 px-4 mx-2">{{ $category->title }}</a>
            @endforeach
            <a href="{{ route('about-us') }}" class="hover:bg-blue-600 hover:text-white rounded py-2 px-4 mx-2">About us</a>
        </div>
    </div>
</nav>


<div class="container mx-auto flex flex-wrap py-6">

    {{ $slot }}



</div>

<footer class="w-full border-t bg-white pb-12">
    <div class="w-full container mx-auto flex flex-col items-center">
        <div class="flex flex-col md:flex-row text-center md:text-left md:justify-between py-6">
            <a href="#" class="uppercase px-3">About Us</a>
            <a href="#" class="uppercase px-3">Privacy Policy</a>
            <a href="#" class="uppercase px-3">Terms & Conditions</a>
            <a href="#" class="uppercase px-3">Contact Us</a>
        </div>
        <div class="uppercase pb-6">&copy; myblog.com</div>
    </div>
</footer>

