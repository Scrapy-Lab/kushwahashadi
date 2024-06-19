<div style="position:relative">
    {{-- @dd(auth()->user()) --}}
    @if (auth()->user() || Route::is('happy_stories'))
        {{-- TOP HEADER --}}
        <div class="tophEader">
            <div class="row justify-content-between align-items-center">
                <!-- Column 1: Language and Currency Selectors -->
                <div class="col-md-5 d-flex align-items-center gap-4">
                    <div id="google_translate_element"></div>
                    {{-- <div class="mr-3 flag-select">
                        <label for="language-selector" class="mr-2">Language:</label>

                        <select id="language-selector" class="form-control d-inline-block" style="width: auto;">
                            <option value="en"><span class="flag-icon flag-icon-us"></span> English</option>
                            <option value="es"><span class="flag-icon flag-icon-es"></span> Spanish</option>
                            <option value="fr"><span class="flag-icon flag-icon-fr"></span> French</option>
                        </select>
                    </div> --}}
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
                        <li><a href="#" id="bellIcon"><i class="fa fa-bell" aria-hidden="true"></i></a></li>
                        <li><a href="#" id="envelopeIcon"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                        <li><a href="#"></a><img src="{{ asset('images/profileImage.jpeg') }}" alt="">
                            shashi kant</li>
                    </ul>

                    <div class="hidden-div" id="notificationList">
                        <h3>Notification</h3>
                        <ul>
                            <li>No Notifications to show</li>
                        </ul>
                    </div>

                    <div class="hidden-div" id="messageList">
                        <h3>Messages</h3>
                        <ul>
                            <li>No Messages to show</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>



        {{-- TOP HEADER ENDs --}}
        {{-- Header for Dashboard --}}
        <div class="dashTOpheader d-flex justify-content-start align-items-center gap-5">
            <img src="{{ asset('images/header-logo.png') }}" w="100" h="100" alt="" />

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




<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
                pageLanguage: 'en'
            },
            'google_translate_element'
        );
    }
</script>

<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?
cb=googleTranslateElementInit"></script>
<script>
    function toggleDiv(divId) {
        var div = document.getElementById(divId);
        if (div.style.display === 'none' || div.style.display === '') {
            div.style.display = 'block';
        } else {
            div.style.display = 'none';
        }
    }

    document.getElementById('bellIcon').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default anchor behavior
        toggleDiv('notificationList');
    });

    document.getElementById('envelopeIcon').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default anchor behavior
        toggleDiv('messageList');
    });

    // Optional: Hide the div when clicking outside of it
    document.addEventListener('click', function(event) {
        var notificationList = document.getElementById('notificationList');
        var messageList = document.getElementById('messageList');
        var bellIcon = document.getElementById('bellIcon');
        var envelopeIcon = document.getElementById('envelopeIcon');

        if (!bellIcon.contains(event.target) && !notificationList.contains(event.target)) {
            notificationList.style.display = 'none';
        }
        if (!envelopeIcon.contains(event.target) && !messageList.contains(event.target)) {
            messageList.style.display = 'none';
        }
    });
</script>
