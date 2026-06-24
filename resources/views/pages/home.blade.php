@extends('layouts.app')
@section('content')

<div class="min-h-screen">
    <div class="pl-3">
        <x-lucide-search class="w-6 h-6 stroke-[1.0]"/>
    </div>
    <div class=""></div>
    <div class="mt-[48px] flex flex-col gap-8">
        <x-ui.diary-card />
        <x-ui.diary-card />
        <x-ui.diary-card />
        <x-ui.diary-card />
    </div>
</div>

@endsection