<!-- resources/views/audios/edit.blade.php -->

<x-default-layout>

    @section('title')
        Edit Menu
    @endsection
    <style>
        .img-fluid {
            max-width: 50% !important;

        }
    </style>

    @section('breadcrumbs')
        {{ Breadcrumbs::render('product-management.category.show', $data) }}
    @endsection

    {{-- @dd($data) --}}
    <div id="kt_app_content" class="app-content flex-column-fluid">

        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">

            <!--begin::Card-->
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2 class="fw-bold">Edit Category</h2>
                    </div>
                </div>
                <!--end::Card header-->

                <!--begin::Content-->
                <div class="card-body py-4 mx-20">
                    <!--begin::Form-->
                    <form action="{{ route('product-management.category.update', $data->id ?? '') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

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
                                    <option value="{{ $item->id }}"
                                        @if ($item->id == $data->menu_id) @selected(true) @endif>
                                        {{ $item->name }}</option>
                                @endforeach
                            </select>
                            <!--end::Input-->
                        </div>
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2" name="name">Category
                                Name In English</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <input type="text" name="name" class="form-control form-control-solid mb-3 mb-lg-0"
                                placeholder="Enter Category Name In English" value="{{ $data->name ?? '' }}" />
                            <!--end::Input-->
                        </div>

                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2" name="name_in_he">Category
                                Name In Hebrew</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <input type="text" name="name_in_he" class="form-control form-control-solid mb-3 mb-lg-0"
                                placeholder="Enter Category In Hebrew" value="{{ $data->name_in_he ?? '' }}" />
                            <!--end::Input-->
                        </div>



                        <!--begin::Image input placeholder-->




                        <!--begin::Actions-->
                        <div class="text-center pt-10 mb-5">
                            <button type="submit" class="btn btn-primary">
                                <span class="indicator-label">Update</span>
                                <span class="indicator-progress">
                                    Please wait... <span
                                        class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
</x-default-layout>
