<!DOCTYPE html>
<html>
<head>
	<title>Forensics, Engineering, Business Management</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="img/ico/favicon.ico"/>
    <!-- Styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="css/bootstrap-overrides.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/theme.css">
    <link rel="stylesheet" type="text/css" href="css/CustomIndex.css">
    <link rel="stylesheet" href="css/index.css" type="text/css" media="screen" />

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/lib/animate.css" media="screen, projection">

</head>
<body class="pull_top">
	<?php if(isset($_GET['response']) && $_GET['response']=='success'):?>
		<div style='z-index: 1031;position: fixed;width: 100%;' class="alert alert-success text-center" role="alert" data-response='success'>
		<strong>Alright!</strong> Your message was sent! We will be in touch soon.
		</div>

	<?php elseif (isset($_GET['response']) && $_GET['response']=='failure'): ?>
		<div style='z-index: 1031;position: fixed;width: 100%;' class="alert alert-danger text-center" role="alert" data-response='failure'>
		<strong>Wait!</strong> An error occured, please try again or call us at <a href='tel:1-985-276-4440'>1-985-276-4440.</a>
		</div>
	<?php endif; ?>

    <div class="navbar transparent navbar-inverse navbar-fixed-top" <?php echo isset($_GET['response'])? 'style="top:40px;"':''; ?> >
      <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <a class="brand" href="index.php">
            <img class="logo" src="img/PApics/logoHead.png"/>
            </a>
            <div class="nav-collapse collapse">
                <ul class="nav pull-right">
                    <li><a href="index.php" class="active">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Services
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="forensics.html">Forensics</a></li>
                            <li><a href="engineering.html">Engineering</a></li>
                            <li><a href="business.html">Business Process Improvment</a></li>
                        </ul>
                    </li>
                    <li><a href="about-us.html">Who We Are</a></li>
                    <li><a href="resources.html">Resources</a></li>
                    <li><a href="privacy.html">Privacy</a></li>
                </ul>
            </div>
        </div>
      </div>
    </div>

    <section id="feature_slider" class="">
        <!--
            Each slide is composed by <img> and .info
            - .info's position is customized with css in index.css
            - each <img> parallax effect is declared by the following params inside its class:

            example: class="asset left-472 sp600 t120 z3"
            left-472 means left: -472px from the center
            sp600 is speed transition
            t120 is top to 120px
            z3 is z-index to 3
            Note: Maintain this order of params

            For the backgrounds, you can combine from the bgs folder :D
        -->

         <article class="slide" id="tour" style="background: url('img/backgrounds/forensic.jpg') repeat-x top center;">
            <img class="asset left-480 sp880 t120 z3" src="img/PApics/forensic.jpg" />
            <div class="info">
                <h2>Forensics</h2>
                <p class="sliderp">Accident Reconstruction; Mechanical Failure Analysis; Product Failure and Liability</p>
                <ul class="slidercontact">

                <li class="sliderp">
                 Phone: 985-276-4440 | 985-237-5337
                </li>
                <li class="sliderp">
                 Email: ops@pa-e.com
                </li>
				</ul>
                <a id="Forensicbtn" href="forensics.html">See Our Services</a>
            </div>
        </article>

        <article class="slide" id="tour" style="background: url('img/backgrounds/Engineering.jpg') repeat-x top center;">
            <img class="asset left-480 sp880 t120 z3" src="img/PApics/engineering.jpg" />
            <div class="info">
                <h2>Engineering</h2>
                <p class="sliderp">HVAC Design; Control system Development; Product Design and Development </p>
                <ul class="slidercontact">
                <li class="sliderp">
                 Phone: 985-276-4440 | 985-237-5337
                </li>
                <li class="sliderp">
                 Email: ops@pa-e.com
                </li>
				</ul>
                <a id="Enginebtn" href="engineering.html">See Our Services</a>
            </div>
        </article>

        <article class="slide" id="tour" style="background: url('img/backgrounds/business.jpg') repeat-x top center;">
            <img class="asset left-480 sp880 t120 z3" src="img/PApics/business.jpg" />
            <div  id="bizinfo" class="info">
                <span id="spectext"><h2>Business Improvement</h2></span>
                <p class="sliderp">Quality System Development; Cost Reductions; Productivity Improvement</p>
                <ul class="slidercontact">
                <li class="sliderp">
                 Phone: 985-276-4440 | 985-237-5337
                </li>
                <li class="sliderp">
                 Email: ops@pa-e.com
                </li>
				</ul>
                <a id="Businessbtn" href="business.html">See Our Services</a>
            </div>
        </article>
    </section>

    <div id="showcase">
        <div class="container">
            <div class="section_header">
                <h3>Our Specialties</h3>
            </div>
            <div class="row feature_wrapper">
                <!-- Features Row -->
                <div class="features_op1_row">
                    <!-- Feature -->
                    <div class="span4 feature first">
                        <div class="img_box">
                            <a href="forensics.html">
                                <img src="img/service1.png">
                                <span id="service1" class="circle">
                                    <span class="plus">&#43;</span>
                                </span>
                            </a>
                        </div>
                        <div class="text">
                            <h6>Forensic Engineering</h6>
                            <p class="text">With an empahsis on accident reconstruction our services can be utilized by legal, insurance, workplace, or industrial professionals. </p>
                        </div>
                    </div>
                    <!-- Feature -->
                    <div class="span4 feature">
                        <div class="img_box">
                            <a href="engineering.html">
                                <img src="img/service2.png">
                                <span id="service2" class="circle">
                                    <span class="plus">&#43;</span>
                                </span>
                            </a>
                        </div>
                        <div class="text">
                            <h6>Expert Engineering</h6>
                            <p class="text">Routinely handling many different engineering challenges such as HVAC and mechanical we are up to the task.
                        </div>
                    </div>
                    <!-- Feature -->
                    <div class="span4 feature last">
                        <div class="img_box">
                            <a href="business.html">
                                <img src="img/service3.png">
                                <span id="service3" class="circle">
                                    <span class="plus">&#43;</span>
                                </span>
                            </a>
                        </div>
                        <div class="text">
                            <h6>Business Improvement</h6>
                            <p class="text">Manager Training, Lean Processing, ISO 9001 Certification, API, and Quality Systems we are here to help you run more efficiently.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="features">
        <div class="container">
            <div class="section_header">
                <h3>Why Choose Us?</h3>
            </div>
            <div class="row feature">
                <div class="span6">
                    <img src="img/showcase1.png" />
                </div>
                <div class="span6 info">
                    <h3>
                        Client-Oriented
                    </h3>
                    <p>
                        At Performance Analysis we establish business-personal relationships with our clientele. Often the needs calling for professional engineer can be quite impersonal, this most times will lead to miscommunication and less than optimal results. Working with us is as familiar as working with a colleague in the field. These type of relationships are constructive to not only everyone involved, but also manifest themselves in the delivered results.
                    </p>
                </div>
            </div>
            <div class="row feature ss">
                <div class="media-mid-feat">
                    <img src="img/showcase2.png" class="pull-right" />
                </div>
                <div class="span6 info">
                    <h3>
                        Quick Turnaround
                    </h3>
                    <p>
                        When time is of the essence and deadlines approach, let Performance Analysis be your go-to engineering firm. We will quickly be able to take your needs and turn them around in surprising time due to our internal capabilities. Without compromise for quality we always will deliver the best results in the time you need.
                    </p>
                </div>
                <div class="span6 media-mid-feat2">
                    <img src="img/showcase2.png" class="pull-right" />
                </div>
            </div>
            <div class="row feature ss">
                <div class="span6">
                    <img src="img/showcase3.png" />
                </div>
                <div class="span6 info">
                    <h3>
                        Proven Results
                    </h3>
                    <p>
                        Having expert witness capabilities, ACTAR certification, ISO 9001 certification, and most importantly a P.E. stamp behind all our work you can be assured that the results delivered are proven. Having proven ourselves in practice, court, and manufacturing-we are the results you've been looking for.
                    </p>
                </div>
            </div>
        </div>
    </div>



    <div id="clients">
        <div class="container">
            <div class="section_header">
                <h3>Clients</h3>
            </div>
            <div class="row">
                <div class="span2 client">
                     <a href="http://fox-ae.com/"><div class="img client1"></div></a>
                </div>
                <div class="span2 client">
                     <a href="http://www.sszblaw.com/"><div class="img client2"></div></a>
                </div>
                <div class="span2 client">
                     <a href="http://www.kobsphilley.com/"><div class="img client3"></div></a>
                </div>
                <div class="span2 client">
                     <a href=""><div class="img client4"></div></a>
                </div>
                <div class="span2 client">
                     <a href="http://www.ccsattorneys.com/"><div class="img client5"></div></a>
                </div>
                <div class="span2 client">
                    <a href="http://www.acrs.co/"><div class="img client6"></div></a>
                </div>
            </div>
        </div>
    </div>

    <!-- starts footer -->
    <footer id="footer">
        <div class="container">
            <div class="row sections">
                <div class="span4 recent_posts">
                    <h3 class="footer_header">
                        Locate Us:
                    </h3>
                    <a href="https://www.google.com/maps/place/203+Turnberry+Dr,+Covington,+LA+70433/@30.4262612,-90.0928969,17z/data=!3m1!4b1!4m5!3m4!1s0x86275bf25a178c31:0x5f3bdc60e7b9f943!8m2!3d30.4262612!4d-90.0907082">
                    <img src="https://maps.googleapis.com/maps/api/staticmap?center=30.426279,-90.090730&zoom=12&size=300x350&maptype=roadmap&markers=color:blue%7Clabel:1%7C30.426279,-90.090730&key=AIzaSyDdG-LZoLFInwESK4_zCaHEtxhGAHq3zPE" style="margin-bottom:20px;">
                    </a>
                </div>
                <div class="span6 contact">
                    <h3 class="footer_header">
                        Contact Us Today!
                    </h3>
                    <form id='ContFormSm' action="mail/contact-form-handler-Sm.php" method="post">
                        <input name="name" type="text" placeholder="Your name" />
                        <input name="mail" type="text" placeholder="Your email" />
                        <textarea  name="msg" rows="8" placeholder="Message"></textarea>
                        <input type="submit" value="Send" />
                    </form>
                </div>
            </div>
            <div class="row credits">
                <div class="span12">
                    <div class="row social">
                        <div class="span12">
                            <a href="https://www.facebook.com/performanceanalysis?fref=ts" class="facebook">
                                <span class="socialicons ico1"></span>
                                <span class="socialicons_h ico1h"></span>
                            </a>
                            <a href="https://twitter.com/performanalysis" class="twitter">
                                <span class="socialicons ico2"></span>
                                <span class="socialicons_h ico2h"></span>
                            </a>
                            <a href="https://plus.google.com/+Engineeringinneworleansla/about" class="gplus">
                                <span class="socialicons ico3"></span>
                                <span class="socialicons_h ico3h"></span>
                            </a>
                          <a href="https://www.linkedin.com/company/performance-analysis" class="linkedin">
                                <span class="socialicons ico4"></span>
                                <span class="socialicons_h ico4h"></span>
                          </a>
                        </div>
                    </div>
                    <div class="row copyright">
                        <div class="span12">
                            © 2016 Performance Analysis. All rights reserved. Designed by <a href="http://timothycarambat.com">Timothy Carambat.</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/theme.js"></script>

    <script type="text/javascript" src="js/index-slider.js"></script>
</body>
</html>
