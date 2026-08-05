@extends('layouts.app')
@section('content')

<div class="min-h-screen pb-28">

    <div class="flex justify-center">
        <p class="text-[18px] font-semibold">
            プロフィール
        </p>
    </div>

    <div class="mt-4 flex justify-center">
        <div class="relative">
            <img
                src="{{ asset('images/profile.png') }}"
                alt="プロフィール画像"
                class="h-[150px] w-[150px] rounded-full object-cover"
            >

            <button
                type="button"
                class="absolute bottom-0 right-0 flex h-8 w-8 items-center justify-center rounded-full bg-white"
            >
                <x-lucide-pencil class="h-4 w-4 text-text" />
            </button>
        </div>
    </div>


    <section class="mt-8">
        <h2 class="text-[16px] font-semibold text-text">
            投稿回数
        </h2>
        <div class="mt-2 grid w-full grid-cols-3 gap-y-7 rounded-[10px] bg-white px-5 py-7">

            <div class="flex flex-col items-center">
                <p class="text-[12px] text-text">今週</p>
                <p class="mt-2 text-[16px] font-semibold text-text">1回</p>
            </div>

            <div class="flex flex-col items-center">
                <p class="text-[12px] text-text">今月</p>
                <p class="mt-2 text-[16px] font-semibold text-text">12回</p>
            </div>

            <div class="flex flex-col items-center">
                <p class="text-[12px] text-text">今年</p>
                <p class="mt-2 text-[16px] font-semibold text-text">34回</p>
            </div>

            <div class="flex flex-col items-center">
                <p class="text-[12px] text-text">連続投稿</p>
                <p class="mt-2 text-[16px] font-semibold text-text">1回</p>
            </div>

            <div class="flex flex-col items-center">
                <p class="text-[12px] text-text">最高連続投稿</p>
                <p class="mt-2 text-[16px] font-semibold text-text">1回</p>
            </div>

            <div class="flex flex-col items-center">
                <p class="text-[12px] text-text">投稿数</p>
                <p class="mt-2 text-[16px] font-semibold text-text">64回</p>
            </div>

        </div>
    </section>
   
    <section class="mt-6">
        <div class="flex items-center justify-between">
            <h2 class="text-[16px] font-semibold text-text">
                アカウント
            </h2>
            <a
                href="#"
                class="flex items-center gap-1 rounded-full bg-[#E9A166]/70 px-3 py-[6px] text-[14px] font-semibold text-text"
            >
                編集
                <x-lucide-pencil class="h-3 w-3 stroke-[1.5]" />
            </a>
        </div>

        <div class="mt-2 overflow-hidden rounded-[10px] bg-white">

            <div class="flex items-center justify-between border-b border-[#444444]/30 px-5 py-4">
                <p class="text-sm font-medium text-text">
                    ニックネーム
                </p>

                <p class="text-sm font-semibold text-text">
                    vantan@gmail.com
                </p>
            </div>

            <div class="flex items-center justify-between border-b border-[#444444]/30 px-5 py-4">
                <p class="text-sm font-medium text-text">
                    ユーザーID
                </p>

                <p class="text-sm font-semibold text-text">
                    vantan@gmail.com
                </p>
            </div>

            <div class="flex items-center justify-between border-b border-[#444444]/30 px-5 py-4">
                <p class="text-sm font-medium text-text">
                    メールアドレス
                </p>

                <p class="text-sm font-semibold text-text">
                    vantan@gmail.com
                </p>
            </div>

            <div class="flex items-center justify-between px-5 py-4">
                <p class="text-sm font-medium text-text">
                    パスワード変更
                </p>

                <p class="text-sm font-semibold tracking-[3px] text-text">
                    ••••••••
                </p>
            </div>
        </div>
    </section>


    <section class="mt-6 overflow-hidden rounded-[10px] bg-white">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button
                type="submit"
                class="w-full border-b border-[#444444]/30 px-5 py-4 text-left text-sm font-semibold text-text"
            >
                ログアウト
            </button>
        </form>

        <button
            type="button"
            class="w-full px-5 py-4 text-left text-sm font-semibold text-[#EB4040]"
        >
            アカウント削除
        </button>
    </section>

</div>
@endsection