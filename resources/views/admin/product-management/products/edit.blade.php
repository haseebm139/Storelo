<!-- resources/views/audios/edit.blade.php -->
<x-default-layout>

    @section('title')
        Edit Product
    @endsection
    <style>
        .img-fluid {
            max-width: 50% !important;

        }
    </style>

    @section('breadcrumbs')
        {{ Breadcrumbs::render('product-management.product.show', $data) }}
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
                        <h2 class="fw-bold">Edit Product</h2>
                    </div>
                </div>
                <!--end::Card header-->

                <!--begin::Content-->
                <div class="card-body py-4 mx-20">
                    <!--begin::Form-->
                    <form action="{{ route('product-management.product.update', $data->id ?? '') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')


                        @php
                            $img = $data->image ?? 'default.png';
                        @endphp
                        <style>
                            .image-input-placeholder {
                                background-image: url('{{ asset($img) }}');
                            }
                        </style>
                        <!--end::Image input placeholder-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2" name="name">Product Image</label>
                            <!--end::Label-->
                        </div>
                        <!--begin::Image input-->
                        <div class="image-input image-input-placeholder  image-input-empty mb-7"
                            data-kt-image-input="true">
                            <!--begin::Image preview wrapper-->
                            <div class="image-input-wrapper w-125px h-125px"></div>
                            <!--end::Image preview wrapper-->

                            <!--begin::Edit button-->
                            <label
                                class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                                title="Change avatar">
                                <i class="ki-duotone ki-pencil fs-6"><span class="path1"></span><span
                                        class="path2"></span></i>

                                <!--begin::Inputs-->
                                <input type="file" name="image" accept=".png, .jpg, .jpeg" />
                                <input type="hidden" name="avatar_remove" />
                                <!--end::Inputs-->
                            </label>
                            <!--end::Edit button-->

                            <!--begin::Cancel button-->
                            <span
                                class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip" data-bs-dismiss="click"
                                title="Cancel avatar">
                                <i class="ki-outline ki-cross fs-3"></i>
                            </span>
                            <!--end::Cancel button-->

                            <!--begin::Remove button-->
                            <span
                                class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="remove" data-bs-toggle="tooltip" data-bs-dismiss="click"
                                title="Remove avatar">
                                <i class="ki-outline ki-cross fs-3"></i>
                            </span>
                            <!--end::Remove button-->
                        </div>
                        <!--end::Image input-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2" name="name">Product Name In English</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <input type="text" name="name" class="form-control form-control-solid mb-3 mb-lg-0"
                                placeholder="Enter Name In English" value="{{ $data->name ?? '' }}" />
                            <!--end::Input-->
                        </div>

                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2" name="name_in_he">Product Name In
                                Hebrew</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <input type="text" name="name_in_he" class="form-control form-control-solid mb-3 mb-lg-0"
                                placeholder="Enter Name In Hebrew" value="{{ $data->name_in_he ?? '' }}" />
                            <!--end::Input-->
                        </div>
                        <!--begin::Image input placeholder-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2" name="menu_id">Menu
                            </label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <select class="form-select form-select-solid form-select-md" name="menu_id"
                                data-control="select2">
                                @foreach ($menus as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}@if ($data->menu_id == $item->id)
                                            @selected(true)
                                        @endif
                                    </option>
                                @endforeach
                            </select>
                            <!--end::Input-->
                        </div>

                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2" name="category_id">Category
                            </label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <select class="form-select form-select-solid form-select-md" name="category_id"
                                data-control="select2">
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}"
                                        @if ($data->category_id == $item->id) @selected(true) @endif>
                                        {{ $item->name }}</option>
                                @endforeach
                            </select>
                            <!--end::Input-->
                        </div>

                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2" name="price">Product
                                Price</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <input type="number" name="price" class="form-control form-control-solid mb-3 mb-lg-0"
                                step="0.01" placeholder="Enter Product Price" value="{{ $data->price }}" />
                            <!--end::Input-->
                        </div>




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
