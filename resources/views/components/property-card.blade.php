<div class="item">
    <div class="card__image card__box">
        <div class="card__image-header h-250">
            @if ($property->featured_Property)
                <div class="ribbon text-capitalize">featured</div>
            @endif
            <a href="{{ route('property.show', $property) }}">
                <img src="{{$property->poster}}" alt="{{$property->title}}" class="img-fluid w100 img-transition">
            </a>
            <div class="info"> {{ $property->type->name }}</div>
        </div>
        <div class="card__image-body">
            <span class="badge badge-primary text-capitalize mb-2">{{$property->propertyStatus->name}}</span>
            <span class="badge badge-secondary text-capitalize mb-2">{{$property->category->name}}</span>
            <a href="{{ route('property.show', $property)}}">
                <h6 class="text-capitalize">
                    {{Str::of($property->title)->limit(50, '...')}}
                </h6>
            </a>
            <p class="text-capitalize">
                <i class="fa fa-map-marker"></i>
                {{Str::of($property->address)->limit(50, '...')}}
            </p>
            <ul class="list-inline card__content">
                <li class="list-inline-item">

                    <span>
                        baths <br>
                        <i class="fa fa-bath"></i> {{$property->bathrooms}}
                    </span>
                </li>
                <li class="list-inline-item">
                    <span>
                        rooms <br>
                        <i class="fa fa-inbox"></i> {{$property->bedrooms}}
                    </span>
                </li>
                <li class="list-inline-item">
                    <span>
                        area <br>
                        <i class="fa fa-map"></i> {{$property->property_size}}
                    </span>
                </li>
            </ul>
        </div>
        <div class="card__image-footer">
            <figure>
                <img src="{{ $property->agent->profile_picture }}" alt="" class="img-fluid rounded-circle">
            </figure>
            <ul class="list-inline my-auto">
                <li class="list-inline-item">
                    <a href="#">
                        {{$property->agent->name}} <br>
                    </a>

                </li>

            </ul>
            <ul class="list-inline my-auto ml-auto">
                <li class="list-inline-item ">
                    <h6>{{$property->price}}</h6>
                </li>

            </ul>
        </div>
    </div>
</div>
