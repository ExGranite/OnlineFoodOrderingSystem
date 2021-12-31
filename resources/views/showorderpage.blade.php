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
    <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
                            <li class="scroll-to-section"><a href="{{url('/showorderpage', Auth::user()->id)}}" class="active">Orders</a></li>
                                <li class="scroll-to-section"><a href="{{url('/showcart', Auth::user()->id)}}">Cart [{{$count}}]</a></li>
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
        <div class="jumbotron jumbotron-fluid">
			<div class="container">
			    <h1 class="display-4">{{ Auth::user()->name }}</h1>
			    <p class="lead"> Email: {{ Auth::user()->email }} </p>
                <p class="lead"> Member Since: {{ Auth::user()->created_at }} </p>
			</div>
		</div>
        <div class="section3 orderinfo container" id="showorder">
            @if($c>0)
                <?php $row = 0; ?>
				@foreach($dataorder as $dataorder)
                
                    <hr class="my-4">
                    <div class="jumbotron">
                    @if($flag=='1' and $row=='0')
                        <div class="alert alert-success container" role="alert" style="font-weight: bold;">New order has been placed!</div>
                    @endif
                        <h1 class="display-4"><span style="font-size: 35px;"> Order ID: {{$dataorder->id}} </span></h1>
                        <p class="lead" style="padding-bottom: 5px;"> Price: ${{$dataorder->price}} </p>
                        <p class="lead" style="padding-bottom: 5px;"> Billing Name: {{$dataorder->fname}} {{$dataorder->lname}} </p>
                        <p class="lead" style="padding-bottom: 5px;"> Delivery Address: {{$dataorder->address}}, {{$dataorder->city}} </p>
                        @if($dataorder->status=='0')
                        <p class="lead"> Order Status: Processing </p>
                        @else
                        <p class="lead"> Order Status: Delivered </p>
                        @endif
                        <p class="lead" style="padding-top: 5px; padding-bottom: 10px;">
							<button class="btn btn-outline-dark" type="button" data-toggle="collapse" data-target="#r{{$row}}" aria-expanded="false" aria-controls="r{{$row}}">Contents</button>
						</p>
						<div class="collapse" id="r{{$row}}">
                            <div class="lead" style="background-color: rgba(255, 255, 255, 0.6); height: auto; padding: 20px;"> {{$dataorder->contents}} </div>
						</div>
					</div>
                <?php $row = $row + 1; ?>
                @endforeach
            @else
                <hr class="my-4">
                <div class="alert alert-warning" role="alert">You do not have any orders to show. 😭 <a href="{{url('/showmenu')}}" class="alert-link">Make an Order now!</a></div>
			@endif
			</div>
        </div>
    </section>


    <!-- ***** Footer Start ***** -->
    @include("foothome")

    <!-- jQuery -->
    
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