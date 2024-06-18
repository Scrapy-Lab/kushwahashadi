{{-- @livewire('partner-expectation') --}}
{{-- Nothing in the world is as soft and yielding as water. --}}
<div class="col-md-9" id="dashboard_listing">
    <div class="intro">
        <div class=" d-flex justify-content-between align-items-center">
            <h4>Partner Expectation</h4>
            <div class="d-flex align-items-center gap-2">
                @if ($editProfileExpectation)
                    <p wire:click="edit_profile_expec_show"><i class="fa fa-times" aria-hidden="true"></i></p>
                    <p wire:click="update_info"><i class="fa fa-check" aria-hidden="true"></i></p>
                @else
                    <p wire:click="edit_profile_expec_show"><i class="fa fa-pencil" aria-hidden="true"></i></p>
                @endif
            </div>
        </div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <div class="d-flex align-items-start mt-4">

            <table class="table table-striped">
                <tr>
                    <th>GENERAL REQUIREMENT</th>
                    {{-- @dd($editProfileExpectation) --}}
                    @if ($editProfileExpectation)
                        <td><input class="form-control"
                                value="{{ $user->user_detail->partner_exp_general_requirement }}" type="text"
                                wire:model="form.partner_exp_general_requirement"></td>
                    @else
                        <td>{{ $user->user_detail->partner_exp_general_requirement }}</td>
                    @endif

                </tr>
                <tr>
                    <th>HEIGHT</th>
                    @if ($editProfileExpectation)
                        <td><input class="form-control" value="{{ $user->user_detail->partner_exp_height }}"
                                type="text" wire:model="form.partner_exp_height"></td>
                    @else
                        <td>{{ $user->user_detail->partner_exp_height }}</td>
                    @endif
                </tr>
                <tr>
                    <th>MARITAL STATUS</th>
                    @if ($editProfileExpectation)
                        <td><input class="form-control" value="{{ $user->user_detail->partner_exp_marital_status }}"
                                type="text" wire:model="form.partner_exp_marital_status"></td>
                    @else
                        <td>{{ $user->user_detail->partner_exp_marital_status }}</td>
                    @endif
                </tr>
                <tr>
                    <th>COUNTRY OF RESIDENCE</th>
                    @if ($editProfileExpectation)
                        <td><input class="form-control"
                                value="{{ $user->user_detail->partner_exp_country_of_residence }}" type="text"
                                wire:model="form.partner_exp_country_of_residence"></td>
                    @else
                        <td>{{ $user->user_detail->partner_exp_country_of_residence }}</td>
                        {{-- <td>{{ $user->user_detail->partner_exp_marital_status }}</td> --}}
                    @endif
                </tr>
                <tr>
                    <th>CASTE / SECT</th>
                    @if ($editProfileExpectation)
                        <td><input class="form-control" value="{{ $user->user_detail->partner_exp_caste }}"
                                type="text" wire:model="form.partner_exp_caste"></td>
                    @else
                        {{-- <td>{{ $user->user_detail->partner_exp_marital_status }}</td> --}}
                        <td>{{ $user->user_detail->partner_exp_caste }}</td>
                    @endif
                </tr>
                <tr>
                    <th>EDUCATION</th>
                    @if ($editProfileExpectation)
                        <td><input class="form-control" value="{{ $user->user_detail->partner_exp_education }}"
                                type="text" wire:model="form.partner_exp_education"></td>
                    @else
                        {{-- <td>{{ $user->user_detail->partner_exp_marital_status }}</td> --}}
                        <td>{{ $user->user_detail->partner_exp_education }}</td>
                    @endif
                </tr>
                <tr>
                    <th>DRINKING HABITS</th>
                    @if ($editProfileExpectation)
                        <td><input class="form-control" value="{{ $user->user_detail->partner_exp_drinking_habits }}"
                                type="text" wire:model="form.partner_exp_drinking_habits"></td>
                    @else
                        {{-- <td>{{ $user->user_detail->partner_exp_marital_status }}</td> --}}
                        <td>{{ $user->user_detail->partner_exp_drinking_habits }}</td>
                    @endif
                </tr>
                <tr>
                    <th>DIET</th>
                    @if ($editProfileExpectation)
                        <td><input class="form-control" value="{{ $user->user_detail->partner_exp_diet }}"
                                type="text" wire:model="form.partner_exp_diet"></td>
                    @else
                        {{-- <td>{{ $user->user_detail->partner_exp_marital_status }}</td> --}}
                        <td>{{ $user->user_detail->partner_exp_diet }}</td>
                    @endif
                </tr>
                <tr>
                    <th>MANGLIK</th>
                    @if ($editProfileExpectation)
                        <td><input class="form-control" value="{{ $user->user_detail->partner_exp_manglik }}"
                                type="text" wire:model="form.partner_exp_manglik"></td>
                    @else
                        {{-- <td>{{ $user->user_detail->partner_exp_marital_status }}</td> --}}
                        <td>{{ $user->user_detail->partner_exp_manglik }}</td>
                    @endif
                </tr>
                <tr>
                    <th>FAMILY VALUES</th>
                    @if ($editProfileExpectation)
                        <td><input class="form-control" value="{{ $user->user_detail->partner_exp_family_values }}"
                                type="text" wire:model="form.partner_exp_family_values"></td>
                    @else
                        {{-- <td>{{ $user->user_detail->partner_exp_marital_status }}</td> --}}
                        <td>{{ $user->user_detail->partner_exp_family_values }}</td>
                    @endif
                </tr>
                <tr>
                    <th>PREFERED COUNTRY</th>
                    @if ($editProfileExpectation)
                        <td><input class="form-control"
                                value="{{ $user->user_detail->partner_exp_prefered_countries }}" type="text"
                                wire:model="form.partner_exp_prefered_countries"></td>
                    @else
                        {{-- <td>{{ $user->user_detail->partner_exp_marital_status }}</td> --}}
                        <td>{{ $user->user_detail->partner_exp_prefered_countries }}</td>
                    @endif
                </tr>
                <tr>
                    <th>PREFER CITIES</th>
                    @if ($editProfileExpectation)
                        <td><input class="form-control" value="{{ $user->user_detail->partner_exp_prefered_cities }}"
                                type="text" wire:model="form.partner_exp_prefered_cities"></td>
                    @else
                        {{-- <td>{{ $user->user_detail->partner_exp_marital_status }}</td> --}}
                        <td>{{ $user->user_detail->partner_exp_prefered_cities }}</td>
                    @endif
                </tr>
            </table>

            <table class="table table-striped">
                <tr>
                    <th>AGE</th>
                    @if ($editProfileExpectation)
                        <td><input class="form-control" value="{{ $user->user_detail->partner_exp_age }}"
                                type="text" wire:model="form.partner_exp_age"></td>
                    @else
                        {{-- <td>{{ $user->user_detail->partner_exp_marital_status }}</td> --}}
                        <td>{{ $user->user_detail->partner_exp_age }}</td>
                    @endif
                </tr>
                <tr>
                    <th>WEIGHT</th>
                    @if ($editProfileExpectation)
                        <td><input class="form-control" value="{{ $user->user_detail->partner_exp_weight }}"
                                type="text" wire:model="form.partner_exp_weight"></td>
                    @else
                        {{-- <td>{{ $user->user_detail->partner_exp_marital_status }}</td> --}}
                        <td>{{ $user->user_detail->partner_exp_weight }}</td>
                    @endif
                </tr>
                <tr>
                    <th>WITH CHILDREN ACCEPTABLES</th>
                    @if ($editProfileExpectation)
                        <td><input class="form-control" value="{{ $user->user_detail->partner_exp_with_child }}"
                                type="text" wire:model="form.partner_exp_with_child"></td>
                    @else
                        {{-- <td>{{ $user->user_detail->partner_exp_marital_status }}</td> --}}
                        <td>{{ $user->user_detail->partner_exp_with_child }}</td>
                    @endif
                </tr>
                <tr>
                    <th>RELIGION</th>
                    @if ($editProfileExpectation)
                        <td><input class="form-control" value="{{ $user->user_detail->partner_exp_religion }}"
                                type="text" wire:model="form.partner_exp_religion"></td>
                    @else
                        {{-- <td>{{ $user->user_detail->partner_exp_marital_status }}</td> --}}
                        <td>{{ $user->user_detail->partner_exp_religion }}</td>
                    @endif
                </tr>
                <tr>
                    <th>SUB CASTE</th>
                    @if ($editProfileExpectation)
                        <td><input class="form-control" value="{{ $user->user_detail->partner_exp_sub_caste }}"
                                type="text" wire:model="form.partner_exp_sub_caste"></td>
                    @else
                        {{-- <td>{{ $user->user_detail->partner_exp_marital_status }}</td> --}}
                        <td>{{ $user->user_detail->partner_exp_sub_caste }}</td>
                    @endif
                </tr>
                <tr>
                    <th>PROFESSION</th>
                    @if ($editProfileExpectation)
                        <td><input class="form-control" value="{{ $user->user_detail->partner_exp_profession }}"
                                type="text" wire:model="form.partner_exp_profession"></td>
                    @else
                        {{-- <td>{{ $user->user_detail->partner_exp_marital_status }}</td> --}}
                        <td>{{ $user->user_detail->partner_exp_profession }}</td>
                    @endif
                </tr>
                <tr>
                    <th>SMOKING HABITS</th>
                    @if ($editProfileExpectation)
                        <td><input class="form-control" value="{{ $user->user_detail->partner_exp_smoking }}"
                                type="text" wire:model="form.partner_exp_smoking"></td>
                    @else
                        {{-- <td>{{ $user->user_detail->partner_exp_marital_status }}</td> --}}
                        <td>{{ $user->user_detail->partner_exp_smoking }}</td>
                    @endif
                </tr>
                <tr>
                    <th>BODY TYPE</th>
                    @if ($editProfileExpectation)
                        <td><input class="form-control" value="{{ $user->user_detail->partner_exp_bodyType }}"
                                type="text" wire:model="form.partner_exp_bodyType"></td>
                    @else
                        {{-- <td>{{ $user->user_detail->partner_exp_marital_status }}</td> --}}
                        <td>{{ $user->user_detail->partner_exp_bodyType }}</td>
                    @endif
                </tr>
                <tr>
                    <th>ANY DISABILITY</th>
                    @if ($editProfileExpectation)
                        <td><input class="form-control" value="{{ $user->user_detail->partner_exp_disability }}"
                                type="text" wire:model="form.partner_exp_disability"></td>
                    @else
                        {{-- <td>{{ $user->user_detail->partner_exp_marital_status }}</td> --}}
                        <td>{{ $user->user_detail->partner_exp_disability }}</td>
                    @endif
                </tr>
                <tr>
                    <th>FAMILY STATUS</th>
                    @if ($editProfileExpectation)
                        <td><input class="form-control" value="{{ $user->user_detail->partner_exp_family_stat }}"
                                type="text" wire:model="form.partner_exp_family_stat"></td>
                    @else
                        {{-- <td>{{ $user->user_detail->partner_exp_marital_status }}</td> --}}
                        <td>{{ $user->user_detail->partner_exp_family_stat }}</td>
                    @endif
                </tr>
                <tr>
                    <th>PREFERED STATE</th>
                    @if ($editProfileExpectation)
                        <td><input class="form-control" value="{{ $user->user_detail->partner_exp_prefered_state }}"
                                type="text" wire:model="form.partner_exp_prefered_state"></td>
                    @else
                        {{-- <td>{{ $user->user_detail->partner_exp_marital_status }}</td> --}}
                        <td>{{ $user->user_detail->partner_exp_prefered_state }}</td>
                    @endif
                </tr>
            </table>
        </div>
    </div>
</div>
{{-- <script>
        var $modal = $('#modal');
        var image = document.getElementById('image');
        var cropper;

        /*------------------------------------------
        --------------------------------------------
        Image Change Event
        --------------------------------------------
        --------------------------------------------*/
        $("body").on("change", ".image", function(e) {
            var files = e.target.files;
            var done = function(url) {
                image.src = url;
                $modal.modal('show');
            };

            var reader;
            var file;
            var url;

            if (files && files.length > 0) {
                file = files[0];

                if (URL) {
                    done(URL.createObjectURL(file));
                } else if (FileReader) {
                    reader = new FileReader();
                    reader.onload = function(e) {
                        done(reader.result);
                    };
                    reader.readAsDataURL(file);
                }
            }
        });

        /*------------------------------------------
        --------------------------------------------
        Show Model Event
        --------------------------------------------
        --------------------------------------------*/
        $modal.on('shown.bs.modal', function() {
            cropper = new Cropper(image, {
                aspectRatio: 1,
                viewMode: 3,
                preview: '.preview'
            });
        }).on('hidden.bs.modal', function() {
            cropper.destroy();
            cropper = null;
        });
    </script> --}}
