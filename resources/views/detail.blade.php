@extends('layouts.default')

@section('title', 'Beranda')

@section('content')
<div class="px-[219px] min-h-[800px] mt-[38px] text-[#2F4858]">
    <h2 class="text-[#A9BF9C] text-[16px] font-normal"><a href="/berita">Berita ></a> <span
            class="text-[#2F4858]">{{$berita->title}}</span>
    </h2>
    <h1 class="mt-5 text-[24px] font-bold">{{$berita->title}}</h1>
    <hr class="border-[#2F4858] border-t  scale-y-[0.5] origin-top mb-2">
    <div class="flex gap-4">
        <p>{{$berita->created_at->format('M d')}}</p>
        <span class="text-[16px]"><i class="text-[18px] fa-solid fa-hands-clapping fa-flip-horizontal"></i>
            100</span>
        <span class="text-[16px]"><i class="text-[18px] fa-solid fa-comment"></i> 100</span>
    </div>
    <img class=" ml-auto max-w-[300px !important] mr-auto" src="{{ asset('storage/' . $berita->image) }}" alt="">

    <div class="text-[#2F4858] flex gap-3">
        <div class="w-fit">
            <h2 class="text-14px font-bold w-fit">Bagikan Berita</h2>
        </div>
        <div class="w-fit">
            <p class="text-16px">
                {{$berita->content}}
            </p>
        </div>
    </div>
</div>
@endsection