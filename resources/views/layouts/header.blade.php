<div style="position:relative">
    <img src="./images/HomePage_Default_Final.webp" class="w-100" alt="" />
    <div class="header_logo">
        <img src="./images/sangam.svg" w="100" h="100" alt="" />
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
