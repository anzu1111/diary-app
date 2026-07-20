@extends('layouts.app')
@section('hideNavbar', true)

@section('content')
<div class="relative flex min-h-screen items-center justify-center overflow-hidden bg-base_color">
    <div class="w-full max-w-md px-4">
        <form onsubmit="return false;">
            <div>
                <label for="email" class="text-[16px] font-semibold">メールアドレス</label>
                <input
                    id="email"
                    type="email"
                    name="email"
                    placeholder="example@gmail.com"
                    autocomplete="off"
                    class="mt-2 w-full h-[50px] rounded-[10px] bg-white px-4 py-[14px] text-sm font-semiblold border-none outline-none"/>
            </div>
            <div class="pt-8">
                <label for="password" class="text-[16px] font-semibold">パスワード</label>
                <div class="relative">
                    <input
                        id="password"
                        type="password"
                        name="password"
                        placeholder="•••••••••"
                        autocomplete="off"
                        class="mt-2 w-full h-[50px] rounded-[10px] bg-white px-4 py-[14px] text-sm font-semiblold border-none outline-none">
                    </input>
                    <x-lucide-eye-off class="absolute right-2 top-1/2 w-6 h-6 stroke-[1.0] text-[#3C2415] -translate-y-1/2"/>
                </div>
            </div>

            <div class="mt-[145px]">
                <button type="button" class="w-full h-[54px] rounded-[30px] bg-primary text-text text-[16px] font-semibold">ログイン</button>
            </div>
            <div class="mt-5 text-center">
                <a href="{{ route('login') }}" class="text-[14px] font-semibold underline" >新規登録の方はこちら</a>
            </div>
        </form>
    </div>
</div>
@endsection