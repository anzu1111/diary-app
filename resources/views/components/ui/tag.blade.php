<button
    type="button"
    {{ $attributes->merge([
        'class' => '
            flex h-[54px] w-full
            items-center justify-center
            rounded-[30px]
            bg-white
            text-[16px] font-semibold text-text
            transition-colors duration-200
        '
    ]) }}
>
    {{ $slot }}
</button>