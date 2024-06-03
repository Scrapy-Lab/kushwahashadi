<div>
    {{-- PROFILE CONTENT --}}
    {{-- <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab"> --}}
    <div class="row align-items-start justify-content-between">

        @livewire('profile-card')

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
        @endif
    </div>
    {{-- </div> --}}

    {{-- PROFILE CONTENT END --}}


    {{-- My INtersts --}}
    {{-- <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab"> --}}
    <div class="row align-items-start justify-content-between">


        @livewire('profile-card')




        {{-- </div> --}}
    </div>
    {{-- My Intrests --}}

    {{-- Shortlists --}}
    {{-- <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab"> --}}
    <div class="row align-items-start justify-content-between">
        @livewire('profile-card')

    </div>
    {{-- </div> --}}
    {{-- Shortlists --}}

    {{-- Followed USers --}}
    {{-- <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4-tab"> --}}
    {{-- <div class="row align-items-start justify-content-between">
        @livewire('profile-card')


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
    </div> --}}
    {{-- </div> --}}
    {{-- Followed USers --}}

    {{-- Messaging --}}
    {{-- <div class="tab-pane fade" id="tab5" role="tabpanel" aria-labelledby="tab5-tab"> --}}
    <div class="row align-items-start justify-content-between">
        @livewire('profile-card')

    </div>
    {{-- </div> --}}
    {{-- Messaging --}}

    {{-- Ignored --}}
    {{-- <div class="tab-pane fade" id="tab6" role="tabpanel" aria-labelledby="tab6-tab"> --}}
    <div class="row align-items-start justify-content-between">
        @livewire('profile-card')

    </div>
    {{-- </div> --}}
    {{-- Ignored --}}
</div>
