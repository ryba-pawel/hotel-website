<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>        
        @include('layouts.head')
    </head>
    <body class="antialiased">
        <!-- https://tailblocks.cc -->
        <!-- https://tailwindcss.com/ -->

        @include('layouts.header')        
        @yield('content')
        <!-- <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col w-full mb-20">

            </div>
        </div>
        </section> -->

        @include('layouts.footer')        
    </body>
</html>