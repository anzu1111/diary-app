@extends('layouts.app')
@section('content')

<div class="min-h-screen">

    <div class="flex justify-center">
        <p class="text-[18px] font-semibold">
            2026年4月19日(日)
        </p>
    </div>

    <div class="mt-7 flex justify-center">
        <h1 class="text-[20px] font-semibold">
            何について？
        </h1>
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

    <div class="mt-8 flex justify-end">
        <x-ui.button :route="route('home')">
            投稿する
        </x-ui.button>
    </div>

</div>

@endsection