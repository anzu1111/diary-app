@props([
    'title',
    'description',
])

<div
    {{ $attributes->class([
        'w-full h-[206px] rounded-[20px] bg-white',
        'border-4 flex flex-col items-center justify-center',
        'font-semibold transition cursor-pointer',
    ]) }}
>
    {{ $slot }}

    <div class="mt-2 text-text">
        {{ $title }}
    </div>

    <div class="mt-4 text-center text-[12px] leading-5">
        {{ $description }}
    </div>
</div>