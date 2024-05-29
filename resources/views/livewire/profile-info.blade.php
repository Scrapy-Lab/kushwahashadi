

<div class="col-md-7">
    <div class="card z-depth-2-top">
        <div class="card-title">

            <h3 class="heading heading-6 strong-500 pull-left">

                <b>Profile Information</b>

            </h3>

            <div class="pull-right">

                <a href="#" class="bttn bttn-base-1 btn-sm btn-shadow"><i class="ion-edit"></i>
                    Edit All</a>

            </div>

        </div>
        <div class="card-body">
            <h3><span class="grey">Member ID -</span> 75DEE6ED4592 </h3>
            {{-- INTRODUCTION --}}
            <div class="intro d-flex justify-content-between align-items-center">
                <h4>Introduction</h4>
                <p><i class="fa fa-pencil" aria-hidden="true"></i></p>
            </div>

            {{-- BASIC INFORMATION --}}
            <div class="intro">
                <div class=" d-flex justify-content-between align-items-center">
                    <h4>Basic Information</h4>
                    <p><i class="fa fa-pencil" aria-hidden="true"></i></p>
                </div>
                <div class="d-flex align-items-start mt-4">
                    <table class="table table-striped">
                        <tr>
                            <th>First Name</th>
                            <td>{{$user->name}}</td>
                        </tr>
                        <tr>
                            <th>Gender</th>
                            <td>{{$user_details->gender == 1 ? "Male" :"Female" }}</td>
                        </tr>
                        <tr>
                            <th>Age</th>
                            <td>34</td>
                        </tr>
                        <tr>
                            <th> Number of Children</th>
                            <td>{{$user_details->no_of_children}}</td>z
                        </tr>
                        <tr>
                            <th>On Behalf</th>
                            <td>{{$user_details->on_behalf}}</td>
                        </tr>
                        <tr>
                            <th>Date of Birth</th>
                            <td>{{$user_details->dob}}</td>
                        </tr>
                        <tr>
                            <th><strong>Speacial Case</strong></th>
                            <td></td>
                        </tr>
                    </table>

                    <table class="table table-striped">
                        <tr>
                            <th>Last Name</th>
                            <td>{{$user->last_name}}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>1256565535@gmail.com</td>
                        </tr>
                        <tr>
                            <th>Marital Status</th>
                            <td>{{$user_details->martial_status}}</td>
                        </tr>
                        <tr>
                            <th>Area</th>
                            <td>{{$user_details->area}}</td>
                        </tr>
                        <tr>
                            <th>Mobile</th>
                            <td>{{$user_details->phone}}</td>
                        </tr>
                        <tr>
                            <th>Whatsapp No.</th>
                            <td>{{$user_details->wp_no}}</td>
                        </tr>
                    </table>
                </div>
            </div>

            {{-- PRESENT ADDRESS --}}
            <div class="intro">
                <div class=" d-flex justify-content-between align-items-center">
                    <h4>Present Address</h4>
                    <div class="d-flex align-items-center gap-2">
                        <button><i class="fa fa-unlock" aria-hidden="true"></i> Show</button>
                        <p><i class="fa fa-pencil" aria-hidden="true"></i></p>
                    </div>
                </div>
                <div class="d-flex align-items-start mt-4">
                    <table class="table table-striped">
                        <tr>
                            <th>COUNTRY</th>
                            <td>{{$user_details->country}}</td>
                        </tr>
                        <tr>
                            <th>CITY</th>
                            <td>{{$user_details->city}}</td>
                        </tr>
                        <tr>
                            <th>FULL ADDRESS</th>
                            <td>{{$user_details->address}}</td>
                        </tr>
                    </table>

                    <table class="table table-striped">
                        <tr>
                            <th>STATE</th>
                            <td>{{$user_details->state}}</td>
                        </tr>
                    </table>
                </div>
            </div>

            {{-- EDUCATION AND CAREER --}}
            <div class="intro">
                <div class=" d-flex justify-content-between align-items-center">
                    <h4>Education And Career</h4>
                    <div class="d-flex align-items-center gap-2">
                        <button><i class="fa fa-unlock" aria-hidden="true"></i> Show</button>
                        <p><i class="fa fa-pencil" aria-hidden="true"></i></p>
                    </div>
                </div>
                <div class="d-flex align-items-start mt-4">
                    <table class="table table-striped">
                        <tr>
                            <th>HIGHEST EDUCATION</th>
                            <td>{{$user_details->highest_education}}</td>
                        </tr>
                        <tr>
                            <th>EDUCATION DETAIL</th>
                            <td>{{$user_details->edu_details}}</td>
                        </tr>
                        <tr>
                            <th>ANNUAL INCOME</th>
                            <td>{{$user_details->annual_income}}</td>
                        </tr>
                    </table>

                    <table class="table table-striped">
                        <tr>
                            <th>OCCUPATION</th>
                            <td>{{$user_details->occupation}}</td>
                        </tr>
                        <tr>
                            <th>POSTING PLACE</th>
                            <td>{{$user_details->posting_place}}</td>
                        </tr>
                        <tr>
                            <th>Other OCCUPATION</th>
                            <td>{{$user_details->other_occupation}}</td>
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
                            <td>{{$user_details->height}}</td>
                        </tr>
                        <tr>
                            <th>COMPLEXION</th>
                            <td>{{$user_details->complexion}}</td>
                        </tr>
                        <tr>
                            <th>BODY TYPE</th>
                            <td>{{$user_details->body_type}}</td>
                        </tr>
                    </table>

                    <table class="table table-striped">
                        <tr>
                            <th>WEIGHT</th>
                            <td>{{$user_details->wight}}</td>
                        </tr>
                        <tr>
                            <th>BLOOD GROUP</th>
                            <td>{{$user_details->blood_group}}</td>
                        </tr>
                        <tr>
                            <th>ANY DISABILITY</th>
                            <td>{{$user_details->any_disability}}</td>
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
                            <td>{{$user_details->religion}}</td>
                        </tr>
                        <tr>
                            <th>SUB-CASTE</th>
                            <td>{{$user_details->sub_caste}}</td>
                        </tr>
                        <tr>
                            <th>FAMILY VALUES</th>
                            <td>{{$user_details->family_values}}</td>
                        </tr>
                    </table>

                    <table class="table table-striped">
                        <tr>
                            <th>CASTE / SECT</th>
                            <td>{{$user_details->caste}}</td>
                        </tr>
                        <tr>
                            <th>GOTRA</th>
                            <td><{{$user_details->gotra}}/td>
                        </tr>
                        <tr>
                            <th>FAMILY STATUS</th>
                            <td>{{$user_details->family_status}}</td>
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
                            <td>{{$user_details->sun_sign}}</td>
                        </tr>
                        <tr>
                            <th>CITY OF BIRTH</th>
                            <td>{{$user_details->birth_city}}</td>
                        </tr>
                    </table>

                    <table class="table table-striped">
                        <tr>
                            <th>MOON SIGN</th>
                            <td>{{$user_details->moon_sign}}</td>
                        </tr>
                        <tr>
                            <th>TIME OF BIRTH</th>
                            <td>{{$user_details->time_of_birth}}</td>
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
                            <td>{{$user_details->family_residence}}</td>
                        </tr>
                        <tr>
                            <th>FATHER</th>
                            <td>{{$user_details->father}}</td>
                        </tr>
                        <tr>
                            <th>MOTHER</th>
                            <td>{{$user_details->mother}}</td>
                        </tr>
                        <tr>
                            <th>BROTHER</th>
                            <td>{{$user_details->brother}}</td>
                        </tr>
                        <tr>
                            <th>SISTER</th>
                            <td>{{$user_details->sister}}</td>
                        </tr>
                    </table>

                    <table class="table table-striped">
                        <tr>
                            <th>NATIVE PLACE</th>
                            <td>{{$user_details->native_place}}</td>
                        </tr>
                        <tr>
                            <th>FATHER OCCUPATION</th>
                            <td>{{$user_details->father_occupation}}</td>
                        </tr>
                        <tr>
                            <th>MOTHER OCCUPATION</th>
                            <td>{{$user_details->mother_occupation}}</td>
                        </tr>
                        <tr>
                            <th>BROTHER OCCUPATION</th>
                            <td>{{$user_details->brother_occupation}}</td>
                        </tr>
                        <tr>
                            <th>SISTER OCCUPATION</th>
                            <td>{{$user_details->sister_occupation}}</td>
                        </tr>
                    </table>
                </div>
            </div>

            {{-- Partner Expectation --}}
            <div class="intro">
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
                            <td>{{$user_details->partner_exp_general_requirement}}</td>
                        </tr>
                        <tr>
                            <th>HEIGHT</th>
                            <td>{{$user_details->partner_exp_height}}</td>
                        </tr>
                        <tr>
                            <th>MARITAL STATUS</th>
                            <td>{{$user_details->partner_exp_marital_status}}</td>
                        </tr>
                        <tr>
                            <th>COUNTRY OF RESIDENCE</th>
                            <td>{{$user_details->partner_exp_country_of_residence}}</td>
                        </tr>
                        <tr>
                            <th>CASTE / SECT</th>
                            <td>{{$user_details->partner_exp_caste}}</td>
                        </tr>
                        <tr>
                            <th>EDUCATION</th>
                            <td>{{$user_details->partner_exp_education}}</td>
                        </tr>
                        <tr>
                            <th>DRINKING HABITS</th>
                            <td>{{$user_details->partner_exp_drinking_habits}}</td>
                        </tr>
                        <tr>
                            <th>DIET</th>
                            <td>{{$user_details->partner_exp_diet}}</td>
                        </tr>
                        <tr>
                            <th>MANGLIK</th>
                            <td>{{$user_details->partner_exp_manglik}}</td>
                        </tr>
                        <tr>
                            <th>FAMILY VALUES</th>
                            <td>{{$user_details->partner_exp_family_values}}</td>
                        </tr>
                        <tr>
                            <th>PREFERED COUNTRY</th>
                            <td>{{$user_details->partner_exp_prefered_countries}}</td>
                        </tr>
                        <tr>
                            <th>PREFER CITIES</th>
                            <td>{{$user_details->partner_exp_prefered_cities}}</td>
                        </tr>
                    </table>

                    <table class="table table-striped">
                        <tr>
                            <th>AGE</th>
                            <td>{{$user_details->native_place}}</td>
                        </tr>
                        <tr>
                            <th>WEIGHT</th>
                            <td>{{$user_details->native_place}}</td>
                        </tr>
                        <tr>
                            <th>WITH CHILDREN ACCEPTABLES</th>
                            <td>{{$user_details->native_place}}</td>
                        </tr>
                        <tr>
                            <th>RELIGION</th>
                            <td>{{$user_details->native_place}}</td>
                        </tr>
                        <tr>
                            <th>SUB CASTE</th>
                            <td>{{$user_details->native_place}}</td>
                        </tr>
                        <tr>
                            <th>PROFESSION</th>
                            <td>{{$user_details->native_place}}</td>
                        </tr>
                        <tr>
                            <th>SMOKING HABITS</th>
                            <td>{{$user_details->native_place}}</td>
                        </tr>
                        <tr>
                            <th>BODY TYPE</th>
                            <td>{{$user_details->native_place}}</td>
                        </tr>
                        <tr>
                            <th>ANY DISABILITY</th>
                            <td>{{$user_details->native_place}}</td>
                        </tr>
                        <tr>
                            <th>FAMILY STATUS</th>
                            <td>{{$user_details->native_place}}</td>
                        </tr>
                        <tr>
                            <th>PREFERED STATE</th>
                            <td>{{$user_details->native_place}}</td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
