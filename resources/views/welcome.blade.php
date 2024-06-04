@extends('layouts.app')
@section('content')
    <img src="./images/HomePage_Default_Final.webp" class="w-100" alt="" />
    <div class="header_logo">
        @if (!auth()->user())
            <img src="./images/header-logo.png" w="100" h="100" alt="" />
        @endif
    </div>
    <div class="feature feature--boxed-border z-depth-2-bottom px-3 py-4  s-search">
        <form data-toggle="validator" role="form" action="" method="POST">
            <div class="row justify-content-between">
                <div class="col-md-2">
                    <label class="text-uppercase ">I'm Looking For A</label>
                    <select name="gender" onchange="(this.value,this)" class="form-control form-control-sm selectpicker"
                        data-placeholder="Choose a gender" tabindex="2" data-hide-disabled="true" title="gender">
                        <option value="">Choose one</option>
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="" class="text-uppercase ">Aged From</label>
                    <input type="number" class="form-control form-control-sm" name="aged_from" id="aged_from"
                        value="" placeholder=" ">
                </div>
                <div class="col-md-2">
                    <label for="" class="text-uppercase ">To</label>
                    <input type="number" class="form-control form-control-sm" name="aged_to" id="aged_to" value=""
                        placeholder=" ">
                </div>
                <div class="col-md-2">
                    <label for="" class="text-uppercase ">Religion</label>
                    <select name="religion" onchange="(this.value,this)"
                        class="form-control form-control-sm selectpicker s_religion" data-placeholder="Choose a religion"
                        tabindex="2" data-hide-disabled="true" title="religion">
                        <option value="">Choose one</option>
                        <option value="2">Hindu</option>
                        <option value="4">Buddist</option>
                        <option value="27">Hindu-Gen.</option>
                        <option value="28">Hindu-OBC</option>
                        <option value="29">Hindu-Sc/St</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for=""></label>
                    <button type="submit" class="btn text-white">Let’s Begin</button>
                </div>
            </div>
        </form>
    </div>

    {{-- ---------------------------------WHY CHOOS SANGAM-------------------------- --}}
    <div class="chooseSangam myDiv py-5">
        <div class="text-center">
            <h2><strong>Why Choose Sangam ?</strong></h2>
            <p>Genuine Profile | Safe & Secure | Detailed Family Information </p>
        </div>
        <div class="row justify-content-between align-items-center mt-4">
            <div class="chooseContent col-md-6">
                <div class="d-flex mb-5 gap-2">
                    <img src="./images/verified.png" alt="" style="width:50px; object-fit: cover; height:50px;">
                    <div>
                        <h3>Choose from government verified profiles</h3>
                        <p>Feel safe, we manually verify authenticity of profiles using government ID proofs like PAN card,
                            Aadhar card, Driving Licence.</p>
                    </div>
                </div>
                <div class="d-flex mb-5 gap-2">
                    <img src="./images/social-care.png" alt="" style="width:50px; object-fit: cover; height:50px;">
                    <div>
                        <h3>Community matches with detailed family information</h3>
                        <p>Feel at home with the right partner and family. With over 80 community sites where each match is
                            backed with detailed family backgrounds.</p>
                    </div>
                </div>
                <div class="d-flex gap-2">
                    <img src="./images/translator.png" alt="" style="width:50px; object-fit: cover; height:50px;">
                    <div>
                        <h3>Enable your search without any barrier</h3>
                        <p>Embark on your journey to find your perfect match now available in multiple languages.</p>
                    </div>
                </div>
            </div>
            <div class="chooseImage col-md-4">

                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="d-block profileCard">
                                <img src="./images/6SH13119509-OSH28753792-big.jpg" alt="">
                                <div class="chooseimgCont text-center">
                                    <h3 class="text-center text-white">Mehnaz Fatima <span class="red">&</span> Anshuman
                                    </h3>
                                    <p>My brother has created my profile on Shaadi.com, I was not actually using my profile
                                        it was my brother who was actually handling the profile. After that Rizwan saw my
                                        profile</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-block profileCard">
                                <img src="./images/6SH13119509-OSH28753792-big.jpg" alt="">
                                <div class="chooseimgCont text-center">
                                    <h3 class="text-center text-white">Mehnaz Fatima <span class="red">&</span> Anshuman
                                    </h3>
                                    <p>My brother has created my profile on Shaadi.com, I was not actually using my profile
                                        it was my brother who was actually handling the profile. After that Rizwan saw my
                                        profile</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-block profileCard">
                                <img src="./images/6SH13119509-OSH28753792-big.jpg" alt="">
                                <div class="chooseimgCont text-center">
                                    <h3 class="text-center text-white">Mehnaz Fatima <span class="red">&</span>
                                        Anshuman</h3>
                                    <p>My brother has created my profile on Shaadi.com, I was not actually using my profile
                                        it was my brother who was actually handling the profile. After that Rizwan saw my
                                        profile</p>
                                </div>
                            </div>
                        </div>
                        <!-- Add more slides as needed -->
                    </div>
                    <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
                        <span class="fa fa-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
                        <span class="fa fa-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>



            </div>
        </div>
    </div>
    {{-- ----------------------------WHY CHOOSE ENDS------------------------------------------ --}}


    {{-- ---------------VERIFY MEMBERS------------------- --}}
    <div class="verify myDiv pt-5">
        <div class="text-center">
            <h2><strong>Verify Members</strong></h2>
        </div>
        {{-- CAROUSEL --}}
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <!-- Add more buttons for additional slides -->
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="d-block profileCard">
                                    <img src="./images/6SH13119509-OSH28753792-big.jpg" alt="" style="width:100%">
                                    <div class="chooseimgCont text-center">
                                        <h3 class="text-center text-white">Prity Kushwaha
                                        </h3>
                                        <div class="d-flex gap-4">
                                            <p><span class="blue">7</span> Followers</p>
                                            <p><span class="blue">0 </span>Following</p>
                                        </div>
                                        <a href="#">Full Profile</a>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="d-block profileCard">
                                    <img src="./images/6SH13119509-OSH28753792-big.jpg" alt="" style="width:100%">
                                    <div class="chooseimgCont text-center">
                                        <h3 class="text-center text-white">Prity Kushwaha
                                        </h3>
                                        <div class="d-flex gap-4">
                                            <p><span class="blue">7</span> Followers</p>
                                            <p><span class="blue">0 </span>Following</p>
                                        </div>
                                        <a href="#">Full Profile</a>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="d-block profileCard">
                                    <img src="./images/6SH13119509-OSH28753792-big.jpg" alt="" style="width:100%">
                                    <div class="chooseimgCont text-center">
                                        <h3 class="text-center text-white">Prity Kushwaha
                                        </h3>
                                        <div class="d-flex gap-4">
                                            <p><span class="blue">7</span> Followers</p>
                                            <p><span class="blue">0 </span>Following</p>
                                        </div>
                                        <a href="#">Full Profile</a>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="d-block profileCard">
                                    <img src="./images/6SH13119509-OSH28753792-big.jpg" alt="" style="width:100%">
                                    <div class="chooseimgCont text-center">
                                        <h3 class="text-center text-white">Prity Kushwaha
                                        </h3>
                                        <div class="d-flex gap-4">
                                            <p><span class="blue">7</span> Followers</p>
                                            <p><span class="blue">0 </span>Following</p>
                                        </div>
                                        <a href="#">Full Profile</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="d-block profileCard">
                                    <img src="./images/6SH13119509-OSH28753792-big.jpg" alt="" style="width:100%">
                                    <div class="chooseimgCont text-center">
                                        <h3 class="text-center text-white">Prity Kushwaha
                                        </h3>
                                        <div class="d-flex gap-4">
                                            <p><span class="blue">7</span> Followers</p>
                                            <p><span class="blue">0 </span>Following</p>
                                        </div>
                                        <a href="#">Full Profile</a>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="d-block profileCard">
                                    <img src="./images/6SH13119509-OSH28753792-big.jpg" alt="" style="width:100%">
                                    <div class="chooseimgCont text-center">
                                        <h3 class="text-center text-white">Prity Kushwaha
                                        </h3>
                                        <div class="d-flex gap-4">
                                            <p><span class="blue">7</span> Followers</p>
                                            <p><span class="blue">0 </span>Following</p>
                                        </div>
                                        <a href="#">Full Profile</a>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="d-block profileCard">
                                    <img src="./images/6SH13119509-OSH28753792-big.jpg" alt="" style="width:100%">
                                    <div class="chooseimgCont text-center">
                                        <h3 class="text-center text-white">Prity Kushwaha
                                        </h3>
                                        <div class="d-flex gap-4">
                                            <p><span class="blue">7</span> Followers</p>
                                            <p><span class="blue">0 </span>Following</p>
                                        </div>
                                        <a href="#">Full Profile</a>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="d-block profileCard">
                                    <img src="./images/6SH13119509-OSH28753792-big.jpg" alt="" style="width:100%">
                                    <div class="chooseimgCont text-center">
                                        <h3 class="text-center text-white">Prity Kushwaha
                                        </h3>
                                        <div class="d-flex gap-4">
                                            <p><span class="blue">7</span> Followers</p>
                                            <p><span class="blue">0 </span>Following</p>
                                        </div>
                                        <a href="#">Full Profile</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add more carousel items as needed -->
            </div>
            <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
                <span class="fa fa-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
                <span class="fa fa-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        {{-- CAROUSEL ENDS --}}
    </div>











    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.min.js"></script>
@endsection
