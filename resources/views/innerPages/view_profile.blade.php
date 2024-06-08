@extends('layouts.app')
@section('content')
    {{-- Dashboard --}}
    
    <div class="container">
        <ul class="d-flex gap-5 p-0" style="list-style: none;">
         <li class="nav-item">
             <a href="{{ route('dashboard') }}" class="nav-link">Dashboard</a>
         </li>
         <li class="nav-item">
             <a href="{{ route('edit_profile') }}" class="nav-link">Edit Profile</a>
         </li>
         <li class="nav-item">
             <a href="#" class="nav-link">Partner Expectations</a>
         </li>
         <li class="nav-item">
             <a href="#" class="nav-link">Search</a>
         </li>
         <li class="nav-item">
             <a href="#" class="nav-link">Happy Story</a>
         </li>
         <li class="nav-item">
             <a href="#" class="nav-link">Contact Us</a>
         </li>
         <li class="nav-item">
             <a href="#" class="nav-link">Upgrade Plan</a>
         </li>
        </ul>
        <div class="row align-items-start justify-content-between">

            @livewire('profile-card', ['id' => $id])
            {{-- @if ($showProfile) --}}
            @livewire('profile-info', ['id' => $id])
            {{-- @endif --}}

        </div>

    </div>


    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Laravel Crop Image Before Upload Example - ItSolutionStuff.com
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="img-container">
                        <div class="row">
                            <div class="col-md-8">
                                <img id="image" src="https://avatars0.githubusercontent.com/u/3456749">
                            </div>
                            <div class="col-md-4">
                                <div class="preview"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="crop">Crop</button>
                </div>
            </div>
        </div>
    </div>
    <script>
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
    </script>
@endsection
