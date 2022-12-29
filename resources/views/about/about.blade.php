@extends('layouts.main')
@section('content')
    <x-text-block-layout code="about"/>

    <x-text-block-layout code="way"/>

    <x-text-block-layout code="dispetch"/>

    <x-text-block-layout code="accept_us"/>

    <div class="advantages-mod_section">
        <div class="container">

            <x-text-block-layout code="about_text"/>

            <x-advantages-layout page="about"/>

        </div>
    </div>

    <x-my-office-layout page="about"/>

    <x-text-block-layout code="fill"/>

@endsection