@props(['agent'])

<div class="col-lg-12 cards">
    <div class="row">
        <div class="col-md-6 col-lg-6">
            <a href="{{ route('agent.show', $agent) }}" class="profile__agents-avatar">
                <img src="{{ $agent->profile_picture }}" alt="{{ $agent->name }}" class="img-fluid ">
                <div class="total__property-agent">{{ $agent->propertiesPublished }}</div>
            </a>
        </div>
        <div class="col-md-6 col-lg-6 my-auto">
            <div class="profile__agents-info">
                <h5 class="text-capitalize mb-0">
                    <a href="{{ route('agent.show', $agent) }}" target="_blank">{{ $agent->name }}</a>
                </h5>
                <p class="text-capitalize mb-1">property agent</p>
                <p>{{ $agent->about }}</p>

                <ul class="list-unstyled mt-2">
                    <li>
                        <a href="#" class="text-capitalize">
                            <span><i class="fa fa-phone"></i> mobile:</span> {{ $agent->mobile_phone }}
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-capitalize">
                            <span><i class="fa fa-envelope"></i>email :</span> {{ $agent->email }}
                        </a>
                    </li>
                </ul>
                <p class="mb-0 mt-3">
                    <x-social-btn :url="$agent->facebook_url" :social_network="'facebook'" />

                    <x-social-btn :url="$agent->twitter_url" :social_network="'twitter'" />

                    <x-social-btn :url="$agent->linkedin_url" :social_network="'linkedin'" />

                    <x-social-btn :url="$agent->instagram_url" :social_network="'instagram'" />

                    <x-social-btn :url="$agent->youtube_url" :social_network="'youtube'" />
                </p>
            </div>
        </div>
    </div>
</div>
