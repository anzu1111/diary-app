@extends('layouts.app')
@section('content')

<div class="min-h-screen">

    <div class="flex justify-center">
        <p class="text-[18px] font-semibold">
            2026年4月19日(日)
        </p>
    </div>

    <div class="mt-[52px] flex items-center justify-center gap-2">
        <h1 class="text-[20px] font-semibold">
            何について？
        </h1>
        <p class="text-[12px] text-text font-semibold">※3つまで</p>
    </div>

    <div class="grid grid-cols-4 gap-[18px] mt-[52px]">
        <x-ui.tag>自分</x-ui.tag>
        <x-ui.tag>学校</x-ui.tag>
        <x-ui.tag>仕事</x-ui.tag>
        <x-ui.tag>友達</x-ui.tag>

        <x-ui.tag>趣味</x-ui.tag>
        <x-ui.tag>遊び</x-ui.tag>
        <x-ui.tag>勉強</x-ui.tag>
        <x-ui.tag>恋愛</x-ui.tag>

        <x-ui.tag>スポーツ</x-ui.tag>
        <x-ui.tag>ゲーム</x-ui.tag>
        <x-ui.tag>音楽</x-ui.tag>
        <x-ui.tag>あずは</x-ui.tag>
    </div>

    <div class="mt-[22px] border-b border-[#3C2415]"></div>

    <div class="mt-[22px]">
        <p class="text-[14px] font-semibold">新しいタグを入力</p>
        <div class="mt-1 flex items-center gap-3">
            <input
                type="text"
                placeholder="例：編み物、買い物など"
                class="flex-1 rounded-full bg-white px-5 py-3 text-sm font-semibold border-none placeholder:text-placeholder focus:outline-none"
            >
            <button
                class="rounded-full bg-primary px-6 py-3 text-sm font-semibold text-text"
            >
                追加
            </button>
        </div>
    </div>


    <div class="mt-8 flex justify-end">
        <x-ui.button :route="route('home')">
            投稿する
        </x-ui.button>
    </div>

</div>

@endsection