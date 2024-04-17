<x-default-layout>

    @section('title')
        Dashboard
    @endsection

    @section('breadcrumbs')
        {{ Breadcrumbs::render('dashboard') }}
    @endsection


    <!--begin::Row-->
    <div class="row gx-5 gx-xl-10">

        <!--begin::Col-->
        <div class="col-xl-12 mb-12 mb-xl-12">
            <!--begin::Tables widget 16-->
            <div class="card card-flush h-xl-100">
                <!--begin::Header-->
                <div class="card-header pt-5">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-gray-800">Users</span>
                        <span class="text-gray-400 mt-1 fw-semibold fs-6">Mailing List</span>
                    </h3>
                    <!--end::Title-->

                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-6">

                    <!--begin::Table container-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                            <!--begin::Table head-->
                            <thead>
                                <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                                    <th class="p-0 pb-3 min-w-150px text-start">Name</th>
                                    <th class="p-0 pb-3 min-w-100px text-start pe-13">Email</th>
                                    <th class="p-0 pb-3 w-125px text-start pe-7">Date of Birth</th>
                                </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">

                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="javascript:void(0)"
                                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">{{ $item->name ?? '' }}</a>

                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-start pe-13">
                                            <span class="text-gray-600 fw-bold fs-6">{{ $item->email ?? '' }}</span>
                                        </td>
                                        <td class="text-start pe-0">
                                            <span class="text-gray-600 fw-bold fs-6">{{ $item->d_o_b ?? '' }}</span>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Table container-->
                </div>
                <!--end: Card Body-->
            </div>
            <!--end::Tables widget 16-->

        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->


</x-default-layout>
