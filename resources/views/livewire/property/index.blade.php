<div>
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    @forelse ($properties as $property)
                        <div class="col-md-6 col-lg-6 py-2">
                            <x-property-card :property="$property"></x-property-card>
                        </div>
                    @empty
                        <div></div>
                    @endforelse
                </div>
            </div>
            <div class="col-lg-4">
                @include('layouts.partials.properties.side-bar')
            </div>
        </div>
        <br>
        {{ $properties->links() }}
    </div>
</div>

@push('breadcrumbs_property')
    {{ Breadcrumbs::render('property.index') }}
@endpush
