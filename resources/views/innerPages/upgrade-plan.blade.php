@extends('layouts.app')
@section('content')

{{-- MY PLANS --}}

<div class="upplan my-5 pb-5">
    <div class="text-center pt-5">
        <h2 style="color: #fff;">UPGRADE PLANS</h2>
    </div>
<div class="allPlans">
    <div class="row justify-content-start">
        <div class="col-md-4 free">
            <ul class="text-center">
                <li><img src="{{ url('/images/free.jpg') }}" alt=""></li>
                <li><h3>FREE</h3></li>
                <li><h2>₹0.00</h2></li>
                <li><p>Contact Numbers 0 Times</p></li>
                <li><p>Direct Messages: 0 Times</p></li>
                <li><p>Photo Gallery: 0 Images</p></li>
                <li><a href="#">Get this Package</a></li>
            </ul>
        </div>
        <div class="col-md-4 free">
            <ul class="text-center">
                <li><img src="{{ url('/images/supports.png') }}" alt=""></li>
                <li><h3>Support Plan for 12 Months</h3></li>
                <li><h2>₹999.00</h2></li>
                <li><p>Contact Numbers 101 Times</p></li>
                <li><p>Direct Messages: 100 Times</p></li>
                <li><p>Photo Gallery: 2 Images</p></li>
                <li><a href="#">Get this Package</a></li>
            </ul>
        </div>
        <div class="col-md-4 free">
            <ul class="text-center">
                <li><img src="{{ url('/images/vip.jpg') }}" alt=""></li>
                <li><h3>*VIP Plan With 100% Privacy</h3></li>
                <li><h2>₹1,999.00</h2></li>
                <li><p>Contact Numbers 1000 Times</p></li>
                <li><p>Direct Messages: 1000 Times</p></li>
                <li><p>Photo Gallery: 5 Images</p></li>
                <li><a href="#">Get this Package</a></li>
            </ul>
        </div>
        <div class="col-md-4 free">
            <ul class="text-center">
                <li><img src="{{ url('/images/verify.png') }}" alt=""></li>
                <li><h3>Verifed Tick</h3></li>
                <li><h2>₹499.00</h2></li>
                <li><p>Contact Numbers 0 Times</p></li>
                <li><p>Direct Messages: 0 Times</p></li>
                <li><p>Photo Gallery: 2 Images</p></li>
                <li><a href="#">Get this Package</a></li>
            </ul>
        </div>
        <div class="col-md-4 free">
            <ul class="text-center">
                <li><img src="{{ url('/images/verify.png') }}" alt=""></li>
                <li><h3>After shaadi Pay contribution</h3></li>
                <li><h2>₹5,100.00</h2></li>
                <li><p>Contact Numbers 0 Times</p></li>
                <li><p>Direct Messages: 0 Times</p></li>
                <li><p>Photo Gallery: 2 Images</p></li>
                <li><a href="#">Get this Package</a></li>
            </ul>
        </div>
    </div>
</div>
</div>




@endsection
