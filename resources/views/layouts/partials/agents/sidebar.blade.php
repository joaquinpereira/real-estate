<div>
    @if ($showSearchInput)
        <!-- FORM FILTER -->
        <div class="products__filter mb-30">
            <div class="products__filter__group">
                <div class="products__filter__header">
                    <h5 class="text-center text-capitalize">find agents</h5>
                </div>
                <div class="products__filter__body">
                    <div class="form-group">
                        <label>Enter Agent name</label>
                        <input type="text" class="form-control" placeholder="Enter agent name" wire:model="searchTerm">
                    </div>
                </div>
            </div>
        </div>
        <!-- END FORM FILTER -->
    @endif

    {{-- Recent properties --}}
    <x-widget-recent-properties :recent_properties='$recent_properties' />

    {{-- Recent posts --}}
    <x-widget-recent-posts :recent_posts='$recent_posts' />
</div>
