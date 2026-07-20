<button
    type="button"
    {{ $attributes->merge([
        'class' => '
            flex h-[48px] w-[88px]
            items-center justify-center
            rounded-[24px]
            bg-primary
            text-text
            font-semibold text-text
            transition-colors duration-200
        '
    ]) }}
>
    {{ $slot }}
</button>