@extends('website.layouts.master')
@section('style')
@endsection
@section('content')
    <section
        style="background: url('assets/img/menu-background.png'); background-size: cover; background-position: center; background-repeat: no-repeat;height:240px;">
        <div class="row ">
            <div class="col-sm-12">
                <h4 class="menu-description">StoleroS alcohol</h4>
            </div>
        </div>
    </section>




    <!-- tabs-start -->
    <section class="tabs-section">
        <div class="container">

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <!-- First row of tabs -->
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#All" role="tab"
                        aria-controls="home" aria-selected="true">All</a>
                </li>
                <!-- Add more tabs here up to 17 -->
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#Beers" role="tab"
                        aria-controls="profile" aria-selected="false">Beers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#vodka" role="tab"
                        aria-controls="profile" aria-selected="false">vodka</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#Whiskey" role="tab"
                        aria-controls="profile" aria-selected="false">Whiskey</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#Gin" role="tab"
                        aria-controls="profile" aria-selected="false">Gin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#Tequila" role="tab"
                        aria-controls="profile" aria-selected="false">Tequila</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#Anise" role="tab"
                        aria-controls="profile" aria-selected="false">Anise</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#Rum" role="tab"
                        aria-controls="profile" aria-selected="false">Rum</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#Aperitif" role="tab"
                        aria-controls="profile" aria-selected="false">Aperitif</a>
                </li>
                <hr class="w-100" />
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#Dejstif" role="tab"
                        aria-controls="contact" aria-selected="false">Dejstif</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#Liquor" role="tab"
                        aria-controls="contact" aria-selected="false">Liquor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#cognac" role="tab"
                        aria-controls="contact" aria-selected="false">cognac</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#White" role="tab"
                        aria-controls="contact" aria-selected="false">White wine</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#Red" role="tab"
                        aria-controls="contact" aria-selected="false">Red wine</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#Sparkling" role="tab"
                        aria-controls="contact" aria-selected="false">Sparkling</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#Rosé" role="tab"
                        aria-controls="contact" aria-selected="false">Rosé wine</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#Cocktails" role="tab"
                        aria-controls="contact" aria-selected="false">Cocktails</a>
                </li>
                <!-- Add more tabs here if needed -->
            </ul>





            <div class="tab-content" id="myTabContent">
                <!-- Content for All tab -->
                <div class="tab-pane fade show active" id="All" role="tabpanel" aria-labelledby="home-tab">
                    <!-- heding -->
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="tabs-des">BEERS</h4>
                        </div>
                    </div>

                    <!-- cart start -->
                    <div class="row mt-3">
                        <!-- first side col 6 start -->
                        <div class="col-sm-6">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                <img class="media-object img-fluid" src="assets/img/sol.png" />
                                                <div class="media-body-cart">
                                                    <h4 class="media-heading">Corona Bottle</h4>
                                                    <p class="media-about">NIS 36</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-sm-1 col-md-1" style="text-align: center;"></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1">
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                value="3" />
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="vertical 12 d-none d-lg-block"></div>

                        <div class="col-sm-6">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                <img class="media-object img-fluid" src="assets/img/mac.png" />
                                                <div class="media-body-cart">
                                                    <h4 class="media-heading">Product name</h4>
                                                    <p class="media-about">NIS 36</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-sm-1 col-md-1" style="text-align: center;"></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1">
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                value="3" />
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                        <!-- second side col 6 start -->

                        <!-- colomn end -->
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="tabs-des">Whiskey</h4>
                        </div>
                    </div>

                    <!-- cart start -->
                    <div class="row mt-3">
                        <!-- first side col 6 start -->
                        <div class="col-sm-6">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                <img class="media-object img-fluid" src="assets/img/sol.png" />
                                                <div class="media-body-cart">
                                                    <h4 class="media-heading">Corona Bottle</h4>
                                                    <p class="media-about">NIS 36</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-sm-1 col-md-1" style="text-align: center;"></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1">
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                value="3" />
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>

                        <div class="vertical 12 d-none d-lg-block"></div>

                        <div class="col-sm-6">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                <img class="media-object img-fluid" src="assets/img/mac.png" />
                                                <div class="media-body-cart">
                                                    <h4 class="media-heading">Product name</h4>
                                                    <p class="media-about">NIS 36</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-sm-1 col-md-1" style="text-align: center;"></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1">
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                value="3" />
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <!-- second side col 6 start -->

                        <!-- colomn end -->
                    </div>
                    <!-- heading start -->
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="tabs-des">Vodka</h4>
                        </div>
                    </div>

                    <!-- heading end -->
                    <!-- row start -->
                    <div class="row mt-3">

                        <!-- col-6 start -->
                        <div class="col-sm-6">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                <img class="media-object img-fluid" src="assets/img/Corona.png" />
                                                <div class="media-body-cart">
                                                    <h4 class="media-heading">Corona Bottle</h4>
                                                    <p class="media-about">NIS 36</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-sm-1 col-md-1" style="text-align: center;"></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1">
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                value="3" />
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        <div class="vertical 12 d-none d-lg-block"></div>


                        <div class="col-sm-6">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                <img class="media-object img-fluid" src="assets/img/big.png" />
                                                <div class="media-body-cart">
                                                    <h4 class="media-heading">Product name</h4>
                                                    <p class="media-about">NIS 36</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-sm-1 col-md-1" style="text-align: center;"></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1">
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                value="3" />
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                        <!-- col-6-second start -->
                    </div>
                    <!-- row-end -->
                    <div class="container">
                        <div class="row justify-content-center">
                            <!-- Center the column -->
                            <div class="col-sm-12 text-center">
                                <!-- Center the button -->
                                <a href="#" class="btn btn-primary welcome-btn">Load More</a>
                            </div>
                        </div>
                    </div>
                    <!-- summary-button -->


                </div>
                <!-- tab-content end all -->

                <!-- Content for Beers tab -->
                <div class="tab-pane fade" id="Beers" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="tabs-des">BEERS</h4>
                        </div>
                    </div>

                    <!-- cart start -->
                    <div class="row mt-3">
                        <!-- first side col 6 start -->
                        <div class="col-sm-6">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                <img class="media-object img-fluid" src="assets/img/sol.png" />
                                                <div class="media-body-cart">
                                                    <h4 class="media-heading">Corona Bottle</h4>
                                                    <p class="media-about">NIS 36</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-sm-1 col-md-1" style="text-align: center;"></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1">
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                value="3" />
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        <div class="vertical 12 d-none d-lg-block"></div>

                        <div class="col-sm-6">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                <img class="media-object img-fluid" src="assets/img/mac.png" />
                                                <div class="media-body-cart">
                                                    <h4 class="media-heading">Product name</h4>
                                                    <p class="media-about">NIS 36</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-sm-1 col-md-1" style="text-align: center;"></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1">
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                value="3" />
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                        <!-- second side col 6 start -->

                        <!-- colomn end -->
                    </div>



                    <!-- summary-button -->
                </div>
                <!-- Content for Beers tab end -->

                <!-- Content for Vodka tab -->
                <div class="tab-pane fade" id="vodka" role="tabpanel" aria-labelledby="profile-tab">

                    <!-- heading start -->
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="tabs-des">Vodka</h4>
                        </div>
                    </div>

                    <!-- heading end -->
                    <!-- row start -->
                    <div class="row mt-3">

                        <!-- col-6 start -->
                        <div class="col-sm-6">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                <img class="media-object img-fluid" src="assets/img/Corona.png" />
                                                <div class="media-body-cart">
                                                    <h4 class="media-heading">Corona Bottle</h4>
                                                    <p class="media-about">NIS 36</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-sm-1 col-md-1" style="text-align: center;"></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1">
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                value="3" />
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        <div class="vertical 12 d-none d-lg-block"></div>


                        <div class="col-sm-6">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                <img class="media-object img-fluid" src="assets/img/big.png" />
                                                <div class="media-body-cart">
                                                    <h4 class="media-heading">Product name</h4>
                                                    <p class="media-about">NIS 36</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-sm-1 col-md-1" style="text-align: center;"></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1">
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                value="3" />
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                        <!-- col-6-second start -->
                    </div>
                    <!-- row-end -->


                    <!-- Center the column -->

                    <!-- Center the button -->



                    <!-- summary-button -->
                </div>
                <!-- Content for Vodka tab end -->

                <!-- Content for Whiskey tab -->
                <div class="tab-pane fade" id="Whiskey" role="tabpanel" aria-labelledby="profile-tab">

                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="tabs-des">Whiskey</h4>
                        </div>
                    </div>

                    <!-- cart start -->
                    <div class="row mt-3">
                        <!-- first side col 6 start -->
                        <div class="col-sm-6">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                <img class="media-object img-fluid" src="assets/img/sol.png" />
                                                <div class="media-body-cart">
                                                    <h4 class="media-heading">Corona Bottle</h4>
                                                    <p class="media-about">NIS 36</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-sm-1 col-md-1" style="text-align: center;"></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1">
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                value="3" />
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        <div class="vertical 12 d-none d-lg-block"></div>

                        <div class="col-sm-6">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                <img class="media-object img-fluid" src="assets/img/mac.png" />
                                                <div class="media-body-cart">
                                                    <h4 class="media-heading">Product name</h4>
                                                    <p class="media-about">NIS 36</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-sm-1 col-md-1" style="text-align: center;"></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1">
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                value="3" />
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <!-- second side col 6 start -->

                        <!-- colomn end -->
                    </div>
                    <!-- heading start -->

                    <!-- row-end -->
                    <div class="container">
                        <div class="row justify-content-center">
                            <!-- Center the column -->

                            <!-- Center the button -->


                        </div>
                    </div>
                    <!-- summary-button -->
                </div>
                <!-- Content for Whiskey tab  end-->

                <!-- Content for Gin tab -->
                <div class="tab-pane fade" id="Gin" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="tabs-des">BEERS</h4>
                        </div>
                    </div>

                    <!-- cart start -->
                    <div class="row mt-3">
                        <!-- first side col 6 start -->
                        <div class="col-sm-6">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                <img class="media-object img-fluid" src="assets/img/sol.png" />
                                                <div class="media-body-cart">
                                                    <h4 class="media-heading">Corona Bottle</h4>
                                                    <p class="media-about">NIS 36</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-sm-1 col-md-1" style="text-align: center;"></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1">
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                value="3" />
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        <div class="vertical 12 d-none d-lg-block"></div>

                        <div class="col-sm-6">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                <img class="media-object img-fluid" src="assets/img/mac.png" />
                                                <div class="media-body-cart">
                                                    <h4 class="media-heading">Product name</h4>
                                                    <p class="media-about">NIS 36</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-sm-1 col-md-1" style="text-align: center;"></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1">
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                value="3" />
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                        <!-- second side col 6 start -->

                        <!-- colomn end -->
                    </div>

                    <!-- row-end -->
                    <div class="container">
                        <div class="row justify-content-center">
                            <!-- Center the column -->
                            <div class="col-sm-12 text-center">
                                <!-- Center the button -->

                            </div>
                        </div>
                    </div>
                    <!-- summary-button -->
                </div>
                <!-- Content for Gin tab  end-->

                <!-- Content for Tequila tab -->
                <div class="tab-pane fade" id="Tequila" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="tabs-des">Tequila</h4>
                        </div>
                    </div>

                    <!-- cart start -->
                    <div class="row mt-3">
                        <!-- first side col 6 start -->
                        <div class="col-sm-6">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                <img class="media-object img-fluid" src="assets/img/sol.png" />
                                                <div class="media-body-cart">
                                                    <h4 class="media-heading">Corona Bottle</h4>
                                                    <p class="media-about">NIS 36</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-sm-1 col-md-1" style="text-align: center;"></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1">
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                value="3" />
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        <div class="vertical 12 d-none d-lg-block"></div>

                        <div class="col-sm-6">
                            <table class="table">
                                <tbody>

                                    <tr>
                                        <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                <img class="media-object img-fluid" src="assets/img/big.png" />
                                                <div class="media-body-cart">
                                                    <h4 class="media-heading">Product name</h4>
                                                    <p class="media-about">NIS 36</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-sm-1 col-md-1" style="text-align: center;"></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1">
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                value="3" />
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- second side col 6 start -->

                        <!-- colomn end -->
                    </div>

                    <!-- row-end -->
                    <div class="container">
                        <div class="row justify-content-center">
                            <!-- Center the column -->
                            <div class="col-sm-12 text-center">
                                <!-- Center the button -->

                            </div>
                        </div>
                    </div>
                    <!-- summary-button -->
                </div>
                <!-- Content for Tequila tab end -->

                <!-- Content for Anise tab -->
                <div class="tab-pane fade" id="Anise" role="tabpanel" aria-labelledby="profile-tab">

                    <!-- heading start -->
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="tabs-des">Anise</h4>
                        </div>
                    </div>

                    <!-- heading end -->
                    <!-- row start -->
                    <div class="row mt-3">

                        <!-- col-6 start -->
                        <div class="col-sm-6">
                            <table class="table">
                                <tbody>

                                    <tr>
                                        <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                <img class="media-object img-fluid" src="assets/img/sol.png" />
                                                <div class="media-body-cart">
                                                    <h4 class="media-heading">Corona Bottle</h4>
                                                    <p class="media-about">NIS 36</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-sm-1 col-md-1" style="text-align: center;"></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1">
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                value="3" />
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="vertical 12 d-none d-lg-block"></div>


                        <div class="col-sm-6">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                <img class="media-object img-fluid" src="assets/img/big.png" />
                                                <div class="media-body-cart">
                                                    <h4 class="media-heading">Product name</h4>
                                                    <p class="media-about">NIS 36</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-sm-1 col-md-1" style="text-align: center;"></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1">
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                value="3" />
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                        <!-- col-6-second start -->
                    </div>
                    <!-- row-end -->
                    <div class="container">
                        <div class="row justify-content-center">
                            <!-- Center the column -->
                            <div class="col-sm-12 text-center">
                                <!-- Center the button -->

                            </div>
                        </div>
                    </div>
                    <!-- summary-button -->
                </div>

                <!-- Content for Anise tab  end-->

                <!-- Content for Rum tab -->
                <div class="tab-pane fade" id="Rum" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="tabs-des">Rum</h4>
                        </div>
                    </div>

                    <!-- cart start -->
                    <div class="row mt-3">
                        <!-- first side col 6 start -->
                        <div class="col-sm-6">
                            <table class="table">
                                <tbody>

                                    <tr>
                                        <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                <img class="media-object img-fluid" src="assets/img/big.png" />
                                                <div class="media-body-cart">
                                                    <h4 class="media-heading">Corona Bottle</h4>
                                                    <p class="media-about">NIS 36</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-sm-1 col-md-1" style="text-align: center;"></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1">
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                value="3" />
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="vertical 12 d-none d-lg-block"></div>

                        <div class="col-sm-6">
                            <table class="table">
                                <tbody>

                                    <tr>
                                        <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                <img class="media-object img-fluid" src="assets/img/big.png" />
                                                <div class="media-body-cart">
                                                    <h4 class="media-heading">Product name</h4>
                                                    <p class="media-about">NIS 36</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-sm-1 col-md-1" style="text-align: center;"></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1">
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                value="3" />
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- second side col 6 start -->

                        <!-- colomn end -->
                    </div>

                    <!-- row-end -->
                    <div class="container">
                        <div class="row justify-content-center">
                            <!-- Center the column -->
                            <div class="col-sm-12 text-center">
                                <!-- Center the button -->

                            </div>
                        </div>
                    </div>
                    <!-- summary-button -->
                </div>
                <!-- Content for Rum tab  end-->

                <!-- Content for Aperitif tab -->
                <div class="tab-pane fade" id="Aperitif" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="tabs-des">Aperitif</h4>
                        </div>
                    </div>

                    <!-- cart start -->
                    <div class="row mt-3">
                        <!-- first side col 6 start -->
                        <div class="col-sm-6">
                            <table class="table">
                                <tbody>

                                    <tr>
                                        <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                <img class="media-object img-fluid" src="assets/img/big.png" />
                                                <div class="media-body-cart">
                                                    <h4 class="media-heading">Corona Bottle</h4>
                                                    <p class="media-about">NIS 36</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-sm-1 col-md-1" style="text-align: center;"></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1">
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                value="3" />
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="vertical 12 d-none d-lg-block"></div>

                        <div class="col-sm-6">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                <img class="media-object img-fluid" src="assets/img/mac.png" />
                                                <div class="media-body-cart">
                                                    <h4 class="media-heading">Product name</h4>
                                                    <p class="media-about">NIS 36</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-sm-1 col-md-1" style="text-align: center;"></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1">
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                value="3" />
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                        <!-- second side col 6 start -->

                        <!-- colomn end -->
                    </div>

                    <!-- row-end -->

                    <!-- summary-button -->
                </div>
                <!-- Content for Aperitif tab end-->

                <!-- Content for Dejstif tab -->
                <div class="tab-pane fade" id="Dejstif" role="tabpanel" aria-labelledby="contact-tab">

                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="tabs-des">Dejstif</h4>
                        </div>
                    </div>

                    <!-- cart start -->
                    <div class="row mt-3">
                        <!-- first side col 6 start -->
                        <div class="col-sm-6">
                            <table class="table">
                                <tbody>

                                    <tr>
                                        <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                <img class="media-object img-fluid" src="assets/img/mac.png" />
                                                <div class="media-body-cart">
                                                    <h4 class="media-heading">Corona Bottle</h4>
                                                    <p class="media-about">NIS 36</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-sm-1 col-md-1" style="text-align: center;"></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1">
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                value="3" />
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        <div class="vertical 12 d-none d-lg-block"></div>

                        <div class="col-sm-6">
                            <table class="table">
                                <tbody>


                                    <tr>
                                        <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                <img class="media-object img-fluid" src="assets/img/sol.png" />
                                                <div class="media-body-cart">
                                                    <h4 class="media-heading">Product name</h4>
                                                    <p class="media-about">NIS 36</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-sm-1 col-md-1" style="text-align: center;"></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1">
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                value="3" />
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                        <!-- second side col 6 start -->

                        <!-- colomn end -->
                    </div>
                    <!-- heading start -->


                    <!-- summary-button -->
                </div>
                <!-- Content for Dejstif tab  end-->

                <!-- Content for Liquor tab -->
                <div class="tab-pane fade" id="Liquor" role="tabpanel" aria-labelledby="contact-tab">

                    <!-- heading start -->
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="tabs-des">Liquor</h4>
                        </div>
                    </div>

                    <!-- heading end -->
                    <!-- row start -->
                    <div class="row mt-3">

                        <!-- col-6 start -->
                        <div class="col-sm-6">
                            <table class="table">
                                <tbody>

                                    <tr>
                                        <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                <img class="media-object img-fluid" src="assets/img/sol.png" />
                                                <div class="media-body-cart">
                                                    <h4 class="media-heading">Corona Bottle</h4>
                                                    <p class="media-about">NIS 36</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-sm-1 col-md-1" style="text-align: center;"></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1">
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                value="3" />
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="vertical 12 d-none d-lg-block"></div>


                        <div class="col-sm-6">
                            <table class="table">
                                <tbody>


                                    <tr>
                                        <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                <img class="media-object img-fluid" src="assets/img/sol.png" />
                                                <div class="media-body-cart">
                                                    <h4 class="media-heading">Product name</h4>
                                                    <p class="media-about">NIS 36</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-sm-1 col-md-1" style="text-align: center;"></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1">
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                value="3" />
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- col-6-second start -->
                    </div>
                    <!-- row-end -->
                    <div class="container">
                        <div class="row justify-content-center">
                            <!-- Center the column -->
                            <div class="col-sm-12 text-center">
                                <!-- Center the button -->

                            </div>
                        </div>
                    </div>
                    <!-- summary-button -->
                </div>
                <!-- Content for Liquor tab  end-->

                <!-- Content for Cognac tab -->
                <div class="tab-pane fade" id="cognac" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="tabs-des">cognac</h4>
                        </div>
                    </div>

                    <!-- cart start -->
                    <div class="row mt-3">
                        <!-- first side col 6 start -->
                        <div class="col-sm-6">
                            <table class="table">
                                <tbody>

                                    <tr>
                                        <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                <img class="media-object img-fluid" src="assets/img/big.png" />
                                                <div class="media-body-cart">
                                                    <h4 class="media-heading">Corona Bottle</h4>
                                                    <p class="media-about">NIS 36</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-sm-1 col-md-1" style="text-align: center;"></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1">
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                value="3" />
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="vertical 12 d-none d-lg-block"></div>

                        <div class="col-sm-6">
                            <table class="table">
                                <tbody>

                                    <tr>
                                        <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                <img class="media-object img-fluid" src="assets/img/big.png" />
                                                <div class="media-body-cart">
                                                    <h4 class="media-heading">Product name</h4>
                                                    <p class="media-about">NIS 36</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-sm-1 col-md-1" style="text-align: center;"></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1">
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                value="3" />
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- second side col 6 start -->

                        <!-- colomn end -->
                    </div>

                    <!-- heading start -->

                    <!-- row-end -->
                    <div class="container">
                        <div class="row justify-content-center">
                            <!-- Center the column -->
                            <div class="col-sm-12 text-center">
                                <!-- Center the button -->

                            </div>
                        </div>
                    </div>
                    <!-- summary-button -->
                </div>

                <!-- Content for Cognac tab  end-->

                <!-- Content for White wine tab -->
                <div class="tab-pane fade" id="White" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="tabs-des">White Wine</h4>
                        </div>
                    </div>

                    <!-- cart start -->
                    <div class="row mt-3">
                        <!-- first side col 6 start -->
                        <div class="col-sm-6">
                            <table class="table">
                                <tbody>

                                    <tr>
                                        <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                <img class="media-object img-fluid" src="assets/img/big.png" />
                                                <div class="media-body-cart">
                                                    <h4 class="media-heading">Corona Bottle</h4>
                                                    <p class="media-about">NIS 36</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-sm-1 col-md-1" style="text-align: center;"></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1">
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                value="3" />
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="vertical 12 d-none d-lg-block"></div>

                        <div class="col-sm-6">
                            <table class="table">
                                <tbody>



                                    <tr></tr>
                                    <td class="col-sm-8 col-md-6">
                                        <div class="media">
                                            <img class="media-object img-fluid" src="assets/img/big.png" />
                                            <div class="media-body-cart">
                                                <h4 class="media-heading">Product name</h4>
                                                <p class="media-about">NIS 36</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="col-sm-1 col-md-1" style="text-align: center;"></td>
                                    <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                    <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                    <td class="col-sm-1 col-md-1">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            value="3" />
                                    </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- second side col 6 start -->

                        <!-- colomn end -->
                    </div>
                    <!-- row-end -->



                    <div class="container">
                        <div class="row justify-content-center">
                            <!-- Center the column -->
                            <div class="col-sm-12 text-center">
                                <!-- Center the button -->

                            </div>
                        </div>
                    </div>
                    <!-- summary-button -->
                </div>
                <!-- Content for White wine tab end -->

                <!-- Content for Red wine tab -->
                <div class="tab-pane fade" id="Red" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="tabs-des">BEERS</h4>
                        </div>
                    </div>

                    <!-- cart start -->
                    <div class="row mt-3">
                        <!-- first side col 6 start -->
                        <div class="col-sm-6">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                <img class="media-object img-fluid" src="assets/img/sol.png" />
                                                <div class="media-body-cart">
                                                    <h4 class="media-heading">Corona Bottle</h4>
                                                    <p class="media-about">NIS 36</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-sm-1 col-md-1" style="text-align: center;"></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1">
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                value="3" />
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        <div class="vertical 12 d-none d-lg-block"></div>

                        <div class="col-sm-6">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                <img class="media-object img-fluid" src="assets/img/mac.png" />
                                                <div class="media-body-cart">
                                                    <h4 class="media-heading">Product name</h4>
                                                    <p class="media-about">NIS 36</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-sm-1 col-md-1" style="text-align: center;"></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1">
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                value="3" />
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                        <!-- second side col 6 start -->

                        <!-- colomn end -->
                    </div>

                    <!-- cart start -->

                    <!-- colomn end -->

                    <!-- heading start -->

                    <!-- row-end -->
                    <div class="container">
                        <div class="row justify-content-center">
                            <!-- Center the column -->
                            <div class="col-sm-12 text-center">
                                <!-- Center the button -->

                            </div>
                        </div>
                    </div>
                    <!-- summary-button -->
                </div>

                <!-- Content for Red wine tab  end-->

                <!-- Content for Sparkling tab -->
                <div class="tab-pane fade" id="Sparkling" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="tabs-des">BEERS</h4>
                        </div>
                    </div>

                    <!-- cart start -->
                    <div class="row mt-3">
                        <!-- first side col 6 start -->
                        <div class="col-sm-6">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                <img class="media-object img-fluid" src="assets/img/sol.png" />
                                                <div class="media-body-cart">
                                                    <h4 class="media-heading">Corona Bottle</h4>
                                                    <p class="media-about">NIS 36</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-sm-1 col-md-1" style="text-align: center;"></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1">
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                value="3" />
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        <div class="vertical 12 d-none d-lg-block"></div>

                        <div class="col-sm-6">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                <img class="media-object img-fluid" src="assets/img/mac.png" />
                                                <div class="media-body-cart">
                                                    <h4 class="media-heading">Product name</h4>
                                                    <p class="media-about">NIS 36</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-sm-1 col-md-1" style="text-align: center;"></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1">
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                value="3" />
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                        <!-- second side col 6 start -->

                        <!-- colomn end -->
                    </div>

                    <!-- second side col 6 start -->

                    <!-- colomn end -->

                    <!-- heading start -->



                    <!-- summary-button -->
                </div>
                <!-- Content for Sparkling tab  end-->

                <!-- Content for Rosé wine tab -->
                <div class="tab-pane fade" id="Rosé" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="tabs-des">BEERS</h4>
                        </div>
                    </div>

                    <!-- cart start -->
                    <div class="row mt-3">
                        <!-- first side col 6 start -->
                        <div class="col-sm-6">
                            <table class="table">
                                <tbody>

                                    <tr>
                                        <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                <img class="media-object img-fluid" src="assets/img/big.png" />
                                                <div class="media-body-cart">
                                                    <h4 class="media-heading">Corona Bottle</h4>
                                                    <p class="media-about">NIS 36</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-sm-1 col-md-1" style="text-align: center;"></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1">
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                value="3" />
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="vertical 12 d-none d-lg-block"></div>

                        <div class="col-sm-6">
                            <table class="table">
                                <tbody>

                                    <tr>
                                        <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                <img class="media-object img-fluid" src="assets/img/big.png" />
                                                <div class="media-body-cart">
                                                    <h4 class="media-heading">Product name</h4>
                                                    <p class="media-about">NIS 36</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-sm-1 col-md-1" style="text-align: center;"></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1">
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                value="3" />
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- second side col 6 start -->

                        <!-- colomn end -->
                    </div>

                    <!-- row-end -->

                    <!-- summary-button -->
                </div>
                <!-- Content for Rosé wine tab end-->

                <!-- Content for Cocktails tab -->
                <div class="tab-pane fade" id="Cocktails" role="tabpanel" aria-labelledby="contact-tab">

                    <!-- colomn end -->

                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="tabs-des">Whiskey</h4>
                        </div>
                    </div>

                    <!-- cart start -->
                    <div class="row mt-3">
                        <!-- first side col 6 start -->
                        <div class="col-sm-6">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                <img class="media-object img-fluid" src="assets/img/sol.png" />
                                                <div class="media-body-cart">
                                                    <h4 class="media-heading">Corona Bottle</h4>
                                                    <p class="media-about">NIS 36</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-sm-1 col-md-1" style="text-align: center;"></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1">
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                value="3" />
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        <div class="vertical 12 d-none d-lg-block"></div>

                        <div class="col-sm-6">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                <img class="media-object img-fluid" src="assets/img/mac.png" />
                                                <div class="media-body-cart">
                                                    <h4 class="media-heading">Product name</h4>
                                                    <p class="media-about">NIS 36</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-sm-1 col-md-1" style="text-align: center;"></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1">
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                value="3" />
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <!-- second side col 6 start -->

                        <!-- colomn end -->
                    </div>
                    <!-- heading start -->


                    <!-- Content for Cocktails tab end -->
                </div>



            </div>

    </section>
    <!-- tabs-end -->




    <!-- order-summary-button -->
    <div class="row summary-section">
        <div class="col-sm-12">
            <a href="#" class="btn btn-primary summary-btn"> <span><img src="assets/img/shopping.png"
                        alt=""></span> Order Summary</a>
        </div>
    </div>

    <!-- order-summary-button-end -->
@endsection
@section('script')
@endsection
