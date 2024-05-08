@extends('layouts.app')
@section('content')
    {{-- Dashboard --}}
    <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button"
                    role="tab" aria-controls="tab1" aria-selected="true"><i class="fa fa-user" aria-hidden="true"></i>
                    Profile</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab"
                    aria-controls="tab2" aria-selected="false"><i class="fa fa-heart" aria-hidden="true"></i> My
                    Interests</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab"
                    aria-controls="tab3" aria-selected="false"><i class="fa fa-list-ul" aria-hidden="true"></i>
                    Shortlist</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#tab4" type="button" role="tab"
                    aria-controls="tab4" aria-selected="false"><i class="fa fa-star" aria-hidden="true"></i> Followed
                    Users</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="tab5-tab" data-bs-toggle="tab" data-bs-target="#tab5" type="button" role="tab"
                    aria-controls="tab5" aria-selected="false"><i class="fa fa-comments-o" aria-hidden="true"></i>
                    Messaging</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="tab6-tab" data-bs-toggle="tab" data-bs-target="#tab6" type="button" role="tab"
                    aria-controls="tab6" aria-selected="false"><i class="fa fa-ban" aria-hidden="true"></i> Ignored List</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">


            {{-- PROFILE CONTENT --}}
            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                <div class="row align-items-start justify-content-between">
                    <div class="col-md-4 text-center mainProfile">
                        <img src="images/profileIMg.jpeg" alt="">
                        <div class="profile-details">
                            <h2 class="heading heading-3 strong-500 profile-name">shashi kant verma</h2>
                            <h3 class="heading heading-6 strong-400 profile-occupation mt-3">14</h3>
                            <div class="profile-stats clearfix mt-2">
                                <div class="stats-entry" style="width: 100%">
                                    <span class="stats-count">0</span>
                                    <span class="stats-label text-uppercase">Followers</span>
                                </div>
                            </div>
                            <!-- Profile connect -->
                            <div class="profile-connect mt-5">
                                <!-- <a href="#" class="btn btn-styled btn-block btn-circle btn-sm btn-base-5">Follow</a>
                                            <a href="#" class="btn btn-styled btn-block btn-circle btn-sm btn-base-2">Send message</a> -->
                                <h2 class="heading heading-5 strong-400">Package Informations</h2>
                            </div>
                            <div class="profile-stats clearfix mt-0">
                                <div class="stats-entry">
                                    <span class="stats-count"> Free </span>
                                    <span class="stats-label text-uppercase">Current Package</span>
                                </div>
                                <div class="stats-entry">
                                    <span class="stats-count">₹0.00</span>
                                    <span class="stats-label text-uppercase">Package Price</span>
                                </div>
                            </div>
                            <div class="profile-stats clearfix mt-2">
                                <div class="stats-entry">
                                    <span class="stats-count">None</span>
                                    <span class="stats-label text-uppercase">Payment Gateway</span>
                                </div>
                                <div class="stats-entry">
                                    <span class="stats-count">0</span>
                                    <span class="stats-label text-uppercase">Remaining Interest</span>
                                </div>
                            </div>
                            <div class="profile-stats clearfix mt-2">
                                <div class="stats-entry">
                                    <span class="stats-count">0</span>
                                    <span class="stats-label text-uppercase">Remaining Message</span>
                                </div>
                                <div class="stats-entry">
                                    <span class="stats-count">0</span>
                                    <span class="stats-label text-uppercase">Photo Gallery</span>
                                </div>
                            </div>
                        </div>
                        <div class="profile-useful-links clearfix">
                            <div class="useful-links">
                                <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 gallery l_nav"
                                    onclick="profile_load('gallery','alt-sm')">
                                    <b style="font-size: 12px">Gallery</b>
                                </a>
                                <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 happy_story l_nav"
                                    onclick="profile_load('happy_story','alt-sm')">
                                    <b style="font-size: 12px">Happy Story</b>
                                </a>
                                <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 my_packages l_nav"
                                    onclick="profile_load('my_packages','alt-sm')">
                                    <b style="font-size: 12px">My Package</b>
                                </a>
                                <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 payments l_nav"
                                    onclick="profile_load('payments','alt-sm')">
                                    <b style="font-size: 12px">Payment Informations</b>
                                </a>
                                <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 picture_privacy l_nav"
                                    onclick="profile_load('picture_privacy','alt-sm')">
                                    <b style="font-size: 12px">Picture Privacy</b>
                                </a>

                                <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 change_pass l_nav"
                                    onclick="profile_load('change_pass','alt-sm')">
                                    <b style="font-size: 12px">Change Password</b>
                                </a>

                                <div class="text-center pt-3 pb-0">
                                    <a onclick="profile_load('close_account')">
                                        <i class="fa fa-lock"></i>
                                        Close Account </a>
                                </div>
                            </div>
                        </div>
                    </div>


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
                                                <td>Sashi Kant</td>
                                            </tr>
                                            <tr>
                                                <th>Gender</th>
                                                <td>Male</td>
                                            </tr>
                                            <tr>
                                                <th>Age</th>
                                                <td>34</td>
                                            </tr>
                                            <tr>
                                                <th> Number of Children</th>
                                                <td>0</td>
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
                                                <td>Verma</td>
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
                </div>
            </div>

            {{-- PROFILE CONTENT END --}}


            {{-- My INtersts --}}
            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                <div class="row align-items-start justify-content-between">
                    <div class="col-md-4 text-center mainProfile">
                        <img src="images/profileIMg.jpeg" alt="">
                        <div class="profile-details">
                            <h2 class="heading heading-3 strong-500 profile-name">shashi kant verma</h2>
                            <h3 class="heading heading-6 strong-400 profile-occupation mt-3">14</h3>
                            <div class="profile-stats clearfix mt-2">
                                <div class="stats-entry" style="width: 100%">
                                    <span class="stats-count">0</span>
                                    <span class="stats-label text-uppercase">Followers</span>
                                </div>
                            </div>
                            <!-- Profile connect -->
                            <div class="profile-connect mt-5">
                                <!-- <a href="#" class="btn btn-styled btn-block btn-circle btn-sm btn-base-5">Follow</a>
                                            <a href="#" class="btn btn-styled btn-block btn-circle btn-sm btn-base-2">Send message</a> -->
                                <h2 class="heading heading-5 strong-400">Package Informations</h2>
                            </div>
                            <div class="profile-stats clearfix mt-0">
                                <div class="stats-entry">
                                    <span class="stats-count"> Free </span>
                                    <span class="stats-label text-uppercase">Current Package</span>
                                </div>
                                <div class="stats-entry">
                                    <span class="stats-count">₹0.00</span>
                                    <span class="stats-label text-uppercase">Package Price</span>
                                </div>
                            </div>
                            <div class="profile-stats clearfix mt-2">
                                <div class="stats-entry">
                                    <span class="stats-count">None</span>
                                    <span class="stats-label text-uppercase">Payment Gateway</span>
                                </div>
                                <div class="stats-entry">
                                    <span class="stats-count">0</span>
                                    <span class="stats-label text-uppercase">Remaining Interest</span>
                                </div>
                            </div>
                            <div class="profile-stats clearfix mt-2">
                                <div class="stats-entry">
                                    <span class="stats-count">0</span>
                                    <span class="stats-label text-uppercase">Remaining Message</span>
                                </div>
                                <div class="stats-entry">
                                    <span class="stats-count">0</span>
                                    <span class="stats-label text-uppercase">Photo Gallery</span>
                                </div>
                            </div>
                        </div>
                        <div class="profile-useful-links clearfix">
                            <div class="useful-links">
                                <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 gallery l_nav"
                                    onclick="profile_load('gallery','alt-sm')">
                                    <b style="font-size: 12px">Gallery</b>
                                </a>
                                <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 happy_story l_nav"
                                    onclick="profile_load('happy_story','alt-sm')">
                                    <b style="font-size: 12px">Happy Story</b>
                                </a>
                                <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 my_packages l_nav"
                                    onclick="profile_load('my_packages','alt-sm')">
                                    <b style="font-size: 12px">My Package</b>
                                </a>
                                <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 payments l_nav"
                                    onclick="profile_load('payments','alt-sm')">
                                    <b style="font-size: 12px">Payment Informations</b>
                                </a>
                                <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 picture_privacy l_nav"
                                    onclick="profile_load('picture_privacy','alt-sm')">
                                    <b style="font-size: 12px">Picture Privacy</b>
                                </a>

                                <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 change_pass l_nav"
                                    onclick="profile_load('change_pass','alt-sm')">
                                    <b style="font-size: 12px">Change Password</b>
                                </a>

                                <div class="text-center pt-3 pb-0">
                                    <a onclick="profile_load('close_account')">
                                        <i class="fa fa-lock"></i>
                                        Close Account </a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-7">
                        <div class="card z-depth-2-top">
                            <div class="card-title">
                                <h3 class="heading heading-6 strong-500 pull-left">
                                    <b>My Interests</b>
                                </h3>

                            </div>
                            <div class="interests">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Age</th>
                                            <th>Religion</th>
                                            <th>Location</th>
                                            <th>Manglik</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="7" class="text-center">No Result Found</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- My Intrests --}}

            {{-- Shortlists --}}
            <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                <div class="row align-items-start justify-content-between">
                    <div class="col-md-4 text-center mainProfile">
                        <img src="images/profileIMg.jpeg" alt="">
                        <div class="profile-details">
                            <h2 class="heading heading-3 strong-500 profile-name">shashi kant verma</h2>
                            <h3 class="heading heading-6 strong-400 profile-occupation mt-3">14</h3>
                            <div class="profile-stats clearfix mt-2">
                                <div class="stats-entry" style="width: 100%">
                                    <span class="stats-count">0</span>
                                    <span class="stats-label text-uppercase">Followers</span>
                                </div>
                            </div>
                            <!-- Profile connect -->
                            <div class="profile-connect mt-5">
                                <!-- <a href="#" class="btn btn-styled btn-block btn-circle btn-sm btn-base-5">Follow</a>
                                            <a href="#" class="btn btn-styled btn-block btn-circle btn-sm btn-base-2">Send message</a> -->
                                <h2 class="heading heading-5 strong-400">Package Informations</h2>
                            </div>
                            <div class="profile-stats clearfix mt-0">
                                <div class="stats-entry">
                                    <span class="stats-count"> Free </span>
                                    <span class="stats-label text-uppercase">Current Package</span>
                                </div>
                                <div class="stats-entry">
                                    <span class="stats-count">₹0.00</span>
                                    <span class="stats-label text-uppercase">Package Price</span>
                                </div>
                            </div>
                            <div class="profile-stats clearfix mt-2">
                                <div class="stats-entry">
                                    <span class="stats-count">None</span>
                                    <span class="stats-label text-uppercase">Payment Gateway</span>
                                </div>
                                <div class="stats-entry">
                                    <span class="stats-count">0</span>
                                    <span class="stats-label text-uppercase">Remaining Interest</span>
                                </div>
                            </div>
                            <div class="profile-stats clearfix mt-2">
                                <div class="stats-entry">
                                    <span class="stats-count">0</span>
                                    <span class="stats-label text-uppercase">Remaining Message</span>
                                </div>
                                <div class="stats-entry">
                                    <span class="stats-count">0</span>
                                    <span class="stats-label text-uppercase">Photo Gallery</span>
                                </div>
                            </div>
                        </div>
                        <div class="profile-useful-links clearfix">
                            <div class="useful-links">
                                <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 gallery l_nav"
                                    onclick="profile_load('gallery','alt-sm')">
                                    <b style="font-size: 12px">Gallery</b>
                                </a>
                                <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 happy_story l_nav"
                                    onclick="profile_load('happy_story','alt-sm')">
                                    <b style="font-size: 12px">Happy Story</b>
                                </a>
                                <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 my_packages l_nav"
                                    onclick="profile_load('my_packages','alt-sm')">
                                    <b style="font-size: 12px">My Package</b>
                                </a>
                                <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 payments l_nav"
                                    onclick="profile_load('payments','alt-sm')">
                                    <b style="font-size: 12px">Payment Informations</b>
                                </a>
                                <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 picture_privacy l_nav"
                                    onclick="profile_load('picture_privacy','alt-sm')">
                                    <b style="font-size: 12px">Picture Privacy</b>
                                </a>

                                <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 change_pass l_nav"
                                    onclick="profile_load('change_pass','alt-sm')">
                                    <b style="font-size: 12px">Change Password</b>
                                </a>

                                <div class="text-center pt-3 pb-0">
                                    <a onclick="profile_load('close_account')">
                                        <i class="fa fa-lock"></i>
                                        Close Account </a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-7">
                        <div class="card z-depth-2-top">
                            <div class="card-title">
                                <h3 class="heading heading-6 strong-500 pull-left">
                                    <b>Short List</b>
                                </h3>

                            </div>

                            <div class="interests">
                                <table class="table table-striped table-fixed">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Age</th>
                                            <th>Religion</th>
                                            <th>Location</th>
                                            <th>Manglik</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img src="images/img12.jpg" alt=""></td>
                                            <td>Pooja Khushwaha</td>
                                            <td>32</td>
                                            <td>Hindu</td>
                                            <td>Uttar Pardesh</td>
                                            <td></td>
                                            <td><i class="fa fa-heart" aria-hidden="true"></i>
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img src="images/img12.jpg" alt=""></td>
                                            <td>Shalini Singh</td>
                                            <td>33</td>
                                            <td>Hindu</td>
                                            <td>Uttar Pardesh Bharat</td>
                                            <td></td>
                                            <td><i class="fa fa-heart" aria-hidden="true"></i>
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img src="images/img13.jpg" alt=""></td>
                                            <td>Suman Verma</td>
                                            <td>34</td>
                                            <td>Hindu</td>
                                            <td>Uttar Pardesh</td>
                                            <td></td>
                                            <td><i class="fa fa-heart" aria-hidden="true"></i>
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img src="images/img13.jpg" alt=""></td>
                                            <td>Shivani Maurya</td>
                                            <td>29</td>
                                            <td>Hindu</td>
                                            <td>Uttar Pardesh</td>
                                            <td></td>
                                            <td><i class="fa fa-heart" aria-hidden="true"></i>
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img src="images/img13.jpg" alt=""></td>
                                            <td>Sneha Lata Verma</td>
                                            <td>30</td>
                                            <td>Hindu</td>
                                            <td>Uttar Pardesh</td>
                                            <td></td>
                                            <td><i class="fa fa-heart" aria-hidden="true"></i>
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            {{-- Shortlists --}}

            {{-- Followed USers --}}
            <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
                <div class="row align-items-start justify-content-between">
                    <div class="col-md-4 text-center mainProfile">
                        <img src="images/profileIMg.jpeg" alt="">
                        <div class="profile-details">
                            <h2 class="heading heading-3 strong-500 profile-name">shashi kant verma</h2>
                            <h3 class="heading heading-6 strong-400 profile-occupation mt-3">14</h3>
                            <div class="profile-stats clearfix mt-2">
                                <div class="stats-entry" style="width: 100%">
                                    <span class="stats-count">0</span>
                                    <span class="stats-label text-uppercase">Followers</span>
                                </div>
                            </div>
                            <!-- Profile connect -->
                            <div class="profile-connect mt-5">
                                <!-- <a href="#" class="btn btn-styled btn-block btn-circle btn-sm btn-base-5">Follow</a>
                                            <a href="#" class="btn btn-styled btn-block btn-circle btn-sm btn-base-2">Send message</a> -->
                                <h2 class="heading heading-5 strong-400">Package Informations</h2>
                            </div>
                            <div class="profile-stats clearfix mt-0">
                                <div class="stats-entry">
                                    <span class="stats-count"> Free </span>
                                    <span class="stats-label text-uppercase">Current Package</span>
                                </div>
                                <div class="stats-entry">
                                    <span class="stats-count">₹0.00</span>
                                    <span class="stats-label text-uppercase">Package Price</span>
                                </div>
                            </div>
                            <div class="profile-stats clearfix mt-2">
                                <div class="stats-entry">
                                    <span class="stats-count">None</span>
                                    <span class="stats-label text-uppercase">Payment Gateway</span>
                                </div>
                                <div class="stats-entry">
                                    <span class="stats-count">0</span>
                                    <span class="stats-label text-uppercase">Remaining Interest</span>
                                </div>
                            </div>
                            <div class="profile-stats clearfix mt-2">
                                <div class="stats-entry">
                                    <span class="stats-count">0</span>
                                    <span class="stats-label text-uppercase">Remaining Message</span>
                                </div>
                                <div class="stats-entry">
                                    <span class="stats-count">0</span>
                                    <span class="stats-label text-uppercase">Photo Gallery</span>
                                </div>
                            </div>
                        </div>
                        <div class="profile-useful-links clearfix">
                            <div class="useful-links">
                                <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 gallery l_nav"
                                    onclick="profile_load('gallery','alt-sm')">
                                    <b style="font-size: 12px">Gallery</b>
                                </a>
                                <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 happy_story l_nav"
                                    onclick="profile_load('happy_story','alt-sm')">
                                    <b style="font-size: 12px">Happy Story</b>
                                </a>
                                <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 my_packages l_nav"
                                    onclick="profile_load('my_packages','alt-sm')">
                                    <b style="font-size: 12px">My Package</b>
                                </a>
                                <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 payments l_nav"
                                    onclick="profile_load('payments','alt-sm')">
                                    <b style="font-size: 12px">Payment Informations</b>
                                </a>
                                <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 picture_privacy l_nav"
                                    onclick="profile_load('picture_privacy','alt-sm')">
                                    <b style="font-size: 12px">Picture Privacy</b>
                                </a>

                                <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 change_pass l_nav"
                                    onclick="profile_load('change_pass','alt-sm')">
                                    <b style="font-size: 12px">Change Password</b>
                                </a>

                                <div class="text-center pt-3 pb-0">
                                    <a onclick="profile_load('close_account')">
                                        <i class="fa fa-lock"></i>
                                        Close Account </a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-7">
                        <div class="card z-depth-2-top">
                            <div class="card-title">
                                <h3 class="heading heading-6 strong-500 pull-left">
                                    <b>Followed Users</b>
                                </h3>

                            </div>

                            <div class="interests">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Age</th>
                                            <th>Religion</th>
                                            <th>Location</th>
                                            <th>Manglik</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="7" class="text-center">No Result Found</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Followed USers --}}

            {{-- Messaging --}}
            <div class="tab-pane fade" id="tab5" role="tabpanel" aria-labelledby="tab5-tab">
                <div class="row align-items-start justify-content-between">
                    <div class="col-md-4 text-center mainProfile">
                        <img src="images/profileIMg.jpeg" alt="">
                        <div class="profile-details">
                            <h2 class="heading heading-3 strong-500 profile-name">shashi kant verma</h2>
                            <h3 class="heading heading-6 strong-400 profile-occupation mt-3">14</h3>
                            <div class="profile-stats clearfix mt-2">
                                <div class="stats-entry" style="width: 100%">
                                    <span class="stats-count">0</span>
                                    <span class="stats-label text-uppercase">Followers</span>
                                </div>
                            </div>
                            <!-- Profile connect -->
                            <div class="profile-connect mt-5">
                                <!-- <a href="#" class="btn btn-styled btn-block btn-circle btn-sm btn-base-5">Follow</a>
                                            <a href="#" class="btn btn-styled btn-block btn-circle btn-sm btn-base-2">Send message</a> -->
                                <h2 class="heading heading-5 strong-400">Package Informations</h2>
                            </div>
                            <div class="profile-stats clearfix mt-0">
                                <div class="stats-entry">
                                    <span class="stats-count"> Free </span>
                                    <span class="stats-label text-uppercase">Current Package</span>
                                </div>
                                <div class="stats-entry">
                                    <span class="stats-count">₹0.00</span>
                                    <span class="stats-label text-uppercase">Package Price</span>
                                </div>
                            </div>
                            <div class="profile-stats clearfix mt-2">
                                <div class="stats-entry">
                                    <span class="stats-count">None</span>
                                    <span class="stats-label text-uppercase">Payment Gateway</span>
                                </div>
                                <div class="stats-entry">
                                    <span class="stats-count">0</span>
                                    <span class="stats-label text-uppercase">Remaining Interest</span>
                                </div>
                            </div>
                            <div class="profile-stats clearfix mt-2">
                                <div class="stats-entry">
                                    <span class="stats-count">0</span>
                                    <span class="stats-label text-uppercase">Remaining Message</span>
                                </div>
                                <div class="stats-entry">
                                    <span class="stats-count">0</span>
                                    <span class="stats-label text-uppercase">Photo Gallery</span>
                                </div>
                            </div>
                        </div>
                        <div class="profile-useful-links clearfix">
                            <div class="useful-links">
                                <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 gallery l_nav"
                                    onclick="profile_load('gallery','alt-sm')">
                                    <b style="font-size: 12px">Gallery</b>
                                </a>
                                <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 happy_story l_nav"
                                    onclick="profile_load('happy_story','alt-sm')">
                                    <b style="font-size: 12px">Happy Story</b>
                                </a>
                                <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 my_packages l_nav"
                                    onclick="profile_load('my_packages','alt-sm')">
                                    <b style="font-size: 12px">My Package</b>
                                </a>
                                <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 payments l_nav"
                                    onclick="profile_load('payments','alt-sm')">
                                    <b style="font-size: 12px">Payment Informations</b>
                                </a>
                                <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 picture_privacy l_nav"
                                    onclick="profile_load('picture_privacy','alt-sm')">
                                    <b style="font-size: 12px">Picture Privacy</b>
                                </a>

                                <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 change_pass l_nav"
                                    onclick="profile_load('change_pass','alt-sm')">
                                    <b style="font-size: 12px">Change Password</b>
                                </a>

                                <div class="text-center pt-3 pb-0">
                                    <a onclick="profile_load('close_account')">
                                        <i class="fa fa-lock"></i>
                                        Close Account </a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-7">
                        <div class="card z-depth-2-top">
                            <div class="card-title">
                                <h3 class="heading heading-6 strong-500 pull-left">
                                    <b>Messaging</b>
                                </h3>

                            </div>

                            <div class="row px-4 align-items-start">
                                <div class="col-md-8 ">
                                    <form action="">
                                    <div class="selectMember">
                                        <h3><i class="fa fa-comments-o" aria-hidden="true"></i> Select A Member</h3>
                                        <p>"Select A Member From The Contact List To Start Messaging "</p>
                                        <div class="inputgroup d-flex">
                                            <input type="text" name="" id="" placeholder="Type Message">
                                            <input type="submit" value="Submit">
                                        </div>

                                    </div>
                                </form>
                                </div>
                                <div class="col-md-3 contactList">
                                    <div class="contactList">
                                        <h3><i class="fa fa-users" aria-hidden="true"></i> Contact List</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Messaging --}}

            {{-- Ignored --}}
            <div class="tab-pane fade" id="tab6" role="tabpanel" aria-labelledby="tab6-tab">
                <div class="row align-items-start justify-content-between">
                    <div class="col-md-4 text-center mainProfile">
                        <img src="images/profileIMg.jpeg" alt="">
                        <div class="profile-details">
                            <h2 class="heading heading-3 strong-500 profile-name">shashi kant verma</h2>
                            <h3 class="heading heading-6 strong-400 profile-occupation mt-3">14</h3>
                            <div class="profile-stats clearfix mt-2">
                                <div class="stats-entry" style="width: 100%">
                                    <span class="stats-count">0</span>
                                    <span class="stats-label text-uppercase">Followers</span>
                                </div>
                            </div>
                            <!-- Profile connect -->
                            <div class="profile-connect mt-5">
                                <!-- <a href="#" class="btn btn-styled btn-block btn-circle btn-sm btn-base-5">Follow</a>
                                            <a href="#" class="btn btn-styled btn-block btn-circle btn-sm btn-base-2">Send message</a> -->
                                <h2 class="heading heading-5 strong-400">Package Informations</h2>
                            </div>
                            <div class="profile-stats clearfix mt-0">
                                <div class="stats-entry">
                                    <span class="stats-count"> Free </span>
                                    <span class="stats-label text-uppercase">Current Package</span>
                                </div>
                                <div class="stats-entry">
                                    <span class="stats-count">₹0.00</span>
                                    <span class="stats-label text-uppercase">Package Price</span>
                                </div>
                            </div>
                            <div class="profile-stats clearfix mt-2">
                                <div class="stats-entry">
                                    <span class="stats-count">None</span>
                                    <span class="stats-label text-uppercase">Payment Gateway</span>
                                </div>
                                <div class="stats-entry">
                                    <span class="stats-count">0</span>
                                    <span class="stats-label text-uppercase">Remaining Interest</span>
                                </div>
                            </div>
                            <div class="profile-stats clearfix mt-2">
                                <div class="stats-entry">
                                    <span class="stats-count">0</span>
                                    <span class="stats-label text-uppercase">Remaining Message</span>
                                </div>
                                <div class="stats-entry">
                                    <span class="stats-count">0</span>
                                    <span class="stats-label text-uppercase">Photo Gallery</span>
                                </div>
                            </div>
                        </div>
                        <div class="profile-useful-links clearfix">
                            <div class="useful-links">
                                <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 gallery l_nav"
                                    onclick="profile_load('gallery','alt-sm')">
                                    <b style="font-size: 12px">Gallery</b>
                                </a>
                                <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 happy_story l_nav"
                                    onclick="profile_load('happy_story','alt-sm')">
                                    <b style="font-size: 12px">Happy Story</b>
                                </a>
                                <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 my_packages l_nav"
                                    onclick="profile_load('my_packages','alt-sm')">
                                    <b style="font-size: 12px">My Package</b>
                                </a>
                                <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 payments l_nav"
                                    onclick="profile_load('payments','alt-sm')">
                                    <b style="font-size: 12px">Payment Informations</b>
                                </a>
                                <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 picture_privacy l_nav"
                                    onclick="profile_load('picture_privacy','alt-sm')">
                                    <b style="font-size: 12px">Picture Privacy</b>
                                </a>

                                <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 change_pass l_nav"
                                    onclick="profile_load('change_pass','alt-sm')">
                                    <b style="font-size: 12px">Change Password</b>
                                </a>

                                <div class="text-center pt-3 pb-0">
                                    <a onclick="profile_load('close_account')">
                                        <i class="fa fa-lock"></i>
                                        Close Account </a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-7">
                        <div class="card z-depth-2-top">
                            <div class="card-title">
                                <h3 class="heading heading-6 strong-500 pull-left">
                                    <b>Ignored List</b>
                                </h3>

                            </div>

                            <div class="interests">
                                <table class="table table-striped table-fixed">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Age</th>
                                            <th>Religion</th>
                                            <th>Location</th>
                                            <th>Manglik</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img src="images/img12.jpg" alt=""></td>
                                            <td>Pooja Khushwaha</td>
                                            <td>32</td>
                                            <td>Hindu</td>
                                            <td>Uttar Pardesh</td>
                                            <td></td>
                                            <td><i class="fa fa-check" aria-hidden="true"></i></i>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Ignored --}}
        </div>
    </div>
@endsection
