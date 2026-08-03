@extends('layouts.app')

@section('hideNavbar', true)

@section('content')

@php
    $defaultTags = [
        '自分',
        '学校',
        '仕事',
        '友達',
        '趣味',
        '遊び',
        '勉強',
        '恋愛',
        'スポーツ',
        'ゲーム',
        '音楽',
        'あずは',
    ];
@endphp

<div class="min-h-screen">

    <div class="relative flex items-center justify-center py-6">
        <a
            href="{{ route('post.emotion') }}"
            class="absolute left-0 flex h-10 w-10 items-center justify-center rounded-full transition hover:bg-black/5"
        >
            <x-lucide-chevron-left class="h-8 w-8 text-text"></x-lucide-chevron-left>
        </a>
        {{-- 日付 --}}
        <h1 class="text-[18px] font-semibold text-text">
            {{ now()->format('Y/n/j(D)') }}
        </h1>
    </div>

    <div class="mt-[52px] flex items-center justify-center gap-2">
        <h1 class="text-[20px] font-semibold">
            何について？
        </h1>

        <p class="text-[12px] font-semibold text-text">
            ※3つまで
        </p>
    </div>

    <div
        x-data="{
            tags: @js($defaultTags),
            selectedTags: [],
            newTag: '',

            toggleTag(tag) {
                if (this.selectedTags.includes(tag)) {
                    this.selectedTags = this.selectedTags.filter(
                        item => item !== tag
                    );

                    return;
                }

                if (this.selectedTags.length < 3) {
                    this.selectedTags.push(tag);
                }
            },

            addTag() {
                const tag = this.newTag.trim();

                if (tag === '') {
                    return;
                }

                if (this.tags.includes(tag)) {
                    this.newTag = '';
                    return;
                }

                this.tags.push(tag);
                this.newTag = '';
            }
        }"
    >
        {{-- タグ一覧 --}}
        <div class="mt-[52px] grid grid-cols-4 gap-x-2 gap-y-[18px]">
            <template x-for="tag in tags" x-bind:key="tag">
                <button
                    type="button"
                    x-on:click="toggleTag(tag)"
                    x-bind:class="{
                        '!bg-primary': selectedTags.includes(tag)
                    }"
                    class="
                        flex h-[54px] w-full
                        items-center justify-center
                        rounded-[30px]
                        bg-white
                        text-[16px] font-semibold text-text
                        transition-colors duration-200
                    "
                >
                    <span x-text="tag"></span>
                </button>
            </template>
        </div>

        <div class="mt-[22px] border-b border-[#3C2415]"></div>

        {{-- 新しいタグの追加 --}}
        <div class="mt-[22px]">
            <p class="text-[14px] font-semibold">
                新しいタグを入力
            </p>

            <div class="mt-1 flex items-center gap-3">
                <input
                    type="text"
                    x-model="newTag"
                    x-on:keydown.enter.prevent="addTag()"
                    placeholder="例：編み物、買い物など"
                    class="
                        flex-1 rounded-full border-none
                        bg-white px-5 py-3
                        text-sm font-semibold
                        placeholder:text-placeholder
                        focus:outline-none
                    "
                >

                <button
                    type="button"
                    x-on:click="addTag()"
                    class="
                        rounded-full bg-primary
                        px-6 py-3
                        text-sm font-semibold text-text
                    "
                >
                    追加
                </button>
            </div>
        </div>
    </div>
</div>
@endsection