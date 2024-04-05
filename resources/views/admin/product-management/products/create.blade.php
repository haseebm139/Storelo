<x-default-layout>
    @section('title')
        {{ $page['name'] ?? '' }} Create
    @endsection
    @section('breadcrumbs')
        @if ($page['slug'] == 'offer-letter')
            {{ Breadcrumbs::render('labour.visa.offer-letter.create') }}
        @elseif ($page['slug'] == 'labour-insurance')
            {{ Breadcrumbs::render('labour.visa.labour-insurance.create') }}
        @elseif ($page['slug'] == 'labour-fee')
            {{ Breadcrumbs::render('labour.visa.labour-fee.create') }}
        @elseif ($page['slug'] == 'entry-permit')
            {{ Breadcrumbs::render('labour.visa.entry-permit.create') }}
        @elseif ($page['slug'] == 'change-status')
            {{ Breadcrumbs::render('labour.visa.change-status.create') }}
        @elseif ($page['slug'] == 'health-insurance')
            {{ Breadcrumbs::render('labour.visa.health-insurance.create') }}
        @elseif ($page['slug'] == 'medical-examination-typing')
            {{ Breadcrumbs::render('labour.visa.medical-examination-typing.create') }}
        @elseif ($page['slug'] == 'emirates-id-typing')
            {{ Breadcrumbs::render('labour.visa.emirates-id-typing.create') }}
        @elseif ($page['slug'] == 'stamping-visa')
            {{ Breadcrumbs::render('labour.visa.stamping-visa.create') }}
        @elseif ($page['slug'] == 'final-contract')
            {{ Breadcrumbs::render('labour.visa.final-contract.create') }}
        @else
        @endif
    @endsection
    <link href="https://cdn.jsdelivr.net/npm/formvalidation@0.6.2-dev/dist/css/formValidation.min.css" rel="stylesheet">
    <div id="kt_app_content" class="app-content  flex-column-fluid ">

        <div class="card">
            <!--begin::Card header-->
            <div class="card-header border-0 pt-6">
                <!--begin::Card title-->
                <div class="card-title">
                    <h6>{{ $page['name'] ?? '' }} Create</h6>
                </div>


                <!--begin::Separator-->
                <div class="separator border-gray-200"></div>
                <!--end::Separator-->
                <div class="px-7 py-5" data-kt-user-table-filter="form">
                    <h1>Fees - AED {{ $page['fees'] }}</h1>


                    <!--end::Add user-->
                </div>

            </div>

            <div class="card-body py-4 mx-20">
                <form id="kt_docs_business_registration" class="form"
                    action="{{ route('business.business-registration.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <!--begin::Modal body-->
                    <div class="modal-body px-5 my-7">
                        <!--begin::Form-->

                        <!--begin::Scroll-->
                        <div class="d-flex flex-column scroll-y px-5 px-lg-10" id="kt_modal_add_user_scroll"
                            data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-max-height="auto"
                            data-kt-scroll-dependencies="#kt_modal_add_user_header"
                            data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">


                            <!--begin::Input group-->
                            <div class="fv-row mb-7">

                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">Select Business</label>
                                <!--end::Label-->

                                <select class="form-select form-select-solid" data-control="select2" name="business_id"
                                    data-placeholder="Select Business">
                                    <option></option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                </select>
                            </div>
                            <!--begin::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-7">

                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">Select Person</label>
                                <!--end::Label-->

                                <select class="form-select form-select-solid" data-control="select2" name="user_id"
                                    data-placeholder="Select Person">
                                    <option></option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                </select>
                            </div>
                            <!--begin::Input group-->

                            <div class=" row">
                                @if (
                                    $page['slug'] == 'labour-insurance' ||
                                        $page['slug'] == 'labour-fee' ||
                                        $page['slug'] == 'entry-permit' ||
                                        $page['slug'] == 'health-insurance' ||
                                        $page['slug'] == 'medical-examination-typing' ||
                                        $page['slug'] == 'emirates-id-typing' ||
                                        $page['slug'] == 'stamping-visa' ||
                                        $page['slug'] == 'final-contract' ||
                                        $page['slug'] == 'change-status')
                                    <div class="col-6  fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="required fw-semibold fs-6 mb-2">Select Previous
                                            Attachment</label>
                                        <!--end::Label-->

                                        <select class="form-select form-select-solid" data-control="select2"
                                            name="privious_attachment" data-placeholder="Select Here">
                                            <option></option>
                                            <option value="1">Labour insurance</option>
                                            <option value="2">Offer Letter 2</option>
                                        </select>

                                    </div>

                                    <div class="col-6 fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="required fw-semibold fs-6 mb-2">Select Attachment</label>
                                        <!--end::Label-->

                                        <select class="form-select form-select-solid" data-control="select2"
                                            name="attachment" data-placeholder="Select Here">
                                            <option></option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                        </select>

                                    </div>
                                @endif
                                <div class="col-4  fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="required fw-semibold fs-6 mb-2" name="title">
                                        Title</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="text" name="title"
                                        class="form-control form-control-solid mb-3 mb-lg-0"
                                        placeholder="Enter Title" />
                                    <!--end::Input-->

                                </div>
                                @if ($page['slug'] == 'offer-letter')
                                    <div class="col-4 fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="required fw-semibold fs-6 mb-2" name="name">First Name</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input type="text" name="name"
                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                            placeholder="Enter First Name" />
                                        <!--end::Input-->

                                    </div>
                                    <div class="col-4 fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="required fw-semibold fs-6 mb-2" name="last_name">Last Name</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input type="text" name="last_name"
                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                            placeholder="Enter Last Name" />
                                        <!--end::Input-->

                                    </div>

                                    <div class="col-4 fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="required fw-semibold fs-6 mb-2">Designation</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input type="text" name="designation"
                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                            placeholder="Enter Designation" />
                                        <!--end::Input-->

                                    </div>
                                    <div class="col-4 fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="required fw-semibold fs-6 mb-2" name="company_name">Company Name
                                        </label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input type="text" name="company_name"
                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                            placeholder="Enter Company Name" />
                                        <!--end::Input-->
                                    </div>
                                    <div class="col-4 fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="required fw-semibold fs-6 mb-2">Email</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input type="email" name="email"
                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                            placeholder="Enter Email" />
                                        <!--end::Input-->

                                    </div>

                                    <div class="col-4 fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="required fw-semibold fs-6 mb-2" name="po_box">P O Box</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input type="text" name="po_box"
                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                            placeholder="Enter P O Box" />
                                        <!--end::Input-->

                                    </div>
                                    <div class="col-4 fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="required fw-semibold fs-6 mb-2">Address</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input type="text" name="address"
                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                            placeholder="Enter Address" />
                                        <!--end::Input-->

                                    </div>
                                @endif
                                @if ($page['slug'] != 'final-contract')
                                    <div class="col-4 fv-row mb-7">

                                        <!--begin::Label-->
                                        <label class="required fw-semibold fs-6 mb-2">Processing</label>
                                        <!--end::Label-->

                                        <select class="form-select form-select-solid" data-control="select2"
                                            name="processing" data-placeholder="Select Here">
                                            <option></option>
                                            <option value="1">Normal</option>
                                            <option value="2">Urgent</option>
                                        </select>
                                    </div>
                                @endif
                                @if ($page['slug'] == 'entry-permit')
                                    <div class="col-4 fv-row mb-7">

                                        <!--begin::Label-->
                                        <label class="required fw-semibold fs-6 mb-2">Inside - Outside</label>
                                        <!--end::Label-->

                                        <select class="form-select form-select-solid" data-control="select2"
                                            name="inside_outside" data-placeholder="Select Here">
                                            <option></option>
                                            <option value="1">Inside</option>
                                            <option value="2">Outside</option>
                                        </select>
                                    </div>
                                @endif

                                @if ($page['slug'] == 'emirates-id-typing')
                                    <div class="col-4 fv-row mb-7">

                                        <!--begin::Label-->
                                        <label class="required fw-semibold fs-6 mb-2">Old Id</label>
                                        <!--end::Label-->
                                        <input type="text" name="old_id"
                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                            placeholder="Enter Old Id" />


                                    </div>
                                @endif
                                @if ($page['slug'] == 'final-contract')
                                <div class="col-4 fv-row mb-7">

                                    <!--begin::Label-->
                                    <label class="required fw-semibold fs-6 mb-2">Emirate ID</label>
                                    <!--end::Label-->
                                    <input type="text" name="emirate_id"
                                        class="form-control form-control-solid mb-3 mb-lg-0"
                                        placeholder="Enter Old Id" />


                                </div>
                            @endif

                            </div>



                            @if ($page['slug'] == 'labour-insurance' || $page['slug'] == 'labour-fee')
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="required fw-semibold fs-6 mb-2">Passport</label>
                                    <!--end::Label-->
                                    <!--begin::Dropzone-->
                                    <div class="dropzone" id="passport">
                                        <!--begin::Message-->
                                        <div class="dz-message needsclick">
                                            <i class="ki-duotone ki-file-up fs-3x text-primary"><span
                                                    class="path1"></span><span class="path2"></span></i>

                                            <!--begin::Info-->
                                            <div class="ms-4">
                                                <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here or click to
                                                    upload.</h3>

                                            </div>
                                            <!--end::Info-->
                                        </div>
                                    </div>
                                    <!--end::Dropzone-->
                                </div>

                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="required fw-semibold fs-6 mb-2">NIC</label>
                                    <!--end::Label-->
                                    <!--begin::Dropzone-->
                                    <div class="dropzone" id="nic">
                                        <!--begin::Message-->
                                        <div class="dz-message needsclick">
                                            <i class="ki-duotone ki-file-up fs-3x text-primary"><span
                                                    class="path1"></span><span class="path2"></span></i>

                                            <!--begin::Info-->
                                            <div class="ms-4">
                                                <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here or click to
                                                    upload.</h3>

                                            </div>
                                            <!--end::Info-->
                                        </div>
                                    </div>
                                    <!--end::Dropzone-->
                                </div>
                            @endif


                            @if ($page['slug'] == 'offer-letter')
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="required fw-semibold fs-6 mb-2">Photo</label>
                                    <!--end::Label-->
                                    <!--begin::Dropzone-->
                                    <div class="dropzone" id="photo">
                                        <!--begin::Message-->
                                        <div class="dz-message needsclick">
                                            <i class="ki-duotone ki-file-up fs-3x text-primary"><span
                                                    class="path1"></span><span class="path2"></span></i>

                                            <!--begin::Info-->
                                            <div class="ms-4">
                                                <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here or click to
                                                    upload.</h3>

                                            </div>
                                            <!--end::Info-->
                                        </div>
                                    </div>
                                    <!--end::Dropzone-->
                                </div>
                            @endif

                            <!--begin::Dropzone-->
                            <div class="fv-row mb-7 ">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2" name="comment">Comment</label>
                                <!--end::Label-->
                                <textarea class="form-control" placeholder="Comment" id="comment" style="height: 100px"></textarea>

                            </div>


                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="text-end pt-10 mb-5">
                            <button type="submit" class="btn btn-primary"
                                id="kt_docs_business_registration_text_submit">
                                <span class="indicator-label">
                                    Submit
                                </span>

                            </button>
                        </div>
                    </div>
                    <!--end::Scroll-->

                    <!--end::Actions-->
                </form>

            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        function initializeDropzone(selector, url, maxFiles, maxFilesize, successCallback) {
            return new Dropzone(selector, {
                url: url,
                paramName: "file",
                maxFiles: maxFiles,
                maxFilesize: maxFilesize, // MB
                addRemoveLinks: true,
                accept: function(file, done) {

                    done();
                },

                sending: function(file, xhr, formData) {
                    formData.append('_token', '{{ csrf_token() }}');
                },
                init: function() {
                    this.on("removedfile", function(file) {
                        console.log("File:", file);
                        console.log("File Name:", file.upload.filename);
                        if (file.upload) {

                            const filename = file.upload.filename;
                            const deleteUrl = `{{ route('upload.destroy', ':id') }}`.replace(':id',
                                filename);
                            axios.delete(deleteUrl)
                                .then(response => {
                                    console.log("File deleted successfully:", response.data);
                                })
                                .catch(error => {
                                    console.error("Error deleting file:", error);
                                });
                        }
                    });
                },
                success: successCallback
            });
        }
        // Initialize Dropzone instances
        if (document.getElementById('passport')) {
            var myDropzone_license_copy = initializeDropzone("#passport", "{{ route('upload.store') }}", 1, 10,
                function(file, response) {

                    file.upload.filename = response.file;

                    if (response && response.file) {

                        var fileUploaded = file.previewElement.querySelector("[data-dz-name]");
                        fileUploaded.innerHTML = response.file;

                    } else {
                        console.error("Error: Response does not contain file information");
                    }
                });

        }
        if (document.getElementById('nic')) {

            var myDropzone_manager_id_copy = initializeDropzone("#nic", "{{ route('upload.store') }}", 10, 10,
                function(file, response) {
                    console.log("File uploaded successfully:", response);
                    // Perform actions after successful upload, if needed
                });
        }
        if (document.getElementById('photo')) {

            var myDropzone_manager_visa_copy = initializeDropzone("#photo", "{{ route('upload.store') }}", 10,
                10,
                function(file, response) {
                    console.log("File uploaded successfully:", response);
                    // Perform actions after successful upload, if needed
                });
        }


        $(function() {
            $('#kt_docs_business_registration').validate({
                rules: {
                    business_id: {
                        required: true,
                    },

                    user_id: {
                        required: true,
                    },
                    privious_attachment: {
                        required: true,
                    },
                    attachment: {
                        required: true,
                    },
                    title: {
                        required: true,
                    },
                    name: {
                        required: true,
                    },
                    last_name: {
                        required: true,
                    },
                    designation: {
                        required: true,
                    },
                    po_box: {
                        required: true,
                    },
                    company_name: {
                        required: true,
                    },
                    processing: {

                        required: true,
                    },
                    address: {
                        required: true,
                    },
                    email: {
                        required: true,
                    },
                    comment: {
                        required: true,
                    },
                    old_id: {
                        required: true,
                    },
                    inside_outside: {
                        required: true,
                    },
                    emirate_id: {
                        required: true,
                    }




                },
                messages: {

                },

                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.fv-row').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                },
                submitHandler: function(form) {
                    // If form is valid, submit it
                    form.submit();
                }
            });
        });
    </script>

</x-default-layout>
