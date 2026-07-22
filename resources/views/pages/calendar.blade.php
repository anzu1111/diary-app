@extends('layouts.app')
@section('content')

<div class="min-h-screen">

    <div class="flex justify-center">
        <p class="text-[18px] font-semibold">
            カレンダー
        </p>
    </div>

    <div class="mt-[42px] w-full rounded-[12px] bg-white px-5 py-7">

        <div class="flex items-end gap-1">
            <h2 class="text-[32px] font-semibold leading-none">
                {{ $month }}
            </h2>

            <span class="pb-[2px] text-[12px] font-semibold">
                月
            </span>
        </div>

        <div class="mt-8 grid grid-cols-7 text-[12px] font-semibold">
            <div class="flex h-[22px] items-center justify-center">
                <span class="flex h-[22px] w-[22px] items-center justify-center rounded-full bg-secondary">
                    日
                </span>
            </div>

            <div class="flex h-[22px] items-center justify-center">月</div>
            <div class="flex h-[22px] items-center justify-center">火</div>
            <div class="flex h-[22px] items-center justify-center">水</div>
            <div class="flex h-[22px] items-center justify-center">木</div>
            <div class="flex h-[22px] items-center justify-center">金</div>

            <div class="flex h-[22px] items-center justify-center">
                <span class="flex h-[22px] w-[22px] items-center justify-center rounded-full bg-secondary">
                    土
                </span>
            </div>
        </div>

     
        <div class="mt-5 grid grid-cols-7 gap-y-5 text-center">

            @for ($i = 0; $i < $startDay; $i++)
                <div></div>
            @endfor

            @for ($day = 1; $day <= $daysInMonth; $day++)
                <div class="flex min-h-[52px] flex-col items-center gap-1">

                    <span class="text-[18px] font-semibold leading-none">
                        {{ $day }}
                    </span>

                    <x-lucide-sun class="h-5 w-5 stroke-[1.5]" />

                </div>
            @endfor
        </div>
    </div>

</div>

@endsection