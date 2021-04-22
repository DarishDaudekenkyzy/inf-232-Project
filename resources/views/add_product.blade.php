@extends('components.layout')

@section('link_section')
    <link rel="stylesheet" type="text/css" href="\css\login_registration.css">
@endsection

@section('content')

    <div id="log_reg_div">

        <h2 id="log_reg_header">{{__("Add Product")}}</h2>
        <p id="log_reg_p">{{__("Please fill in the information below:")}}</p>

        <form method="POST" action="/add_product">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="text" name="category_id" class="form-control" id="category_id" placeholder="{{__("Category ID")}}">
            </div>

            <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="{{__("Name")}}">
            </div>

            <div class="form-group">
                <input type="text" name="image" class="form-control" placeholder="{{__("Path to Image")}}">
            </div>

            <div class="form-group">
                <input type="number" name="price" class="form-control" placeholder="{{__("Price")}}">
            </div>

            <div class="form-group">
                <input type="number" name="quantity" class="form-control" placeholder="{{__("Quantity")}}">
            </div>

            @if ($errors->any())
                <div id="error_div">{{$errors->first()}}</div>
            @endif

            <div class="form-group">
                <button style="cursor:pointer" type="submit" class="btn btn-outline-success">{{__("Add Product")}}</button>
            </div>
        </form>
    </div>

@endsection
