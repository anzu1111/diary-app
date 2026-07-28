@extends('layouts.app')
@section('hideNavbar', true)

@section('content')
<div class="relative flex min-h-screen items-center justify-center overflow-hidden bg-base_color">
    <div class="w-full max-w-md px-4">

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <label for="email" class="text-[16px] font-semibold">メールアドレス</label>
                <input
                    id="email"
                    type="email"
                    name="email"
                    placeholder="example@gmail.com"
                    autocomplete="off"
                    class="mt-2 w-full h-[50px] rounded-[10px] bg-white px-4 py-[14px] text-sm font-semiblold border-none outline-none"/>
                    @error('name')
                        <p class="mt-1 text-[13px] text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
            </div>
            
            <div class="pt-8">
                <label for="password" class="text-[16px] font-semibold">パスワード</label>
                <div class="mt-2 relative">
                    <div x-data="{ show: false }" class="relative mt-2">
                        <input
                            placeholder="パスワード" name="password"
                            :type="show ? 'text' : 'password'"
                            class="w-full h-[50px] rounded-[10px] bg-white px-4 pr-10 border-none outline-none"
                        >

                        <button
                            type="button"
                            @click="show = !show"
                            class="absolute right-3 top-1/2 -translate-y-1/2"
                        >
                            <x-lucide-eye
                                x-show="show"
                                class="w-6 h-6 stroke-[1.0]"
                            />

                            <x-lucide-eye-off
                                x-show="!show"
                                class="w-6 h-6 stroke-[1.0]"
                            />
                        </button>
                    </div>
                </div>
                @error('password')
                    <p class="mt-1 text-[13px] text-red-500">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="pt-8">
                <label for="password_confirmation" class="text-[16px] font-semibold">パスワード(確認)</label>
                <div class="mt-2 relative">
                    <div x-data="{ show: false }" class="relative mt-2">
                        <input
                            placeholder="パスワード" id="password_confirmation"
                            :type="show ? 'text' : 'password'"
                            class="w-full h-[50px] rounded-[10px] bg-white px-4 pr-10 border-none outline-none"
                        >

                        <button
                            type="button"
                            @click="show = !show"
                            class="absolute right-3 top-1/2 -translate-y-1/2"
                        >
                            <x-lucide-eye
                                x-show="show"
                                class="w-6 h-6 stroke-[1.0]"
                            />

                            <x-lucide-eye-off
                                x-show="!show"
                                class="w-6 h-6 stroke-[1.0]"
                            />
                        </button>
                    </div>
                </div>
                @error('password')
                    <p class="mt-1 text-[13px] text-red-500">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="mt-[145px]">
                <button type="submit" class="w-full h-[54px] rounded-[30px] bg-primary text-text text-[16px] font-semibold">新規登録</button>
            </div>
            
            <div class="mt-5 text-center">
                <a href="{{ route('login') }}" class="text-[14px] font-semibold underline" >ログインの方はこちら</a>
            </div>
        </form>
    </div>
</div>
@endsection