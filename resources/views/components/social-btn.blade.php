@props(['url', 'social_network'])

@if ($url)
    <a href="{{ $url }}" class="btn btn-social btn-social-o {{$social_network}} mr-1" target="_blank">
        <i class="fa fa-{{$social_network}}"></i>
    </a>
@endif

