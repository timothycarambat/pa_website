<!DOCTYPE html>
<html>
<head>
    <title>Forensics, Engineering, Business Management</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/ico/favicon.ico"/>

    <!-- Styles -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="css/bootstrap-overrides.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/theme.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/CustomContact.css">

    <link rel="stylesheet" type="text/css" href="css/lib/animate.css" media="screen, projection">
    <link rel="stylesheet" href="css/contact.css" type="text/css" media="screen" />

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
  <?php if(isset($_GET['response']) && $_GET['response']=='success'):?>
		<div style='z-index: 1031;margin-bottom:0;width: 100%;' class="alert alert-success text-center" role="alert" data-response='success'>
		<strong>Alright!</strong> Your message was sent! We will be in touch soon.
		</div>

	<?php elseif (isset($_GET['response']) && $_GET['response']=='failure'): ?>
		<div style='z-index: 1031;margin-bottom:0;width: 100%;' class="alert alert-danger text-center" role="alert" data-response='failure'>
		<strong>Wait!</strong> An error occured, please try again or call us at <a href='tel:1-985-276-4440'>1-985-276-4440.</a>
		</div>
	<?php endif; ?>

    <div class="navbar navbar-inverse navbar-static-top" <?php echo isset($_GET['response'])? 'style="top:40px;"':''; ?>>
      <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="index.php">
            <img class="logo" src="img/PApics/logoHead.png"/>
                <!--<strong>Performance Analysis LLC.</strong>-->
            </a>
            <div class="nav-collapse collapse">
                <ul class="nav pull-right navbar-custom">
                    <li><a href="index.php" >Home</a></li>
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

    <div id="contact">
        <div class="container">
            <div class="section_header">
                <h3>Get in touch</h3>
            </div>
            <div class="row contact">
                <p>
                    We’d love to hear from you. Interested in working together? Fill out the form below with some info about your needs and we will get back to you as soon as we can. Typical response time in 2 business days.</p>

                <form action='mail/contact-form-handler-Lg.php' method="post" id='ContFormLg'>
                    <div class="row form">
                        <div class="span6 box">
                            <input  name='name'  class="name" type="text" placeholder="Name">
                            <input  name='mail'  class="mail" type="text" placeholder="Email">
                            <input  name='phone' class="phone" type="text" placeholder="Phone">
                        </div>
                        <div class="span6 box box_r">
                            <textarea name='msg' placeholder="Type a message here..."></textarea>
                        </div>
                    </div>

                    <div class="row submit">
                        <div class="span3 right">
                            <input  id='submitContact' type="submit" value="Send your message">
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row map">
            <div id='contactModal' class="container">
                <div class="span5 box_wrapp">
                    <div class="box_cont">
                        <div class="head">
                                <h6>Contact</h6>
                                <h6 class='modalClose'><a href="#" id='closeModal'>X</a></h6>
                        </div>
                        <ul class="street">
                            <li>203 Turnberry Drive</li>
                            <li>Covington, Louisiana. United States,</li>
                            <li>70433, LA</li>
                            <li class="icon icontop">
                                <span class="contacticos ico1"></span>
                                <span class="text"><a href="tel:1-985-276-4440"> 1 985 276 4440</a></span>
                            </li>
                            <li class="icon">
                                <span class="contacticos ico2"></span>
                                <a class='text' href="mailto:ops@pa-e.com"> ops@pa-e.com</a>
                            </li>
                        </ul>

                        <div class="head headbottom">
                            <h6>Let's Get Started</h6>
                        </div>
                        <p>Were ready to get working on your case, design, or business solution.</p>
                    </div>
                </div>
            </div>
            <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDdG-LZoLFInwESK4_zCaHEtxhGAHq3zPE
    &q=Performance+Analysis,Covington+LA"></iframe>
        </div>
    </div>

     <!-- starts footer -->
    <footer id="footer">
        <div class="container">
            <div class="row info">
                <div class="span6 residence">
                    <a href="https://www.google.com/maps/place/203+Turnberry+Dr,+Covington,+LA+70433/@30.4262612,-90.0928969,17z/data=!3m1!4b1!4m5!3m4!1s0x86275bf25a178c31:0x5f3bdc60e7b9f943!8m2!3d30.4262612!4d-90.0907082">
                    <ul>
                        <li>203 Turnberry Drive  Covington, LA </li>
                        <li>United States</li>
                    </ul>
                    </a>
                </div>
                <div class="span5 touch">
                    <ul>
                        <li><strong>P.</strong><a href="tel:1-985-276-4440"> 1 985 276 4440</a></li>
                        <li><strong>E.</strong><a href="mailto:ops@pa-e.com"> ops@pa-e.com</a></li>
                    </ul>
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


    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/theme.js"></script>
</body>
</html>
