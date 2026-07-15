@extends('layouts.app')
@section('content')

<div class="min-h-screen">

    <!-- 日付 -->
    <div class="flex justify-center">
        <p class="text-[18px] font-semibold">
            2026年4月19日(日)
        </p>
    </div>

    <!-- 入力欄 -->
    <div class="">
        
    </div>

    <div class="flex justify-between">
        <div class="flex items-center gap-2 mt-4">
            <!-- カメラマーク -->
        </div>

        <x-ui.button :route="route('post.emotion')">
            次へ→
        </x-ui.button>
    </div>

</div>

@endsection