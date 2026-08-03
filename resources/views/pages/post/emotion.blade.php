@extends('layouts.app')
@section('hideNavbar', true)
@section('content')


<div class="min-h-screen">

    <!-- 日付 -->
    <div class="relative flex items-center justify-center py-6">
        {{-- 戻るボタン --}}
        <a
            href="{{ route('post.create') }}"
            class="absolute left-0 flex h-10 w-10 items-center justify-center rounded-full transition hover:bg-black/5"
        >
            <x-lucide-chevron-left class="h-8 w-8 text-text"></x-lucide-chevron-left>
        </a>
        {{-- 日付 --}}
        <h1 class="text-[18px] font-semibold text-text">
            {{ now()->format('Y/n/j(D)') }}
        </h1>
    </div>

    <h1 class="mt-[52px] text-[20px] font-semibold text-text text-center">
        今の心の空模様は？
    </h1>

    <div
        x-data="{ emotion: '' }"
        class="mt-[60px] grid grid-cols-2 gap-[18px]"
    >
        <div
            class="w-full"
            x-on:click="emotion = 'sun'"
        >
            <x-ui.emotion-card
                style="border-color: #FCFCFC;"
                x-bind:style="{
                    'border-color': emotion === 'sun'
                        ? '#E5B996'
                        : '#FCFCFC'
                }"
                title="晴れ"
                description="嬉しい・楽しい・満足"
            >
                <x-lucide-sun class="w-20 h-20 stroke-[1.0] text-[#D35A0E]" />
            </x-ui.emotion-card>
        </div>

        <div
            class="w-full"
            x-on:click="emotion = 'rain'"
        >
            <x-ui.emotion-card
                style="border-color: #FCFCFC;"
                x-bind:style="{
                    'border-color': emotion === 'rain'
                        ? '#E5B996'
                        : '#FCFCFC'
                }"
                title="雨"
                description="寂しい・悲しい"
            >
                <x-lucide-cloud-rain class="w-20 h-20 stroke-[1.0] text-[#09438F]" />
            </x-ui.emotion-card>
        </div>

        <div
            class="w-full"
            x-on:click="emotion = 'cloud'"
        >
            <x-ui.emotion-card
                style="border-color: #FCFCFC;"
                x-bind:style="{
                    'border-color': emotion === 'cloud'
                        ? '#E5B996'
                        : '#FCFCFC'
                }"
                title="曇り"
                description="普通・穏やか"
            >
                <x-lucide-cloud class="w-20 h-20 stroke-[1.0] text-[#706E6E]" />
            </x-ui.emotion-card>
        </div>

        <div
            class="w-full"
            x-on:click="emotion = 'lightning'"
        >
            <x-ui.emotion-card
                style="border-color: #FCFCFC;"
                x-bind:style="{
                    'border-color': emotion === 'lightning'
                        ? '#E5B996'
                        : '#FCFCFC'
                }"
                title="雷"
                description="怒り・イライラ"
            >
                <x-lucide-cloud-lightning class="w-20 h-20 stroke-[1.0] text-[#D7AB0F]" />
            </x-ui.emotion-card>
        </div>
    </div>



    <div class="flex justify-end mt-[48px]">
        <x-ui.button href="{{ route('post.tags') }}">
            次へ→
        </x-ui.button>
    </div>
</div>
@endsection