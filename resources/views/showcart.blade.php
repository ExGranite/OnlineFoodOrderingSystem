<!DOCTYPE html>
<html lang="en">

  <head>

  <base href="/public">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="assets/images/logo.png">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Mozart - Online Food Ordering System</title>
    <!-- Additional CSS Files -->


    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/cart.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    <style>
        input[type="submit"].submit:hover{
            background-color: #f69679 !important;
            transition: 0.3s ease !important;
        }
        a.continue:hover, a.continue:focus, a.continue:active {
            background: #f69679 !important;
        }
        input[type="date"]{
            display: block;
            color: #757575;
            height: 50px;
            border-width: 1px;
            border-color: #858585;
            border-style: solid;
            width: 50% !important;
            float: left;
            border-radius: 2px;
            margin-bottom: 0px;
            padding-left: 3%;
            padding-right: 2% !important;
            font-size: 14px;
        }
        input[type="date"]:hover{
            border-color: #4F4F4F;
        }
    </style>
    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo">
                            <img src="assets/images/klassy-logo.png" allign="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="/">Home</a></li>
                            <li class="scroll-to-section"><a href="{{url('/showmenu')}}">Menu</a></li>
                            @auth
                            <li class="scroll-to-section"><a href="{{url('/showorderpage', Auth::user()->id)}}">Orders</a></li>
                                <li class="scroll-to-section"><a href="{{url('/showcart', Auth::user()->id)}}" class="active">Cart [{{$count}}]</a></li>
                            @endauth
                            @guest
                            @endguest
                            <li>
                            @if (Route::has('login'))
                                <div class="">
                                    @auth
                                            <li class="submenu">
                                                <a href="javascript:;">{{ Auth::user()->name }}</a>
                                                <ul>
                                                    <li><a href="{{ route('profile.show') }}">Profile</a></li>
                                                    <form method="POST" action="{{ route('logout') }}">
                                                        @csrf
                                                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Log Out</a></li>
                                                    </form>
                                                    
                                                </ul>
                                            </li>
                                    @else
                                        <li><a href="{{ route('login') }}">Log in</a></li>
                                        <!-- class="text-sm text-gray-700 dark:text-gray-500 underline" -->

                                        @if (Route::has('register'))
                                            <li><a href="{{ route('register') }}">Register</a></li>
                                            <!-- class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline" -->
                                        @endif
                                    @endauth
                                </div>
                            @endif
                            </li>
                        </ul>        
                        <!-- <a class='menu-trigger'>
                            <span>Menu</span>
                        </a> -->
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>


    <section class="section" id="about" style="min-height: 1000px;">
    
    <form action="{{url('orderconfirm', Auth::user()->id)}}" method="POST">
        @csrf
        <div class="container">
            <div class="wrap cf">
                <!-- <h1 class="projTitle">Responsive Table<span>-Less</span> Shopping Cart</h1> -->
                    <div class="heading cf">
                        <h1>My Cart</h1>
                        <a href="{{url('/showmenu')}}" class="continue">Continue Shopping</a>
                    </div>
                    <div class="cart">
                    <!-- <ul class="tableHead">
                            <li class="prodHeader">Product</li>
                            <li>Quantity</li>
                            <li>Total</li>
                            <li>Remove</li>
                        </ul> -->
                        <ul class="cartWrap">
                            <!-- $p = 0 -->
                            @if($count=='0')
                                <li class="items odd">
                                    <div class="infoWrap"> 
                                        <div class="cartSection col-md-12">
                                            <h3> Nothing in Cart </h3>
                                            <p class="stockStatus"> </p>
                                        </div>  
                                    </div>
                                </li>
                                <hr></hr>
                            @else
                                @foreach($datacart as $datacart)
                                    <li class="items odd">
                                        <div class="infoWrap"> 
                                            <div class="cartSection col-md-9">
                                            <img src="foodimage/{{$datacart->image}}" alt="Image Not Found" style="height: 100px; width: 100px; border-radius: 100%;"/>
                                                <p class="itemNumber"> #{{$datacart->id}} </p>
                                                <input type="text" name="foodname[]" value="{{$datacart->title}}" hidden>
                                                <input type="text" name="price[]" value="{{$datacart->totalprice}}" hidden>
                                                <input type="text" name="quantity[]" value="{{$datacart->quantity}}" hidden>
                                                <h3> {{$datacart->title}} </h3>
                                                <p class="stockStatus out"> <input type="text" class="qty" placeholder="{{$datacart->quantity}}" disabled/> x ${{$datacart->price}} </p>
                                            </div>  
                                            
                                            <div class="prodTotal cartSection  col-md-3">
                                                <p>${{$datacart->totalprice}}</p>
                                            </div>
                                            
                                            <div class="cartSection removeWrap">
                                                <a href="{{url('/removefromcart', [$datacart->id, $userid])}}" class="remove">x</a>
                                            </div>
                                        </div>
                                    </li>
                                    <hr></hr>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                    @if($count!='0')
                    <div class="subtotal cf">
                        <ul>
                            <li class="totalRow"><a type = "button" data-toggle="collapse" data-target="#appear" aria-expanded="false" aria-controls="appear" class="continue btn" style="text-decoration: none; font-family: 'Montserrat', sans-serif; letter-spacing: -0.015em; font-size: 1em; padding: 1em 3em; color: #fff; background: #82ca9c; font-weight: bold; border-radius: 50px; float: right; text-align: right; transition: all 0.25s linear;"> Checkout </a></li>
                        </ul>
                    </div>
                    @endif
                    
                </div>
            </div>
            <div id = "appear" class="body collapse" style = "padding: 40px 0; margin: 0 auto; width: 600px;">
                <div class="form-container" style="flex-direction: column; justify-content: center; align-items: center;">
                    <div class="personal-information" style="background-color: #82ca9c; color: #fff; padding: 9px 0; text-align: center; height: 50px; margin-bottom: 10px;">
                        <h style="font-size: 1.3em; font-family: 'Montserrat';">Payment Information</h1>
                    </div>

                    <input id="column-left" type="text" required="required"  name="fname" placeholder="First Name" style = "width: 50%; float: left; margin-bottom: 0px;  margin: 0px 0; padding-left: 3%; font-size: 14px; display: block; height: 50px; color: #757575;"/>
                    <input id="column-right" type="text" required="required"  name="lname" placeholder="Surname" style = "width: 50%; float: right; padding-left: 3%; font-size: 14px; display: block; height: 50px; color: #757575;"/>
                    <input id="input-field" type="text" required="required"  name="card" placeholder="Card Number" style = "padding-left: 3%; font-size: 14px; display: block; height: 50px; width: 100%; color: #757575;"/>
                    <input id="column-left" max="3000-12-31" min="1000-01-01" type="date" required="required" name="date"/>
                    <input id="column-right" type="text" required="required"  name="ccv" placeholder="CCV" pattern="[0-9]*" maxlength="5" style = "width: 50%; float: right; padding-left: 3%; font-size: 14px; display: block; height: 50px; color: #757575;"/>
                    
                    <input id="input-field" type="text" name="address" required="required" autocomplete="on" maxlength="45" placeholder="Street Address" style = "padding-left: 3%; font-size: 14px; display: block; height: 50px; width: 100%; color: #757575;"/>
                    <input id="column-left" type="text" name="city" required="required" autocomplete="on" maxlength="20" placeholder="City" style = "width: 50%; float: left; margin-bottom: 0px; padding-left: 3%; font-size: 14px; display: block; height: 50px; color: #757575;"/>
                    <input id="column-right" type="text" name="zip" required="required" autocomplete="on" pattern="[0-9]*" maxlength="5" placeholder="ZIP Code" style = "width: 50%; float: right; padding-left: 3%; font-size: 14px; display: block; height: 50px; color: #757575;"/>
                    <input id="input-field" type="email" name="email" required="required" autocomplete="on" maxlength="40" placeholder="Email" style = "padding-left: 3%; font-size: 14px; display: block; height: 50px; width: 100%; margin-bottom: 10px; color: #757575;"/>
                    <input class = "submit" type="submit" value="Submit" style = "float: right; padding-left: 3%;font-size: 14px; display: block; height: 50px; width: 50%; border: none; background-color: #82ca9c; color: #fff; margin-top: 2px; cursor: pointer; border-radius: 10px; font-family: 'Montserrat', sans-serif; letter-spacing: -0.015em; font-size: 1em; font-weight: bold;"/>

                </div>
        </div>
        </div>
        
        </form>
    </section>

    <!-- ***** Footer Start ***** -->
    @include("foothome")

    <!-- <script src="assets/js/cart.js"></script> -->
    
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
  </body>
</html>