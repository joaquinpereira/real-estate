<!-- FORM FILTER -->
<div class="products__filter mb-30">
    <div class="products__filter__group">
        <div class="products__filter__header">
            <h5 class="text-center text-capitalize">property filter</h5>
        </div>
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
        <div class="products__filter__body">
            <div class="form-group">

                <select class="form-control" wire:model='status'>
                    <option data-display="Property Status" value="{{null}}">Property Status</option>
                    @foreach ($statuses as $status)
                        <option value="{{ $status->id }}">{{ $status->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <select class="form-control" wire:model='type' >
                    <option data-display="Property Type" value="{{null}}">Property Type</option>
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <select class="form-control" wire:model='category' >
                    <option data-display="Property Category" value="{{null}}">Property Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                @foreach ($features as $feature)
                    <div class="form-check">
                        <input class="form-check-input" name="propertyFeatures[]" value="{{$feature->id}}" type="checkbox" wire:model="propertyFeatures">
                        <label class="form-check-label" for="checkbox2" >
                            {{ $feature->name }}
                        </label>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- END FORM FILTER -->

<!-- END FORM FILTER -->
<div class="sticky-top">
    <!-- PROFILE AGENT -->
    <div class="profile__agent mb-30">
        <div class="profile__agent__group">

            <div class="profile__agent__header">
                <div class="profile__agent__header-avatar">
                    <figure>
                        <img src="images/profile-blog.jpg" alt="" class="img-fluid">
                    </figure>

                    <ul class="list-unstyled mb-0">
                        <li>
                            <h5 class="text-capitalize">jhon doe</h5>
                        </li>
                        <li><a href="tel:123456"><i
                                    class="fa fa-phone-square mr-1"></i>(123)456-7890</a></li>
                        <li><a href="javascript:void(0)"><i class=" fa fa-building mr-1"></i>
                                Company name</a>
                        </li>
                        <li> <a href="javascript:void(0)" class="text-primary">View My Listing</a>
                        </li>
                    </ul>


                </div>

            </div>
            <div class="profile__agent__body">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Your Name">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Phone">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email">
                </div>
                <div class="form-group mb-0">
                    <textarea class="form-control required" rows="5" required="required"
                        placeholder="I'm interest in [ Listing Single ]"></textarea>
                </div>
            </div>
            <div class="profile__agent__footer">
                <div class="form-group mb-0">
                    <button class="btn btn-primary text-capitalize btn-block"> send message <i
                            class="fa fa-paper-plane ml-1"></i></button>

                </div>
            </div>
        </div>

    </div>
    <!-- END PROFILE AGENT -->
</div>
