<div class="col-md-9">
    <div class="card z-depth-2-top editProfileMain">

        @if (Route::is('view_profile'))
            <div class="intro quickIntro">
                <div class=" d-flex justify-content-between align-items-center mb-3">
                    <h4>Quick Information</h4>
                </div>
                <h4>Member Id: <span class="green">42A093EF6089</span></h4>
                <div class="d-flex align-items-start mt-4">
                    <table class="table table-striped">
                        <tr>
                            <th>First Name</th>
                            <th>{{ $user->name }}</th>
                        </tr>
                        <tr>
                            <th>Gender</th>
                            <th>{{ $user->user_detail->gender == 1 ? 'Male' : 'Female' }}</th>
                        </tr>
                        <tr>
                            <th>Marital Status</th>
                            <th>{{ $user->user_detail->marital_status }}</th>
                        </tr>
                        <tr>
                            <th>Area</th>
                            <th>{{ $user->user_detail->area }}</th>
                        </tr>
                    </table>

                    <table class="table table-striped">
                        <tr>
                            <th>Last Name</th>
                            <th>{{ $user->lst_name }}</th>
                        </tr>
                        <tr>
                            <th>Age</th>
                            <th>28</th>
                        </tr>
                        <tr>
                            <th>Number of Children</th>
                            <th>{{ $user->user_detail->no_of_children }}</th>
                        </tr>
                        <tr>
                            <th>On Behalf</th>
                            <th>{{ $user->user_detail->on_behalf }}</th>
                        </tr>
                    </table>
                </div>
            </div>
        @endif


        <div class="card-title">

            <h3 class="heading heading-6 strong-500 pull-left">

                <b>Profile Information</b>

            </h3>

            <div class="pull-right">

                {{-- <a href="#" class="bttn bttn-base-1 btn-sm btn-shadow"><i class="ion-edit"></i>
                    Edit All</a> --}}

            </div>

        </div>

        <div class="card-body">
            <h3><span class="grey">Member ID -</span> {{ strtoupper($memberId) }} </h3>
            {{-- INTRODUCTION --}}
            <div class="intro d-flex justify-content-between align-items-center">
                <h4>Introduction</h4>
                <p><i class="fa fa-pencil" aria-hidden="true"></i></p>
            </div>

            {{-- BASIC INFORMATION --}}
            <div class="intro">
                <div class=" d-flex justify-content-between align-items-center">
                    <h4>Basic Information</h4>
                    <!-- Display Validation Errors -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif

                    @if ($editBasicInfo)
                        <p wire:click="edit_basic_info_show"><i class="fa fa-times" aria-hidden="true"></i></p>
                        <p wire:click="update_info"><i class="fa fa-check" aria-hidden="true"></i></p>
                    @else
                        <p wire:click="edit_basic_info_show"><i class="fa fa-pencil" aria-hidden="true"></i></p>
                    @endif
                </div>
                <div class="d-flex align-items-start mt-4">
                    <table class="table table-striped">
                        <tr>
                            <th>First Name</th>
                            @if ($editBasicInfo)
                                <td><input class="form-control" type="text" wire:model="form.name"></td>
                            @else
                                {{-- <td>{{$user->user_detail->gender == 1 ? "Male" :"Female" }}</td> --}}
                                <td>{{ $user->name }}</td>
                            @endif
                        </tr>
                        <tr>
                            {{-- @dd($user) --}}
                            <th>Gender</th>
                            @if ($editBasicInfo)
                                <td>
                                    {{-- <input class="form-control" value=" " type="text" wire:model="form.gender"> --}}
                                    <select class="form-select" aria-label="Default select example"name=""
                                        wire:model="form.gender">
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                    </select>
                                </td>
                            @else
                                <td>{{ $user->user_detail->gender == 1 ? 'Male' : 'Female' }}</td>
                            @endif
                        </tr>
                        <tr>
                            <th>Age</th>
                            <td>34</td>
                        </tr>
                        <tr>
                            <th> Number of Children</th>
                            @if ($editBasicInfo)
                                <td><input class="form-control" type="text" wire:model="form.no_of_children"></td>
                            @else
                                <td>{{ $user->user_detail->no_of_children }}</td>
                            @endif
                        </tr>
                        <tr>
                            <th>On Behalf</th>
                            @if ($editBasicInfo)
                                <td><input class="form-control" type="text" wire:model="form.on_behalf">
                                </td>
                            @else
                                <td>{{ $user->user_detail->on_behalf }}</td>
                            @endif
                        </tr>
                        <tr>
                            <th>Date of Birth</th>
                            @if ($editBasicInfo)
                                <td><input class="form-control" type="text" wire:model="form.dob"></td>
                            @else
                                <td>{{ $user->user_detail->dob }}</td>
                            @endif
                        </tr>
                        <tr>
                            <th><strong>Speacial Case</strong></th>
                            <td></td>
                        </tr>
                    </table>

                    <table class="table table-striped">
                        <tr>
                            <th>Last Name</th>
                            @if ($editBasicInfo)
                                <td><input class="form-control" type="text" wire:model="form.last_name">
                                </td>
                            @else
                                <td>{{ $user->last_name }}</td>
                            @endif
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>1256565535@gmail.com</td>
                        </tr>
                        <tr>
                            <th>Marital Status</th>
                            @if ($editBasicInfo)
                                <td><input class="form-control" type="text" wire:model="form.marital_status"></td>
                            @else
                                <td>{{ $user->user_detail->marital_status }}</td>
                            @endif
                        </tr>
                        <tr>
                            <th>Area</th>
                            @if ($editBasicInfo)
                                <td><input class="form-control" type="text" wire:model="form.area"></td>
                            @else
                                <td>{{ $user->user_detail->area }}</td>
                            @endif
                        </tr>
                        <tr>
                            <th>Mobile</th>
                            @if ($editBasicInfo)
                                <td><input class="form-control" value="{{ $user->user_detail->phone }}" type="text"
                                        wire:model="form.phone"></td>
                            @else
                                <td>{{ $user->user_detail->phone }}</td>
                            @endif
                        </tr>
                        <tr>
                            <th>Whatsapp No.</th>
                            @if ($editBasicInfo)
                                <td><input class="form-control" value="{{ $user->user_detail->wp_no }}" type="text"
                                        wire:model="form.wp_no"></td>
                            @else
                                <td>{{ $user->user_detail->wp_no }}</td>
                            @endif
                        </tr>
                    </table>
                </div>
            </div>
            @if ($is_view_profile)


                {{-- PRESENT ADDRESS --}}
                <div class="intro">
                    <div class=" d-flex justify-content-between align-items-center">
                        <h4>Present Address</h4>
                        <div class="d-flex align-items-center gap-2">
                            @if ($editAddress)
                                <p wire:click="edit_address_show"><i class="fa fa-times" aria-hidden="true"></i></p>
                                <p wire:click="update_info"><i class="fa fa-check" aria-hidden="true"></i></p>
                            @else
                                <p wire:click="edit_address_show"><i class="fa fa-pencil" aria-hidden="true"></i></p>
                            @endif
                        </div>
                    </div>
                    <div class="d-flex align-items-start mt-4">
                        <table class="table table-striped">
                            <tr>
                                <th>COUNTRY</th>
                                @if ($editAddress)
                                    <td><input class="form-control" value="{{ $user->user_detail->country }}"
                                            type="text" wire:model="form.country"></td>
                                @else
                                    {{-- <td>{{ $user->user_detail->wp_no }}</td> --}}
                                    <td>{{ $user->user_detail->country }}</td>
                                @endif
                            </tr>
                            <tr>
                                <th>CITY</th>
                                @if ($editAddress)
                                    <td><input class="form-control" value="{{ $user->user_detail->city }}"
                                            type="text" wire:model="form.city"></td>
                                @else
                                    <td>{{ $user->user_detail->city }}</td>
                                @endif
                            </tr>
                            <tr>
                                <th>FULL ADDRESS</th>
                                @if ($editAddress)
                                    <td><input class="form-control" value="{{ $user->user_detail->address }}"
                                            type="text" wire:model="form.address"></td>
                                @else
                                    <td>{{ $user->user_detail->address }}</td>
                                @endif
                            </tr>
                        </table>

                        <table class="table table-striped">
                            <tr>
                                <th>STATE</th>
                                @if ($editAddress)
                                    <td><input class="form-control" value="{{ $user->user_detail->state }}"
                                            type="text" wire:model="form.state"></td>
                                @else
                                    <td>{{ $user->user_detail->state }}</td>
                                @endif
                            </tr>
                        </table>
                    </div>
                </div>

                {{-- EDUCATION AND CAREER --}}
                <div class="intro">
                    <div class=" d-flex justify-content-between align-items-center">
                        <h4>Education And Career</h4>
                        <div class="d-flex align-items-center gap-2">
                            {{-- <button><i class="fa fa-unlock" aria-hidden="true"></i> Show</button>
                            <p><i class="fa fa-pencil" aria-hidden="true"></i></p> --}}
                            @if ($editQualification)
                                <p wire:click="edit_qualification_show"><i class="fa fa-times"
                                        aria-hidden="true"></i></p>
                                <p wire:click="update_info"><i class="fa fa-check" aria-hidden="true"></i></p>
                            @else
                                <p wire:click="edit_qualification_show"><i class="fa fa-pencil"
                                        aria-hidden="true"></i></p>
                            @endif
                        </div>
                    </div>
                    <div class="d-flex align-items-start mt-4">
                        <table class="table table-striped">
                            <tr>
                                <th>HIGHEST EDUCATION</th>
                                @if ($editQualification)
                                    <td><input class="form-control"
                                            value="{{ $user->user_detail->highest_education }}" type="text"
                                            wire:model="form.highest_education"></td>
                                @else
                                    <td>{{ $user->user_detail->highest_education }}</td>
                                @endif
                            </tr>
                            <tr>
                                <th>EDUCATION DETAIL</th>
                                @if ($editQualification)
                                    <td><input class="form-control" value="{{ $user->user_detail->edu_details }}"
                                            type="text" wire:model="form.edu_details"></td>
                                @else
                                    <td>{{ $user->user_detail->edu_details }}</td>
                                @endif
                            </tr>
                            <tr>
                                <th>ANNUAL INCOME</th>
                                @if ($editQualification)
                                    <td><input class="form-control" value="{{ $user->user_detail->annual_income }}"
                                            type="text" wire:model="form.edu_dannual_incomeetails"></td>
                                @else
                                    <td>{{ $user->user_detail->annual_income }}</td>
                                @endif
                            </tr>
                        </table>

                        <table class="table table-striped">
                            <tr>
                                <th>OCCUPATION</th>
                                @if ($editQualification)
                                    <td><input class="form-control" value="{{ $user->user_detail->occupation }}"
                                            type="text" wire:model="form.occupation"></td>
                                @else
                                    <td>{{ $user->user_detail->occupation }}</td>
                                @endif
                            </tr>
                            <tr>
                                <th>POSTING PLACE</th>
                                @if ($editQualification)
                                    <td><input class="form-control" value="{{ $user->user_detail->posting_place }}"
                                            type="text" wire:model="form.posting_place"></td>
                                @else
                                    <td>{{ $user->user_detail->posting_place }}</td>
                                @endif
                            </tr>
                            <tr>
                                <th>Other OCCUPATION</th>
                                @if ($editQualification)
                                <td><input class="form-control" value="{{ $user->user_detail->other_occupation }}"
                                        type="text" wire:model="form.other_occupation"></td>
                            @else
                                <td>{{ $user->user_detail->other_occupation }}</td>
                            @endif
                            </tr>
                        </table>
                    </div>
                </div>

                {{-- Physical Attributes --}}
                <div class="intro">
                    <div class=" d-flex justify-content-between align-items-center">
                        <h4>Physical Attributes</h4>
                        <div class="d-flex align-items-center gap-2">
                            <button><i class="fa fa-unlock" aria-hidden="true"></i> Show</button>
                            <p><i class="fa fa-pencil" aria-hidden="true"></i></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start mt-4">
                        <table class="table table-striped">
                            <tr>
                                <th>HEIGHT</th>
                                <td>{{ $user->user_detail->height }}</td>
                            </tr>
                            <tr>
                                <th>COMPLEXION</th>
                                <td>{{ $user->user_detail->complexion }}</td>
                            </tr>
                            <tr>
                                <th>BODY TYPE</th>
                                <td>{{ $user->user_detail->body_type }}</td>
                            </tr>
                        </table>

                        <table class="table table-striped">
                            <tr>
                                <th>WEIGHT</th>
                                <td>{{ $user->user_detail->weight }}</td>
                            </tr>
                            <tr>
                                <th>BLOOD GROUP</th>
                                <td>{{ $user->user_detail->blood_group }}</td>
                            </tr>
                            <tr>
                                <th>ANY DISABILITY</th>
                                <td>{{ $user->user_detail->any_disability }}</td>
                            </tr>
                        </table>
                    </div>
                </div>

                {{-- Spiritual And Social Background --}}
                <div class="intro">
                    <div class=" d-flex justify-content-between align-items-center">
                        <h4>Spiritual And Social Background</h4>
                        <div class="d-flex align-items-center gap-2">
                            <button><i class="fa fa-unlock" aria-hidden="true"></i> Show</button>
                            <p><i class="fa fa-pencil" aria-hidden="true"></i></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start mt-4">
                        <table class="table table-striped">
                            <tr>
                                <th>RELIGION</th>
                                <td>{{ $user->user_detail->religion }}</td>
                            </tr>
                            <tr>
                                <th>SUB-CASTE</th>
                                <td>{{ $user->user_detail->sub_caste }}</td>
                            </tr>
                            <tr>
                                <th>FAMILY VALUES</th>
                                <td>{{ $user->user_detail->family_values }}</td>
                            </tr>
                        </table>

                        <table class="table table-striped">
                            <tr>
                                <th>CASTE / SECT</th>
                                <td>{{ $user->user_detail->caste }}</td>
                            </tr>
                            <tr>
                                <th>GOTRA</th>
                                <td>
                                    <{{ $user->user_detail->gotra }} /td>
                            </tr>
                            <tr>
                                <th>FAMILY STATUS</th>
                                <td>{{ $user->user_detail->family_status }}</td>
                            </tr>
                        </table>
                    </div>
                </div>

                {{-- Astronomic Information --}}
                <div class="intro">
                    <div class=" d-flex justify-content-between align-items-center">
                        <h4>Astronomic Information</h4>
                        <div class="d-flex align-items-center gap-2">
                            <button><i class="fa fa-unlock" aria-hidden="true"></i> Show</button>
                            <p><i class="fa fa-pencil" aria-hidden="true"></i></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start mt-4">
                        <table class="table table-striped">
                            <tr>
                                <th>SUN SIGN</th>
                                <td>{{ $user->user_detail->sun_sign }}</td>
                            </tr>
                            <tr>
                                <th>CITY OF BIRTH</th>
                                <td>{{ $user->user_detail->birth_city }}</td>
                            </tr>
                        </table>

                        <table class="table table-striped">
                            <tr>
                                <th>MOON SIGN</th>
                                <td>{{ $user->user_detail->moon_sign }}</td>
                            </tr>
                            <tr>
                                <th>TIME OF BIRTH</th>
                                <td>{{ $user->user_detail->time_of_birth }}</td>
                            </tr>
                        </table>
                    </div>
                </div>

                {{-- Family Information --}}
                <div class="intro">
                    <div class=" d-flex justify-content-between align-items-center">
                        <h4>Family Information</h4>
                        <div class="d-flex align-items-center gap-2">
                            <button><i class="fa fa-unlock" aria-hidden="true"></i> Show</button>
                            <p><i class="fa fa-pencil" aria-hidden="true"></i></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start mt-4">
                        <table class="table table-striped">
                            <tr>
                                <th>FAMILY RESIDENCE</th>
                                <td>{{ $user->user_detail->family_residence }}</td>
                            </tr>
                            <tr>
                                <th>FATHER</th>
                                <td>{{ $user->user_detail->father }}</td>
                            </tr>
                            <tr>
                                <th>MOTHER</th>
                                <td>{{ $user->user_detail->mother }}</td>
                            </tr>
                            <tr>
                                <th>BROTHER</th>
                                <td>{{ $user->user_detail->brother }}</td>
                            </tr>
                            <tr>
                                <th>SISTER</th>
                                <td>{{ $user->user_detail->sister }}</td>
                            </tr>
                        </table>

                        <table class="table table-striped">
                            <tr>
                                <th>NATIVE PLACE</th>
                                <td>{{ $user->user_detail->native_place }}</td>
                            </tr>
                            <tr>
                                <th>FATHER OCCUPATION</th>
                                <td>{{ $user->user_detail->father_occupation }}</td>
                            </tr>
                            <tr>
                                <th>MOTHER OCCUPATION</th>
                                <td>{{ $user->user_detail->mother_occupation }}</td>
                            </tr>
                            <tr>
                                <th>BROTHER OCCUPATION</th>
                                <td>{{ $user->user_detail->brother_occupation }}</td>
                            </tr>
                            <tr>
                                <th>SISTER OCCUPATION</th>
                                <td>{{ $user->user_detail->sister_occupation }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            @endif
            {{-- Partner Expectation --}}
            {{-- <div class="intro">
                <div class=" d-flex justify-content-between align-items-center">
                    <h4>Partner Expectation</h4>
                    <div class="d-flex align-items-center gap-2">
                        <button><i class="fa fa-unlock" aria-hidden="true"></i> Show</button>
                        <p><i class="fa fa-pencil" aria-hidden="true"></i></p>
                    </div>
                </div>
                <div class="d-flex align-items-start mt-4">
                    <table class="table table-striped">
                        <tr>
                            <th>GENERAL REQUIREMENT</th>
                            <td>{{ $user->user_detail->partner_exp_general_requirement }}</td>
                        </tr>
                        <tr>
                            <th>HEIGHT</th>
                            <td>{{ $user->user_detail->partner_exp_height }}</td>
                        </tr>
                        <tr>
                            <th>MARITAL STATUS</th>
                            <td>{{ $user->user_detail->partner_exp_marital_status }}</td>
                        </tr>
                        <tr>
                            <th>COUNTRY OF RESIDENCE</th>
                            <td>{{ $user->user_detail->partner_exp_country_of_residence }}</td>
                        </tr>
                        <tr>
                            <th>CASTE / SECT</th>
                            <td>{{ $user->user_detail->partner_exp_caste }}</td>
                        </tr>
                        <tr>
                            <th>EDUCATION</th>
                            <td>{{ $user->user_detail->partner_exp_education }}</td>
                        </tr>
                        <tr>
                            <th>DRINKING HABITS</th>
                            <td>{{ $user->user_detail->partner_exp_drinking_habits }}</td>
                        </tr>
                        <tr>
                            <th>DIET</th>
                            <td>{{ $user->user_detail->partner_exp_diet }}</td>
                        </tr>
                        <tr>
                            <th>MANGLIK</th>
                            <td>{{ $user->user_detail->partner_exp_manglik }}</td>
                        </tr>
                        <tr>
                            <th>FAMILY VALUES</th>
                            <td>{{ $user->user_detail->partner_exp_family_values }}</td>
                        </tr>
                        <tr>
                            <th>PREFERED COUNTRY</th>
                            <td>{{ $user->user_detail->partner_exp_prefered_countries }}</td>
                        </tr>
                        <tr>
                            <th>PREFER CITIES</th>
                            <td>{{ $user->user_detail->partner_exp_prefered_cities }}</td>
                        </tr>
                    </table>

                    <table class="table table-striped">
                        <tr>
                            <th>AGE</th>
                            <td>{{ $user->user_detail->partner_exp_age }}</td>
                        </tr>
                        <tr>
                            <th>WEIGHT</th>
                            <td>{{ $user->user_detail->partner_exp_weight }}</td>
                        </tr>
                        <tr>
                            <th>WITH CHILDREN ACCEPTABLES</th>
                            <td>{{ $user->user_detail->partner_exp_with_child }}</td>
                        </tr>
                        <tr>
                            <th>RELIGION</th>
                            <td>{{ $user->user_detail->partner_exp_religion }}</td>
                        </tr>
                        <tr>
                            <th>SUB CASTE</th>
                            <td>{{ $user->user_detail->partner_exp_sub_caste }}</td>
                        </tr>
                        <tr>
                            <th>PROFESSION</th>
                            <td>{{ $user->user_detail->partner_exp_profession }}</td>
                        </tr>
                        <tr>
                            <th>SMOKING HABITS</th>
                            <td>{{ $user->user_detail->partner_exp_smoking }}</td>
                        </tr>
                        <tr>
                            <th>BODY TYPE</th>
                            <td>{{ $user->user_detail->partner_exp_bodyType }}</td>
                        </tr>
                        <tr>
                            <th>ANY DISABILITY</th>
                            <td>{{ $user->user_detail->partner_exp_disability }}</td>
                        </tr>
                        <tr>
                            <th>FAMILY STATUS</th>
                            <td>{{ $user->user_detail->partner_exp_family_stat }}</td>
                        </tr>
                        <tr>
                            <th>PREFERED STATE</th>
                            <td>{{ $user->user_detail->partner_exp_prefered_state }}</td>
                        </tr>
                    </table>
                </div>
            </div> --}}

        </div>
    </div>
</div>
