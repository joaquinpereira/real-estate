<section class="profile__agents">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div>
                    @forelse ($agents as $agent)
                        <x-agent-card :agent="$agent" />
                    @empty
                        <h1 class="text-capitalize">No agents</h1>
                    @endforelse
                </div>
                <div class="mt-4">
                    {{ $agents->links() }}
                </div>
            </div>
            <div class="col-lg-4">
                @include('layouts.partials.agents.sidebar')
            </div>
        </div>
    </div>
</section>

@push('breadcrumbs_property')
    {{ Breadcrumbs::render('agent.index') }}
@endpush
