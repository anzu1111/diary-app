@extends('layouts.app')
@section('hideNavbar', true)
@section('content')

<div class="min-h-screen">

    <!-- 日付 -->
    <div class="relative flex items-center justify-center py-6">
        <a
            href="{{ route('home') }}"
            class="absolute left-0 flex h-10 w-10 items-center justify-center rounded-full transition hover:bg-black/5"
        >
            <x-lucide-chevron-left class="h-8 w-8 text-text" />
        </a>

        <h1 class="text-[18px] font-semibold text-text">
            {{ now()->format('Y/n/j(D)') }}
        </h1>
    </div>

    <!-- 入力欄 -->
    <div class="mt-7">
        <textarea
            name="content"
            class="w-full min-h-[500px] resize-none border-none bg-secondary p-0 text-text font-semibold outline-none focus:outline-none focus:ring-0"
            placeholder="今日あった出来事は？"
        ></textarea>
    </div>

    <div
        class="
            fixed bottom-[112px] left-1/2 z-50
            flex w-full max-w-md
            -translate-x-1/2
            items-center justify-between
            px-5
        "
    >
        <button
            type="button"
            class="flex items-center gap-2"
        >
            <x-lucide-camera class="h-6 w-6 stroke-[1.0]" />
            <span class="text-sm font-semibold">
                写真を追加
            </span>
        </button>

        <x-ui.button href="{{ route('post.emotion') }}">
            次へ→
        </x-ui.button>
    </div>

</div>
@endsection