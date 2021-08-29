@extends('layouts.front')

@section('content')
{{--    <div class="py-5">--}}
{{--        <div class="container">--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-md-7 text-center mb-5">--}}
{{--                    <div class="site-section-title">--}}
{{--                        <h2>Categories</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="row">--}}
{{--                    @foreach ($eventTypes as $eventType)--}}
{{--                    <div class="col-md-10 col-lg-2 mb-5 mr-2 ju" style="border: solid;">--}}
{{--                        <a href="{{ route('event_type', $eventType->slug) }}" class="service text-center rounded mt-3">--}}
{{--                            <h2 class="service-heading">{{ $eventType->name }}</h2>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class="site-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 text-center mb-5">
                    <div class="site-section-title">
                        <h2>Categories</h2>
                    </div>
                </div>
            </div>

            <div class="row block-13">
                <div class="nonloop-block-13 owl-carousel">
                    @foreach ($eventTypes as $eventType)
                        <div class="slide-item">
                            <div class="team-member text-center">
                                <div class="text" style="border: solid;">
                                    <a href="{{ route('event_type', $eventType->slug) }}" class="service text-center rounded mt-3">
                                        <h2 class="service-heading">{{ $eventType->name }}</h2>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="site-section site-section-sm bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <div class="site-section-title">
                        <h2>New Products for You</h2>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                @foreach ($newestVenues as $venue)
                <div class="col-md-6 col-lg-4 mb-4">
                    <a href="{{ route('venues.show', [$venue->slug, $venue->id]) }}" class="prop-entry d-block">
                        <figure>
                            <img src="{{ $venue->getFirstMediaUrl('main_photo', 'big_thumb') }}" alt="{{ $venue->name }}" class="img-fluid">
                        </figure>
                        <div class="prop-text">
                            <div class="inner">
                                <span class="price rounded">${{ $venue->price_per_hour }}</span>
                                <h3 class="title">{{ $venue->name }}</h3>
                                <p class="location">{{ $venue->address }}</p>
                            </div>
                            <div class="prop-more-info">
                                <div class="inner d-flex">
                                    <div class="col">
                                        <span>Categories:</span>
                                        <strong>{{ implode(', ', $venue->event_types->pluck('name')->toArray()) }}</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-md-7">
                    <div class="site-section-title text-center">
                        <h2>Branding</h2>
                    </div>
                </div>
            </div>
            <div class="row block-13">

                <div class="nonloop-block-13 owl-carousel">

                    @foreach ($locations as $location)

                    <div class="slide-item">
                        <div class="team-member text-center">
                            <a href="{{ route('location', $location->slug) }}">
                                <img src="{{ $location->getFirstMediaUrl('photo') }}" alt="{{ $location->name }}" class="img-fluid w-25 mx-auto rounded-circle">
                            </a>
                            <div class="text p-3">
                                <a href="{{ route('location', $location->slug) }}">
                                    <h2 class="mb-2 font-weight-light text-black h4">{{ $location->name }}</h2>
                                </a>
                            </div>
                        </div>
                    </div>

                    @endforeach

                </div>

            </div>
        </div>
    </div>

@endsection