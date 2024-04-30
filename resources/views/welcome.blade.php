@extends('layouts.app')
@section('content')
    <div class="feature feature--boxed-border z-depth-2-bottom px-3 py-4  s-search">
        <form data-toggle="validator" role="form" action="" method="POST">
            <div class="row justify-content-between">
                <div class="col-md-2">
                    <label class="text-uppercase ">I'm Looking For A</label>
                    <select name="gender" onchange="(this.value,this)" class="form-control form-control-sm selectpicker"
                        data-placeholder="Choose a gender" tabindex="2" data-hide-disabled="true" title="gender">
                        <option value="">Choose one</option>
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="" class="text-uppercase ">Aged From</label>
                    <input type="number" class="form-control form-control-sm" name="aged_from" id="aged_from"
                        value="" placeholder=" ">
                </div>
                <div class="col-md-2">
                    <label for="" class="text-uppercase ">To</label>
                    <input type="number" class="form-control form-control-sm" name="aged_to" id="aged_to" value=""
                        placeholder=" ">
                </div>
                <div class="col-md-2">
                    <label for="" class="text-uppercase ">Religion</label>
                    <select name="religion" onchange="(this.value,this)"
                        class="form-control form-control-sm selectpicker s_religion" data-placeholder="Choose a religion"
                        tabindex="2" data-hide-disabled="true" title="religion">
                        <option value="">Choose one</option>
                        <option value="2">Hindu</option>
                        <option value="4">Buddist</option>
                        <option value="27">Hindu-Gen.</option>
                        <option value="28">Hindu-OBC</option>
                        <option value="29">Hindu-Sc/St</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for=""></label>
                    <button type="submit" class="btn text-white">Let’s Begin</button>
                </div>
            </div>
        </form>
    </div>
@endsection
