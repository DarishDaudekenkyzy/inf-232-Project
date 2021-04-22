<html>
<head>
    <title>Green Jungle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="\css\main.css">
    @yield('link_section')

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&family=M+PLUS+Rounded+1c:wght@300&family=Charmonman&family=Syncopate&family=Lexend&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/jpg" href="\images\leaf.png"/>
    <script src="\js\layout.js"></script>
</head>
<body>
    <header>
        <div id="header_first" class="container-fluid row">

            <div id="site_title" class="col d-flex justify-content-start">
                <a href="/"><span id="green_span">Green</span><span id="jungle_span"> jungle</span></a>
            </div>
            <div id="header_right" class="col d-flex justify-content-end">
                @if(auth()->check())
                    <span>{{auth()->user()->name}}</span>
                @else
                    <a href="/login" class="auth_link">{{__("Login")}}</a>
                    <a href="/register" class="auth_link">{{__("Register")}}</a>
                @endif

                {{--CHOOSE LANGUAGE--}}
                <div id="language_div">
                    <select id="lang_select" onchange="changeLanguage()">
                        <option value="en">{{__("eng")}}</option>
                        <option value="ru">{{__("rus")}}</option>
                    </select>
                    <script>
                        document.getElementById('lang_select').value = '{!! config('app.locale') !!}';
                    </script>
                </div>
                {{--CHOOSE LANGUAGE--}}
                @if(auth()->check())
                    @if(auth()->user()->role == 1)
                        <a href="/add_product" class="auth_link">{{__("Add Product")}}</a>
                    @endif
                    <a href="/logout" class="auth_link">{{__("Log Out")}}</a>
                @endif
            </div>
        </div>
        <div id="header_second">
            <div id="header_categories">
                @foreach($categories as $category)
                        <div class="category_link">
                            <span class="hover"><a href="/categories/{{ $category->slug }}">{{ __($category->name) }}</a></span>
                        </div>
                @endforeach
            </div>
        </div>
    </header>
    <div id="main_content">
        @yield('content')
    </div>

    <footer class="container-fluid d-flex justify-content-center">
        <div class="col-9 py-5 row">
            <div class="col-4">
                <div class="d-flex flex-column">
                    <p>{{__("Join our newsletter to stay up to date on features and releases.")}}</p>
                    <form action="/mail/send" method="GET">
                        <div class="input-group">
                            <input type="email" name="email" class="form-control" placeholder="{{__("Email")}}">
                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">{{__("Subscribe")}}</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-3 d-flex flex-column">
                <a>{{__("About Us")}}</a>
                <a>{{__("Blog")}}</a>
                <a>{{__("Book, Simply Sustainable")}}</a>
                <a>{{__("Gift Cards")}}</a> <br>

                <a>{{__("Contact Us")}}</a>
                <a>{{__("Shipping and Returns")}}</a>
                <a>{{__("Privacy Policy")}}</a>
                <a>{{__("Terms and Conditions")}}</a>
            </div>
            <div class="col-3 d-flex flex-column">
                <a>Instagram</a>
                <a>Facebook</a>
                <a>Pinterest</a>
            </div>
            <div class="col-2 d-flex flex-column">
                <p>© 2020 Green Jungle</p> <br>

                <p>{{__("1320 4th Street San Rafael, California 94901")}}</p>
            </div>
        </div>
    </footer>
</body>
</html>
