@props(['title', 'url_img', 'description'])

<div class="">
    <img src=" {{ $url_img }} " alt="">
    <div class="">
        <p> {{ $title }} </p>
        <p> {{ Str::substr($description, 0, 120) }} </p>
    </div>
</div>
