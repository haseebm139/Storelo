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
            <!--end::Modal - Add task-->
            <div class="card-body py-4 mx-20">

                <!--begin::Table-->
                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                    <thead>
                        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">


                            <th class="min-w-125px">Logo</th>
                            <th class="min-w-125px">Working Hour In English</th>
                            <th class="min-w-125px">Working Hour In Hebrew</th>
                            <th class="min-w-125px">Contact</th>
                            <th class="min-w-125px">Email</th>
                            <th class="min-w-125px">Website Url</th>
                            <th class="min-w-125px">Address In English</th>
                            <th class="min-w-125px">Address In Hebrew</th>

                            <th class="text-end min-w-70px">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 fw-semibold">
                        @isset($data)

                            @foreach ($data as $item)
                                <tr>
                                    <td><img style="height:80px; width:80px;" src="{{ $item->logo }}" alt="">
                                    </td>
                                    <td>{{ $item->working_hours ?? '' }}</td>
                                    <td>{{ $item->working_hours_in_hebrew ?? '' }}</td>
                                    <td>{!! $item->contact ?? '' !!}</td>
                                    <td>{!! $item->email ?? '' !!}</td>
                                    <td>{!! $item->website_url ?? '' !!}</td>
                                    <td>{!! $item->address ?? '' !!}</td>
                                    <td>{!! $item->address_in_hebrew ?? '' !!}</td>



                                    <td class="text-end">


                                        <form action="{{ route('website-management.website.edit', $item->id) }}"
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
        <script></script>

</x-default-layout>
