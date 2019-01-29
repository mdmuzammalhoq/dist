<?php 

    include 'lib/config.php'; 
    include 'lib/database.php';
    include 'lib/session.php'; 
    include 'lib/helper.php'; 

     $db = new Database();
     $fm = new Format();

?>


<!DOCTYPE HTML> 
<html>
<head>
<title>DIST | DISA Institute of Science and Technology</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Learn Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<link rel="shortcut icon" href="dist-img/favicon.ico" type="image/x-icon">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<script src="js/jquery.min.js"></script>
<script src="js/slider.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/counter.js"></script>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/counter.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/jquery.countdown.css" />
<link rel="stylesheet" href="css/slider.css" />
<link rel="stylesheet" href="css/gallery.css" />
<!-- pogo slider -->
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/pogo-slider.min.css">
<link rel="stylesheet" href="css/about.css" type="text/css" />
<link rel="stylesheet" media="screen" href="css/about-responsive.css" type="text/css" />

    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/ourteam.js"></script>
    <script src="js/calendar.js"></script>
<!-- /pogo slider -->
<!--Fonts-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Julius+Sans+One|Marck+Script" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Bellefair" rel="stylesheet">
<!--/Fonts-->

<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/service.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/testimonial.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/responsive.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/calendar.css" type="text/css" media="all">

<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
</head>
<body>
<nav class="navbar navbar-default" role="navigation" style="border-radius: 0;border: none;">
	<div class="container">
	    <div class="navbar-header">
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	        </button>
	        <a class="navbar-brand" href="index.php"><img style="width: 292px; height: 50px;" src="dist-img/logo1.jpg"></a>
	    </div>
	    <!--/.navbar-header-->
	    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	        <ul class="nav navbar-nav">
		        <!-- <li class="dropdown">
		            <a href="#"><i class="fa fa-user"></i><span>Login</span></a>
		        </li> -->
		        <li class="dropdown">
		        	<a href="notice.php" class="dropdown-toggle"><i class="fa fa-list"></i><span>Notices</span></a>
		        </li>
		        <li class="dropdown">
		            <a href="result.php" class="dropdown-toggle"><i class="fa fa-calendar"></i><span>Results</span></a>
		             <!-- <ul class="dropdown-menu">
			            <li><a href="events.html">Long Courses Result</a> 
                    <ul>
                      <li><a href="">Computer</a></li>
                    </ul>
                  
                    
                  </li>
			            <li><a href="events.html">Short Courses Result</a></li>
			           
		             </ul> -->

<style>
/*.dropdown-submenu {
    position: relative;
}

.dropdown-submenu .dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -1px;
}*/
</style>
                </li>
                
		        </li>
<script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>            
		        <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-globe"></i><span>Languages</span></a>
		            <ul class="dropdown-menu">
			            <li><a href="#"><span><i class="flags us"></i><span>English</span></span></a></li>
			            <li><a href="#"><span><i class="flags newzland"></i><span>Bangla</span></span></a></li>
			        </ul>
		        </li>
		        <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search"></i><span>Search</span></a>
		            <ul class="dropdown-menu search-form">
			           <form>        
                            <input type="text" class="search-text" name="s" placeholder="Search...">    
                            <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
                       </form>
			        </ul>
		        </li>
		    </ul>
	    </div>
	    <div class="clearfix"> </div>
	  </div>
	    <!--/.navbar-collapse-->
</nav>
<nav class="navbar nav_bottom" role="navigation" style="border-radius: 0;">
 <div class="container">
 <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header nav_2">
      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
   </div> 
   <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
        <ul class="nav navbar-nav nav_1">
            <li><a href="index.php">Home</a></li>
            
      <li class="dropdown mega-dropdown active">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">About<span class="caret"></span></a>        
        <div class="dropdown-menu mega-dropdown-menu">
                    <div class="container-fluid">
                <!-- Tab panes -->
                        <div class="tab-content">
                          <div class="tab-pane active" id="men">
                            <ul class="nav-list list-inline">
                                <li><a href="disa-about-dist-disa.php"><img src="dist-img/menu/about.jpg" class="img-responsive" alt=""/><p style="color: #000;">About DIST</p></a></li>
                                
                                <li><a href="chief-executive.php"><img src="dist-img/SrExecutives/ed_pic_menu.jpg" class="img-responsive" alt=""/><p style="color: #000;"> Chief Executives</p></a></li>
                               
                                
                                <li><a href="emergence-of-dist.php"><img src="dist-img/menu/m&v.jpg" class="img-responsive" alt=""/><p style="color: #000;">Emergence of DIST</p></a></li>

                                <li><a href="future-plan.php"><img src="dist-img/menu/fp.jpg" class="img-responsive" alt=""/><p style="color: #000;">Future Plan</p></a></li>

                                <li><a href="uniqueness-of-dist.php"><img src="dist-img/menu/gg.jpg" class="img-responsive" alt=""/><p style="color: #000;">Uniqueness of DIST</p></a></li>

                            </ul>
                          </div>
                          
                       </div>
                    </div>                  
        </div>        
      </li>
    		    <li class="dropdown mega-dropdown active">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Feculty<span class="caret"></span></a>        
        <div class="dropdown-menu mega-dropdown-menu">
                    <div class="container-fluid">
                <!-- Tab panes -->
                        <div class="tab-content">
                          <div class="tab-pane active" id="men">
                            <ul class="nav-list list-inline">
                                <li><a href="computer-course.php"><img src="dist-img/menu/ComputerRoom.jpg" class="img-responsive" alt=""/><p style="color: #000;">Computer</p></a></li>

                                <li><a href="refrigeration-course.php"><img src="dist-img/menu/r.jpg" class="img-responsive" alt=""/><p style="color: #000;">RAC</p></a></li>

                                <li><a href="electrical-course.php"><img src="dist-img/menu/e.jpg" class="img-responsive" alt=""/><p style="color: #000;">Electrical</p></a></li>

                                <li><a href="bike-course.php"><img src="dist-img/menu/m.jpg" class="img-responsive" alt=""/><p style="color: #000;">MRS</p></a></li>

                              
                            </ul>
                          </div>
                         
                       </div>
                    </div>
                                      
        </div>        
      </li>
             <li class="dropdown mega-dropdown active">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Programmes<span class="caret"></span></a>        
        <div class="dropdown-menu mega-dropdown-menu">
                    <div class="container-fluid">
                <!-- Tab panes -->
                        <div class="tab-content">
                          <div class="tab-pane active" id="men">
                            <ul class="nav-list list-inline">
                               <!--  <li><a href="#"><img src="dist-img/menu/h.jpg" class="img-responsive" alt=""/><p style="color: #000;">Higher Education</p></a></li> -->

                                <li><a href="longcourse.php"><img src="dist-img/menu/long.jpg" class="img-responsive" alt=""/><p style="color: #000;">Long Courses</p></a></li>

                                <li><a href="shortcourse.php"><img src="dist-img/menu/short.jpg" class="img-responsive" alt=""/><p style="color: #000;">Short Courses</p></a></li>
                                <li><a href="treadetest.php"><img src="dist-img/menu/trade test.jpg" class="img-responsive" alt=""/><p style="color: #000;">Trade Test</p></a></li>
                                

                              
                            </ul>
                          </div>
                         
                       </div>
                    </div>
                                      
        </div>        
      </li>
            <li class="dropdown mega-dropdown active">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gallery<span class="caret"></span></a>        
        <div class="dropdown-menu mega-dropdown-menu">
                    <div class="container-fluid">
                <!-- Tab panes -->
                        <div class="tab-content">
                          <div class="tab-pane active" id="men">
                            <ul class="nav-list list-inline">
                               
                                <li><a href="cultural-programme.php"><img src="dist-img/classroom.jpg" class="img-responsive" alt=""/><p style="color: #000;">Classrooms</p></a></li>

                                <li><a href="library.php"><img style="width: 197px; height: 132px;" src="dist-img/menu/h.jpg" class="img-responsive" alt=""/><p style="color: #000;">Library</p></a></li>
                                <li><a href="cc.php"><img style="width: 197px; height: 132px;" src="dist-img/menu/cc.jpg" class="img-responsive" alt=""/><p style="color: #000;">Certificate Ceremony</p></a></li>
                                <li><a href="pksf.php"><img style="width: 197px; height: 132px;" src="dist-img/menu/pksf.jpg" class="img-responsive" alt=""/><p style="color: #000;">PKSF scholarship 2018</p></a></li>
                                <li><a href="seminar.php"><img style="width: 197px; height: 132px;" src="dist-img/menu/seminar.jpg" class="img-responsive" alt=""/><p style="color: #000;">All Seminar Photography</p></a></li>
                                <li><a href="firstbatch.php"><img style="width: 197px; height: 132px;" src="dist-img/menu/seminar.jpg" class="img-responsive" alt=""/><p style="color: #000;">2018 Batch Award Ceremony</p></a></li>
                            </ul>
                          </div>
                          <div class="tab-pane" id="women">
                            <ul class="nav-list list-inline">
                                <li><a target="_blank" href="https://www.youtube.com/watch?v=Mq8NGfgY1XQ"><img src="dist-img/disa.jpg" class="img-responsive" alt=""/><p style="color: #000;">DISA Documentary</p></a></li>
                            </ul>
                         </div>
                       </div>
                    </div>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                       <li class="active"><a href="#men" role="tab" data-toggle="tab">Photo Gallery</a></li>
                       <li><a href="#women" role="tab" data-toggle="tab"><p style="color: #00CF30;">Video Gallery</p></a></li>
                   </ul>

        </div>        
      </li>
            <li><a href="ourteam.php">Our Team</a></li>
            <li><a href="career.php">Career</a></li>
            <li class="last"><a href="contact.php">Contact us</a></li>
        </ul>
     </div><!-- /.navbar-collapse -->
   </div>
</nav>