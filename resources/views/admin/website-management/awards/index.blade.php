<x-default-layout>
    @section('title')
        Award
    @endsection
    @section('breadcrumbs')
        {{ Breadcrumbs::render('website-management.awards.index') }}
    @endsection

    <div id="kt_app_content" class="app-content  flex-column-fluid ">

        <div class="card">
            <!--begin::Card header-->
            <div class="card-header border-0 pt-6">
                <!--begin::Card title-->
                <div class="card-title">

                </div>

                <!--begin::Separator-->
                <div class="separator border-gray-200"></div>
                <!--end::Separator-->

                <!--begin::Content-->

                <div class="px-7 py-5" data-kt-user-table-filter="form">


                </div>

                <!--end::Toolbar-->
            </div>
            <!--begin::Modal - Add task-->
            <div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header" id="kt_modal_add_user_header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bold">Add Award</h2>
                            <!--end::Modal title-->

                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close"
                                data-bs-dismiss="modal" aria-label="Close">
                                <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                        class="path2"></span></i>
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->

                        <form id="kt_modal_add_user_form" class="form"
                            action="{{ route('website-management.awards.store') }}" method="POST"
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
                                    data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">

                                    @php
                                        $img1 = 'default.png';
                                    @endphp
                                    <style>
                                        .image-input-placeholder1 {
                                            background-image: url('{{ asset($img1) }}');
                                        }
                                    </style>
                                    <!--end::Image input placeholder-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="required fw-semibold fs-6 mb-2" name="name">Event
                                            Background Image</label>
                                        <!--end::Label-->
                                    </div>
                                    <div class="fv-row">
                                        <!--begin::Image input-->
                                        <div class="image-input image-input-placeholder image-input-placeholder1  image-input-empty mb-7"
                                            data-kt-image-input="true">
                                            <!--begin::Image preview wrapper-->
                                            <div class="image-input-wrapper w-125px h-125px"></div>
                                            <!--end::Image preview wrapper-->

                                            <!--begin::Edit button-->
                                            <label
                                                class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                data-bs-dismiss="click" title="Change  ">
                                                <i class="ki-duotone ki-pencil fs-6"><span class="path1"></span><span
                                                        class="path2"></span></i>

                                                <!--begin::Inputs-->
                                                <input type="file" name="bg_image" accept=".png, .jpg, .jpeg" />
                                                <input type="hidden" name="bg_image_remove" />
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
                                                <i class="ki-duotone ki-pencil fs-6"><span class="path1"></span><span
                                                        class="path2"></span></i>

                                                <!--begin::Inputs-->
                                                <input type="file" name="image" accept=".png, .jpg, .jpeg" />
                                                <input type="hidden" name="avatar_remove1" />
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
                                        <label class="required fw-semibold fs-6 mb-2" name="price">Description
                                            In English</label>
                                        <!--end::Label-->

                                        <textarea name="description" id="editor" class="editor form-control form-control-solid mb-3 mb-lg-0"
                                            placeholder="Enter Description In English"></textarea>
                                    </div>

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="required fw-semibold fs-6 mb-2"
                                            name="description_in_he">Description In Hebrew</label>
                                        <!--end::Label-->

                                        <textarea name="description_in_he" id="editor1" class="editor form-control form-control-solid mb-3 mb-lg-0"
                                            placeholder="Enter Description In Hebrew"></textarea>
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
            <!--end::Modal - Add task-->
            <div class="card-body py-4 mx-20">

                <!--begin::Table-->
                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                    <thead>
                        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                            <th class="min-w-125px">Award Image</th>
                            <th class="min-w-125px">Award Background Image</th>
                            <th class="min-w-125px">Description In English</th>
                            <th class="min-w-125px">Description In Hebrew</th>
                            <th class="text-end min-w-70px">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 fw-semibold">
                        @isset($data)

                            @foreach ($data as $item)
                                <tr>
                                    <td><img style="height:80px; width:80px;" src="{{ $item->image }}" alt="">
                                    </td>
                                    <td><img style="height:80px; width:80px;" src="{{ $item->bg_image }}" alt="">
                                    </td>
                                    <td>{!! $item->description ?? '' !!}</td>
                                    <td>{!! $item->description_in_he ?? '' !!}</td>
                                    <td class="text-end">


                                        <form action="{{ route('website-management.awards.edit', $item->id) }}"
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

        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script></script>

</x-default-layout>
