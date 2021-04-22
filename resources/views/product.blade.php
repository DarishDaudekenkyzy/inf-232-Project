@extends('components.layout')

@section('content')
    <div class="container-fluid">
        <div class="d-flex container col-9 py-5">
            <div class="row container-fluid">
                <div class="col">
                    <img class="w-100" src="{{$product->image}}">
                </div>
                <div class="col">
                    <h3>{{$product->name}}</h3>
                    <hr>
                    <p class="fs-5">Price: {{$product->price}}$</p>
                    <p class="fs-5">{{__("Quantity in stock")}}: {{$product->quantity}}</p>

                    <button class="sharp_button">{{__("Buy")}}</button>
                </div>
            </div>
        </div>
    </div>
@endsection
