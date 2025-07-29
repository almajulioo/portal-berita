@extends('layouts.default')

@section('title', 'Beranda')

@section('content')
<div class="h-screen max-h-[852px] flex items-center pl-[200px] justify-between gap-5 blue font-medium">
    <div>
        <h1 class="text-[96px] leading-[76px]">Website <br /> Portal Berita</h1>
        <h2 class="text-[24px] mt-10">Membaca Berita. Menulis Fakta. Memahami Dunia.</h2>
        <a class="w-fit block" href="/berita">
            <h2 class="mt-10 text-[#DFDAAE] bg-[#3D6670] px-5 py-1 w-fit rounded-full text-[24px]">Mulai Membaca
            </h2>
        </a>
    </div>
    <div>
        <img src="{{ asset('images/bookarts.png') }}" alt="Image" />
    </div>
</div>
@endsection