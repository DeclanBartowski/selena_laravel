@extends('layouts.main')
@section('content')
    <div class="contact-section">
        <div class="container">
            @include('layouts.breadcrumbs')
            @isset($page->title)
                <h1 class="line-title">{{$page->title}}</h1>
            @endisset
            {!! $page->content ?? '' !!}}
        </div>
    </div>
@endsection