<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PROPMAN</title>
    <!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

     <!-- Preloader -->
    <link href="{{URL::asset('assets/css/css/bootstrap.min.css')}}" rel="stylesheet">


    <link rel="stylesheet" href="{{URL::asset('assets/css/css/preloader.css')}}" type="text/css" media="screen, print"/>

    <!-- Icon Font-->
    <link rel="stylesheet" href="{{URL::asset('assets/css/style1.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/css/owl.theme.default.css')}}">
    <!-- Animate CSS-->
    <link rel="stylesheet" href="{{URL::asset('assets/css/css/animate.css')}}">

    <!-- Bootstrap -->
    <link href="{{URL::asset('assets/css/css/bootstrap.min.css')}}" rel="stylesheet">



    <!-- Style -->
    <link href="{{URL::asset('assets/css/css/style.css')}}" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="{{URL::asset('assets/css/css/responsive.min.css')}}" rel="stylesheet">

</head>

<body>
                <!-- Preloader -->
                <div id="preloader">
                    <div id="status">&nbsp;</div>
                </div>




    <header id="HOME" style="background-position: 50% -125px;">
	        <div class="section_overlay">
	            <nav class="navbar navbar-default navbar-fixed-top">
	              <div class="container">
	                <!-- Brand and toggle get grouped for better mobile display -->
	                <div class="navbar-header">
	                  <!--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"-->
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                  </button>

	                  <a class="navbar-brand" href="#">  <img  src="{{URL::asset('assets/images/propman.png')}}"></a>
	                </div>

	                <!-- Collect the nav links, forms, and other content for toggling -->
	                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	                  <ul class="nav navbar-nav navbar-right">
	                    <li><a href="#HOME">Home</a></li>
                        <li><a href="#ABOUT">About Us</a></li>
	                    <li><a href="#SERVICE">Services</a></li>
	                    <li><a href="#CONTACT">Contact</a></li>
                          <li><button class="login" type="submit"><a style="color: white" href="{{route("login")}}">Login</a></button></li>
	                  </ul>
	                </div><!-- /.navbar-collapse -->
                    <!--button type="submit">Login</button-->

	              </div><!-- /.container -->
	            </nav>

	            <div class="container">
	                <div class="row">
	                    <div class="col-md-12 text-center">
	                        <div class="home_text wow fadeInUp animated">
	                            <h2>Welcome to PropMan</h2>
	                            <h3>For Your Convenience</h3>
                                <img  src="{{URL::asset('assets/images/shape.png')}}">
	                        </div>
	                    </div>
	                </div>
	            </div>


	        </div>
	    </section>
    </header>

    <section class="about_us_area" id="ABOUT">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="about_title">
                        <h2>About Us</h2>
                        <img  src="{{URL::asset('assets/images/shape.png')}}">

                        <p>We act as a mediator between tenants and property owners we coordinate and manage rentals between them, <br>
                            allowing both parties to keep track of the rental space efficiently, and ensure that everyone's rights are protected and met.</p>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <section class="services" id="SERVICE">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                <div class="services_title">
                    <h2>The services we offer you</h2>
                    <img  src="{{URL::asset('assets/images/shape.png')}}">

                </div>
            </div>
                <div class="col-md-3 text-center">
                    <div class="single_service wow fadeInUp" data-wow-delay="1s">
                        <i class="icon-pencil"></i>
                        <h2>Accurate data & Statistics</h2>
                        <p>Provide an abstract analysisof all Tenant's data.</p>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="single_service wow fadeInUp" data-wow-delay="2s">
                        <i class="icon-gears"></i>
                        <h2>Maintenance</h2>
                        <p>Enable the tenant to request maintenance based on his needs</p>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="single_service wow fadeInUp" data-wow-delay="3s">
                        <i class="icon-edit"></i>
                        <h2>Save Rights</h2>
                        <p>Show the rent payment status of each contract.</p>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="single_service wow fadeInUp" data-wow-delay="4s">
                        <i class="icon-magnifying-glass"></i>
                        <h2>Tracking</h2>
                        <p>Notify the tenant prior to the due date.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="contact" id="CONTACT">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="contact_title  wow fadeInUp animated">
                        <h2>get in touch</h2>
                        <img  src="{{URL::asset('assets/images/shape.png')}}">

                        <br><br><br><br>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3  wow fadeInLeft animated">
                    <div class="single_contact_info">
                        <h2>Call Me</h2>
                        <p>+88 00 487 981 01</p>
                    </div>
                    <div class="single_contact_info">
                        <h2>Email Me</h2>
                        <p>PropMan@gmail.com</p>
                    </div>
                    <div class="single_contact_info">
                        <h2>Address</h2>
                        <p>216 Street Address, Barisal, BD</p>
                    </div>
                </div>
                <div class="col-md-9  wow fadeInRight animated">
                    <form class="contact-form" action="">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="name" placeholder="Name">
                                <input type="email" class="form-control" id="email" placeholder="Email">
                                <input type="text" class="form-control" id="subject" placeholder="Subject">
                            </div>
                            <div class="col-md-6">
                                <textarea class="form-control" id="message" rows="25" cols="10" placeholder="  Message Texts..."></textarea>
                                <button type="button" class="btn btn-default submit-btn form_submit">SEND MESSAGE</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="work-with   wow fadeInUp animated">
                        <h3>looking forward to hearing from you!</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>



<footer>
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="footer_logo   wow fadeInUp animated">
                        <img  src="{{URL::asset('assets/images/propman.png')}}">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center   wow fadeInUp animated">
                    <div class="social">
                        <h2>Follow Me on Here</h2>
                        <ul class="icon_list">
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                            <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="copyright_text   wow fadeInUp animated">
                        <p>PropMan &copy; 2022.All Right Reserved </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- =========================
     SCRIPTS
============================== -->
                <script src="{{URL::asset('assets/js/js/jquery.min.js')}}"></script>
                <script src="{{URL::asset('assets/js/js/bootstrap.min.js')}}"></script>
                <script src="{{URL::asset('assets/js/js/jquery.nicescroll.js')}}"></script>
                <script src="{{URL::asset('assets/js/js/owl.carousel.js')}}"></script>
                <script src="{{URL::asset('assets/js/js/wow.js')}}"></script>
                <script src="{{URL::asset('assets/js/js/script.js')}}"></script>

</body>



</html>
