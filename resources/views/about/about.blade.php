@extends('layouts.main')
@section('content')
    <x-text-block-layout code="about">
    </x-text-block-layout>

    <x-text-block-layout code="way">
    </x-text-block-layout>

    <x-text-block-layout code="dispetch">
    </x-text-block-layout>

    <x-text-block-layout code="accept_us">
    </x-text-block-layout>

    <div class="advantages-mod_section">
        <div class="container">

            <x-text-block-layout code="about_text">
            </x-text-block-layout>

            <x-advantages-layout page="about">
            </x-advantages-layout>

        </div>
    </div>

    <x-my-office-layout page="about">
    </x-my-office-layout>

    <x-text-block-layout code="fill">
    </x-text-block-layout>

@endsection