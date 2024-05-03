@extends('website.layouts.master')
@section('style')
@endsection
@php
    $lang = session()->get('locale');

@endphp
@section('content')
    {{-- Slider --}}
    {{-- $data['slider'] --}}
    @if (isset($data['slider'][0]))
        <section class="hero-page">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators d-none">
                    @foreach ($data['slider'] as $key => $item)
                        <li data-target="#carouselExampleIndicators" data-slide-to={{ $key }}
                            class=" @if ($key == 0) active @endif "></li>
                    @endforeach

                </ol>
                <div class="carousel-inner">
                    @foreach ($data['slider'] as $key => $item)
                        @php
                            $s_title = '';
                            $s_description = '';
                            if ($lang == 'he') {
                                $s_title = $item->title_in_he ?? '';
                                $s_description = $item->description_in_he ?? '';
                            } else {
                                $s_title = \Str::upper($item->title ?? '');
                                $s_description = $item->description ?? '';
                            }
                            $img = $item->image ?? 'web_assets/img/slider.png';
                        @endphp
                        <div class="carousel-item @if ($key == 0) active @endif">
                            <img class="d-block w-100 carousel-picture" src="{{ asset($img) }}" alt="Second slide">
                            <div class="carousel-caption @if ($lang == 'he') rtl @endif">
                                <p class="crousel-para">{{ $s_title }}</p>
                                <h2 class="crousel-heading">{{ $s_description }}</h2>
                                <br>
                                <button class="btn btn-primary crousel-button">{{ __('home.learn_more') }}</button>
                            </div>
                        </div>
                    @endforeach

                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
    @endif
    {{-- Slider --}}


    {{-- Menu Bar --}}
    @if (isset($data['menu'][0]))
        <section class="d-lg-block d-md-block d-sm-none d-none">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="text-center text-white menu">{{ __('home.menu') }}</h3>
                </div>
            </div>
            <div class="row ">
                <div class="col-sm-1"></div>
                @if ($lang == 'en')
                    @foreach ($data['menu'] as $item)
                        <div class="col-sm-2 col-text-underline">
                            <a href="{{ route('website.menus', ['slug' => $item->slug]) }}">

                                <div class="card" onmouseover="showKnife(this)" onmouseout="hideKnife(this)">
                                    @php
                                        $img = $item->image ?? 'default.png';
                                        if ($lang == 'he') {
                                            $name = $item->name_in_he;
                                        } else {
                                            $name = \Str::upper($item->name);
                                        }
                                    @endphp

                                    <img src="{{ asset($img) }}" class="img-fluid" alt="...">
                                    <div class="card-body">

                                        <p id="test" class="card-text">{{ $name }}</p>
                                        <div class="d-flex justify-content-center">
                                            <img src="{{ asset('web_assets/img/knife.png') }}" alt="" id=""
                                                class="knife-icon d-none">
                                        </div>
                                    </div>

                                </div>
                            </a>
                        </div>
                    @endforeach
                @elseif($lang == 'he')
                    @foreach ($data['menu']->sortByDesc('id') as $item)
                        <div class="col-sm-2 col-text-underline">
                            <a href="{{ route('website.menus', ['slug' => $item->slug]) }}">

                                <div class="card" onmouseover="showKnife(this)" onmouseout="hideKnife(this)">
                                    @php
                                        $img = $item->image ?? 'default.png';
                                        if ($lang == 'he') {
                                            $name = $item->name_in_he;
                                        } else {
                                            $name = \Str::upper($item->name);
                                        }
                                    @endphp

                                    <img src="{{ asset($img) }}" class="img-fluid" alt="...">
                                    <div class="card-body">

                                        <p id="test" class="card-text">{{ $name }}</p>
                                        <div class="d-flex justify-content-center">
                                            <img src="{{ asset('web_assets/img/knife.png') }}" alt=""
                                                id="" class="knife-icon d-none">
                                        </div>
                                    </div>

                                </div>
                            </a>
                        </div>
                    @endforeach
                @else
                    <div class="col-sm-2 col-text-underline">
                        <a href="{{ route('website.menus', ['slug' => $item->slug]) }}">

                            <div class="card" onmouseover="showKnife(this)" onmouseout="hideKnife(this)">
                                @php
                                    $img = $item->image ?? 'default.png';
                                    if ($lang == 'he') {
                                        $name = $item->name_in_he;
                                    } else {
                                        $name = \Str::upper($item->name);
                                    }
                                @endphp

                                <img src="{{ asset($img) }}" class="img-fluid" alt="...">
                                <div class="card-body">

                                    <p id="test" class="card-text">{{ $name }}</p>
                                    <div class="d-flex justify-content-center">
                                        <img src="{{ asset('web_assets/img/knife.png') }}" alt="" id=""
                                            class="knife-icon d-none">
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>
                @endif

                <div class="col-sm-1"></div>
            </div>
        </section>
    @endif


    @if (isset($data['menu'][0]))
        <section class="d-lg-none d-md-none d-sm-block">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <table class="table table-responsive">
                        <tbody>


                            <tr>
                                @if ($lang == 'he')
                                    @foreach ($data['menu']->sortByDesc('id') as $item)
                                        @php
                                            $img = $item->image ?? 'default.png';
                                        @endphp
                                        <td>
                                            <a href="{{ route('website.menus', ['slug' => $item->slug]) }}">
                                                <div class="card" onmouseover="showKnife(this)"
                                                    onmouseout="hideKnife(this)">
                                                    <img src="{{ asset($img) }}" class="img-menu" alt="...">
                                                    <div class="card-body">

                                                        @php
                                                            if ($lang == 'he') {
                                                                $name = $item->name_in_he;
                                                            } else {
                                                                $name = \Str::upper($item->name);
                                                            }
                                                        @endphp

                                                        <p id="test" class="card-text">{{ $name }}</p>
                                                        <div class="d-flex justify-content-center">
                                                            <img src="{{ asset('web_assets/img/knife.png') }}"
                                                                alt="" class="knife-icon d-none">
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </td>
                                    @endforeach
                                @else
                                    @foreach ($data['menu'] as $item)
                                        @php
                                            $img = $item->image ?? 'default.png';
                                        @endphp
                                        <td>
                                            <a href="{{ route('website.menus', ['slug' => $item->slug]) }}">
                                                <div class="card" onmouseover="showKnife(this)"
                                                    onmouseout="hideKnife(this)">
                                                    <img src="{{ asset($img) }}" class="img-menu" alt="...">
                                                    <div class="card-body">

                                                        @php
                                                            if ($lang == 'he') {
                                                                $name = $item->name_in_he;
                                                            } else {
                                                                $name = \Str::upper($item->name);
                                                            }
                                                        @endphp

                                                        <p id="test" class="card-text">{{ $name }}</p>
                                                        <div class="d-flex justify-content-center">
                                                            <img src="{{ asset('web_assets/img/knife.png') }}"
                                                                alt="" class="knife-icon d-none">
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </td>
                                    @endforeach
                                @endif

                            </tr>


                        </tbody>

                    </table>
                </div>
                <div class="col-sm-1"></div>
            </div>

        </section>
    @endif
    {{-- Menu Bar --}}

    @if (isset($data['special_products'][0]))
        <div class="row">
            <div class="col-sm-12">
                <h3 class="item-description" style="font-family:emoji;">{{ __('home.the_special_once_for_today') }}</h3>
            </div>
        </div>
    @endif
    <section class="item-buy">
        <div class="container">
            @if ($lang == 'he')
                @if (isset($data['special_products'][0]))
                    <div class="row">
                        @foreach ($data['special_products']->sortByDesc('id') as $item)
                            <div class="col-sm-4">
                                <div class="card2">
                                    @php
                                        $img = $item->image ?? 'web_assets/img/cardimg2.png';
                                        $currentDate = \Carbon\Carbon::now();
                                        // Format the current date as 'd M Y' (e.g., 17 Apr 2024)
                                        $formattedDate = $currentDate->format('d M Y');

                                        $sp_title = '';
                                        $sp_description = '';
                                        if ($lang == 'he') {
                                            $sp_title = $item->title_in_he ?? '';
                                            $sp_description = $item->description_in_he ?? '';
                                        } else {
                                            $sp_title = \Str::upper($item->title ?? '');
                                            $sp_description = $item->description ?? '';
                                        }
                                    @endphp
                                    <img src="{{ asset($img) }}" class="img-fluid img-card2" alt="Product Image">
                                    <div class="card-body card-d">
                                        <p class="card-date p-2">{{ $formattedDate }}</p>
                                        <h5 class="card-title-item-buy">{{ $sp_title }}</h5>
                                        <p class="card-text-title">{{ $sp_description }}</p>
                                        <a href="#"
                                            class="btn btn-primary button-card-2">{{ __('home.read_more') }}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                @endif
            @else
                @if (isset($data['special_products'][0]))
                    <div class="row">
                        @foreach ($data['special_products'] as $item)
                            <div class="col-sm-4">
                                <div class="card2">
                                    @php
                                        $img = $item->image ?? 'web_assets/img/cardimg2.png';
                                        $currentDate = \Carbon\Carbon::now();
                                        // Format the current date as 'd M Y' (e.g., 17 Apr 2024)
                                        $formattedDate = $currentDate->format('d M Y');

                                        $sp_title = '';
                                        $sp_description = '';
                                        if ($lang == 'he') {
                                            $sp_title = $item->title_in_he ?? '';
                                            $sp_description = $item->description_in_he ?? '';
                                        } else {
                                            $sp_title = \Str::upper($item->title ?? '');
                                            $sp_description = $item->description ?? '';
                                        }
                                    @endphp
                                    <img src="{{ asset($img) }}" class="img-fluid img-card2" alt="Product Image">
                                    <div class="card-body card-d">
                                        <p class="card-date p-2">{{ $formattedDate }}</p>
                                        <h5 class="card-title-item-buy">{{ $sp_title }}</h5>
                                        <p class="card-text-title">{{ $sp_description }}</p>
                                        <a href="#"
                                            class="btn btn-primary button-card-2">{{ __('home.read_more') }}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                @endif
            @endif
            @if (isset($data['events'][0]))
                @foreach ($data['events'] as $key => $item)
                    @php
                        $img = $item->image ?? 'web_assets/img/about.png';
                        $isEven = $key % 2 == 0;

                        $event_title = '';
                        $event_description = '';
                        if ($lang == 'he') {
                            $event_title = $item->title_in_he ?? '';
                            $event_description = $item->description_in_he ?? '';
                        } else {
                            $event_title = \Str::upper($item->title ?? '');
                            $event_description = $item->description ?? '';
                        }
                    @endphp
                    @if ($isEven)
                        <div class="row mt-4">
                            <div class="col-sm-8">
                                <img src="{{ asset($img) }}" class="img-fluid" alt="">
                            </div>
                            <div class="col-sm-4 about-bg">
                                <div class="about-body">

                                    <h5 class="abour-des @if ($lang == 'he') rtl @endif">
                                        {{ $event_title }}</h5>
                                    <p class="about-text-title @if ($lang == 'he') rtl @endif">
                                        {!! $event_description !!}</p>

                                    <a href="javascript:void(0)"
                                        class="btn btn-primary about-btn @if ($lang == 'he') about-btn-rtl @endif">{{ __('home.explore_more') }}</a>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="row mt-4">

                            <div class="col-sm-4 about-bg">
                                <div class="about-body">

                                    <h5 class="abour-des @if ($lang == 'he') rtl @endif">
                                        {{ $event_title }}</h5>
                                    <p class="about-text-title @if ($lang == 'he') rtl @endif">
                                        {!! $event_description !!}</p>

                                    <a href="javascript:void(0)"
                                        class="btn btn-primary about-btn @if ($lang == 'he') about-btn-rtl @endif">{{ __('home.explore_more') }}</a>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <img src="{{ asset($img) }}" class="img-fluid" alt="">
                            </div>
                        </div>
                    @endif
                @endforeach
            @endif


        </div>
    </section>
    @if (isset($data['award']))
        @php
            $award_bg_image = $data['award']->bg_image ?? 'web_assets/img/welcome.jpg';
        @endphp
        <section
            class="welcome-section"style="background: url({{ asset($award_bg_image) }}); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <div class="container">

                <div class="row mt-4">
                    @php
                        $award_image = $data['award']->image ?? 'web_assets/img/welcome-sec.png';

                        $award_description = '';
                        if ($lang == 'he') {
                            $award_description = $data['award']->description_in_he ?? '';
                        } else {
                            $award_description = $data['award']->description ?? '';
                        }
                    @endphp

                    <div class="col-sm-6 d-flex justify-content-center">
                        <img src="{{ asset($award_image) }}" class="img-welcome" alt="">
                    </div>
                    <div class="col-sm-5">
                        <div class="welcome-body">

                            {{-- <h5 class="welcome-des @if ($lang == 'he') rtl @endif">{{ __('home.welcome_to') }}
                        </h5>
                        <h4 class="welcome-descripation @if ($lang == 'he') rtl @endif">
                            {{ __('home.join_our_family') }}</h4> --}}
                            <p class="welcome-text-title  ">
                                {!! $award_description !!}
                            </p>

                            <a href="#"
                                class="btn btn-primary welcome-btn @if ($lang == 'he') about-btn-rtl @endif">{{ __('home.vote_for_us') }}</a>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
            </div>
        </section>
    @endif
@endsection
@section('script')
@endsection
