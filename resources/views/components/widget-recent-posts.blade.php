@props(['recent_posts'])

<aside>
    <div class="widget__sidebar">
        <div class="widget__sidebar__header">
            <h6 class="text-capitalize">recents posts</h6>
        </div>
        <div class="widget__sidebar__body">
            @forelse ($recent_posts as $recent_post)
            <div class="widget__sidebar__body-img">
                <img src="{{ $recent_post->poster }}" alt="{{ $recent_post->title }}" class="img-fluid">

                <div class="widget__sidebar__body-heading">
                    <h6 class="text-capitalize cursor-pointer">
                        <a href="{{route('post.show',$recent_post)}}">{{ Str::limit($recent_post->title, 40, '...') }}</a>
                    </h6>
                </div>
                <span class="badge badge-secondary p-1 text-capitalize mb-1">
                    {{ optional($recent_post->published_at)->format('M d, Y') }}
                </span>
            </div>
            @empty
                <p>No posts have been made yet</p>
            @endforelse
        </div>
    </div>
</aside>
