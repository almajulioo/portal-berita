@extends('layouts.default')

@section('title', 'Berita')

@section('content')
<div class="px-[219px] min-h-[800px] mt-[38px] text-[#2F4858]">
    <h1 class="text-[24px] font-bold">Berita Terkini</h1>
    <div class="mt-[13px]">
        @foreach ($berita as $eachBerita )
        <a href="{{ route('berita.show', $eachBerita->id) }}" class="text-decoration-none">
            <div>
                <div class="flex justify-between">
                    <div class="w-4/5">
                        <h2 class="text-[20px] font-bold line-clamp-3 max-w-4/5">{{ $eachBerita->title }}</h2>
                        <h3 class="text-[16px] font-normal max-w-4/5 line-clamp-3 break-words">{{ $eachBerita->content
                            }}
                        </h3>
                        </h3>
                        <div class="flex gap-4">
                            <p>{{ $eachBerita->created_at->format('M d') }}</p>
                            <span class="text-[16px]"><i
                                    class="text-[18px] fa-solid fa-hands-clapping fa-flip-horizontal"></i>
                                100</span>
                            <span class="text-[16px]"><i class="text-[18px] fa-solid fa-comment"></i> 100</span>
                        </div>
                    </div>
                    <img class="self-center max-h-[120px]" src="{{ asset('storage/' . $eachBerita->image) }}"
                        alt="{{ $eachBerita->title }}">
                </div>
                <hr class="border-[#2F4858] border-t w-9/10 ml-auto mr-auto mt-4 scale-y-[0.5] origin-top mb-[24px]">
            </div>
        </a>
        @endforeach
    </div>
</div>
@endsection