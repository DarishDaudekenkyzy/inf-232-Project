@extends('components.layout')

@section('link_section')
    <link rel="stylesheet" type="text/css" href="\css\category_products.css">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="d-flex flex-wrap container col-9 py-5">
            @foreach($products as $product)
                <div class="d-flex flex-column mb-3" style="width: 32%; margin: 0 4px;">
                    <img class="w-100" src="{{$product->image}}">
                    <div class="d-flex flex-column py-2 text-center">
                        <a class="product_name" href="/products/{{$product->id}}" class="fs-6">{{$product->name}}</a>
                        <span class="fs-7 text-secondary">{{__("Price")}}: {{$product->price}}$</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
