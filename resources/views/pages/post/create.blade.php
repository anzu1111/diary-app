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


    <!-- 入力欄 -->
    <div class="mt-7">
        <textarea
            class="w-full min-h-[500px] resize-none border-none bg-secondary p-0 text-text font-semibold outline-none focus:outline-none focus:ring-0"
            placeholder="今日あった出来事は？"
        ></textarea>
    </div>

    <div class="flex justify-between">
        <div class="flex items-center gap-2 mt-4">
            <x-lucide-camera class="w-6 h-6 stroke-[1.0]" />
            <span class="text-sm font-semibold">写真を追加</span>
        </div>

        <x-ui.button href="{{ route('post.emotion') }}">
            次へ→
        </x-ui.button>
    </div>

</div>

@endsection