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
    <div class="trademark text-center pt-5">
        <a href="#" class=" btn"> kushwaha@ trademark notice</a>
    </div>
    <div class="row justify-content-between pt-5">
        <div class="col-md-4 text-center">
            <img src="./images/peoples.png" alt="">
            <p>Millions of people register on Shadi.com looking for someone special. This site is for serious singles
                looking for a long lasting relationship.</p>
        </div>
        <div class="col-md-4 text-center">
            <img src="./images/education.png" alt="">
            <p>Millions of people register on Shadi.com looking for someone special. This site is for serious singles
                looking for a long lasting relationship.</p>
        </div>
        <div class="col-md-4 text-center">
            <img src="./images/technology.png" alt="">
            <p>Millions of people register on Shadi.com looking for someone special. This site is for serious singles
                looking for a long lasting relationship.</p>
        </div>
    </div>

{{---------------------------BROWSE MATRIMONIAL--------------------------------------------}}
    <div class="browseMatri pt-5">
        <h2 class="text-center">Browse Matrimonial Profiles</h2>

        {{-- SLIDER BROWSE --}}

        <div class="container mt-5">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row justify-content-between" style="width:90% !important">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h3><strong>International</strong></h3>
                                        <div class="d-flex allbrowsers">
                                            <a href="#">United States</a>
                                            <a href="#">Canada</a>
                                            <a href="#">United Kingdom</a>
                                            <a href="#">Australia</a>
                                            <a href="#">India</a>
                                            <a href="#">UAE</a>
                                            <a href="#">Pakistan</a>
                                            <a href="#">Switzerland</a>
                                            <a href="#">France</a>
                                            <a href="#">Netherland</a>
                                            <a href="#">Singapore</a>
                                        </div>
                                        <a href="#" class="readMore">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h3><strong>Religion</strong></h3>
                                        <div class="d-flex allbrowsers">
                                            <a href="#">Hindu</a>
                                            <a href="#">Muslim</a>
                                            <a href="#">Christian</a>
                                            <a href="#">Sikh</a>
                                            <a href="#">Budhist</a>
                                            <a href="#">Jain</a>
                                        </div>
                                        <a href="#" class="readMore">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h3><strong>Caste</strong></h3>
                                        <div class="d-flex allbrowsers">
                                            <a href="#">Agarwal</a>
                                            <a href="#">Arora</a>
                                            <a href="#">Brahmin</a>
                                            <a href="#">Gupta</a>
                                            <a href="#">Khatri</a>
                                            <a href="#">Iyer</a>
                                            <a href="#">Kayastha</a>
                                            <a href="#">Maratha</a>
                                            <a href="#">Rajput</a>
                                            <a href="#">Sunni</a>
                                            <a href="#">Swetambar</a>
                                        </div>
                                        <a href="#" class="readMore">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-between" style="width:90% !important">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h3><strong>States</strong></h3>
                                        <div class="d-flex allbrowsers">
                                            <a href="#">California</a>
                                            <a href="#">New York</a>
                                            <a href="#">Texas</a>
                                            <a href="#">New Jersey</a>
                                            <a href="#">Virginia</a>
                                            <a href="#">Illinois</a>
                                            <a href="#">Florida</a>
                                            <a href="#">Pennsylvania</a>
                                            <a href="#">Michigan</a>
                                            <a href="#">Georgia</a>
                                        </div>
                                        <a href="#" class="readMore">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h3><strong>International</strong></h3>
                                        <div class="d-flex allbrowsers">
                                            <a href="#">United States</a>
                                            <a href="#">Canada</a>
                                            <a href="#">United Kingdom</a>
                                            <a href="#">Australia</a>
                                            <a href="#">India</a>
                                            <a href="#">UAE</a>
                                            <a href="#">Pakistan</a>
                                            <a href="#">Switzerland</a>
                                            <a href="#">France</a>
                                            <a href="#">Netherland</a>
                                            <a href="#">Singapore</a>
                                        </div>
                                        <a href="#" class="readMore">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h3><strong>Religion</strong></h3>
                                        <div class="d-flex allbrowsers">
                                            <a href="#">Hindu</a>
                                            <a href="#">Muslim</a>
                                            <a href="#">Christian</a>
                                            <a href="#">Sikh</a>
                                            <a href="#">Budhist</a>
                                            <a href="#">Jain</a>
                                        </div>
                                        <a href="#" class="readMore">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"><i class="fa fa-phone"
                            aria-hidden="true"></i></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>


        {{-- SLIDER BROWSE ENDS --}}

    </div>
    {{-----------------------BROWSE MATRIMONIAL Ends---------------------------------------}}

{{---------------------------MEET OUR MEMEBERS-----------}}
<div class="meetMember pt-5">
    <h2 class="text-center">Meet Our Members- Successful <br> Professional Singles</h2>
    <div class="row justify-content-between pt-2">
        <div class="col-md-5 text-center">
            <img src="./images/peoples.png" alt="">
            <p>We have members from all religions and ages. Our most popular age group is from 27 - 60. Almost all our singles are successful professionals and businessmen. Creating a great profile is essential in online matchmaking and adding your best photo to your profile. We offer abundant tips and relationship advice through our blogs. It is our passion to help you in the best possible way.</p>
        </div>
        <div class="col-md-5 text-center">
            <img src="./images/sheild.png" alt="">
            <p>Shadi.com is an international matchmaking platform. Through which people can find love and long lasting relationships. Our profiles are verified with cell phone and email verification. We make use of the latest technology for fraud detention and SSL encryption. Non-active users are removed from our network. We are committed to providing a safe web service for like-minded singles in your region.</p>
        </div>
    </div>
</div>

{{---------------------------SUCCESS STORIES-----------}}
<div class="meetMember pt-5">
    <h2 class="text-center">SUCCESS STORIES</h2>

    <div class="container">
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="d-flex justify-content-center align-items-center">
                <div class="slider-content">
                    <p>I met my fiance on Shadi.com. At first it seemed like a daunting task. But three months later, I came across a profile based in Toronto. Messaged her first and right from the start we both had positive feelings. I felt so much at ease in communicating with her. We had similar values and commonality in interests. We are planning to get married soon. With our parents blessing. </p>
                  <p class="mt-3">Thank you Kushwaha Shadi.com</h1>
                  <p><strong>Aman Toranto</strong></p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="d-flex justify-content-center align-items-center">
                <div class="slider-content">
                    <p>Renu joined Shadi.com after a strong suggestion from her parents during the pandemic. Ishan caught her interest in her potential match list. She sent him a personal email and Ishan responded back. They exchanged emails, spoke on the phone and video chats for a couple of weeks. They both had similar interests, religious beliefs, likes and dislikes. They were both keen to meet in person and Ishan & Renu had a great time in their first meeting. They are now married in a romantic small wedding in Seattle. </p>
                  <p class="mt-3">Thank you Kushwaha Shadi.com</h1>
                  <p><strong>Renu S- Seattle</strong></p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="d-flex justify-content-center align-items-center">
                <div class="slider-content">
                    <p>Last year after signing up for a 6 months term with Shadi.com. Had no luck initially for some weeks. Few months later I got matched with a wonderful and caring man.  </p>
                  <p class="mt-3">Thank you Kushwaha Shadi.com</h1>
                  <p><strong>Marium S - San Francisco</strong></p>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
          <ol class="carousel-indicators">
            <li data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExample" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExample" data-bs-slide-to="2"></li>
          </ol>
        </div>
      </div>


</div>














    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
@endsection
