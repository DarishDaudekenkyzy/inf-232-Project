@extends('components.layout')

@section('link_section')
    <link rel="stylesheet" type="text/css" href="\css\login_registration.css">
@endsection

@section('content')

    <div id="log_reg_div">

        <h2 id="log_reg_header">{{__("Login")}}</h2>
        <p id="log_reg_p">{{__("Please enter your e-mail and password:")}}</p>

        <div id="form_div">
            <form id="login_form" method="POST" action="/login">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="{{__("Email")}}">
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" id="password" name="password" placeholder="{{__("Password")}}">
                </div>

                @if ($errors->any())
                    <div id="error_div">{{$errors->first()}}</div>
                @endif

                <div class="form-group">
                    <button style="cursor:pointer" type="submit" class="btn btn-outline-success">{{__("Login")}}</button>
                </div>
            </form>
        </div>

        <div id="dont_have_div">
            <span>{{__("Don't have an account?")}}</span>
            <a href="register">{{__("Register")}}</a>
        </div>
    </div>

@endsection
