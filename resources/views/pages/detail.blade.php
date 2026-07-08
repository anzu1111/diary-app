@extends('layouts.app')
@section('content')

<div class="min-h-screen">
    <div class="relative flex items-center justify-between pt-5">
        <a href="{{ route('home') }}">
            <x-lucide-chevron-left class="w-6 h-6 stroke-[1.5]"/>
        </a>
        <a href="" class="flex items-center gap-1 text-primary">
            <span class="text-sm font-semibold">編集</span>
            <x-lucide-pencil-line class="w-3 h-3 stroke-[1.5]"/>
        </a>
    </div>
    <div class="pt-8 px-[7px] flex flex-col gap-5">
        <div class="text-text font-semibold">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
        <img src="{{ asset('images/sample.png') }}" alt="サンプルイメージ"
            class="w-full object-cover flex-shrink-0 rounded-[12px]">
        <div class="flex flex-col gap-1">
            <div class="flex items-center gap-4">
                <div class="text-sm font-regular">2026/4/19 火 22:22</div>
                <x-lucide-sun class="w-6 h- stroke-[1.0]" />
            </div>
            <div class="flex items-center gap-2">
                <div class="flex items-center justify-center px-3 py-[2px] h-[26px] rounded-[16px] bg-[#E9A166]/50 text-[12px] text-regular">
                    <p class="text-sm">友達</p>
                </div>
                <div class="flex items-center justify-center px-3 py-[2px] h-[26px] rounded-[16px] bg-[#E9A166]/50 text-[12px] text-regular">
                    <p class="text-sm">あずは</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection