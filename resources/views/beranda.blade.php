@extends('layouts.default')

@section('title', 'Beranda')

@section('content')
    <div class="blue font-medium flex flex-col-reverse md:flex-row items-center justify-center md:justify-between p-8 md:pl-20 lg:pl-48 min-h-screen md:min-h-0 md:h-screen md:max-h-[852px] gap-2 md:gap-5">
        <div class="text-center md:text-left">
            <h1 class="text-5xl sm:text-6xl lg:text-[96px] font-bold lg:leading-[76px]">Website <br /> Portal Berita</h1>
            <h2 class="text-xl sm:text-2xl mt-6 md:mt-10">Membaca Berita. Menulis Fakta. Memahami Dunia.</h2>
            <a class="w-fit block mx-auto md:mx-0" href="/berita">
                <h2 class="mt-8 md:mt-10 text-[#DFDAAE] bg-[#3D6670] hover:bg-[#2F4858] transition-colors px-5 py-2 rounded-full text-lg sm:text-xl lg:text-2xl">Mulai Membaca</h2>
            </a>
        </div>
        <div class="w-3/4 md:w-1/2 max-w-xs md:max-w-md lg:max-w-lg">
            <img src="{{ asset('images/bookarts.png') }}" alt="Illustration of books and news" class="w-full h-auto rounded-lg" />
        </div>
    </div>
@endsection