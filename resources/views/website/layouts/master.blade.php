<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('web_assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('web_assets/css/responsive.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="icon" type="image/png" href="{{ asset('web_assets/img/favicon.png') }}">

    <title>Eliran</title>

    @yield('style')
</head>

<body>

    {{-- Header --}}
    <header>
        <input type="hidden" id="lang" value="{{ $lang }}">
        @php
            $image = $website->logo ?? 'assets/img/nav-back.png';
            $lang = session()->get('locale');
        @endphp
        @if ($lang == 'en')
            <nav class="navbar navbar-expand-md navbar-dark  main-nav fixed-top"
                style="background: url({{ $image }});">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse flex-1 nav-background" id="navbar-collapse">
                        <ul class="nav navbar-nav w-100">
                            @if (isset($menu[0]))
                                @foreach ($menu as $item)
                                    @if ($item->slug == 'main-dishes')
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="{{ route('website.menus', ['slug' => $item->slug]) }}">{{ __('home.eat_storelo') }}</a>
                                        </li>
                                    @endif
                                    @if ($item->slug == 'alcohol')
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="{{ route('website.menus', ['slug' => $item->slug]) }}">{{ __('home.drink') }}</a>
                                        </li>
                                    @endif
                                @endforeach
                            @endif
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">{{ __('home.main_menu') }}</a>
                            </li>

                        </ul>
                    </div>
                    <div class="order-first order-md-0 d-flex justify-content-center">
                        <a class="navbar-brand mx-0" href="{{ route('home') }}"><img src="{{ asset($image) }}"
                                class="nav-img" alt=""></a>
                    </div>
                    <div class="collapse navbar-collapse flex-1 nav-background" id="navbar-collapse">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item language1" data-language="en">
                                <a class="nav-link" href="{{ route('changeLang', ['lang' => 'en']) }}"><img
                                        src="{{ asset('web_assets/img/group.png') }}" class="nav-img"
                                        alt=""></a>
                            </li>
                            <li class="nav-item language1" data-language="he">
                                <a class="nav-link nav-flag" href="{{ route('changeLang', ['lang' => 'he']) }}"><img
                                        src="{{ asset('web_assets/img/flag2.png') }}" class="nav-img"
                                        alt=""></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        @elseif($lang == 'he')
            <nav class="navbar navbar-expand-md navbar-dark  main-nav fixed-top"
                style="background: url({{ $image }});">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse flex-1 nav-background" id="navbar-collapse">
                        <ul class="nav navbar-nav w-100">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">{{ __('home.main_menu') }}</a>
                            </li>

                            @if (isset($menu[0]))
                                @foreach ($menu as $item)
                                    @if ($item->slug == 'alcohol')
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="{{ route('website.menus', ['slug' => $item->slug]) }}">{{ __('home.drink') }}</a>
                                        </li>
                                    @endif
                                    @if ($item->slug == 'main-dishes')
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="{{ route('website.menus', ['slug' => $item->slug]) }}">{{ __('home.eat_storelo') }}</a>
                                        </li>
                                    @endif
                                @endforeach
                            @endif

                        </ul>
                    </div>

                    <div class="order-first order-md-0 d-flex justify-content-center">
                        <a class="navbar-brand mx-0" href="{{ route('home') }}"><img src="{{ asset($image) }}"
                                class="nav-img" alt=""></a>
                    </div>

                    <div class="collapse navbar-collapse flex-1 nav-background" id="navbar-collapse">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item language1" data-language="en">
                                <a class="nav-link" href="{{ route('changeLang', ['lang' => 'en']) }}"><img
                                        src="{{ asset('web_assets/img/group.png') }}" class="nav-img"
                                        alt=""></a>
                            </li>
                            <li class="nav-item language1" data-language="he">
                                <a class="nav-link nav-flag" href="{{ route('changeLang', ['lang' => 'he']) }}"><img
                                        src="{{ asset('web_assets/img/flag2.png') }}" class="nav-img"
                                        alt=""></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        @else
            <nav class="navbar navbar-expand-md navbar-dark  main-nav fixed-top"
                style="background: url({{ $image }});">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbar-collapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse flex-1 nav-background" id="navbar-collapse">
                        <ul class="nav navbar-nav w-100">
                            @if (isset($menu[0]))
                                @foreach ($menu as $item)
                                    @if ($item->slug == 'main-dishes')
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="{{ route('website.menus', ['slug' => $item->slug]) }}">{{ __('home.eat_storelo') }}</a>
                                        </li>
                                    @endif
                                    @if ($item->slug == 'alcohol')
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="{{ route('website.menus', ['slug' => $item->slug]) }}">{{ __('home.drink') }}</a>
                                        </li>
                                    @endif
                                @endforeach
                            @endif
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">{{ __('home.main_menu') }}</a>
                            </li>

                        </ul>
                    </div>
                    <div class="order-first order-md-0 d-flex justify-content-center">
                        <a class="navbar-brand mx-0" href="{{ route('home') }}"><img src="{{ asset($image) }}"
                                class="nav-img" alt=""></a>
                    </div>
                    <div class="collapse navbar-collapse flex-1 nav-background" id="navbar-collapse">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item language1" data-language="en">
                                <a class="nav-link" href="{{ route('changeLang', ['lang' => 'en']) }}"><img
                                        src="{{ asset('web_assets/img/group.png') }}" class="nav-img"
                                        alt=""></a>
                            </li>
                            <li class="nav-item language1" data-language="he">
                                <a class="nav-link nav-flag" href="{{ route('changeLang', ['lang' => 'he']) }}"><img
                                        src="{{ asset('web_assets/img/flag2.png') }}" class="nav-img"
                                        alt=""></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        @endif

    </header>
    {{-- Header --}}

    @yield('content')


    <!-- footer -->
    <section class="about-us">
        <div class="row">
            <div class="col-sm-6 about-us-bg ">
                <div class="welcome-body">
                    @php
                        $working_hours = '';
                        $contact = $website->contact ?? '';
                        $email = $website->email ?? '';
                        $website_url = $website->website_url ?? '';
                        $address = '';

                        if ($lang == 'he') {
                            $working_hours = $website->working_hours_in_hebrew ?? '';
                            $address = $website->address_in_hebrew ?? '';
                        } else {
                            $working_hours = $website->working_hours ?? '';
                            $address = $website->address ?? '';
                        }
                    @endphp
                    <h4 class="about-us-des">{{ __('home.about_us') }}</h4>
                    <h5 class="about-us-descripation">{{ __('home.working_hours') }}</h5>
                    <p class="about-us-text-title">{{ $working_hours }}</p>
                    <h5 class="about-us-descripation">{{ __('home.contact') }}:</h5>
                    <p class="about-us-text-title">{{ $contact }}</p>
                    <h5 class="about-us-descripation">{{ __('home.email') }}:</h5>
                    <p class="about-us-text-title">{{ $email }}</p>
                    <h5 class="about-us-descripation">{{ __('home.website') }}</h5>
                    <p class="about-us-text-title">{{ $website_url }}</p>
                    <h5 class="about-us-descripation">{{ __('home.address') }}</h5>
                    <p class="about-us-text-title">{{ $address }}</p>


                </div>
            </div>
            <div class="col-sm-6 map-colomn">
                <!--<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d117223.77996815204!2d85.3213263!3d23.3432048!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x11b5a9b0042eef56!2sourcita.com!5e0!3m2!1sen!2sin!4v1589706571407!5m2!1sen!2sin" width="100%" height="570" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>-->
                <img src="{{ asset('web_assets/img/map.png') }}" class="img" style="height: 586px; width: 936px;"
                    alt="">
            </div>
        </div>
    </section>
    <section class="footer-bg">
        <div class="container">
            <div class="row footer-top">
                <div class="col-sm-1"></div>
                <div class="col-sm-4">
                    <img src="{{ asset('web_assets/img/footer-img.png') }}" class="img-footer" alt="">
                </div>
                <div class="col-sm-6 foam-bg">


                    <form class="footer-foam" action="{{ route('website.mailing-list') }}" method="POST">
                        @csrf
                        <h3 class="foam-heading  @if ($lang == 'he') rtl @endif">
                            {{ __('home.form_heading') }}</h3>
                        <div class="form-group">
                            <input type="text"
                                class="form-control @if ($lang == 'he') form-control-rtl @endif"
                                id="name" name="name" placeholder="{{ __('home.your_name') }}" required>
                        </div>
                        <div class="form-group">

                            <input type="email"
                                class="form-control @if ($lang == 'he') form-control-rtl @endif"
                                name="email" id="email" placeholder="{{ __('home.email') }}" required>
                        </div>
                        <div class="form-group">
                            <input type="date"
                                class="form-control @if ($lang == 'he') form-control-rtl @endif"
                                id="start" name="d_o_b" />

                        </div>
                        <button type="submit"
                            class="btn btn-primary footer-foam-btn @if ($lang == 'he') footer-foam-btn-rtl @endif">{{ __('home.send_message') }}</button>
                    </form>

                </div>
                <div class="col-sm-1"></div>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-12 d-flex justify-content-center ">
                <img src="{{ asset('web_assets/img/logo.png') }}" class="footer-logo" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 d-flex justify-content-center ">
                <img src="{{ asset('web_assets/img/facebook.png') }}" alt="" class="social-icon">
                <img src="{{ asset('web_assets/img/twitter.png') }}" alt="" class="social-icon">
                <img src="{{ asset('web_assets/img/youtube.png') }}" alt="" class="social-icon">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 d-flex justify-content-center border-footer ">
                    <p class="footer-text">Copyright 2023 © Stolero. All Rights Reserved.</p>
                </div>
            </div>
        </div>


    </section>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <script>
        // const hoverElements = document.getElementsByClassName('card');

        // for (let i = 0; i < hoverElements.length; i++) {
        //     hoverElements[i].addEventListener('mouseover', function() {
        //         document.getElementById("thh").classList.remove("d-none");
        //         console.log('Mouse over');
        //     });

        //     hoverElements[i].addEventListener('mouseout', function() {
        //         document.getElementById("thh").classList.add("d-none");
        //         console.log('Mouse out');
        //     });
        // }

        function changeLanguage() {
            var url = "{{ route('changeLang') }}";
            $.ajax({
                type: "GET",
                url: url + "?lang=" + 'en',
                success: function(response) {
                    location.reload();
                }
            });
        }
        document.addEventListener("DOMContentLoaded", function() {
            var lang = $('#lang').val();
            if (lang == '' || lang == null || lang == undefined) {

                changeLanguage();
            }
        });


        function showKnife(card) {
            const knifeIcon = card.querySelector('.knife-icon');
            knifeIcon.classList.remove('d-none');
            console.log('Mouse over');
        }

        function hideKnife(card) {
            const knifeIcon = card.querySelector('.knife-icon');
            knifeIcon.classList.add('d-none');
            console.log('Mouse out');
        }



        function increment() {
            var input = document.getElementById('quantity');
            var value = parseInt(input.value, 10);
            input.value = isNaN(value) ? 1 : value + 1;
        }

        function decrement() {
            var input = document.getElementById('quantity');
            var value = parseInt(input.value, 10);
            input.value = isNaN(value) ? 1 : value - 1;
        }



        $(document).ready(function() {
            $('.slider').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: true,
                dots: true,
                responsive: [{
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });
        });

        function toggleTab(tabName) {
            $('.nav-link').removeClass('active');
            $('.tab-pane').removeClass('active');
            $('.tab-pane').removeClass('show');
            $('.nav-link[href="#' + tabName + '"]').addClass('active');
            $('.tab-pane[id="' + tabName + '"]').addClass('active');
            $('.tab-pane[id="' + tabName + '"]').addClass('show');
        }



        $(".language").click(function() {
            var selectedLanguage = $(this).data("language");

            // window.location.href =
        });
    </script>
    @yield('script')
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
