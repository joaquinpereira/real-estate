<!-- WIDGET BLOG -->
<div class="col-lg-4">
    <div class="sticky-top">
        @if ($showSearch)
        {{-- Search btn --}}
        <aside>
            <div class="widget__sidebar mt-0">
                <div class="widget__sidebar__header">
                    <h6 class="text-capitalize">search</h6>
                </div>
                <div class="widget__sidebar__body">
                    <div class="input-group">
                        <input type="text" name="search_term_string" class="form-control"
                                placeholder="Search" wire:model.debounce="searchTerm">
                        <span class="input-group-btn">
                            <button type="submit" class="btn-search btn"><i
                                    class="fa fa-search"></i></button>
                        </span>
                    </div>
                </div>

            </div>
        </aside>
        @endif
        {{-- Categories --}}
        <aside>
            <div class="widget__sidebar">
                <div class="widget__sidebar__header">
                    <h6 class="text-capitalize">categories</h6>
                </div>
                <div class="widget__sidebar__body">
                    <ul class="list-unstyled">
                        @forelse ($categories as $category)
                        <li>
                            <a href="{{ route('posts.category', $category)}}" class="text-capitalize">
                                {{ $category->title }}
                                <span class="badge badge-primary">{{ $category->postPublished()->count() }}</span>
                            </a>
                        </li>
                        @empty
                            <p>No categories</p>
                        @endforelse
                    </ul>
                </div>
            </div>
        </aside>
        {{-- Recent posts --}}
        <aside>
            <div class="widget__sidebar">
                <div class="widget__sidebar__header">
                    <h6 class="text-capitalize">recents posts</h6>
                </div>
                <div class="widget__sidebar__body">
                    <!-- ONE -->
                    @forelse ($recent_posts as $recent_post)
                    <div class="widget__sidebar__body-img">
                        <img src="{{ $recent_post->poster }}" alt="" class="img-fluid">

                        <div class="widget__sidebar__body-heading">
                            <h6 class="text-capitalize cursor-pointer">
                                <a href="{{route('post.show',$recent_post)}}">{{ Str::limit($recent_post->title, 50, '...') }}</a>
                            </h6>
                        </div>
                        <span class="badge badge-secondary p-1 text-capitalize mb-1">
                            {{ optional($recent_post->published_at)->format('M d, Y') }}
                        </span>
                    </div>
                    @empty
                        <p></p>
                    @endforelse
                </div>
            </div>
        </aside>
        {{-- tags --}}
        <aside>
            <div class="widget__sidebar">
                <div class="widget__sidebar__header">
                    <h6 class="text-capitalize">tags</h6>
                </div>
                <div class="widget__sidebar__body">
                    <div class="blog__tags p-0">
                        <ul class="list-inline">
                            @forelse ($tags as $tag)
                                <li class="list-inline-item">
                                    <a href="#">
                                        {{ $tag->title }}
                                    </a>
                                </li>
                            @empty
                                <li></li>
                            @endforelse
                        </ul>
                    </div>
                </div>

            </div>
        </aside>
    </div>
</div>
<!-- END WIDGET BLOG -->
