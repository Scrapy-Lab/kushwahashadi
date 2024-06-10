
    {{-- @livewire('partner-expectation') --}}
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <div class="col-md-7" id="dashboard_listing" wire:ignore>
        <div class="intro">
            <div class=" d-flex justify-content-between align-items-center">
                <h4>Partner Expectation</h4>
                <div class="d-flex align-items-center gap-2">
                    <button><i class="fa fa-unlock" aria-hidden="true"></i> Show</button>
                    <p><i class="fa fa-pencil" aria-hidden="true"></i></p>
                </div>
            </div>
            <div class="d-flex align-items-start mt-4">
                <table class="table table-striped">
                    <tr>
                        <th>GENERAL REQUIREMENT</th>
                        <td>{{ $user->user_detail->partner_exp_general_requirement }}</td>
                    </tr>
                    <tr>
                        <th>HEIGHT</th>
                        <td>{{ $user->user_detail->partner_exp_height }}</td>
                    </tr>
                    <tr>
                        <th>MARITAL STATUS</th>
                        <td>{{ $user->user_detail->partner_exp_marital_status }}</td>
                    </tr>
                    <tr>
                        <th>COUNTRY OF RESIDENCE</th>
                        <td>{{ $user->user_detail->partner_exp_country_of_residence }}</td>
                    </tr>
                    <tr>
                        <th>CASTE / SECT</th>
                        <td>{{ $user->user_detail->partner_exp_caste }}</td>
                    </tr>
                    <tr>
                        <th>EDUCATION</th>
                        <td>{{ $user->user_detail->partner_exp_education }}</td>
                    </tr>
                    <tr>
                        <th>DRINKING HABITS</th>
                        <td>{{ $user->user_detail->partner_exp_drinking_habits }}</td>
                    </tr>
                    <tr>
                        <th>DIET</th>
                        <td>{{ $user->user_detail->partner_exp_diet }}</td>
                    </tr>
                    <tr>
                        <th>MANGLIK</th>
                        <td>{{ $user->user_detail->partner_exp_manglik }}</td>
                    </tr>
                    <tr>
                        <th>FAMILY VALUES</th>
                        <td>{{ $user->user_detail->partner_exp_family_values }}</td>
                    </tr>
                    <tr>
                        <th>PREFERED COUNTRY</th>
                        <td>{{ $user->user_detail->partner_exp_prefered_countries }}</td>
                    </tr>
                    <tr>
                        <th>PREFER CITIES</th>
                        <td>{{ $user->user_detail->partner_exp_prefered_cities }}</td>
                    </tr>
                </table>

                <table class="table table-striped">
                    <tr>
                        <th>AGE</th>
                        <td>{{ $user->user_detail->partner_exp_age }}</td>
                    </tr>
                    <tr>
                        <th>WEIGHT</th>
                        <td>{{ $user->user_detail->partner_exp_weight }}</td>
                    </tr>
                    <tr>
                        <th>WITH CHILDREN ACCEPTABLES</th>
                        <td>{{ $user->user_detail->partner_exp_with_child }}</td>
                    </tr>
                    <tr>
                        <th>RELIGION</th>
                        <td>{{ $user->user_detail->partner_exp_religion }}</td>
                    </tr>
                    <tr>
                        <th>SUB CASTE</th>
                        <td>{{ $user->user_detail->partner_exp_sub_caste }}</td>
                    </tr>
                    <tr>
                        <th>PROFESSION</th>
                        <td>{{ $user->user_detail->partner_exp_profession }}</td>
                    </tr>
                    <tr>
                        <th>SMOKING HABITS</th>
                        <td>{{ $user->user_detail->partner_exp_smoking }}</td>
                    </tr>
                    <tr>
                        <th>BODY TYPE</th>
                        <td>{{ $user->user_detail->partner_exp_bodyType }}</td>
                    </tr>
                    <tr>
                        <th>ANY DISABILITY</th>
                        <td>{{ $user->user_detail->partner_exp_disability }}</td>
                    </tr>
                    <tr>
                        <th>FAMILY STATUS</th>
                        <td>{{ $user->user_detail->partner_exp_family_stat }}</td>
                    </tr>
                    <tr>
                        <th>PREFERED STATE</th>
                        <td>{{ $user->user_detail->partner_exp_prefered_state }}</td>
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


