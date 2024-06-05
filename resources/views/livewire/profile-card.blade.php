<div class="col-md-4 text-center mainProfile">
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    {{-- @if ($image_base64)
        <img src="{{ $image_base64->temporaryUrl() }}">
        @else

        @endif --}}
    {{-- <img src="{{ asset('storage/profile_img/' . $user_details->user_image) }}" wire:ignore class="show-image"
        alt=""> --}}
    <form wire:submit="store_profile_image" wire:ignore>
        @csrf
        <input type="file" name="image" class="image">
        <input type="hidden" name="image_base64">
        @error('image_base64')
            <span class="error">{{ $message }}</span>
        @enderror
        {{-- <img src="" style="width: 200px;display: none;" class="show-image"> --}}

        <br />
        <button class="btn btn-success" id="profile_image">Submit</button>
    </form>
    <div class="profile-details">
        <h2 class="heading heading-3 strong-500 profile-name">{{ ucfirst($user->name) }} {{ $user->last_name }}</h2>
        <h3 class="heading heading-6 strong-400 profile-occupation mt-3">14</h3>
        <div class="profile-stats clearfix mt-2">
            <div class="stats-entry" style="width: 100%">
                <span class="stats-count">0</span>
                <span class="stats-label text-uppercase">Followers</span>
            </div>
        </div>
        <!-- Profile connect -->
        <div class="profile-connect mt-5">
            <!-- <a href="#" class="btn btn-styled btn-block btn-circle btn-sm btn-base-5">Follow</a>
                        <a href="#" class="btn btn-styled btn-block btn-circle btn-sm btn-base-2">Send message</a> -->
            <h2 class="heading heading-5 strong-400">Package Informations</h2>
        </div>
        <div class="profile-stats clearfix mt-0">
            <div class="stats-entry">
                <span class="stats-count"> Free </span>
                <span class="stats-label text-uppercase">Current Package</span>
            </div>
            <div class="stats-entry">
                <span class="stats-count">₹0.00</span>
                <span class="stats-label text-uppercase">Package Price</span>
            </div>
        </div>
        <div class="profile-stats clearfix mt-2">
            <div class="stats-entry">
                <span class="stats-count">None</span>
                <span class="stats-label text-uppercase">Payment Gateway</span>
            </div>
            <div class="stats-entry">
                <span class="stats-count">0</span>
                <span class="stats-label text-uppercase">Remaining Interest</span>
            </div>
        </div>
        <div class="profile-stats clearfix mt-2">
            <div class="stats-entry">
                <span class="stats-count">0</span>
                <span class="stats-label text-uppercase">Remaining Message</span>
            </div>
            <div class="stats-entry">
                <span class="stats-count">0</span>
                <span class="stats-label text-uppercase">Photo Gallery</span>
            </div>
        </div>
    </div>
    @if (!$is_view_profile)
        <div class="profile-useful-links clearfix">
            <div class="useful-links">

                <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 gallery l_nav "
                    wire:click="$parent.show_profile()">
                    <b style="font-size: 12px">My Profile</b>
                </a>
                <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 gallery l_nav"
                    wire:click="$parent.show_intrest()">
                    <b style="font-size: 12px">My Intrest</b>
                </a>
                <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 happy_story l_nav"
                    wire:click="$parent.show_shortlist()">
                    <b style="font-size: 12px">Shortlist</b>
                </a>
                <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 my_packages l_nav"
                    wire:click="$parent.show_messsage()">
                    <b style="font-size: 12px">Messaging</b>
                </a>
                <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 payments l_nav"
                    wire:click="$parent.show_viewers()">
                    <b style="font-size: 12px">Profile Viewers</b>
                </a>
                <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 picture_privacy l_nav"
                    onclick="profile_load('picture_privacy','alt-sm')">
                    <b style="font-size: 12px">Picture Privacy</b>
                </a>

                <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 change_pass l_nav"
                    onclick="profile_load('change_pass','alt-sm')">
                    <b style="font-size: 12px">Change Password</b>
                </a>

                <div class="text-center pt-3 pb-0">
                    <a onclick="profile_load('close_account')">
                        <i class="fa fa-lock"></i>
                        Close Account </a>
                </div>
            </div>
        </div>
    @endif
    @script
        <script>
            base64data = ""
            $("#crop").click(function() {
                canvas = cropper.getCroppedCanvas({
                    width: 160,
                    height: 160,
                });

                canvas.toBlob(function(blob) {
                    url = URL.createObjectURL(blob);
                    var reader = new FileReader();
                    reader.readAsDataURL(blob);
                    reader.onloadend = function() {
                        base64data = reader.result;


                        $("input[name='image_base64']").val(base64data);
                        $(".show-image").show();
                        $(".show-image").attr("src", base64data);
                        $("#modal").modal('toggle');
                    }
                });
            });

            $("#profile_image").click(function() {

                console.log("adasdTest")

                $wire.dispatch('post-created', {
                    value: base64data
                });

            });

            $(".l_nav").click(function() {

                console.log("adasdTest");

                $("#dashboard_listing").hide();

            });
        </script>
    @endscript
</div>
