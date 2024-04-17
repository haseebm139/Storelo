@extends('website.layouts.master')
@section('style')
@endsection
@section('content')
    <section class="hero-page">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators d-none">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 carousel-picture" src="{{ asset('web_assets/img/slider.png') }}"
                        alt="Second slide">
                    <div class="carousel-caption">
                        <p class="crousel-para">Some descriptive text goes here</p>
                        <h2 class="crousel-heading">Lorem Ipsum<br>
                            is simply</h2>
                        <br>
                        <button class="btn btn-primary crousel-button">Learn More</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 carousel-picture" src="{{ asset('web_assets/img/slider.png') }}"
                        alt="Second slide">
                    <div class="carousel-caption">
                        <p class="crousel-para">Some descriptive text goes here</p>
                        <h2 class="crousel-heading">Lorem Ipsum <br>
                            is simply</h2>
                        <br>
                        <button class="btn btn-primary crousel-button">Learn More</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 carousel-picture" src="{{ asset('web_assets/img/slider.png') }}"
                        alt="Second slide">
                    <div class="carousel-caption">
                        <p class="crousel-para">Some descriptive text goes here</p>
                        <h2 class="crousel-heading">Lorem Ipsum<br>
                            is simply</h2>
                        <br>
                        <button class="btn btn-primary crousel-button">Learn More</button>
                    </div>
                </div>
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
    <section class="d-none d-sm-block">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="text-center text-white menu">MENU</h3>
            </div>
        </div>
        <div class="row ">
            <div class="col-sm-1"></div>
            @if (isset($data['menu'][0]))
                @foreach ($data['menu'] as $item)
                    <div class="col-sm-2 col-text-underline">
                        <a href="{{ route('website.menus', ['slug' => $item->slug]) }}">

                            <div class="card" onmouseover="showKnife(this)" onmouseout="hideKnife(this)">
                                @php
                                    $img = $item->image ?? 'default.png';
                                @endphp
                                <img src="{{ asset($img) }}" class="img-fluid" alt="...">
                                <div class="card-body">

                                    <p id="test" class="card-text">{{ Str::upper($item->name) }}</p>
                                    <div class="d-flex justify-content-center">
                                        <img src="{{ asset('web_assets/img/knife.png') }}" alt="" id=""
                                            class="knife-icon d-none">
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>
                @endforeach
            @endif


            <div class="col-sm-1"></div>
        </div>
    </section>


    <section class="d-lg-none d-md-none d-sm-block ">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <table class="table table-responsive">
                    <tbody>
                        <tr>
                            @if (isset($data['menu'][0]))
                                @foreach ($data['menu'] as $item)
                                    @php
                                        $img = $item->image ?? 'default.png';
                                    @endphp
                                    <td>
                                        <a href="{{ route('website.menus', ['slug' => $item->slug]) }}">
                                            <div class="card" onmouseover="showKnife(this)" onmouseout="hideKnife(this)">
                                                <img src="{{ asset($img) }}" class="img-fluid" alt="...">
                                                <div class="card-body">
                                                    <p id="test" class="card-text">{{ Str::upper($item->name) }}</p>
                                                    <div class="d-flex justify-content-center">
                                                        <img src="{{ asset('web_assets/img/knife.png') }}" alt=""
                                                            class="knife-icon d-none">
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


    @if (isset($data['special_products'][0]))

        <div class="row">
            <div class="col-sm-12">
                <h3 class="item-description" style="font-family:emoji;">THE SPECIAL ONES FOR TODAY</h3>
            </div>
        </div>

        <section class="item-buy">
            <div class="container">
                <div class="row">
                    @foreach ($data['special_products'] as $item)
                        <div class="col-sm-4">
                            <div class="card2">
                                @php
                                    $img = $item->image ?? 'web_assets/img/cardimg2.png';
                                    $currentDate = \Carbon\Carbon::now();
                                    // Format the current date as 'd M Y' (e.g., 17 Apr 2024)
                                    $formattedDate = $currentDate->format('d M Y');
                                @endphp
                                <img src="{{ asset($img) }}" class="img-fluid img-card2" alt="Product Image">
                                <div class="card-body card-d">
                                    <p class="card-date p-2">{{ $formattedDate }}</p>
                                    <h5 class="card-title-item-buy">{{ Str::upper($item->title) }}</h5>
                                    <p class="card-text-title">{{ $item->description }}</p>
                                    <a href="#" class="btn btn-primary button-card-2">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
                @if (isset($data['events'][0]))
                    @foreach ($data['events'] as $key => $item)
                        @php
                            $img = $item->image ?? 'web_assets/img/about.png';
                            $isEven = $key % 2 == 0;
                        @endphp
                        @if ($isEven)
                            <div class="row mt-4">
                                <div class="col-sm-8">
                                    <img src="{{ asset($img) }}" class="img-fluid" alt="">
                                </div>
                                <div class="col-sm-4 about-bg">
                                    <div class="about-body">

                                        <h5 class="abour-des">{{ Str::upper($item->title) }}</h5>
                                        <p class="about-text-title">{!! $item->description !!}</p>

                                        <a href="javascript:void(0)" class="btn btn-primary about-btn">Explore More</a>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="row mt-4">

                                <div class="col-sm-4 about-bg">
                                    <div class="about-body">

                                        <h5 class="abour-des">{{ Str::upper($item->title) }}</h5>
                                        <p class="about-text-title">{!! $item->description !!}</p>

                                        <a href="javascript:void(0)" class="btn btn-primary about-btn">Explore More</a>
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
    @endif




    <section
        class="welcome-section"style="background: url('assets/img/welcome.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="container">

            <div class="row mt-4">

                <div class="col-sm-6 d-flex justify-content-center">
                    <img src="{{ asset('web_assets/img/welcome-sec.png') }}" class="img-welcome" alt="">
                </div>
                <div class="col-sm-4">
                    <div class="welcome-body">

                        <h5 class="welcome-des">Welcome TO</h5>
                        <h4 class="welcome-descripation">JOIN THE FAMILY</h4>
                        <p class="welcome-text-title"> We've been shortlisted in the Japanese category!
                            <br>
                            Wanna show your love and help us hit the top spot?
                        </p>

                        <a href="#" class="btn btn-primary welcome-btn">Vote For US</a>
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
    </section>
@endsection
@section('script')
@endsection
