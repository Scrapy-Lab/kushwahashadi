<div style="position:relative">
    <img src="./images/HomePage_Default_Final.webp" class="w-100" alt="" />
    <div class="header_logo">
        <img src="./images/header-logo.png" w="100" h="100" alt="" />
    </div>
    {{-- @if(Auth::check())
        <button>Logout</button>
    @else --}}
        <div class="header_login">
            <img src="./images/language-switcher-web.svg" w="10" h="10" alt="" />
            <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"
                class="log_in">Login</button>
            <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;"
                class="register">Register</button>
        </div>
    {{-- @endif --}}
</div>
<div id="id01" class="modal">
    @livewire('login')
</div>

{{-- Register Modal --}}
<div id="id02" class="modal">
    @livewire('registration')
</div>


{{-- Header for Dashboard --}}
<div class="dashTOpheader d-flex justify-content-start align-items-center gap-5">
    <img src="./images/header-logo.png" w="100" h="100" alt="" />
    <ul class="dashmenu d-flex justify-content-between gap-5 m-0">
        <li><a href="#">Home</a></li>
        <li><a href="#">Active Members</a></li>
        <li><a href="#">Premium Plans</a></li>
        <li><a href="#">Happy Stories</a></li>
        <li><a href="#">Contact Us</a></li>
    </ul>
</div>
