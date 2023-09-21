    <!-- ***** Chefs Area Starts ***** -->
    <style>
        .chef-item {
            width: 450px;  
            height: 420px;
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease; /* Card transformation effect */
        }

        .chef-item:hover {
            transform: scale(1.05); /* Scale up on hover */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Drop shadow for more 3D feel */
        }
        
        .chef-item .thumb {
            width: 100%;
            height: 75%;
            background-size: cover;
            background-position: center;
            position: relative; /* For positioning of child elements */
        }

        .chef-item .thumb img {
            display: none; 
        }

        .chef-item .thumb .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.5)); /* Gradient overlay */
            opacity: 0; /* Initially hidden */
            transition: opacity 0.3s ease; /* Smooth fade in effect */
        }

        .chef-item:hover .thumb .overlay {
            opacity: 1; /* Show overlay on hover */
        }
        
        .chef-item .thumb .social-icons {
            position: absolute;
            bottom: -50px; /* Initially hidden below the card */
            left: 50%;
            transform: translateX(-50%);
            list-style-type: none;
            padding: 0;
            transition: bottom 0.3s ease; /* Icon pop-up effect */
        }

        .chef-item:hover .thumb .social-icons {
            bottom: 100px; /* Raise up on hover */
        }
        
        .chef-item .thumb .social-icons li {
            display: inline-block;
            margin: 0 10px;
        }

        .down-content {
            height: 200px;
        }
    </style>

        
    <!-- ***** Chefs Area Starts ***** -->
    
    <section class="section" id="chefs" style="background-color: black;">
        <div class="container" style="margin-left: 200px;">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading" >
                        <h6 >Our Chefs <span></span></h6>
                        <h2 style="color: white" >We offer the best ingredients for you</h2>
                    </div>  
                </div>
            </div>

            <div class="row chef-row" style="width:1500px"> 
                @foreach ($data2 as $data2)
                    <div class="col-lg-4" >
                        <div class="chef-item equal-height">
                            <div class="thumb" style="background-image: url('chefimage/{{$data2->image}}');">
                                <div class="overlay"></div>
                                <ul class="social-icons">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <div class="down-content">
                                <h4 style="color: white"> {{$data2->name}}</h4>
                                <span style="color: white">{{$data2->speciality}}</span>
                            </div>
                        
                        </div>
                        <br>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ***** Chefs Area Ends ***** -->
