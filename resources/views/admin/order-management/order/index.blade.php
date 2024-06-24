<x-default-layout>
    @section('title')
        Orders
    @endsection
    @section('breadcrumbs')
        {{ Breadcrumbs::render('order-management.order.index') }}
    @endsection

    <div id="kt_app_content" class="app-content  flex-column-fluid ">

        <div class="card">
            <!--begin::Card header-->
            <div class="card-header border-0 pt-6">
                <!--begin::Card title-->
                <div class="card-title">
                    <!--begin::Search-->
                    <div class="d-flex align-items-center position-relative my-1">
                        {{-- <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
                            <span class="path1"></span><span class="path2"></span>
                        </i> --}}
                        {{-- <input type="text" id="userSearchInput" class="form-control form-control-solid w-250px ps-13"
                            placeholder="Search Here" /> --}}
                    </div>
                    <!--end::Search-->
                </div>


                <!--begin::Separator-->
                <div class="separator border-gray-200"></div>
                <!--end::Separator-->

                <!--begin::Content-->

                <div class="px-7 py-5" data-kt-user-table-filter="form">


                </div>

                <!--end::Toolbar-->

                <!--begin::Group actions-->
                <div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
                    <div class="fw-bold me-5">
                        <span class="me-2" data-kt-user-table-select="selected_count"></span> Selected
                    </div>

                    <button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">
                        Delete Selected
                    </button>
                </div>
                <!--end::Group actions-->



                <!--begin::Modal - Add task-->
                <div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Modal header-->
                            <div class="modal-header" id="kt_modal_add_user_header">
                                <!--begin::Modal title-->
                                <h2 class="fw-bold">Add Menu</h2>
                                <!--end::Modal title-->

                                <!--begin::Close-->
                                <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                    data-kt-users-modal-action="close" data-bs-dismiss="modal" aria-label="Close">
                                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                            class="path2"></span></i>
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--end::Modal header-->

                            <form id="kt_modal_add_user_form" class="form"
                                action="{{ route('website-management.events.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <!--begin::Modal body-->
                                <div class="modal-body px-5 my-7">
                                    <!--begin::Form-->

                                    <!--begin::Scroll-->
                                    <div class="d-flex flex-column scroll-y px-5 px-lg-10" id="kt_modal_add_user_scroll"
                                        data-kt-scroll="true" data-kt-scroll-activate="true"
                                        data-kt-scroll-max-height="auto"
                                        data-kt-scroll-dependencies="#kt_modal_add_user_header"
                                        data-kt-scroll-wrappers="#kt_modal_add_user_scroll"
                                        data-kt-scroll-offset="300px">

                                        @php
                                            $img = 'default.png';
                                        @endphp
                                        <style>
                                            .image-input-placeholder {
                                                background-image: url('{{ asset($img) }}');
                                            }
                                        </style>
                                        <!--end::Image input placeholder-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="required fw-semibold fs-6 mb-2" name="name">Event
                                                Image</label>
                                            <!--end::Label-->
                                        </div>
                                        <div class="fv-row">
                                            <!--begin::Image input-->
                                            <div class="image-input image-input-placeholder  image-input-empty mb-7"
                                                data-kt-image-input="true">
                                                <!--begin::Image preview wrapper-->
                                                <div class="image-input-wrapper w-125px h-125px"></div>
                                                <!--end::Image preview wrapper-->

                                                <!--begin::Edit button-->
                                                <label
                                                    class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                    data-bs-dismiss="click" title="Change avatar">
                                                    <i class="ki-duotone ki-pencil fs-6"><span
                                                            class="path1"></span><span class="path2"></span></i>

                                                    <!--begin::Inputs-->
                                                    <input type="file" name="image" accept=".png, .jpg, .jpeg" />
                                                    <input type="hidden" name="avatar_remove" />
                                                    <!--end::Inputs-->
                                                </label>
                                                <!--end::Edit button-->

                                                <!--begin::Cancel button-->
                                                <span
                                                    class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                    data-bs-dismiss="click" title="Cancel avatar">
                                                    <i class="ki-outline ki-cross fs-3"></i>
                                                </span>
                                                <!--end::Cancel button-->

                                                <!--begin::Remove button-->
                                                <span
                                                    class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                    data-bs-dismiss="click" title="Remove avatar">
                                                    <i class="ki-outline ki-cross fs-3"></i>
                                                </span>
                                                <!--end::Remove button-->
                                            </div>
                                            <!--end::Image input-->

                                        </div>
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="required fw-semibold fs-6 mb-2" name="name">Title</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <input type="text" name="title"
                                                class="form-control form-control-solid mb-3 mb-lg-0"
                                                placeholder="Enter Title" />
                                            <!--end::Input-->
                                        </div>










                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Scroll-->

                                <!--begin::Actions-->
                                <div class="text-center pt-10 mb-5">
                                    <button type="submit" class="btn btn-primary">
                                        <span class="indicator-label">
                                            Add
                                        </span>

                                    </button>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal - Add task-->
            <div class="card-body py-4 mx-20">

                <!--begin::Table-->
                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                    <thead>
                        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">


                            <th class="min-w-125px">Order Number</th>
                            <th class="min-w-125px">Customer Name</th>
                            <th class="min-w-125px">Table No</th>
                            <th class="min-w-125px">Amount</th>
                            {{-- <th class="min-w-125px">Status</th> --}}
                            <th class="text-end min-w-70px">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 fw-semibold">
                        @isset($data)

                            @foreach ($data as $item)
                                <tr>

                                    <td>{{ $item->order_no ?? '' }}</td>
                                    <td>{!! $item->name ?? '' !!}</td>
                                    <td>{!! $item->table_no ?? '' !!}</td>
                                    <td>{!! $item->amount ?? '' !!}</td>

                                    {{-- <td>
                                        <div class="form-group">
                                            <div
                                                class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                                <input type="checkbox" class="custom-control-input switch-input"
                                                    id="{{ $item->id }}" {{ $item->status == 1 ? 'checked' : '' }}>
                                                <label class="custom-control-label" for="{{ $item->id }}"></label>
                                            </div>
                                        </div>
                                    </td> --}}

                                    <td class="text-end">
                                        <button class="btn btn-hover-danger btn-icon show-invoice"
                                            data-order-id={{ $item->id ?? '' }}>
                                            <span class="menu-icon">{!! getIcon('eye', 'fs-2tx') !!}</span>
                                        </button>


                                    </td>

                                </tr>
                            @endforeach
                        @endisset


                    </tbody>


                </table>
                <!--end::Table-->
                {!! $data->links() !!}
            </div>
        </div>
        <div class="modal fade" id="orderSummaryModal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" style="background: url({{ asset('web_assets/img/bg.png') }});"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="modal-body">
                        <div class="modal-body">

                            <div class="container">
                                <div class="row table-background ">
                                    <div class="col-md-12" id="print-invoice">
                                        <div class="panel panel-default">

                                            <div class="panel-body">
                                                <div class="">
                                                    <table class="table" id=" ">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h1 style="font-family:cursive;" class="mb-2">
                                                                    INVOICE</h1>
                                                                <p style="font-family:cursive;">
                                                                    <span>Order Id:</span>&nbsp;&nbsp;<span
                                                                        style="font-weight: 900"
                                                                        id="order_number">#34343232</span>
                                                                </p>
                                                                <p style="font-family:cursive;">
                                                                    <span>Name:</span>&nbsp;&nbsp;<span
                                                                        style="font-weight: 900"
                                                                        id="name">John</span>
                                                                </p>
                                                                <p style="font-family:cursive;">
                                                                    <span>Table No:</span>&nbsp;&nbsp;<span
                                                                        style="font-weight: 900"
                                                                        id="table_no">03</span>
                                                                </p>
                                                            </div>
                                                            <div class="col-6">
                                                                <p style="font-family:cursive;">
                                                                    <span>Table No:</span>&nbsp;&nbsp;<span
                                                                        style="font-weight: 900"
                                                                        id="table_no">03</span>
                                                                </p>
                                                            </div>

                                                        </div>


                                                        <br>

                                                        {{-- <h6 style="font-family:cursive;">Name: MR.JOHN <span
                                                            style="margin-left:33px;"> Phone:+123 456 789</span></h6> --}}


                                                        <thead>
                                                            <tr class="border-b">
                                                                <th class="text-center table-font ">S.No</strong></th>
                                                                <th class="text-left table-font">Item(S)</th>
                                                                <th class="text-center table-font">Quantity</th>
                                                                <th class="table-font text-center">Price</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="table-data">

                                                            <tr>
                                                                <td class="text-left"> <Strong>Total</Strong></td>
                                                                <td class="text-center"></td>
                                                                <td class="text-center"><Strong
                                                                        id="qty">12<Strong></td>
                                                                <td><Strong id="total-amount">423</Strong></td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>







                    </div>
                </div>

            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script>
            $(document).ready(function() {


                // Function to filter the table based on the search input
                function filterTable() {
                    var searchText = $('#userSearchInput').val().toLowerCase();

                    $('#kt_table_users tbody tr').each(function() {
                        var titleText = $(this).find('td:eq(2)').text().toLowerCase();

                        if (titleText.includes(searchText)) {
                            $(this).show();
                        } else {
                            $(this).hide();
                        }
                    });
                }

                // Trigger the filter function when the search input changes
                $('#userSearchInput').on('input', function() {
                    filterTable();
                });
                $(".switch-input").change(function() {

                    if (this.checked)
                        var status = 1;
                    else
                        var status = 0;
                    $.ajax({
                        url: "{{ route('website-management.events.change.status') }}",
                        type: 'GET',
                        /*dataType: 'json',*/
                        data: {
                            'id': this.id,
                            'status': status
                        },
                        success: function(response) {
                            if (response) {
                                toastr.success(response.message);
                            } else {
                                toastr.error(response.message);
                            }
                        },
                        error: function(error) {
                            toastr.error("Some error occured!");
                        }
                    });
                });
            });

            $(".show-invoice").click(function(e) {
                var id = $(this).attr('data-order-id');
                if (id > 0 && id != null && id != undefined) {
                    $.ajax({
                        type: "GET",
                        url: "{{ route('order-management.get.order.details') }}",
                        data: {
                            id: id
                        },
                        success: function(response) {
                            $('.list-data').remove();
                            let html = ``
                            let no = 0
                            if (response.type == 'success') {

                                var items = response.data.items
                                var qty = items.length;
                                $('#order_number').text(response.data.order_no);
                                $('#name').text(response.data.name);
                                $('#total-amount').text(response.data.amount);
                                $('#qty').text(qty);
                                $('#table_no').text(response.data.table_no);
                                items.forEach(element => {
                                    console.log(element);
                                    no++
                                    html += `<tr class="list-data">
                                                <td class="text-center">${no}</td>
                                                <td class="text-left">${element.product.name}</td>
                                                <td class="text-center">${element.qty}</td>
                                                <td class="text-center">${element.price}</td>
                                            </tr>`


                                });
                                $('#table-data').prepend(html);
                                $('#orderSummaryModal').modal('show');
                            } else {
                                toastr.error(response.message);
                            }
                        },
                        error: function(error) {
                            toastr.error("Some error occured!");
                        }
                    });
                } else {
                    alert('Fake id')
                }
                // $('.list-data').remove();


            });
        </script>

        <script>
            document.getElementById('printButton').addEventListener('click', function() {
                // Open a new window for printing
                var printWindow = window.open('', '_blank');
                printWindow.document.write('<html><head><title>Print</title></head><body>');

                // Append the table HTML content to the new window
                printWindow.document.write(document.getElementById('print-invoice').outerHTML);

                // Append a style tag to hide non-printable elements
                printWindow.document.write('<style>@media print{.noprint{display:none;}}</style>');

                // Close the body and HTML tags
                printWindow.document.write('</body></html>');

                // Call the print function on the new window
                printWindow.document.close();
                printWindow.print();
            });
        </script>
</x-default-layout>
