@extends('layouts.app')
@section('content')
    {{-- Dashboard --}}
    
    <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link" href="{{ route('dashboard') }}"><i class="fa fa-heart" aria-hidden="true"></i>Dashboard</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link active" href="{{ route('edit_profile') }}" id="tab1-tab" data-bs-toggle="tab"
                    data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="true"><i
                        class="fa fa-user" aria-hidden="true"></i>
                    Edit Profile</a>
            </li>

            <li class="nav-item" role="presentation">
                <a class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab"
                    aria-controls="tab3" aria-selected="false"><i class="fa fa-list-ul" aria-hidden="true"></i>
                    Shortlist</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#tab4" type="button" role="tab"
                    aria-controls="tab4" aria-selected="false"><i class="fa fa-star" aria-hidden="true"></i> Followed
                    Users</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="tab5-tab" data-bs-toggle="tab" data-bs-target="#tab5" type="button" role="tab"
                    aria-controls="tab5" aria-selected="false"><i class="fa fa-comments-o" aria-hidden="true"></i>
                    Messaging</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="tab6-tab" data-bs-toggle="tab" data-bs-target="#tab6" type="button" role="tab"
                    aria-controls="tab6" aria-selected="false"><i class="fa fa-ban" aria-hidden="true"></i> Ignored List</a>
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
