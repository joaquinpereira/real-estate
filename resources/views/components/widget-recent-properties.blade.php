@props(['recent_properties'])

<aside>
    <div class="widget__sidebar">
        <div class="widget__sidebar__header">
            <h6 class="text-capitalize">recents properties</h6>
        </div>
        <div class="widget__sidebar__body">
            <!-- ONE -->
            @forelse ($recent_properties as $recent_property)
            <div class="widget__sidebar__body-img">
                <img src="{{ $recent_property->poster }}" alt="{{ $recent_property->title }}" class="img-fluid">

                <div class="widget__sidebar__body-heading">
                    <h6 class="text-capitalize cursor-pointer">
                        <a href="{{route('property.show', $recent_property)}}">{{ Str::limit($recent_property->title, 40, '...') }}</a>
                    </h6>
                </div>
                <span class="badge badge-secondary p-1 text-capitalize mb-1">
                    {{ optional($recent_property->created_at)->format('M d, Y') }}
                </span>
            </div>
            @empty
                <p>No properties have been made yet</p>
            @endforelse
        </div>
    </div>
</aside>
