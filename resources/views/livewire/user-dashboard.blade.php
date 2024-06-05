<div>
    {{-- PROFILE CONTENT --}}
    {{-- <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab"> --}}
    <div class="row align-items-start justify-content-between py-5">

        @livewire('profile-card')


        <div class="col-md-7" id="dashboard_listing" wire:ignore>

            <div class="d-flex justify-content-between proInfo pt-3 align-items-center">
                <p>Profile Information</p>
                <a href="">Edit All</a>
            </div>
            <h3><span class="idMember">Member Id -</span> 75DEE6ED4592</h3>


            {{-- Introduction --}}
            <div class="intro">
                <div class="d-flex justify-content-between">
                    <h4>Introduction</h4>
                    <a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                </div>
                <p>...</p>
            </div>


            {{-- Basic Information --}}
            <div class="intro">
                <div class="d-flex justify-content-between">
                    <h4>Basic Information</h4>
                    <a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                </div>
                <div class="table-container">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Shashi Kant</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Gender</td>
                                <td>Male</td>
                            </tr>
                            <tr>
                                <td>Age</td>
                                <td>34</td>
                            </tr>
                            <tr>
                                <td>Number of Children</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>On Behalf</td>
                                <td>Kshadi</td>
                            </tr>
                            <tr>
                                <td>Date of Birth</td>
                                <td>23/07/1990</td>
                            </tr>
                            <tr>
                                <td><strong>Special Case</strong></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Last Name</th>
                                <th>Verma</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Email</td>
                                <td>1256565535@gmail.com</td>
                            </tr>
                            <tr>
                                <td>Marital Status</td>
                                <td>Never Married</td>
                            </tr>
                            <tr>
                                <td>Area</td>
                                <td>Ballia</td>
                            </tr>
                            <tr>
                                <td>Mobile</td>
                                <td>9500139695</td>
                            </tr>
                            <tr>
                                <td>Whatsapp</td>
                                <td>8988201172</td>
                            </tr>
                            <tr>
                                <td><strong></strong></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>


            {{-- Present Address --}}
            <div class="intro">
                <div class="d-flex justify-content-between">
                    <h4>Present Address</h4>
                    <div class="d-flex gap-2">
                        <a href="#" class="show"><i class="fa fa-unlock" aria-hidden="true"></i> Show </a>
                    <a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                </div>
                </div>
                <div class="table-container">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Country</th>
                                <th>Bharat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>City</td>
                                <td>Ballia</td>
                            </tr>
                            <tr>
                                <td>Full Address</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>State</th>
                                <th>Uttar Pradesh</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>


            {{-- Education And Career --}}
            <div class="intro">
                <div class="d-flex justify-content-between">
                    <h4>Education And Career</h4>
                    <div class="d-flex gap-2">
                        <a href="#" class="show"><i class="fa fa-unlock" aria-hidden="true"></i> Show </a>
                    <a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                </div>
                </div>
                <div class="table-container">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Highest Education</th>
                                <th>B.Tech & M.ba</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Education Detail</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Annual Income</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Occupation</th>
                                <th>Manager</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Posting Place</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Other Occupation</td>
                                <td>Assistant Manager</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>


            {{-- Physical Attributes --}}
            <div class="intro">
                <div class="d-flex justify-content-between">
                    <h4>Physical Attributes</h4>
                    <div class="d-flex gap-2">
                        <a href="#" class="show"><i class="fa fa-unlock" aria-hidden="true"></i> Show </a>
                    <a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                </div>
                </div>
                <div class="table-container">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Height</th>
                                <th>5.10 Feet</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Complexion</td>
                                <td>Wheatish </td>
                            </tr>
                            <tr>
                                <td>Body Type</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Weight</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Blood Group</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Any Disability</td>
                                <td></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>


            {{-- Spiritual And Social Background --}}
            <div class="intro">
                <div class="d-flex justify-content-between">
                    <h4>Spiritual And Social Background</h4>
                    <div class="d-flex gap-2">
                        <a href="#" class="show"><i class="fa fa-unlock" aria-hidden="true"></i> Show </a>
                    <a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                </div>
                </div>
                <div class="table-container">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Religion</th>
                                <th>Hindu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Sub-Caste</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>Family Values</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Caste/Sect</th>
                                <th>Kushwaha</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Gotra</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Family Status</td>
                                <td></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>


            {{-- Astronomic Information --}}
            <div class="intro">
                <div class="d-flex justify-content-between">
                    <h4>Astronomic Information</h4>
                    <div class="d-flex gap-2">
                        <a href="#" class="show"><i class="fa fa-unlock" aria-hidden="true"></i> Show </a>
                    <a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                </div>
                </div>
                <div class="table-container">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Sun Sign</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>City of Birth</td>
                                <td> </td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Moon Sign</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Time of Birth</td>
                                <td></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>


            {{-- Family Information --}}
            <div class="intro">
                <div class="d-flex justify-content-between">
                    <h4>Family Information</h4>
                    <div class="d-flex gap-2">
                        <a href="#" class="show"><i class="fa fa-unlock" aria-hidden="true"></i> Show </a>
                    <a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                </div>
                </div>
                <div class="table-container">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Family Residence</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Father</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>Mother</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>Brother</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>Sister</td>
                                <td> </td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Native Place</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Father Occupation</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Mother Occupation</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>Brother Occupation</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>Sister Occupation</td>
                                <td> </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>


            {{-- Partner Expectation --}}
            <div class="intro">
                <div class="d-flex justify-content-between">
                    <h4>Partner Expectation</h4>
                    <div class="d-flex gap-2">
                        <a href="#" class="show"><i class="fa fa-unlock" aria-hidden="true"></i> Show </a>
                    <a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                </div>
                </div>
                <div class="table-container">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>General Requirements</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Height</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>Marital Status</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>Country of Residence</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>CASTE / SECT</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>EDUCATION</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>DRINKING HABITS</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>DIET</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>MANGLIK</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>FAMILY VALUES</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>PREFERED COUNTRY</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>PREFER CITIES</td>
                                <td> </td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>AGE</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>WEIGHT</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>WITH CHILDREN ACCEPTABLES</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>RELIGION</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>SUB CASTE</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>PROFESSION</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>SMOKING HABITS</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>BODY TYPE</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>ANY DISABILITY</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>FAMILY STATUS</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>PREFERED STATE</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td> </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>



        @if ($showProfile)
            @livewire('profile-info')
        @endif

        @if ($showIntrest)
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
        @endif

        @if ($showShortlist)
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
        @endif

        @if ($showMesssage)
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
        @endif

        @if ($showViewers)
            <div class="col-md-7">
                <div class="card z-depth-2-top">
                    <div class="card-title">
                        <h3 class="heading heading-6 strong-500 pull-left">
                            <b>Profile Viewd By</b>
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
        @endif
    </div>
</div>
