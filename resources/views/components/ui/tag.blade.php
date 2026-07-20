@props([
    'selected' => false,
])

<button
    type="button"
    {{ $attributes->merge([
        'class' => '
            flex h-[54px] w-[80px]
            items-center justify-center
            rounded-[30px]
            font-semibold text-[16px]
            transition-colors duration-200
            ' . ($selected
                ? 'bg-primary text-text'
                : 'bg-white text-text')
    ]) }}
>
    {{ $slot }}
</button>