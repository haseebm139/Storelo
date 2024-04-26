@php
    $lang = session()->get('locale');

@endphp
@if (isset($data['categories']))
    @foreach ($data['categories'] as $key => $item)
        @php
            if ($lang == 'he') {
                $cc_name = $item->name_in_he;
            } else {
                $cc_name = \Str::upper($item->name);
            }
        @endphp
        <div class="row">
            <div class="col-sm-12">
                <h4 class="tabs-des">{{ $cc_name }}</h4>
            </div>
        </div>
        @if ($lang == 'en')
            <div class="row mt-3">
                @foreach ($item->products as $key1 => $value)
                    @php
                        $img = $value->image ?? 'default.png';
                        $isEven = $key1 % 2 == 0;
                    @endphp
                    @if ($isEven)
                        <div class="col-sm-6">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                @if (Str::startsWith($img, ['http', 'https']))
                                                    <img class="media-object img-fluid" src="{{ asset($img) }}" />
                                                @else
                                                    <img class="media-object img-fluid" src="{{ asset($img) }}" />
                                                @endif

                                                <div class="media-body-cart">
                                                    <h4 class="media-heading">{{ $value->name }}</h4>
                                                    <p class="media-about">NIS {{ $value->price }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-sm-1 col-md-1" style="text-align: center;"></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1">
                                            <div class="row">
                                                <div class="col buttons">
                                                    <div class="input-group cart-div"
                                                        data-product-id="{{ $value->id }}">
                                                        <button data-mdb-button-init data-mdb-ripple-init
                                                            class="btn btn-link px-2 decrease_btn"
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                            <i class="fas fa-minus"></i>
                                                        </button>
                                                        <input min="0" name="quantity"
                                                            value="{{ getValue($value->id) }}" class="qty-input"
                                                            type="number" class="form-control form-control-sm"
                                                            style="width: 60px;" />
                                                        <button data-mdb-button-init data-mdb-ripple-init
                                                            class="btn btn-link px-2 increase_btn"
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                            <i class="fas fa-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="col-sm-6 border-left">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                @if (Str::startsWith($img, ['http', 'https']))
                                                    <img class="media-object img-fluid" src="{{ asset($img) }}" />
                                                @else
                                                    <img class="media-object img-fluid" src="{{ asset($img) }}" />
                                                @endif
                                                <div class="media-body-cart">
                                                    <h4 class="media-heading">{{ $value->name }}</h4>
                                                    <p class="media-about">NIS {{ $value->price }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-sm-1 col-md-1" style="text-align: center;"></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1">
                                            <div class="row">
                                                <div class="col buttons">
                                                    <div class="input-group cart-div"
                                                        data-product-id="{{ $value->id }}">
                                                        <button data-mdb-button-init data-mdb-ripple-init
                                                            class="btn btn-link px-2 decrease_btn"
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                            <i class="fas fa-minus"></i>
                                                        </button>
                                                        <input min="0" name="quantity"
                                                            value="{{ getValue($value->id) }}" class="qty-input"
                                                            type="number" class="form-control form-control-sm"
                                                            style="width: 60px;" />
                                                        <button data-mdb-button-init data-mdb-ripple-init
                                                            class="btn btn-link px-2 increase_btn"
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                            <i class="fas fa-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    @endif
                @endforeach

            </div>
        @endif

        @if ($lang == 'he')
            <div class="row mt-3">
                @foreach ($item->products as $key1 => $value)
                    @php
                        $img = $value->image ?? 'default.png';
                        $isEven = $key1 % 2 == 0;
                    @endphp
                    @if ($isEven)
                        <div class="col-sm-6">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="col-sm-1 col-md-1">
                                            <div class="row">
                                                <div class="col buttons">
                                                    <div class="input-group cart-div"
                                                        data-product-id="{{ $value->id }}">
                                                        <button data-mdb-button-init data-mdb-ripple-init
                                                            class="btn btn-link px-2 increase_btn"
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                            <i class="fas fa-plus"></i>
                                                        </button>
                                                        <input min="0" name="quantity"
                                                            value="{{ getValue($value->id) }}" class="qty-input rtl"
                                                            type="number" class="form-control form-control-sm"
                                                            style="width: 60px;" />

                                                        <button data-mdb-button-init data-mdb-ripple-init
                                                            class="btn btn-link px-2 decrease_btn"
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                            <i class="fas fa-minus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-sm-1 col-md-1" style="text-align: center;"></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>

                                        <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                <div class="media-body-cart mr-3">
                                                    <h4 class="media-heading  ">{{ $value->name_in_he }}</h4>
                                                    <p class="media-about  ">NIS {{ $value->price }}</p>
                                                </div>
                                                @if (Str::startsWith($img, ['http', 'https']))
                                                    <img class="media-object img-fluid" src="{{ asset($img) }}" />
                                                @else
                                                    <img class="media-object img-fluid" src="{{ asset($img) }}" />
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="col-sm-6 border-left">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="col-sm-1 col-md-1">
                                            <div class="row">
                                                <div class="col buttons">
                                                    <div class="input-group cart-div"
                                                        data-product-id="{{ $value->id }}">
                                                        <button data-mdb-button-init data-mdb-ripple-init
                                                            class="btn btn-link px-2 increase_btn"
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                            <i class="fas fa-plus"></i>
                                                        </button>
                                                        <input min="0" name="quantity"
                                                            value="{{ getValue($value->id) }}" class="qty-input rtl"
                                                            type="number" class="form-control form-control-sm"
                                                            style="width: 60px;" />
                                                        <button data-mdb-button-init data-mdb-ripple-init
                                                            class="btn btn-link px-2 decrease_btn"
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                            <i class="fas fa-minus"></i>
                                                        </button>

                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-sm-1 col-md-1" style="text-align: center;"></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>

                                        <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                <div class="media-body-cart">
                                                    <h4 class="media-heading ">{{ $value->name_in_he }}</h4>
                                                    <p class="media-about">NIS {{ $value->price }}</p>
                                                </div>
                                                @if (Str::startsWith($img, ['http', 'https']))
                                                    <img class="media-object img-fluid" src="{{ asset($img) }}" />
                                                @else
                                                    <img class="media-object img-fluid" src="{{ asset($img) }}" />
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    @endif
                @endforeach

            </div>
        @endif
    @endforeach
@endif
<input type="hidden" id="currentPage" value="{{ $page }}">
