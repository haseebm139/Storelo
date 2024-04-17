@extends('website.layouts.master')
@section('style')
@endsection
@section('content')
    <section
        style="background: url('{{ asset('web_assets/img/menu-background.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;height:240px;">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="menu-description">{{ $data['menu']->name }}</h4>
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
                        <a class="dropdown-item" href="#All" onclick="toggleTab('All')">All</a>


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
                        aria-controls="home" aria-selected="true">All</a>
                </li>
                <!-- Add more tabs here up to 17 -->
                @if (isset($data['categories']))
                    @foreach ($data['categories_list'] as $item)
                        <li class="nav-item" data-category-slug="{{ $item->slug }}">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#Beers" role="tab"
                                aria-controls="profile" aria-selected="false">{{ Str::upper($item->name) }}</a>
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
                <span><img src="{{ asset('web_assets/img/shopping.png') }}" alt=""></span> Order Summary</a>
        </div>
    </div>

    <div class="modal fade" id="orderSummaryModal" tabindex="-1" role="dialog" aria-labelledby="orderSummaryModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">



                <button type="button" class="close d-none d-none" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row summary-section">
                    <div class="col-sm-12">
                        <a href="menu.php" class="btn btn-primary summary-btn ty"> <span><img src="assets/img/shopping.png"
                                    alt=""></span> Order Summary</a>
                    </div>
                </div>

                <!-- order-summary-button-end -->
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="order-descripation">Use This Handy Memory Device To Quickly Recall What You Want To
                            Order
                            And Show It To Your Waiter.</h3>
                    </div>
                </div>
                <div class="container">
                    <div class="row table-background ">
                        <div class="col-md-12">
                            <div class="panel panel-default">

                                <div class="panel-body">
                                    <div class="">
                                        <table class="table" id="cart_table">
                                            <thead>
                                                <tr class="border-b">
                                                    <th class="text-center table-font ">S.No</strong></th>
                                                    <th class="text-left table-font">Item(S)</th>
                                                    <th class="text-center table-font">Quantity</th>
                                                    <th class="table-font text-center">Price</th>
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
                                                    <td class="text-left"> <Strong>Total</Strong></td>
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


                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="order-bottom">To place your order, please fill in your details below.</h3>
                    </div>
                </div>


            </div>

        </div>
    </div>
    <!-- order-summary-button-end -->
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
            $(".nav-item").click(function(e) {
                get_category = $(this).attr('data-category-slug');
                $("#category").val(get_category);
                loadMoreData1(1)
            });
            $('.categories-list').on('click', function(e) {
                get_category = $(this).attr('data-category-slug');
                $("#category").val(get_category);
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
@endsection
