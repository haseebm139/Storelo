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

                <div class="col-sm-2">
                    <div class="card" onmouseover="showKnife(this)" onmouseout="hideKnife(this)">
                        @php
                            $img = $item->image ?? 'default.png';
                        @endphp
                        <img src="{{ asset($img) }}" class="img-fluid" alt="...">
                        <div class="card-body">

                            <p id="test" class="card-text">{{ Str::upper($item->name)  }}</p>
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('web_assets/img/knife.png') }}" alt="" id="" class="knife-icon d-none">
                            </div>
                        </div>

                    </div>
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
                            <td>
                                <div class="card">
                                    <img src="{{ asset('web_assets/img/Mask4.png') }}" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p id="test" class="card-text">ALCOHOL</p>
                                        <div class="d-flex justify-content-center">
                                            <img src="{{ asset('web_assets/img/knife.png') }}" alt=""
                                                id="thh">
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="card">
                                    <img src="{{ asset('web_assets/img/Mask3.png') }}" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">LIGHT & HOT DRINK</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="card">
                                    <img src="{{ asset('web_assets/img/Mask5.png') }}" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">DESSERTS</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="card">
                                    <img src="{{ asset('web_assets/img/Mask2.png') }}" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">MAIN DISHES</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="card">
                                    <img src="{{ asset('web_assets/img/Mask1.png') }}" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">STARTERS</p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-1"></div>
        </div>

    </section>



    <div class="row">
        <div class="col-sm-12">
            <h3 class="item-description" style="font-family:emoji;">THE SPECIAL ONES FOR TODAY</h3>
        </div>
    </div>


    <section class="item-buy">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card2">
                        <img src="{{ asset('web_assets/img/cardimg2.png') }}" class="img-fluid img-card2"
                            alt="Product Image">
                        <div class="card-body card-d">
                            <p class="card-date"> .03 MAY 2024</p>
                            <h5 class="card-title-item-buy">TROPICAL COCKTAIL</h5>
                            <p class="card-text-title">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. </p>
                            <a href="#" class="btn btn-primary button-card-2">READ MORE</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card2">
                        <img src="{{ asset('web_assets/img/cardimg3.png') }}" class="img-fluid img-card2"
                            alt="Product Image">
                        <div class="card-body card-d">
                            <p class="card-date"> .03 MAY 2024</p>
                            <h5 class="card-title-item-buy">SWEET POTATO CARPACCI FIRE</h5>
                            <p class="card-text-title">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. </p>
                            <a href="#" class="btn btn-primary button-card-2">READ MORE</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card2">
                        <img src="{{ asset('web_assets/img/cardimg.png') }}" class="img-fluid img-card2"
                            alt="Product Image">
                        <div class="card-body card-d">
                            <p class="card-date"> .03 MAY 2024</p>
                            <h5 class="card-title-item-buy"> NEMESIS CHOCOLATES</h5>
                            <p class="card-text-title">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. </p>
                            <a href="#" class="btn btn-primary button-card-2">READ MORE</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row mt-4">
                <div class="col-sm-8">
                    <img src="{{ asset('web_assets/img/about.png') }}" class=
    "img-fluid" alt="">
                </div>
                <div class="col-sm-4 about-bg">
                    <div class="about-body">

                        <h5 class="abour-des">DAILY HAPPY HOUR</h5>
                        <p class="about-text-title">1+1 on alcohol from 15:30 to 18:30 -15% on <br> everything on the
                            menu </p>

                        <a href="#" class="btn btn-primary about-btn">Explore More</a>
                    </div>
                </div>
            </div>


            <div class="row mt-4">

                <div class="col-sm-4 about-bg">
                    <div class="about-body">

                        <h5 class="abour-des"> FRIDAY LUNCH BREAK CELEBRATION</h5>
                        <p class="about-text-title"><span style="font-weight: 600;">14:00 the celebration</span>
                            begins and there will also be a <br> bouzouki player for the atmosphere </p>

                        <a href="#" class="btn btn-primary about-btn">Explore More</a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <img src="{{ asset('web_assets/img/about2.png') }}" class=
    "img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>


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
    <section class="about-us">
        <div class="row">
            <div class="col-sm-6 about-us-bg ">
                <div class="welcome-body">

                    <h4 class="about-us-des">ABOUT US</h4>
                    <h5 class="about-us-descripation">WORKING-HOURS</h5>
                    <p class="about-us-text-title">Sunday - Saturday  01:00 – 08:00</p>
                    <h5 class="about-us-descripation">CONTACT:</h5>
                    <p class="about-us-text-title">077-9800400</p>
                    <h5 class="about-us-descripation">EMAIL:</h5>
                    <p class="about-us-text-title">stolero.tlv@gmail.com</p>
                    <h5 class="about-us-descripation">WEBSITE</h5>
                    <p class="about-us-text-title">stolero.tlv@gmail.com</p>
                    <h5 class="about-us-descripation">ADDRESS</h5>
                    <p class="about-us-text-title">Eliezer Perry 14 Tel Aviv</p>


                </div>
            </div>
            <div class="col-sm-6 map-colomn">
                <!--<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d117223.77996815204!2d85.3213263!3d23.3432048!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x11b5a9b0042eef56!2sourcita.com!5e0!3m2!1sen!2sin!4v1589706571407!5m2!1sen!2sin" width="100%" height="570" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>-->
                <img src="{{ asset('web_assets/img/map.png') }}" class="img" style="height: 586px; width: 936px;"
                    alt="">
            </div>
        </div>
    </section>
@endsection
@section('script')
@endsection
