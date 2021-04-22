@extends('components.layout')

@section('link_section')
    <link rel="stylesheet" type="text/css" href="\css\login_registration.css">
@endsection

@section('content')

    <div id="log_reg_div">

        <h2 id="log_reg_header">{{__("Register")}}</h2>
        <p id="log_reg_p">{{__("Please fill in the information below:")}}</p>

        <form id="registration_form" method="POST" action="/register" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="text" class="form-control" id="name" name="name" placeholder="{{__("Name")}}">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="{{__("Lastname")}}">
            </div>

            <div class="form-group">
                <input type="email" class="form-control" id="email" name="email" placeholder="{{__("Email")}}">
            </div>

            <div class="form-group">
                <input type="password" class="form-control" id="password" name="password" placeholder="{{__("Password")}}">
            </div>

            <div class="form-group">
                <input type="password" class="form-control" id="password_confirmation"
                       name="password_confirmation" placeholder="{{__("Password Confirmation")}}">
            </div>

            <div class="form-group">
                <label>Profile Image:</label>
                <input name="image" type="file" class="form-control">
            </div>

            @if ($errors->any())
                <div id="error_div">{{$errors->first()}}</div>
            @endif

            <div class="form-group">
                <button style="cursor:pointer" type="submit" class="btn btn-outline-success">{{__("Create Account")}}</button>
            </div>
        </form>
    </div>

@endsection
