<section class="profile__agents">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <x-agent-card :agent="$agent" />
                <h6 class="text-capitalize mt-5">list of real estate properties published by this agent</h6>
                <div class="row mt-4">
                    @forelse ($properties as $property)
                        <div class="col-md-6 col-lg-6 py-2">
                            <x-property-card :property="$property"></x-property-card>
                        </div>
                    @empty
                        <div>
                            <h6 class="text-capitalize">
                                No properties available
                            </h6>
                        </div>
                    @endforelse
                </div>
                {{ $properties->links() }}
            </div>
            <div class="col-lg-4">
                @include('layouts.partials.agents.sidebar')
            </div>
        </div>
    </div>
</section>

@push('breadcrumbs_property')
    {{ Breadcrumbs::render('agent.show', $agent) }}
@endpush
