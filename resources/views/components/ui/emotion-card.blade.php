@props([
    'title',
    'description',
])

<div class="w-full h-[206px] rounded-[20px] bg-white flex flex-col items-center justify-center font-semibold">
    {{ $slot }}

    <div class="mt-2 text-text text-text">
        {{ $title }}
    </div>

    <div class="mt-4 text-center text-[12px] leading-5">
        {{ $description }}
    </div>
</div>


