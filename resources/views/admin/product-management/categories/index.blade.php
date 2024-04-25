<x-default-layout>
    @section('title')
        Category
    @endsection
    @section('breadcrumbs')
        {{ Breadcrumbs::render('product-management.category.index') }}
    @endsection

    <div id="kt_app_content" class="app-content  flex-column-fluid ">

        <div class="card">
            <!--begin::Card header-->
            <div class="card-header border-0 pt-6">
                <!--begin::Card title-->
                <div class="card-title">
                    <!--begin::Search-->
                    <div class="d-flex align-items-center position-relative my-1">
                        <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
                            <span class="path1"></span><span class="path2"></span>
                        </i>
                        <input type="text" id="userSearchInput" class="form-control form-control-solid w-250px ps-13"
                            placeholder="Search Here" />
                    </div>
                    <!--end::Search-->
                </div>


                <!--begin::Separator-->
                <div class="separator border-gray-200"></div>
                <!--end::Separator-->

                <!--begin::Content-->

                <div class="px-7 py-5" data-kt-user-table-filter="form">

                    <!--begin::Add user-->
                    <button type="button" class="btn btn-hover-danger btn-icon" data-bs-toggle="modal"
                        data-bs-target="#kt_modal_add_user">

                        <span class="menu-icon">{!! getIcon('add-item', 'fs-2tx') !!}</span>

                    </button>

                    <!--end::Add user-->
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
                                action="{{ route('product-management.category.store') }}" method="POST"
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


                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="required fw-semibold fs-6 mb-2" name="menu_id">Menu
                                            </label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <select class="form-select form-select-solid form-select-sm" name="menu_id"
                                                data-control="select2">
                                                @foreach ($menu as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                            <!--end::Input-->
                                        </div>

                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="required fw-semibold fs-6 mb-2" name="name">Category
                                                Name In English</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <input type="text" name="name"
                                                class="form-control form-control-solid mb-3 mb-lg-0"
                                                placeholder="Category
                                                Name In English" />
                                            <!--end::Input-->
                                        </div>

                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="required fw-semibold fs-6 mb-2" name="name">Category
                                                Name In Hebrew</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <input type="text" name="name_in_he"
                                                class="form-control form-control-solid mb-3 mb-lg-0"
                                                placeholder="Category
                                                Name In Hebrew" />
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


                            <th class="min-w-125px">Menu Name</th>
                            <th class="min-w-125px">Category Name In English</th>
                            <th class="min-w-125px">Category Name In Hebrew</th>
                            <th class="min-w-125px">Status</th>
                            <th class="text-end min-w-70px">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 fw-semibold">
                        @isset($data)

                            @foreach ($data as $item)
                                <tr>

                                    <td>{{ $item->menu->name ?? '' }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->name_in_he }}</td>
                                    <td>
                                        <div class="form-group">
                                            <div
                                                class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                                <input type="checkbox" class="custom-control-input switch-input"
                                                    id="{{ $item->id }}" {{ $item->status == 1 ? 'checked' : '' }}>
                                                <label class="custom-control-label" for="{{ $item->id }}"></label>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="text-end">

                                        <form action="{{ route('product-management.category.destroy', $item->id) }}"
                                            method="post" style="display:inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-hover-danger btn-icon">
                                                <span class="menu-icon">{!! getIcon('trash', 'fs-2tx') !!}</span>
                                            </button>
                                        </form>

                                        <form action="{{ route('product-management.category.edit', $item->id) }}"
                                            method="get" style="display:inline">
                                            @csrf

                                            <button type="submit" class="btn btn-hover-danger btn-icon">
                                                <span class="menu-icon">{!! getIcon('notepad-edit', 'fs-2tx') !!}</span>
                                            </button>
                                        </form>

                                    </td>

                                </tr>
                            @endforeach
                        @endisset


                    </tbody>
                </table>
                <!--end::Table-->
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel">Additional Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p id="modal-description"></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script>
            $(document).ready(function() {
                function showModal(description) {
                    document.getElementById('modal-description').textContent = description;


                    $('#myModal').modal('show');
                }

                function showFullDescription(description) {
                    // Replace the content of the td with the full description
                    document.querySelector('td').innerHTML = description;
                }
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
                        url: "{{ route('product-management.category.change.status') }}",
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
        </script>

</x-default-layout>
