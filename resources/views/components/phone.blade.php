@isset($phone)
    <a href="tel:{{$phone['phone_call']}}" class="{{$class ?? ''}}">
        <span class="ico-phone"></span>{{$phone['phone_read']}}
    </a>
@endisset