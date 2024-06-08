<div>


    <section class="h-100 h-custom gradient-custom-2">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12">

                    <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                        <div class="card-body p-0">


                            {{-- STEP 1 --}}
                            <div class="row g-0" id="step_1_div">
                                {{-- @if ($step1) --}}
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <h3 class="fw-normal mb-5" style="color: #4835d4;">Basic Information</h3>
                                        <div class="row">
                                            <div class="col-md-6 mb-4 pb-2">

                                                <div data-mdb-input-init class="form-outline">
                                                    <input type="text" id="form3Examplev2"
                                                        class="form-control form-control-lg" wire:model="form.name" />
                                                    <label class="form-label" for="form3Examplev2">First
                                                        name</label>
                                                </div>

                                            </div>
                                            <div class="col-md-6 mb-4 pb-2">

                                                <div data-mdb-input-init class="form-outline">
                                                    <input type="text" id="form3Examplev3"
                                                        class="form-control form-control-lg"  wire:model="form.last_name    "/>
                                                    <label class="form-label" for="form3Examplev3">Last name</label>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">


                                            <div class="col-md-6 mb-4 pb-2">

                                                <div data-mdb-input-init class="form-outline">
                                                    <input type="text" id="form3Examplev2"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Examplev2">Email</label>
                                                </div>

                                            </div>
                                            <div class="col-md-6 mb-4 pb-2">

                                                <div data-mdb-input-init class="form-outline">
                                                    <input type="date" id="form3Examplev3"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Examplev3">Date of
                                                        Birth</label>
                                                </div>

                                            </div>



                                            <div class="col-md-6 mb-4 pb-2">

                                                <div data-mdb-input-init class="form-outline">
                                                    <input type="text" id="form3Examplev3"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Examplev3">Area</label>
                                                </div>

                                            </div>
                                            <div class="col-md-6 mb-4 pb-2">

                                                <div data-mdb-input-init class="form-outline">
                                                    <input type="text" id="form3Examplev3"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Examplev3">ON BEHALF</label>
                                                </div>

                                            </div>
                                            <div class="col-md-6 mb-4 pb-2">

                                                <div data-mdb-input-init class="form-outline">
                                                    <input type="text" id="form3Examplev3"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Examplev3">MOBILE</label>
                                                </div>

                                            </div>

                                            <div class="col-md-6 mb-4 pb-2">

                                                <div data-mdb-input-init class="form-outline">
                                                    <input type="text" id="form3Examplev3"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Examplev3">WHATSAPP
                                                        NO</label>
                                                </div>

                                            </div>





                                        </div>
                                        <div class="row">

                                            <div class="col-md-6 mb-4 pb-2">
                                                <div>

                                                    <select class="form-select">
                                                        <option value="">Select Gender</option>
                                                        <option value="1">Male</option>
                                                        <option value="2">Female</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class=" col-md-6 mb-4 pb-2">
                                                <div>

                                                    <select class="form-select">
                                                        <option value="">Select MARITAL STATUS</option>
                                                        <option value="1">Single</option>
                                                        <option value="2">Married</option>
                                                    </select>
                                                </div>
                                            </div>
                                            {{-- <div class="col-md-6 mb-4 pb-2 mb-md-0 pb-md-0">

                                                <div data-mdb-input-init class="form-outline">
                                                    <input type="text" id="form3Examplev5"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Examplev5">EMAIL</label>
                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <select data-mdb-select-init>
                                                    <option value="1">Employees</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                    <option value="4">Four</option>
                                                </select>

                                            </div> --}}
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-6 bg-indigo text-white">
                                    <div class="p-5">
                                        <h3 class="fw-normal mb-5">Present Address</h3>

                                        <div class="mb-4 pb-2">
                                            <div data-mdb-input-init class="form-outline form-white">
                                                <input type="text" id="form3Examplea2"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Examplea2">FULL ADDRESS</label>
                                            </div>
                                        </div>
                                        {{-- <div class="row">
                                            <div class="col-md-5 mb-4 pb-2">

                                                <div data-mdb-input-init class="form-outline form-white">
                                                    <input type="text" id="form3Examplea4"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Examplea4">Zip Code</label>
                                                </div>

                                            </div>
                                            <div class="col-md-7 mb-4 pb-2">

                                                <div data-mdb-input-init class="form-outline form-white">
                                                    <input type="text" id="form3Examplea5"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Examplea5">Place</label>
                                                </div>

                                            </div>
                                        </div> --}}

                                        <div class="mb-4 pb-2">
                                            <div data-mdb-input-init class="form-outline form-white">
                                                <input type="text" id="form3Examplea6"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Examplea6">Country</label>
                                            </div>
                                        </div>

                                        <div class="mb-4 pb-2">
                                            <div data-mdb-input-init class="form-outline form-white">
                                                <input type="text" id="form3Examplea6"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Examplea6">State</label>
                                            </div>
                                        </div>

                                        {{-- <div class="row">
                                            <div class="col-md-5 mb-4 pb-2">

                                                <div data-mdb-input-init class="form-outline form-white">
                                                    <input type="text" id="form3Examplea7"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Examplea7">Code +</label>
                                                </div>

                                            </div>
                                            <div class="col-md-7 mb-4 pb-2">

                                                <div data-mdb-input-init class="form-outline form-white">
                                                    <input type="text" id="form3Examplea8"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Examplea8">Phone
                                                        Number</label>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="mb-4">
                                            <div data-mdb-input-init class="form-outline form-white">
                                                <input type="text" id="form3Examplea9"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Examplea9">Your Email</label>
                                            </div>
                                        </div> --}}

                                        <div class="form-check d-flex justify-content-start mb-4 pb-3">
                                            <input class="form-check-input me-3" type="checkbox" value=""
                                                id="form2Example3c" />
                                            <label class="form-check-label text-white" for="form2Example3">
                                                I do accept the <a href="#!" class="text-white"><u>Terms and
                                                        Conditions</u></a> of your
                                                site.
                                            </label>
                                        </div>
                                        {{--  --}}

                                        <button type="button" wire:click="step_one" id="step_1" data-mdb-button-init
                                            data-mdb-ripple-init class="btn btn-light btn-lg"
                                            data-mdb-ripple-color="dark">Next</button>

                                    </div>
                                </div>
                                {{-- @endif --}}
                            </div>

                            {{-- END STEP 2 --}}

                            {{-- STEP 2 --}}



                            <div class="row g-0" id="step_2_div" style="display: none">
                                {{-- @if ($step2) --}}
                                <div class="col-lg-6" id="step_2_div">
                                    <div class="p-5">
                                        <h3 class="fw-normal mb-5" style="color: #4835d4;">Education And Career
                                        </h3>
                                        <div class="row">
                                            <div class="col-md-6 mb-4 pb-2">

                                                <div data-mdb-input-init class="form-outline">
                                                    <input type="text" id="form3Examplev2"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Examplev2">First
                                                        name</label>
                                                </div>

                                            </div>
                                            <div class="col-md-6 mb-4 pb-2">

                                                <div data-mdb-input-init class="form-outline">
                                                    <input type="text" id="form3Examplev3"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Examplev3">Last
                                                        name</label>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">


                                            <div class="col-md-6 mb-4 pb-2">

                                                <div data-mdb-input-init class="form-outline">
                                                    <input type="text" id="form3Examplev2"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Examplev2">Email</label>
                                                </div>

                                            </div>
                                            <div class="col-md-6 mb-4 pb-2">

                                                <div data-mdb-input-init class="form-outline">
                                                    <input type="date" id="form3Examplev3"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Examplev3">Date of
                                                        Birth</label>
                                                </div>

                                            </div>



                                            <div class="col-md-6 mb-4 pb-2">

                                                <div data-mdb-input-init class="form-outline">
                                                    <input type="text" id="form3Examplev3"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Examplev3">Area</label>
                                                </div>

                                            </div>
                                            <div class="col-md-6 mb-4 pb-2">

                                                <div data-mdb-input-init class="form-outline">
                                                    <input type="text" id="form3Examplev3"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Examplev3">ON
                                                        BEHALF</label>
                                                </div>

                                            </div>
                                            <div class="col-md-6 mb-4 pb-2">

                                                <div data-mdb-input-init class="form-outline">
                                                    <input type="text" id="form3Examplev3"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Examplev3">MOBILE</label>
                                                </div>

                                            </div>

                                            <div class="col-md-6 mb-4 pb-2">

                                                <div data-mdb-input-init class="form-outline">
                                                    <input type="text" id="form3Examplev3"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Examplev3">WHATSAPP
                                                        NO</label>
                                                </div>

                                            </div>





                                        </div>
                                        <div class="row">

                                            <div class="col-md-6 mb-4 pb-2">
                                                <div>

                                                    <select class="form-select">
                                                        <option value="">Select Gender</option>
                                                        <option value="1">Male</option>
                                                        <option value="2">Female</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class=" col-md-6 mb-4 pb-2">
                                                <div>

                                                    <select class="form-select">
                                                        <option value="">Select MARITAL STATUS</option>
                                                        <option value="1">Single</option>
                                                        <option value="2">Married</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-6 bg-indigo text-white">
                                    <div class="p-5">
                                        <h3 class="fw-normal mb-5">Physical Attributes</h3>

                                        <div class="mb-4 pb-2">
                                            <div data-mdb-input-init class="form-outline form-white">
                                                <input type="text" id="form3Examplea2"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Examplea2">FULL
                                                    ADDRESS</label>
                                            </div>
                                        </div>


                                        <div class="mb-4 pb-2">
                                            <div data-mdb-input-init class="form-outline form-white">
                                                <input type="text" id="form3Examplea6"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Examplea6">Country</label>
                                            </div>
                                        </div>

                                        <div class="mb-4 pb-2">
                                            <div data-mdb-input-init class="form-outline form-white">
                                                <input type="text" id="form3Examplea6"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Examplea6">State</label>
                                            </div>
                                        </div>



                                        <div class="form-check d-flex justify-content-start mb-4 pb-3">
                                            <input class="form-check-input me-3" type="checkbox" value=""
                                                id="form2Example3c" />
                                            <label class="form-check-label text-white" for="form2Example3">
                                                I do accept the <a href="#!" class="text-white"><u>Terms and
                                                        Conditions</u></a> of your
                                                site.
                                            </label>
                                        </div>


                                        <button type="button" id="step_2" wire:click="step_two"
                                            data-mdb-button-init data-mdb-ripple-init class="btn btn-light btn-lg"
                                            data-mdb-ripple-color="dark">Next</button>

                                    </div>
                                </div>
                                {{-- @endif --}}
                            </div>


                            {{-- end STEP 2 --}}

                        </div>


                    </div>

                    {{-- <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                        <div class="card-body p-0">
                            <div class="row g-0">




                            </div>
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <script>
        $(document).ready(function() {
            $("#step_1").click(function() {
                $("#step_1_div").hide();
                $("#step_2_div").show();
            });
        });
    </script>
</div>
