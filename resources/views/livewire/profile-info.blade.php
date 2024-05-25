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
                            <td>0</td>z
                        </tr>
                        <tr>
                            <th>On Behalf</th>
                            <td>Kshadi</td>
                        </tr>
                        <tr>
                            <th>Date of Birth</th>
                            <td>23/07/1990</td>
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
                            <td>Never Married</td>
                        </tr>
                        <tr>
                            <th>Area</th>
                            <td>Ballia</td>
                        </tr>
                        <tr>
                            <th>Mobile</th>
                            <td>9500139695</td>
                        </tr>
                        <tr>
                            <th>Whatsapp No.</th>
                            <td>8988201172</td>
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
                            <td>Bharat</td>
                        </tr>
                        <tr>
                            <th>CITY</th>
                            <td>Ballia</td>
                        </tr>
                        <tr>
                            <th>FULL ADDRESS</th>
                            <td></td>
                        </tr>
                    </table>

                    <table class="table table-striped">
                        <tr>
                            <th>STATE</th>
                            <td>Uttar Pradesh</td>
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
                            <td>B.Tech & M.ba</td>
                        </tr>
                        <tr>
                            <th>EDUCATION DETAIL</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>ANNUAL INCOME</th>
                            <td></td>
                        </tr>
                    </table>

                    <table class="table table-striped">
                        <tr>
                            <th>OCCUPATION</th>
                            <td>Manager</td>
                        </tr>
                        <tr>
                            <th>POSTING PLACE</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Other OCCUPATION</th>
                            <td>Assistant manager</td>
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
                            <td>5.10 Feet</td>
                        </tr>
                        <tr>
                            <th>COMPLEXION</th>
                            <td>Wheatish</td>
                        </tr>
                        <tr>
                            <th>BODY TYPE</th>
                            <td></td>
                        </tr>
                    </table>

                    <table class="table table-striped">
                        <tr>
                            <th>WEIGHT</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>BLOOD GROUP</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>ANY DISABILITY</th>
                            <td></td>
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
                            <td>Hindu</td>
                        </tr>
                        <tr>
                            <th>SUB-CASTE</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>FAMILY VALUES</th>
                            <td></td>
                        </tr>
                    </table>

                    <table class="table table-striped">
                        <tr>
                            <th>CASTE / SECT</th>
                            <td>Kushwaha</td>
                        </tr>
                        <tr>
                            <th>GOTRA</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>FAMILY STATUS</th>
                            <td></td>
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
                            <td></td>
                        </tr>
                        <tr>
                            <th>CITY OF BIRTH</th>
                            <td></td>
                        </tr>
                    </table>

                    <table class="table table-striped">
                        <tr>
                            <th>MOON SIGN</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>TIME OF BIRTH</th>
                            <td></td>
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
                            <td></td>
                        </tr>
                        <tr>
                            <th>FATHER</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>MOTHER</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>BROTHER</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>SISTER</th>
                            <td></td>
                        </tr>
                    </table>

                    <table class="table table-striped">
                        <tr>
                            <th>NATIVE PLACE</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>FATHER OCCUPATION</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>MOTHER OCCUPATION</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>BROTHER OCCUPATION</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>SISTER OCCUPATION</th>
                            <td></td>
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
                            <td></td>
                        </tr>
                        <tr>
                            <th>HEIGHT</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>MARITAL STATUS</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>COUNTRY OF RESIDENCE</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>CASTE / SECT</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>EDUCATION</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>DRINKING HABITS</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>DIET</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>MANGLIK</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>FAMILY VALUES</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>PREFERED COUNTRY</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>PREFER CITIES</th>
                            <td></td>
                        </tr>
                    </table>

                    <table class="table table-striped">
                        <tr>
                            <th>AGE</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>WEIGHT</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>WITH CHILDREN ACCEPTABLES</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>RELIGION</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>SUB CASTE</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>PROFESSION</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>SMOKING HABITS</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>BODY TYPE</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>ANY DISABILITY</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>FAMILY STATUS</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>PREFERED STATE</th>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
