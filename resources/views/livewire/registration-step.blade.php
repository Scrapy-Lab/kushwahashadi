<div wire:ignore>


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
                                                        class="form-control form-control-lg"
                                                        wire:model="form.last_name" />
                                                    <label class="form-label" for="form3Examplev3">Last name</label>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">


                                            <div class="col-md-6 mb-4 pb-2">

                                                <div data-mdb-input-init class="form-outline">
                                                    <input type="text" id="form3Examplev2"
                                                        class="form-control form-control-lg" wire:model="form.email"
                                                        disabled />
                                                    <label class="form-label" for="form3Examplev2">Email</label>
                                                </div>

                                            </div>
                                            <div class="col-md-6 mb-4 pb-2">

                                                <div data-mdb-input-init class="form-outline">
                                                    <input type="date" id="form3Examplev3"
                                                        class="form-control form-control-lg" wire:model="form.dob" />
                                                    <label class="form-label" for="form3Examplev3">Date of
                                                        Birth</label>
                                                </div>

                                            </div>



                                            <div class="col-md-6 mb-4 pb-2">

                                                <div data-mdb-input-init class="form-outline">
                                                    <input type="text" id="form3Examplev3"
                                                        class="form-control form-control-lg" wire:model="form.area" />
                                                    <label class="form-label" for="form3Examplev3">Area</label>
                                                </div>

                                            </div>
                                            <div class="col-md-6 mb-4 pb-2">

                                                <div>

                                                    <select class="form-select" wire:model="form.on_behalf">
                                                        <option value="">Select On Behalf</option>
                                                        @foreach ($on_behalf as $data)
                                                            <option value="{{ $data->id }}">{{ $data->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>


                                            </div>
                                            <div class="col-md-6 mb-4 pb-2">

                                                <div data-mdb-input-init class="form-outline">
                                                    <input type="text" id="form3Examplev3"
                                                        class="form-control form-control-lg"
                                                        wire:model="form.on_behalf_name" />
                                                    <label class="form-label" for="form3Examplev3">ON BEHALF
                                                        Name</label>
                                                </div>

                                            </div>
                                            <div class="col-md-6 mb-4 pb-2">

                                                <div data-mdb-input-init class="form-outline">
                                                    <input type="text" id="form3Examplev3"
                                                        class="form-control form-control-lg" wire:model="form.phone" />
                                                    <label class="form-label" for="form3Examplev3">MOBILE</label>
                                                </div>

                                            </div>

                                            <div class="col-md-12 mb-4 pb-2">

                                                <div data-mdb-input-init class="form-outline">
                                                    <input type="text" id="form3Examplev3"
                                                        class="form-control form-control-lg" wire:model="form.wp_no" />
                                                    <label class="form-label" for="form3Examplev3">WHATSAPP
                                                        NO</label>
                                                </div>

                                            </div>





                                        </div>
                                        <div class="row">

                                            <div class="col-md-6 mb-4 pb-2">
                                                <div>

                                                    <select class="form-select" wire:model="form.gender">
                                                        <option value="">Select Gender</option>
                                                        <option value="1">Male</option>
                                                        <option value="2">Female</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class=" col-md-6 mb-4 pb-2">
                                                <div>

                                                    <select class="form-select" wire:model="form.marital_status">
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
                                                    class="form-control form-control-lg" wire:model="form.address" />
                                                <label class="form-label" for="form3Examplea2">FULL ADDRESS</label>
                                            </div>
                                        </div>
                                        {{-- <div class="row">
                                            <div class="col-md-5 mb-4 pb-2">

                                                <div data-mdb-input-init class="form-outline form-white">
                                                    <input type="text" id="form3Examplea4"
                                                        class="form-control form-control-lg"  wire:model="form.name" />
                                                    <label class="form-label" for="form3Examplea4">Zip Code</label>
                                                </div>

                                            </div>
                                            <div class="col-md-7 mb-4 pb-2">

                                                <div data-mdb-input-init class="form-outline form-white">
                                                    <input type="text" id="form3Examplea5"
                                                        class="form-control form-control-lg"  wire:model="form.name" />
                                                    <label class="form-label" for="form3Examplea5">Place</label>
                                                </div>

                                            </div>
                                        </div> --}}

                                        <div class="mb-4 pb-2">
                                            <div data-mdb-input-init class="form-outline form-white">
                                                <input type="text" id="form3Examplea6"
                                                    class="form-control form-control-lg" wire:model="form.country" />
                                                <label class="form-label" for="form3Examplea6">Country</label>
                                            </div>
                                        </div>

                                        <div class="mb-4 pb-2">
                                            <div data-mdb-input-init class="form-outline form-white">
                                                <input type="text" id="form3Examplea6"
                                                    class="form-control form-control-lg" wire:model="form.state" />
                                                <label class="form-label" for="form3Examplea6">State</label>
                                            </div>
                                        </div>

                                        <div class="mb-4 pb-2">
                                            <div data-mdb-input-init class="form-outline form-white">
                                                <input type="text" id="form3Examplea6"
                                                    class="form-control form-control-lg" wire:model="form.city" />
                                                <label class="form-label" for="form3Examplea6">City</label>
                                            </div>
                                        </div>

                                        {{-- <div class="row">
                                            <div class="col-md-5 mb-4 pb-2">

                                                <div data-mdb-input-init class="form-outline form-white">
                                                    <input type="text" id="form3Examplea7"
                                                        class="form-control form-control-lg"  wire:model="form.name" />
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


                                        {{--  --}}

                                        <button type="button" wire:click="step_one" id="step_1"
                                            data-mdb-button-init data-mdb-ripple-init class="btn btn-light btn-lg"
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

                                                {{-- <div data-mdb-input-init class="form-outline">
                                                    <input type="text" id="form3Examplev2"
                                                        class="form-control form-control-lg"
                                                        wire:model="form.highest_education" />
                                                    <label class="form-label" for="form3Examplev2">HIGHEST
                                                        EDUCATION</label>
                                                </div> --}}


                                                <div>

                                                    <select class="form-select" wire:model="form.highest_education">
                                                        <option value="">Select HIGHEST
                                                            EDUCATION</option>
                                                        @foreach ($highest_education as $data)
                                                            <option value="{{ $data->id }}">{{ $data->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>



                                            </div>

                                            <div class="col-md-6 mb-4 pb-2">

                                                <div data-mdb-input-init class="form-outline">
                                                    <input type="text" id="form3Examplev2"
                                                        class="form-control form-control-lg"
                                                        wire:model="form.degree" />
                                                    <label class="form-label" for="form3Examplev2">Degree</label>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-4 pb-2">

                                                {{-- <div data-mdb-input-init class="form-outline">
                                                    <input type="text" id="form3Examplev3"
                                                        class="form-control form-control-lg"
                                                        wire:model="form.occupation" />
                                                    <label class="form-label" for="form3Examplev3">OCCUPATION</label>
                                                </div> --}}

                                                <div>

                                                    <select class="form-select" wire:model="form.occupation">
                                                        <option value="">Select OCCUPATION</option>
                                                        @foreach ($occupation as $data)
                                                            <option value="{{ $data->id }}">{{ $data->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="row">


                                            <div class="col-md-6 mb-4 pb-2">

                                                <div data-mdb-input-init class="form-outline">
                                                    <input type="text" id="form3Examplev2"
                                                        class="form-control form-control-lg"
                                                        wire:model="form.edu_details" />
                                                    <label class="form-label" for="form3Examplev2">EDUCATION
                                                        DETAIL</label>
                                                </div>

                                            </div>
                                            <div class="col-md-6 mb-4 pb-2">

                                                <div data-mdb-input-init class="form-outline">
                                                    <input type="text" id="form3Examplev3"
                                                        class="form-control form-control-lg"
                                                        wire:model="form.posting_place" />
                                                    <label class="form-label" for="form3Examplev3">POSTING
                                                        PLACE</label>
                                                </div>

                                            </div>



                                            <div class="col-md-6 mb-4 pb-2">

                                                <div data-mdb-input-init class="form-outline">
                                                    <input type="text" id="form3Examplev3"
                                                        class="form-control form-control-lg"
                                                        wire:model="form.annual_income" />
                                                    <label class="form-label" for="form3Examplev3">ANNUAL
                                                        INCOME</label>
                                                </div>

                                            </div>
                                            <div class="col-md-6 mb-4 pb-2">

                                                <div data-mdb-input-init class="form-outline">
                                                    <input type="text" id="form3Examplev3"
                                                        class="form-control form-control-lg"
                                                        wire:model="form.other_occupation" />
                                                    <label class="form-label" for="form3Examplev3">OTHER
                                                        OCCUPATION</label>
                                                </div>

                                            </div>






                                        </div>


                                    </div>
                                </div>
                                <div class="col-lg-6 bg-indigo text-white">
                                    <div class="p-5">
                                        <h3 class="fw-normal mb-5">Physical Attributes</h3>
                                        <div class="row">
                                            <div class="col-md-6  mb-4 pb-2">
                                                <div >
                                                    {{-- <input type="text" id="form3Examplea2"
                                                        class="form-control form-control-lg"
                                                        wire:model="form.height" /> --}}
                                                        <select wire:model="form.height" name="" class="form-select" >
                                                            <option value="">Select Height</option>
                                                            @for ($i = 140; $i <= 190; $i++)
                                                                @php
                                                                    // Convert cm to inches
                                                                    $inches = $i / 2.54;
                                                                    // Get the feet part
                                                                    $feet = floor($inches / 12);
                                                                    // Get the remaining inches
                                                                    $remainingInches = round($inches % 12);
                                                                @endphp
                                                                <option value="{{ $i }}">{{ $i }} CM
                                                                    ({{ $feet }}'{{ $remainingInches }}")</option>
                                                            @endfor
                                                        </select>
                                                    {{-- <label class="form-label" for="form3Examplea2">HEIGHT</label> --}}
                                                </div>
                                            </div>


                                            <div class="col-md-6 mb-4 pb-2">
                                                <div data-mdb-input-init class="form-outline form-white">
                                                    <input type="text" id="form3Examplea6"
                                                        class="form-control form-control-lg"
                                                        wire:model="form.weight" />
                                                    <label class="form-label" for="form3Examplea6">WEIGHT</label>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-4 pb-2">
                                                {{-- <div data-mdb-input-init class="form-outline form-white">
                                                    <input type="text" id="form3Examplea6"
                                                        class="form-control form-control-lg"
                                                        wire:model="form.complexion" />
                                                    <label class="form-label" for="form3Examplea6">COMPLEXION</label>
                                                </div> --}}
                                                <div>

                                                    <select class="form-select" wire:model="form.complexion">
                                                        <option value="">Select COMPLEXION</option>
                                                        @foreach ($complexion as $data)
                                                            <option value="{{ $data->id }}">{{ $data->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                            </div>

                                            <div class=" col-md-6 mb-4 pb-2">
                                                <div data-mdb-input-init class="form-outline form-white">
                                                    <input type="text" id="form3Examplea6"
                                                        class="form-control form-control-lg"
                                                        wire:model="form.blood_group" />
                                                    <label class="form-label" for="form3Examplea6">BLOOD GROUP</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4 pb-2">
                                                {{-- <div data-mdb-input-init class="form-outline form-white">
                                                    <input type="text" id="form3Examplea6"
                                                        class="form-control form-control-lg"
                                                        wire:model="form.body_type" />
                                                    <label class="form-label" for="form3Examplea6">BODY TYPE</label>
                                                </div> --}}

                                                <div>

                                                    <select class="form-select" wire:model="form.body_type">
                                                        <option value="">Select BODY TYPE</option>
                                                        @foreach ($body_type as $data)
                                                            <option value="{{ $data->id }}">{{ $data->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4 pb-2">
                                                <div data-mdb-input-init class="form-outline form-white">
                                                    <input type="text" id="form3Examplea6"
                                                        class="form-control form-control-lg"
                                                        wire:model="form.any_disability" />
                                                    <label class="form-label" for="form3Examplea6">ANY
                                                        DISABILITY</label>
                                                </div>
                                            </div>

                                        </div>

                                        <button type="button" id="step_2" wire:click="step_two"
                                            data-mdb-button-init data-mdb-ripple-init class="btn btn-light btn-lg"
                                            data-mdb-ripple-color="dark">Next</button>

                                    </div>
                                </div>
                                {{-- @endif --}}
                            </div>


                            {{-- end STEP 2 --}}


                            {{-- STEP 3 --}}



                            <div class="row g-0" id="step_3_div" style="display: none">
                                {{-- @if ($step2) --}}
                                <div class="col-lg-6" id="step_2_div">
                                    <div class="p-5">
                                        <h3 class="fw-normal mb-5" style="color: #4835d4;">Spiritual And Social
                                            Background
                                        </h3>
                                        <div class="row">
                                            <div class="col-md-6 mb-4 pb-2">

                                                <div>
                                                    <select class="form-select" wire:model="form.religion">
                                                        <option value="">Select RELIGION</option>
                                                        @foreach ($religion as $data)
                                                            <option value="{{ $data->id }}">{{ $data->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="col-md-6 mb-4 pb-2">

                                                <div>
                                                    <select class="form-select" wire:model="form.caste">
                                                        <option value="">Select CASTE / SECT</option>
                                                        @foreach ($caste as $data)
                                                            <option value="{{ $data->id }}">{{ $data->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">


                                            <div class="col-md-6 mb-4 pb-2">

                                                <div>
                                                    <select class="form-select" wire:model="form.sub_caste">
                                                        <option value="">Select SUB-CASTE</option>
                                                        @foreach ($sub_caste as $data)
                                                            <option value="{{ $data->id }}">{{ $data->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="col-md-6 mb-4 pb-2">

                                                <div data-mdb-input-init class="form-outline">
                                                    <input type="text" id="form3Examplev3"
                                                        class="form-control form-control-lg"
                                                        wire:model="form.gotra" />
                                                    <label class="form-label" for="form3Examplev3">GOTRA</label>
                                                </div>

                                            </div>



                                            <div class="col-md-12 mb-4 pb-2">

                                                <div>
                                                    <select class="form-select" wire:model="form.family_values">
                                                        <option value="">Select FAMILY VALUES</option>
                                                        @foreach ($family_values as $data)
                                                            <option value="{{ $data->id }}">{{ $data->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="col-md-12 mb-4 pb-2">

                                                <div>
                                                    <select class="form-select" wire:model="form.family_status">
                                                        <option value="">Select FAMILY STATUS</option>
                                                        @foreach ($family_status as $data)
                                                            <option value="{{ $data->id }}">{{ $data->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                            </div>






                                        </div>


                                    </div>
                                </div>

                                <div class="col-lg-6 bg-indigo text-white">
                                    <div class="p-5">
                                        <h3 class="fw-normal mb-5">Astronomic Information</h3>

                                        <div class="mb-4 pb-2">
                                            <div data-mdb-input-init class="form-outline form-white">
                                                <input type="text" id="form3Examplea2"
                                                    class="form-control form-control-lg" wire:model="form.sun_sign" />
                                                <label class="form-label" for="form3Examplea2">SUN SIGN</label>
                                            </div>
                                        </div>


                                        <div class="mb-4 pb-2">
                                            <div data-mdb-input-init class="form-outline form-white">
                                                <input type="text" id="form3Examplea2"
                                                    class="form-control form-control-lg"
                                                    wire:model="form.moon_sign" />
                                                <label class="form-label" for="form3Examplea2">MOON SIGN</label>
                                            </div>
                                        </div>

                                        <div class="mb-4 pb-2">
                                            <div data-mdb-input-init class="form-outline form-white">
                                                <input type="text" id="form3Examplea6"
                                                    class="form-control form-control-lg"
                                                    wire:model="form.birth_city" />
                                                <label class="form-label" for="form3Examplea6">CITY OF BIRTH</label>
                                            </div>
                                        </div>
                                        <div class="mb-4 pb-2">
                                            <div data-mdb-input-init class="form-outline form-white">
                                                <input type="text" id="form3Examplea6"
                                                    class="form-control form-control-lg"
                                                    wire:model="form.time_of_birth" />
                                                <label class="form-label" for="form3Examplea6">TIME OF BIRTH</label>
                                            </div>
                                        </div>



                                        {{-- <div class="form-check d-flex justify-content-start mb-4 pb-3">
                                            <input class="form-check-input me-3" type="checkbox" value=""
                                                id="form2Example3c" />
                                            <label class="form-check-label text-white" for="form2Example3">
                                                I do accept the <a href="#!" class="text-white"><u>Terms and
                                                        Conditions</u></a> of your
                                                site.
                                            </label>
                                        </div> --}}


                                        <button type="button" id="step_3" wire:click="step_three"
                                            data-mdb-button-init data-mdb-ripple-init class="btn btn-light btn-lg"
                                            data-mdb-ripple-color="dark">Next</button>

                                    </div>
                                </div>
                                {{-- @endif --}}
                            </div>


                            {{-- end STEP 3 --}}



                            {{-- STEP 4 --}}



                            <div class="row g-0" id="step_4_div" style="display: none">
                                {{-- @if ($step2) --}}
                                <div class="col-lg-6" id="step_2_div">
                                    <div class="p-5">
                                        <h3 class="fw-normal mb-5" style="color: #4835d4;">Family Information
                                        </h3>
                                        <div class="row">
                                            <div class="col-md-6 mb-4 pb-2">

                                                <div data-mdb-input-init class="form-outline">
                                                    <input type="text" id="form3Examplev2"
                                                        class="form-control form-control-lg"
                                                        wire:model="form.family_residence" />
                                                    <label class="form-label" for="form3Examplev2">FAMILY
                                                        RESIDENCE</label>
                                                </div>

                                            </div>
                                            <div class="col-md-6 mb-4 pb-2">

                                                <div data-mdb-input-init class="form-outline">
                                                    <input type="text" id="form3Examplev3"
                                                        class="form-control form-control-lg"
                                                        wire:model="form.native_place" />
                                                    <label class="form-label" for="form3Examplev3">NATIVE
                                                        PLACE</label>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">


                                            <div class="col-md-6 mb-4 pb-2">

                                                <div data-mdb-input-init class="form-outline">
                                                    <input type="text" id="form3Examplev2"
                                                        class="form-control form-control-lg"
                                                        wire:model="form.father" />
                                                    <label class="form-label" for="form3Examplev2">FATHER</label>
                                                </div>

                                            </div>
                                            <div class="col-md-6 mb-4 pb-2">

                                                <div data-mdb-input-init class="form-outline">
                                                    <input type="text" id="form3Examplev3"
                                                        class="form-control form-control-lg"
                                                        wire:model="form.father_occupation" />
                                                    <label class="form-label" for="form3Examplev3">FATHER
                                                        OCCUPATION</label>
                                                </div>

                                            </div>



                                            <div class="col-md-6 mb-4 pb-2">

                                                <div data-mdb-input-init class="form-outline">
                                                    <input type="text" id="form3Examplev3"
                                                        class="form-control form-control-lg"
                                                        wire:model="form.mother" />
                                                    <label class="form-label" for="form3Examplev3">MOTHER</label>
                                                </div>

                                            </div>
                                            <div class="col-md-6 mb-4 pb-2">

                                                <div data-mdb-input-init class="form-outline">
                                                    <input type="text" id="form3Examplev3"
                                                        class="form-control form-control-lg"
                                                        wire:model="form.mother_occupation" />
                                                    <label class="form-label" for="form3Examplev3">MOTHER
                                                        OCCUPATION</label>
                                                </div>

                                            </div>
                                            <div class="col-md-6 mb-4 pb-2">

                                                <div data-mdb-input-init class="form-outline">
                                                    <input type="text" id="form3Examplev3"
                                                        class="form-control form-control-lg"
                                                        wire:model="form.brother" />
                                                    <label class="form-label" for="form3Examplev3">BROTHER</label>
                                                </div>

                                            </div>

                                            <div class="col-md-6 mb-4 pb-2">

                                                <div data-mdb-input-init class="form-outline">
                                                    <input type="text" id="form3Examplev3"
                                                        class="form-control form-control-lg"
                                                        wire:model="form.brother_occupation" />
                                                    <label class="form-label" for="form3Examplev3">BROTHER
                                                        OCCUPATION</label>
                                                </div>

                                            </div>

                                            <div class="col-md-6 mb-4 pb-2">

                                                <div data-mdb-input-init class="form-outline">
                                                    <input type="text" id="form3Examplev3"
                                                        class="form-control form-control-lg"
                                                        wire:model="form.sister" />
                                                    <label class="form-label" for="form3Examplev3">SISTER</label>
                                                </div>

                                            </div>

                                            <div class="col-md-6 mb-4 pb-2">

                                                <div data-mdb-input-init class="form-outline">
                                                    <input type="text" id="form3Examplev3"
                                                        class="form-control form-control-lg"
                                                        wire:model="form.sister_occupation" />
                                                    <label class="form-label" for="form3Examplev3">SISTER
                                                        OCCUPATION</label>
                                                </div>

                                            </div>





                                        </div>


                                    </div>
                                </div>
                                <div class="col-lg-6 bg-indigo text-white">
                                    <div class="p-5">
                                        <h3 class="fw-normal mb-5">Partner Expectation</h3>

                                        <div class="mb-4 pb-2">
                                            <div data-mdb-input-init class="form-outline form-white">
                                                <input type="text" id="form3Examplea2"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Examplea2">SUN SIGN</label>
                                            </div>
                                        </div>


                                        <div class="mb-4 pb-2">
                                            <div data-mdb-input-init class="form-outline form-white">
                                                <input type="text" id="form3Examplea2"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Examplea2">MOON SIGN</label>
                                            </div>
                                        </div>

                                        <div class="mb-4 pb-2">
                                            <div data-mdb-input-init class="form-outline form-white">
                                                <input type="text" id="form3Examplea6"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Examplea6">CITY OF BIRTH</label>
                                            </div>
                                        </div>
                                        <div class="mb-4 pb-2">
                                            <div data-mdb-input-init class="form-outline form-white">
                                                <input type="text" id="form3Examplea6"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Examplea6">TIME OF BIRTH</label>
                                            </div>
                                        </div>



                                        <div class="form-check d-flex justify-content-start mb-4 pb-3">
                                            <input class="form-check-input me-3" type="checkbox" value=""
                                                id="form2Example3c" required />
                                            <label class="form-check-label text-white" for="form2Example3">
                                                I do accept the <a href="#!" class="text-white"><u>Terms and
                                                        Conditions</u></a> of your
                                                site.
                                            </label>
                                        </div>


                                        <button type="button" id="step_4" wire:click="step_four"
                                            data-mdb-button-init data-mdb-ripple-init class="btn btn-light btn-lg"
                                            data-mdb-ripple-color="dark">Finish</button>

                                    </div>
                                </div>
                                {{-- @endif --}}
                            </div>


                            {{-- end STEP 4 --}}




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

            $("#step_2").click(function() {
                $("#step_1_div").hide();
                $("#step_2_div").hide();
                $("#step_3_div").show();
            });

            $("#step_3").click(function() {
                $("#step_1_div").hide();
                $("#step_2_div").hide();
                $("#step_3_div").hide();
                $("#step_4_div").show();
            });
        });
    </script>
</div>
