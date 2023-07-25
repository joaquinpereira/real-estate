@unless ($breadcrumbs->isEmpty())
    <ul class="list-inline ">
        @foreach ($breadcrumbs as $breadcrumb)

            @if (!is_null($breadcrumb->url) && !$loop->last)
                <li class="list-inline-item">
                    <a href="{{ $breadcrumb->url }}" class="text-white">{{ $breadcrumb->title }}</a>
                </li>
            @else
                <li class="list-inline-item">
                    <a href="#" class="text-white">{{ $breadcrumb->title }}</a>
                </li>
            @endif

        @endforeach
    </ul>
@endunless
