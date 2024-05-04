<!-- resources/views/audios/edit.blade.php -->
<x-default-layout>

    @section('title')
        Edit Video
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
                        <h2 class="fw-bold">Edit Video</h2>
                    </div>
                </div>
                <!--end::Card header-->

                <!--begin::Content-->
                <div class="card-body py-4 mx-20">
                    <!--begin::Form-->
                    <form action="{{ route('website-management.video.update', $data->id ?? '') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')


                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2" name="name">Video</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <input type="file" name="path" accept="video/mp4,video/webm,video/ogg" required
                                class="form-control form-control-solid mb-3 mb-lg-0" />
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
                        @php
                            $videos = $data->path ?? 'web_assets/video/video.mp4';
                        @endphp
                        <video muted autoplay loop width="100%" height="50%" class="video-mar mt-7">
                            <source src="{{ asset($videos) }}" type="video/mp4"  />
                        </video>


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
