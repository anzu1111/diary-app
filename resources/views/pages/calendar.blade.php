@extends('layouts.app')
@section('content')

<div class="min-h-screen">
    <div class="flex justify-center">
        <p class="text-[18px] font-semibold">
            カレンダー
        </p>
    </div>

    <div class="w-full rounded-[12px] bg-white mt-[42px]">
        <h2 class="text-[32px] font-semibold">{{ $month }}</h2><span class="text-[12px] font-semibold">月</span>
    </div>

</div>

@endsection