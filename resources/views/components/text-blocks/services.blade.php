<div class="text-center">
    @isset($page->name)
    <h1 class="line-title">{{$page->name}}</h1>
    @endisset
    {!! $page->preview_content !!}
</div>