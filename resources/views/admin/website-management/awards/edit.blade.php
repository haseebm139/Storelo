<!-- resources/views/audios/edit.blade.php -->
<x-default-layout>

    @section('title')
        Edit Award
    @endsection
    <style>
        .img-fluid {
            max-width: 50% !important;

        }
    </style>
    <div id="kt_app_content" class="app-content flex-column-fluid">

        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">

            <!--begin::Card-->
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2 class="fw-bold">Edit Website</h2>
                    </div>
                </div>
                <!--end::Card header-->

                <!--begin::Content-->
                <div class="card-body py-4 mx-20">
                    <!--begin::Form-->
                    <form action="{{ route('website-management.website.update', $data->id ?? '') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')


                        @php
                            $img = $data->logo ?? 'default.png';
                        @endphp
                        <style>
                            .image-input-placeholder {
                                background-image: url('{{ asset($img) }}');
                            }
                        </style>
                        <!--end::Image input placeholder-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2" name="logo">Website Logo</label>
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
                                <input type="file" name="logo" accept=".png, .jpg, .jpeg" />
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
                            <label class="required fw-semibold fs-6 mb-2" name="working_hours">Working Hour In
                                English</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <input type="text" name="working_hours"
                                class="form-control form-control-solid mb-3 mb-lg-0"
                                placeholder="Enter >Working Hour In English" value="{{ $data->working_hours ?? '' }}" />
                            <!--end::Input-->
                        </div>

                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2" name="working_hours_in_hebrew">Working Hour In
                                Hebrew</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <input type="text" name="working_hours_in_hebrew"
                                class="form-control form-control-solid mb-3 mb-lg-0"
                                placeholder="Enter Working Hour In English"
                                value="{{ $data->working_hours_in_hebrew ?? '' }}" />
                            <!--end::Input-->
                        </div>

                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2" name="address">Address In
                                English</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <input type="text" name="address" class="form-control form-control-solid mb-3 mb-lg-0"
                                placeholder="Enter Address In English" value="{{ $data->address ?? '' }}" />
                            <!--end::Input-->
                        </div>

                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2" name="address_in_hebrew">Address In
                                Hebrew</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <input type="text" name="address_in_hebrew"
                                class="form-control form-control-solid mb-3 mb-lg-0"
                                placeholder="Enter Address In Hebrew" value="{{ $data->address_in_hebrew ?? '' }}" />
                            <!--end::Input-->
                        </div>


                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2" name="email">Email</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <input type="email" name="email" class="form-control form-control-solid mb-3 mb-lg-0"
                                placeholder="Enter Email" value="{{ $data->email ?? '' }}" />
                            <!--end::Input-->
                        </div>

                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2" name="contact">Contact</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <input type="text" name="contact" class="form-control form-control-solid mb-3 mb-lg-0"
                                placeholder="Enter Contact" value="{{ $data->contact ?? '' }}" />
                            <!--end::Input-->
                        </div>

                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2" name="website_url">Website Url</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <input type="text" name="website_url"
                                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Enter Website Url"
                                value="{{ $data->website_url ?? '' }}" />
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
