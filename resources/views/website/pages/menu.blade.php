@extends('website.layouts.master')
@section('style')
    <style>
        .modal-content {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            width: 100%;
            pointer-events: auto;
            background-color: transparent;
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, .2);
            border-radius: .3rem;
            outline: 0;
        }
    </style>
@endsection
@php

    $lang = session()->get('locale');
    if ($lang == 'he') {
        $name = $data['menu']->name_in_he;
    } else {
        $name = \Str::upper($data['menu']->name);
    }

@endphp
@section('content')
    <section
        style="background: url('{{ asset('web_assets/img/menu-background.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;height:240px;">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="menu-description">{{ $name ?? '' }}</h4>
            </div>
        </div>
    </section>




    <!-- tabs-start -->
    <section class="tabs-section">
        <div class="container">
            <div class="d-md-none position-relative">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        All Categories
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#All"
                            onclick="toggleTab('All')">{{ $lang == 'he' ? 'את כל' : 'All' }}</a>


                        @if (isset($data['categories']))
                            @foreach ($data['categories_list'] as $item)
                                <a class="dropdown-item categories-list" href="javascript:void(0)"
                                    data-category-slug="{{ $item->slug }}">{{ Str::upper($item->name) }}</a>
                            @endforeach
                        @endif

                    </div>

                </div>
            </div>
            <ul class="nav nav-tabs d-none d-md-flex" id="myTab" role="tablist">
                <!-- First row of tabs -->
                <li class="nav-item" data-category-slug='all'>
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#All" role="tab"
                        aria-controls="home" aria-selected="true">{{ $lang == 'he' ? 'את כל' : 'All' }}</a>
                </li>
                <!-- Add more tabs here up to 17 -->
                @if (isset($data['categories']))
                    @foreach ($data['categories_list'] as $item)
                        @php
                            if ($lang == 'he') {
                                $c_name = $item->name_in_he;
                            } else {
                                $c_name = \Str::upper($item->name);
                            }
                        @endphp
                        <li class="nav-item" data-category-slug="{{ $item->slug }}">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#Beers" role="tab"
                                aria-controls="profile" aria-selected="false">{{ $c_name }}</a>
                        </li>
                    @endforeach
                @endif

            </ul>

            <div class="tab-pane fade show active" id="All" role="tabpanel" aria-labelledby="home-tab">
                @include('website.pages.products_list')
            </div>
        </div>
        <input type="hidden" id="category" value="all">

        <div class="container">
            <div class="row justify-content-center">

                <div class="col-sm-12 text-center">

                    <a href="javascript:void(0)" class="btn btn-primary welcome-btn" id="loadMoreBtn">Load More</a>
                </div>
            </div>
        </div>


    </section>



    <!-- order-summary-button -->
    <div class="row summary-section">
        <div class="col-sm-12">
            <a href="javascript:void(0)" id="orderSummary" class="btn btn-primary summary-btn" data-toggle="modal">
                <span><img src="{{ asset('web_assets/img/shopping.png') }}" alt=""></span>
                {{ __('home.order_summary') }}</a>
        </div>
    </div>
    @if ($lang == 'en')
        <div class="modal fade" id="orderSummaryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            style="background: url({{ asset('web_assets/img/bg.png') }});" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="modal-body">
                        <div class="modal-body">
                            <div class="row summary-section">
                                <div class="col-sm-12">
                                    <a href="#" class="btn btn-primary summary-btn ty close-summary-model"> <span><img
                                                src="{{ asset('web_assets/img/shopping.png') }}"
                                                alt=""></span>{{ __('home.order_summary') }}</a>
                                </div>
                            </div>

                            <!-- order-summary-button-end -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <h3 class="order-descripation">{{ __('home.invoice_header') }}</h3>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row table-background ">
                                    <div class="col-md-12">
                                        <div class="panel panel-default">

                                            <div class="panel-body">
                                                <div class="">
                                                    <table class="table" id="cart_table">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <h1 style="font-family:cursive;">{{ __('home.invoice') }}
                                                                </h1>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <img src="{{ asset('web_assets/img/print.png') }}"
                                                                    id="printButton" class="float-right"alt="">
                                                            </div>
                                                        </div>


                                                        <br>

                                                        {{-- <h6 style="font-family:cursive;">Name: MR.JOHN <span
                                                            style="margin-left:33px;"> Phone:+123 456 789</span></h6> --}}


                                                        <thead>
                                                            <tr class="border-b">
                                                                <th class="text-center table-font ">S.No</strong></th>
                                                                <th class="text-left table-font">{{ __('home.items') }}
                                                                </th>
                                                                <th class="text-center table-font">
                                                                    {{ __('home.quantity') }}
                                                                </th>
                                                                <th class="table-font text-center">{{ __('home.price') }}
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-center">1</td>
                                                                <td class="text-left">Corona bottle</td>
                                                                <td class="text-center">1</td>
                                                                <td class="text-center">03</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">2</td>
                                                                <td class="text-left">A large Heineken</td>
                                                                <td class="text-center">3</td>
                                                                <td class="text-center">04</td>
                                                            </tr>
                                                            <tr class="border-b">
                                                                <td class="text-center">3</td>
                                                                <td class="text-left">Big Goldstar</td>
                                                                <td class="text-center">1</td>
                                                                <td class="text-center">05</td>
                                                            </tr>

                                                            <tr>
                                                                <td class="text-left">
                                                                    <Strong>{{ __('home.total') }}</Strong>
                                                                </td>
                                                                <td class="text-center"></td>
                                                                <td class="text-center"><Strong>12<Strong></td>
                                                                <td><Strong>423</Strong></td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <form action="{{ route('website.place-order') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-4 foram">

                                        <div>
                                            <label for="name">{{ __('home.your_name') }}</label>
                                            <input class="f-input" type="text" id="name" name="name"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 fo">
                                        <label for="order">{{ __('home.table_number') }}</label>
                                        <select id="order" name="table_no" required class="f-select">
                                            <option value="">Select Table</option>
                                            <option value="1">01</option>
                                            <option value="2">02</option>
                                            <option value="3">03</option>
                                            <option value="4">04</option>
                                            <option value="5">05</option>
                                            <option value="6">06</option>
                                            <option value="7">07</option>
                                            <option value="8">08</option>
                                            <option value="9">09</option>
                                            <option value="10">10</option>
                                            <!-- Add more options as needed -->
                                        </select>
                                    </div>


                                </div>
                                <div class="col-sm-3"></div>
                                <div class="row justify-content-center mt-4">
                                    <div class="col-sm-12 mx-auto text-center">
                                        <button type="submit"
                                            class="btn btn-primary about-btnn">{{ __('home.place_order') }}</button>

                                    </div>
                                </div>
                            </form>
                        </div>




                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="order-bottom">{{ __('home.footer_text') }}</h3>

                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    @endif
    @if ($lang == 'he')
        <div class="modal fade" id="orderSummaryModal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" style="background: url({{ asset('web_assets/img/bg.png') }});"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="modal-body">
                        <div class="modal-body">
                            <div class="row summary-section">
                                <div class="col-sm-12">
                                    <a href="#" class="btn btn-primary summary-btn ty close-summary-model">
                                        <span><img src="{{ asset('web_assets/img/shopping.png') }}"
                                                alt=""></span>{{ __('home.order_summary') }}</a>
                                </div>
                            </div>

                            <!-- order-summary-button-end -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <h3 class="order-descripation">{{ __('home.invoice_header') }}</h3>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row table-background ">
                                    <div class="col-md-12">
                                        <div class="panel panel-default">

                                            <div class="panel-body">
                                                <div class="">
                                                    <table class="table" id="cart_table">
                                                        <div class="row">

                                                            <div class="col-sm-6">
                                                                <img src="{{ asset('web_assets/img/print.png') }}"
                                                                    id="printButton" class="float-left"alt="">
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <h1 class="float-right" style="font-family:cursive;">
                                                                    {{ __('home.invoice') }}
                                                                </h1>
                                                            </div>
                                                        </div>


                                                        <br>

                                                        {{-- <h6 style="font-family:cursive;">Name: MR.JOHN <span
                                                            style="margin-left:33px;"> Phone:+123 456 789</span></h6> --}}


                                                        <thead>
                                                            <tr class="border-b">
                                                                <th class="table-font text-center">{{ __('home.price') }}
                                                                </th>
                                                                <th class="text-center table-font">
                                                                    {{ __('home.quantity') }}
                                                                </th>
                                                                <th class="text-left table-font">{{ __('home.items') }}
                                                                </th>
                                                                <th class="text-center table-font ">S.No</strong></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-center">1</td>
                                                                <td class="text-left">Corona bottle</td>
                                                                <td class="text-center">1</td>
                                                                <td class="text-center">03</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">2</td>
                                                                <td class="text-left">A large Heineken</td>
                                                                <td class="text-center">3</td>
                                                                <td class="text-center">04</td>
                                                            </tr>
                                                            <tr class="border-b">
                                                                <td class="text-center">3</td>
                                                                <td class="text-left">Big Goldstar</td>
                                                                <td class="text-center">1</td>
                                                                <td class="text-center">05</td>
                                                            </tr>

                                                            <tr>
                                                                <td><Strong>423</Strong></td>
                                                                <td class="text-center"><Strong>12<Strong></td>
                                                                <td class="text-center"></td>
                                                                <td class="text-left">
                                                                    <Strong>{{ __('home.total') }}</Strong>
                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <form action="{{ route('website.place-order') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-3 fo">
                                        <label class="float-right ml-3"
                                            for="order">{{ __('home.table_number') }}</label>
                                        <select id="order" name="table_no" required class="f-select float-right">
                                            <option value="">{{ __('home.select_table') }}</option>
                                            <option value="1">01</option>
                                            <option value="2">02</option>
                                            <option value="3">03</option>
                                            <option value="4">04</option>
                                            <option value="5">05</option>
                                            <option value="6">06</option>
                                            <option value="7">07</option>
                                            <option value="8">08</option>
                                            <option value="9">09</option>
                                            <option value="10">10</option>
                                            <!-- Add more options as needed -->
                                        </select>


                                    </div>
                                    <div class="col-sm-4 foram">

                                        <div>
                                            <label class="float-right ml-3"
                                                for="name">{{ __('home.your_name') }}</label>
                                            <input class="float-right f-input rtl" type="text" id="name"
                                                name="name" placeholder="{{ __('home.your_name') }}" required>
                                        </div>
                                    </div>



                                </div>
                                <div class="col-sm-3"></div>
                                <div class="row justify-content-center mt-4">
                                    <div class="col-sm-12 mx-auto text-center">
                                        <button type="submit"
                                            class="btn btn-primary about-btnn">{{ __('home.place_order') }}</button>

                                    </div>
                                </div>
                            </form>
                        </div>




                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="order-bottom">{{ __('home.footer_text') }}</h3>

                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    @endif

@endsection
@section('script')
    <script>
        $(document).ready(function() {
            var slug = '{{ $data['menu']->slug }}';
            var get_category = 'all'

            function loadMoreData(page) {
                let url = '{{ route('website.menus') }}' + '?page=' + page + '&slug=' + slug + '&category=' +
                    get_category;
                $.ajax({
                    url: url,
                    type: 'GET',
                    success: function(response) {

                        $('#All').append(response);

                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });
            }

            function loadMoreData1(page) {
                let url = '{{ route('website.menus') }}' + '?page=' + page + '&slug=' + slug + '&category=' +
                    get_category;
                $.ajax({
                    url: url,
                    type: 'GET',
                    success: function(response) {

                        $('#All').html('');
                        $('#All').html(response);

                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });
            }

            function addCart(product_id, qty) {


                $.ajax({
                    type: "GET",
                    url: "{{ route('website.cart') }}",
                    data: {
                        product_id: product_id,
                        qty: qty,
                    },
                    success: function(response) {
                        $('#cart_table tbody').empty();
                        $('#cart_table tbody').append(response);
                    }
                });

                return false;
            }

            $("#orderSummary").click(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "GET",
                    url: "{{ route('website.order_summary') }}",
                    success: function(response) {

                        $('#cart_table tbody').empty();
                        $('#cart_table tbody').append(response);
                        $('#orderSummaryModal').modal('show');
                    }
                });

            });
            $(".close-summary-model").click(function(e) {
                $('#orderSummaryModal').modal('hide');

            });
            $(".nav-item").click(function(e) {
                get_category = $(this).attr('data-category-slug');
                $("#category").val(get_category);
                if (get_category == 'all') {
                    $('#loadMoreBtn').removeClass('d-none');
                } else {
                    $('#loadMoreBtn').addClass('d-none');

                }
                console.log(get_category);
                loadMoreData1(1)
            });
            $('.categories-list').on('click', function(e) {
                get_category = $(this).attr('data-category-slug');
                $("#category").val(get_category);
                if (get_category == 'all') {
                    $('#loadMoreBtn').removeClass('d-none');
                } else {
                    $('#loadMoreBtn').addClass('d-none');

                }
                loadMoreData1(1)
            });

            $('#loadMoreBtn').click(function(e) {
                e.preventDefault();
                let nextPage = parseInt($('#currentPage').val()) + 1;
                $('#currentPage').val(nextPage)
                loadMoreData(nextPage);
            });

            $(document).on('click', '.increase_btn', function() {
                var element = $(this).parent('.cart-div')
                var product_id = element.attr('data-product-id');
                var qty = element.children('.qty-input').val();
                addCart(product_id, qty)
            });
            $(document).on('click', '.decrease_btn', function() {
                var element = $(this).parent('.cart-div')
                var product_id = element.attr('data-product-id');
                var qty = element.children('.qty-input').val();
                addCart(product_id, qty)
            });



        });
    </script>
    <script>
        document.getElementById('printButton').addEventListener('click', function() {
            // Open a new window for printing
            var printWindow = window.open('', '_blank');
            printWindow.document.write('<html><head><title>Print</title></head><body>');

            // Append the table HTML content to the new window
            printWindow.document.write(document.getElementById('cart_table').outerHTML);

            // Append a style tag to hide non-printable elements
            printWindow.document.write('<style>@media print{.noprint{display:none;}}</style>');

            // Close the body and HTML tags
            printWindow.document.write('</body></html>');

            // Call the print function on the new window
            printWindow.document.close();
            printWindow.print();
        });
    </script>
@endsection
