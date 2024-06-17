@extends('layouts.app')
@section('content')
    {{-- Dashboard --}}

    {{-- HAPPY STORIES --}}

    <div class="myDiv happyStory ">
        <div class="text-center">
            <h2><strong>Over 40.000+ Happy Stories</strong></h2>
            <p>If like thousands of couples, you too met your one-and-only on Sangam.com, we'd love to hear all about it,
                It's <br> our favourite part of what we do</p>
        </div>

        {{-- CAROUSEL --}}
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <!-- Add more buttons for additional slides -->
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="d-block profileCard">
                                    <img src="./images/6SH13119509-OSH28753792-big.jpg" alt="" style="width:100%">
                                    <div class="chooseimgCont text-start">
                                        <h3 class="text-start text-white">Prity Kushwaha
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus delectus maxime
                                            voluptatibus aperiam ratione porro fuga vero rerum possimus quidem.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-block profileCard">
                                    <img src="./images/6SH13119509-OSH28753792-big.jpg" alt="" style="width:100%">
                                    <div class="chooseimgCont text-start">
                                        <h3 class="text-start text-white">Prity Kushwaha
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus delectus maxime
                                            voluptatibus aperiam ratione porro fuga vero rerum possimus quidem.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-block profileCard">
                                    <img src="./images/6SH13119509-OSH28753792-big.jpg" alt="" style="width:100%">
                                    <div class="chooseimgCont text-start">
                                        <h3 class="text-start text-white">Prity Kushwaha
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus delectus maxime
                                            voluptatibus aperiam ratione porro fuga vero rerum possimus quidem.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="d-block profileCard">
                                    <img src="./images/6SH13119509-OSH28753792-big.jpg" alt="" style="width:100%">
                                    <div class="chooseimgCont text-start">
                                        <h3 class="text-start text-white">Prity Kushwaha
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus delectus maxime
                                            voluptatibus aperiam ratione porro fuga vero rerum possimus quidem.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-block profileCard">
                                    <img src="./images/6SH13119509-OSH28753792-big.jpg" alt="" style="width:100%">
                                    <div class="chooseimgCont text-start">
                                        <h3 class="text-start text-white">Prity Kushwaha
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus delectus maxime
                                            voluptatibus aperiam ratione porro fuga vero rerum possimus quidem.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-block profileCard">
                                    <img src="./images/6SH13119509-OSH28753792-big.jpg" alt="" style="width:100%">
                                    <div class="chooseimgCont text-start">
                                        <h3 class="text-start text-white">Prity Kushwaha
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus delectus maxime
                                            voluptatibus aperiam ratione porro fuga vero rerum possimus quidem.</p>
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

    {{-- ----------------HAPPY STORIES ENDS---------------------- --}}
@endsection
