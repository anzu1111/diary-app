@extends('layouts.app')
@section('content')
<div class="min-h-screen">

    <!-- 日付 -->
    <div class="relative flex items-center justify-center py-6">
        {{-- 戻るボタン --}}
        <a
            href="{{ url()->previous() }}"
            class="absolute left-0 flex h-10 w-10 items-center justify-center rounded-full transition hover:bg-black/5"
        >
            <i data-lucide="chevron-left" class="h-8 w-8 text-text"></i>
        </a>
        {{-- 日付 --}}
        <h1 class="text-[18px] font-semibold text-text">
            {{ now()->format('Y/n/j(D)') }}
        </h1>
    </div>

    <h1 class="mt-[52px] text-[20px] font-semibold text-text text-center">
        今の心の空模様は？
    </h1>

    <div class="mt-[60px] grid grid-cols-2 gap-[18px]">

        <x-ui.emotion-card
            title="晴れ"
            description="嬉しい・楽しい・満足"
        >
        <x-lucide-sun class="w-20 h-20 stroke-[1.0] text-[#D35A0E]" />

        </x-ui.emotion-card>

        <x-ui.emotion-card
            title="雨"
            description="悲しい・寂しい"
        >
        <x-lucide-cloud-rain class="w-20 h-20 stroke-[1.0] text-[#09438F]" />
        
        </x-ui.emotion-card>

        <x-ui.emotion-card
            title="曇り"
            description="普段・穏やか"
        >
        <x-lucide-cloudy class="w-20 h-20 stroke-[1.0] text-[#706E6E]" />
        
        </x-ui.emotion-card>

        <x-ui.emotion-card
            title="雷"
            description="怒り・イライラ"
        >
        <x-lucide-cloud-lightning class="w-20 h-20 stroke-[1.0] text-[#D7AB0F]" />
        
        </x-ui.emotion-card>

    </div>

    <div class="flex justify-end mt-[48px]">
        <x-ui.button href="{{ route('post.emotion') }}">
            次へ→
        </x-ui.button>
    </div>
</div>
@endsection