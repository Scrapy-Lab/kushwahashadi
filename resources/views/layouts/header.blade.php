


<div style="position:relative">
    {{-- @dd(auth()->user()) --}}
    @if (auth()->user() || Route::is('happy_stories'))




    {{-- TOP HEADER --}}
    <div class="tophEader">
        <div class="row justify-content-between align-items-center">
            <!-- Column 1: Language and Currency Selectors -->
            <div class="col-md-5 d-flex align-items-center gap-4">
                <div class="mr-3 flag-select">
                    <label for="language-selector" class="mr-2">Language:</label>
                    <select id="language-selector" class="form-control d-inline-block" style="width: auto;">
                        <option value="en"><span class="flag-icon flag-icon-us"></span> English</option>
                        <option value="es"><span class="flag-icon flag-icon-es"></span> Spanish</option>
                        <option value="fr"><span class="flag-icon flag-icon-fr"></span> French</option>
                    </select>
                </div>
                <div class="currency-select">
                    <label for="currency-selector" class="mr-2">Currency:</label>
                    <select id="currency-selector" class="form-control d-inline-block" style="width: auto;">
                        <option value="rupee"> indian <span class="currency-symbol">₹</span></option>
                        <option value="eur">EUR <span class="currency-symbol">€</span> </option>
                        <option value="gbp">GBP <span class="currency-symbol">£</span> </option>
                    </select>
                </div>
            </div>
            <!-- Column 2: Notification Message and User Detail -->
            <div class="col-md-5 d-flex justify-content-end align-items-center proDetails m-0">
               <ul class="d-flex gap-3 align-items-center m-0">
                <li><a href="#"><i class="fa fa-bell" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                <li><a href="#"></a><img src="{{ asset('images/profileImage.jpeg') }}" alt=""> shashi kant</li>
               </ul>
            </div>
        </div>
    </div>



{{-- TOP HEADER ENDs --}}
        {{-- Header for Dashboard --}}
        <div class="dashTOpheader d-flex justify-content-start align-items-center gap-5">
            <img src="{{asset('images/header-logo.png')}}" w="100" h="100" alt="" />

            {{-- <ul class="dashmenu d-flex justify-content-between gap-5 m-0">
                <li><a href="#">Home</a></li>
                <li><a href="#">Active Members</a></li>
                <li><a href="#">Premium Plans</a></li>
                <li><a href="#">Happy Stories</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul> --}}
        </div>
    @endif


    <div class="header_login">
        @if (Auth::check())
            <a href="{{ route('logout') }}">
                <button class=" btn-danger btn ">Logout</button>
            </a>
        @else
            <img src="./images/language-switcher-web.svg" w="10" h="10" alt="" />
            <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"
                class="log_in">Login</button>
            <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;"
                class="register">Register</button>
    </div>
    @endif
</div>
<div id="id01" class="modal">
    @livewire('login')
</div>

{{-- Register Modal --}}
<div id="id02" class="modal">
    @livewire('registration')
</div>
