@extends('components.layout')

@section('link_section')
    <link rel="stylesheet" type="text/css" href="\css\home.css">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div id="title_div" style="background-color: #F3B58C;"
                 class="d-flex flex-column align-items-center justify-content-center col-6 p-0">
                <a class="fs-2 text-center">{!!__("Low-Waste<br>Essentials for a<br>Happy Home")!!}</a>
                <button onclick="shopNow()" class="sharp_button btn mt-4">{{__("Shop Now")}}</button>
            </div>
            <div class="col-6 p-0">
                <img class="w-100" src="\images\Shipping-Square_1000px_01_1000x1000.jpg">
            </div>
        </div>

        <div id="as_seen_in" class="d-flex flex-column align-items-center py-5">
            <p>{{__("As Seen In")}}</p>
            <div class="d-flex justify-content-center mt-4">
                <div class="d-flex justify-content-center">
                    <img class="w-50" src="\images\home\as_seen_in\ezgif.com-webp-to-png_3_175x.png">
                </div>
                <div class="d-flex justify-content-center">
                    <img class="w-50" src="\images\home\as_seen_in\ezgif.com-webp-to-png_175x.png">
                </div>
                <div class="d-flex justify-content-center">
                    <img class="w-50" src="\images\home\as_seen_in\ezgif.com-webp-to-png_1_175x.png">
                </div>
                <div class="d-flex justify-content-center">
                    <img class="w-50" src="\images\home\as_seen_in\ezgif.com-webp-to-png_2_175x.png">
                </div>
                <div class="d-flex justify-content-center">
                    <img class="w-50" src="\images\home\as_seen_in\ezgif.com-webp-to-png_4_175x.png">
                </div>
            </div>
        </div>

        <div class="orange container col-9 mb-5">
            <div class="row">
                <div class="col-6 p-0" >
                    <img class="w-100" src="\images\home\row_block\SimplySustainableMockup_01c_1000x.jpg">
                </div>
                <div class="gray col-6 d-flex justify-content-center align-items-center">
                    <div class="d-flex flex-column col-7 text-center align-items-center">
                        <h3>{{ __("Introducing Simply Sustainable") }}</h3>
                        <p>{{__("Written by Lily Cameron, Founder of Wild Minimalist, Simply Sustainable shows readers how to gradually transition away from plastic waste and curate a minimal, inviting home in the process.")}}</p>
                        <button class="sharp_button col-8">{{__("Order Now")}}</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="orange container col-9 mb-5">
            <div class="row">
                <div class="gray col-6 d-flex justify-content-center align-items-center" >
                    <div class="d-flex flex-column col-7 text-center align-items-center">
                        <h3>{{ __("Goodbye Sad, Wilted Greens") }}</h3>
                        <p>{{__("A breathable cotton bag that keeps delicate herbs and greens crisp and fresh for weeks so you waste less food")}}</p>
                        <button onclick="orderBag()" class="sharp_button col-8">{{__("Order Now")}}</button>
                    </div>
                </div>
                <div class="col-6 p-0">
                    <img class="w-100" src="\images\home\row_block\WM_Swag-Bag-GIF-web_1000x.gif">
                </div>
            </div>
        </div>

        <div class="container col-9 mb-5 p-0 d-flex flex-column align-items-center">
            <h4>{{__("New on Blog")}}</h4>
            <div class="row w-100 p-0">
                <div class="d-flex flex-column col px-0">
                    <img class="w-100" src="\images\home\blog1.webp">
                    <div class="orange d-flex justify-content-center py-4">
                        <div class="col-9 text-center ">
                            <a>{{__("The 9 Best Plastic-Free Food Storage Containers")}}</a>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column col pl-1 pr-0">
                    <img class="w-100" src="\images\home\blog2.jpg">
                    <div class="orange d-flex justify-content-center py-4">
                        <div class="col-9 text-center">
                            <a>{{__("7 Tips for a Zero Waste Thanksgiving")}}</a>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column col px-0">
                    <img class="w-100" src="\images\home\blog3.jpg">
                    <div class="orange d-flex justify-content-center py-4">
                        <div class="col-9 text-center">
                            <a>{{__("7 Steps to Start Living Zero Waste (Without Spending Money!)")}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="orange container col-9 mb-5">
            <div class="row">
                <div class="col-6 p-0" >
                    <img class="w-100" src="\images\home\row_block\store_3_1000x.jpg">
                </div>
                <div class="gray col-6 d-flex justify-content-center align-items-center">
                    <div class="d-flex flex-column col-7 text-center align-items-center">
                        <h3>{{ __("Come Visit Us") }}</h3>
                        <p>{{__("Bay Area friends, our retail store in downtown San Rafael is open to the public Mon-Sat from 10am-5pm. Come stop by to stock up on low-waste essentials. Face masks required.")}}</p>
                        <button class="sharp_button col-8">{{__("Order Now")}}</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container col-9 mb-5 p-0 d-flex flex-column align-items-center">
            <h4>{{__("Follow Us")}} @WildMinimalist</h4>
            <div class="row w-100 p-0 mt-4">
                <div class="d-flex flex-column col">
                    <img class="w-100" src="\images\home\insta1.jpg">
                </div>
                <div class="d-flex flex-column col">
                    <img class="w-100" src="\images\home\insta2.jpg">
                </div>
                <div class="d-flex flex-column col">
                    <img class="w-100" src="\images\home\insta3.jpg">
                </div>

                <div class="d-flex flex-column col">
                    <img class="w-100" src="\images\home\insta4.jpg">
                </div>
            </div>
        </div>
    </div>
@endsection
