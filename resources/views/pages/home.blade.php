@extends('layouts.app')
@section('content')

<div class="min-h-screen">
    <div class="pl-3">
        <x-lucide-search class="w-6 h-6 stroke-[1.0]"/>
    </div>
    <div class="mt-[48px] flex flex-col gap-8">
        <a href="{{ route('detail',1) }}">
            <x-ui.diary-card />
        </a>
        <a href="{{ route('detail',2) }}">
            <x-ui.diary-card />
        </a>
        <a href="{{ route('detail',3) }}">
            <x-ui.diary-card />
        </a>
        <a href="{{ route('detail',4) }}">
            <x-ui.diary-card />
        </a>
    </div>
    <a href="{{ route('post.create') }}">
        <div class="fixed bottom-[120px] right-[40px] h-[60px] w-[60px] rounded-full bg-primary flex items-center justify-center shadow-lg">
            <x-lucide-plus class="w-8 h-8 stroke-[1.0]"/>
        </div>
    </a>
</div>

@endsection