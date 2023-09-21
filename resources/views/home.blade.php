<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Ofrench Tacos Tetouane</title>
<!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
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
    <header class="header-area header-sticky" style="background-color: black">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo" >
                            <label style="font-family: 'Times New Roman', Times, serif;color:#f94300;margin-left:-220px;" >OFRENCH TACOS</label>

                        </a>
                        
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active" style="color: white">Home</a></li>
                            <li class="scroll-to-section"><a href="#about" style="color: white">About</a></li>
                           	
                        <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="scroll-to-section"><a href="#menu" style="color: white" >Menu</a></li>
                            <li class="scroll-to-section"><a href="#chefs" style="color: white">Chefs</a></li> 
                            
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="#reservation" style="color: white">Contact Us</a></li> 



                            <li class="scroll-to-section">
                                @auth
                                    
                               <a href="{{url('/showcart',Auth::user()->id)}}" style="color: white">
                                My Cart
                               </a>
                                @endauth

                                @guest
                                <a href="" style="color: white">
                                Cart [0] </a>
                                @endguest
                            </a></li>
                            <li>
                                @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                         <li>
                            <x-app-layout>
    
                            </x-app-layout>
                            
                         </li>
                    @else
                     <li>   <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" style="color: white">Log in</a> </li>

                        @if (Route::has('register'))
                           <li> <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" style="color: white">Register</a> </li>
                        @endif
                    @endauth
                </div>
            @endif
                            </li>
                        </ul>        
                       
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
                            <h4>OFRENCH TACOS</h4>
                            <h6>THE BEST EXPERIENCE</h6>
                            <div class="main-white-button scroll-to-section">
                                <a href="#reservation">Make A Reservation</a>
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
                                <img src="assets/images/ofrench4.jpg" alt="" width="400px">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/ofrench3.jpg" alt="" width="400px">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/ofrench5.jpg" alt="" width="400px">
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
    <section class="section" id="about" >
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6 style="color: white">About Us</h6>
                            <h2 style="color: white">The Ofrench Tacos Experience</h2>
                        </div>
                        <p style="color: white">Indulge in the art of French culinary finesse blended with the vibrant flavors of traditional tacos at 'Ofrench Tacos'. Our menu celebrates a delightful union of classic French techniques and fresh, zesty Mexican ingredients. Each dish is a symphony of flavors, curated to tantalize your taste buds with the rich buttery textures of France and the fiery 
                            zest of Mexican tacos. Come, savor the unexpected at 'Ofrench Tacos'. Dive deeper into our menu and discover an array of appetizers, main courses, and desserts, each telling its own Franco-Mexican story. Start with our escargot nestled in tortilla cups, drenched in garlic herb butter, or our ceviche with a Burgundy wine twist. For the mains, the duck confit taco with a side of roasted chili salsa is a must-try, embodying the essence of 'Ofrench Tacos'. And for those with a sweet tooth, our crème brûlée churros offer a harmonious blend of crispy and creamy, making them an irresistible treat.

                            At 'Ofrench Tacos', we believe in the power of fusion, celebrating two iconic cuisines that dance together in perfect harmony on every plate.Step into the chic interiors of 'Ofrench Tacos' and be welcomed by the comforting aroma of fresh tortillas and simmering sauces , punctuated with hints of fine French herbs and wines. Our staff, trained in the nuances of both cuisines guide you through our extensive menu
                            , ensuring your dining experience is nothing short of perfection.</p>
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
                        <div class="thumb" style="margin-top: 200px;">
                            <a rel="nofollow" href="https://www.youtube.com/watch?v=wGwNNQCs_ck&ab_channel=TWIN%27STACOS"><i class="fa fa-play"></i></a>
                            <img src="assets/images/about-video-bg.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->

   @include('food')

    @include('foodchef')

    @include('reservation')

    <!-- ***** Menu Area Starts ***** -->
    
    <!-- ***** Chefs Area Ends ***** --> 
    <div align="center" style="margin-top: 60px; color:#f94300;font-family:Georgia, 'Times New Roman', Times, serif">
        <label for="" style="font-size:50px">Welcome To Ofrench Tacos</label>
    </div>
    <!-- ***** Footer Start ***** -->
    <footer style="background-color: #f94300">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo" style="margin-top: 20px;">
                        <label style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;color:#ffffff" >OFRENCH TACOS</label>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content" style="margin-top: 20px;">
                        <p>© Copyright Ofrench Tacos.
                        
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

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