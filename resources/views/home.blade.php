<!DOCTYPE html>
<html lang="en">

  <head>

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

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

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
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                           	<li class="scroll-to-section"><a href="{{url('/showmenu')}}">Menu</a></li>
                            <li class="scroll-to-section"><a href="#offers">Specials</a></li>
                            <!-- <li class="scroll-to-section"><a href="#chefs">Chefs</a></li>  -->
                            <!-- <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a href="#">Features Page 4</a></li>
                                </ul>
                            </li> -->
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            @auth
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
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <h4>Mozart</h4>
                            <h6>BEST EXPERIENCE</h6>
                            <div class="main-white-button scroll-to-section">
                                <a href="{{url('/showmenu')}}">Make An Order</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide-01.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide-02.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide-03.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6> About Us </h6>
                            <h2> We Leave A Delicious Memory For You </h2>
                        </div>
                        <p> Mozart delivers the best of dishes from a varity of cuisines from around the world. It started with the ambition to satisfy the customers' food cravings and also focusing on the nutrious values of food. <br><br> Ultimately, Mozart aims at bringing a mouth-watering sensation into the hearts of everyone and also, teaching different cuisines and cultures. </p>
                        <div class="row">
                            <div class="col-4">
                                <img src="assets/images/about-thumb-01.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="assets/images/about-thumb-02.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="assets/images/about-thumb-03.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            <a rel="nofollow" href="http://youtube.com"><i class="fa fa-play"></i></a>
                            <img src="assets/images/about-video-bg.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->

    

    <!-- ***** Menu2 Area Starts ***** -->
    <section class="section" id="offers">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Mozart Week</h6>
                        <h2>This Week’s Specials</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row" id="tabs">
                        <div class="col-lg-12">
                            <div class="heading-tabs">
                                <div class="row">
                                    <div class="col-lg-6 offset-lg-3">
                                        <ul>
                                          <li><a href='#tabs-1'><img src="assets/images/tab-icon-01.png" alt=""> Breakfast </a></li>
                                          <li><a href='#tabs-2'><img src="assets/images/tab-icon-02.png" alt=""> Lunch </a></a></li>
                                          <li><a href='#tabs-3'><img src="assets/images/tab-icon-03.png" alt=""> Dinner </a></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <section class='tabs-content'>
                                <article id='tabs-1'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    @foreach (range(0, 2) as $key)
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="/foodimage/{{$dataB[$key]->image}}" alt="" style="height: 100px; width: 100px;">
                                                            <h4> {{$dataB[$key]->title}} </h4>
                                                            <p> {{$dataB[$key]->description}} </p>
                                                            <div class="price">
                                                                <h6> ${{$dataB[$key]->price}} </h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    @foreach (range(3, 5) as $key)
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="/foodimage/{{$dataB[$key]->image}}" alt="" style="height: 100px; width: 100px;">
                                                            <h4> {{$dataB[$key]->title}} </h4>
                                                            <p> {{$dataB[$key]->description}} </p>
                                                            <div class="price">
                                                                <h6> ${{$dataB[$key]->price}} </h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>  
                                <article id='tabs-2'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    @foreach (range(0, 2) as $key)
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="/foodimage/{{$dataL[$key]->image}}" alt="" style="height: 100px; width: 100px;">
                                                            <h4> {{$dataL[$key]->title}} </h4>
                                                            <p> {{$dataL[$key]->description}} </p>
                                                            <div class="price">
                                                                <h6> ${{$dataL[$key]->price}} </h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    @foreach (range(3, 5) as $key)
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="/foodimage/{{$dataL[$key]->image}}" alt="" style="height: 100px; width: 100px;">
                                                            <h4> {{$dataL[$key]->title}} </h4>
                                                            <p> {{$dataL[$key]->description}} </p>
                                                            <div class="price">
                                                                <h6> ${{$dataL[$key]->price}} </h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>  
                                <article id='tabs-3'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    @foreach (range(0, 2) as $key)
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="/foodimage/{{$dataD[$key]->image}}" alt="" style="height: 100px; width: 100px;">
                                                            <h4> {{$dataD[$key]->title}} </h4>
                                                            <p> {{$dataD[$key]->description}} </p>
                                                            <div class="price">
                                                                <h6> ${{$dataD[$key]->price}} </h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    @foreach (range(3, 5) as $key)
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="/foodimage/{{$dataD[$key]->image}}" alt="" style="height: 100px; width: 100px;">
                                                            <h4> {{$dataD[$key]->title}} </h4>
                                                            <p> {{$dataD[$key]->description}} </p>
                                                            <div class="price">
                                                                <h6> ${{$dataD[$key]->price}} </h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>   
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Chefs Area Ends ***** --> 
    
    <!-- ***** Footer Start ***** -->
    @include("foothome")

    <!-- jQuery -->
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