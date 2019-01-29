<?php 

    include '../lib/config.php'; 
    include '../lib/database.php';
    include '../lib/session.php'; 
    include '../lib/helper.php'; 

      $db = new Database();
      $fm = new Format();

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>DISA INSTITUTES OF SCIENCE AND TECHNOLOGY</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header hidden-print"><a class="logo" href="index.php">DIST</a>
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button--><a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>
          <!-- Navbar Right Menu-->
          <div class="navbar-custom-menu">
            <ul class="top-nav">
              <!--Notification Menu-->
              <li class="dropdown notification-menu"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell-o fa-lg"></i></a>
                <ul class="dropdown-menu">
                  <li class="not-head">You have 4 new notifications.</li>
                  <li><a class="media" href="javascript:;"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                      <div class="media-body"><span class="block">Lisa sent you a mail</span><span class="text-muted block">2min ago</span></div></a></li>
                  <li><a class="media" href="javascript:;"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                      <div class="media-body"><span class="block">Server Not Working</span><span class="text-muted block">2min ago</span></div></a></li>
                  <li><a class="media" href="javascript:;"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                      <div class="media-body"><span class="block">Transaction xyz complete</span><span class="text-muted block">2min ago</span></div></a></li>
                  <li class="not-footer"><a href="#">See all notifications.</a></li>
                </ul>
              </li>
              <!-- User Menu-->
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu">
                  <li><a href="page-login.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Side-Nav-->
      <aside class="main-sidebar hidden-print">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image"><img class="img-circle" src="images/profile.jpg" alt="User Image"></div>
            <div class="pull-left info">
              <p>Md. Muzammal Hoq</p>
              <p class="designation">Instructor</p>
            </div>
          </div>
          <!-- Sidebar Menu-->
          <ul class="sidebar-menu">
            <li class="active"><a href="index.php"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
            <li class="treeview"><a href="#"><i class="fa fa-laptop"></i><span>Slider</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="add-slider.php"><i class="fa fa-circle-o"></i> Add Slider</a></li>
                <li><a href="all-slider.php"><i class="fa fa-circle-o"></i> Slider List</a></li>
              </ul>
            </li>
            <li class="treeview"><a href="#"><i class="fa fa-edit"></i><span>Notice</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="notice.php"><i class="fa fa-circle-o"></i> Add New</a></li>
                <li><a href="notice-list.php"><i class="fa fa-circle-o"></i>Notice/News List</a></li>
                
              </ul>
            </li>
            <li class="treeview"><a href="#"><i class="fa fa-th-list"></i><span>Gallery</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="gallery.php"><i class="fa fa-circle-o"></i>Add Gallery Image</a></li>
                <li><a href="gallery-list.php"><i class="fa fa-circle-o"></i> Gallery Image List</a></li>
              </ul>
            </li>
           <li class="treeview"><a href="#"><i class="fa fa-file-text"></i><span>Result</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="adresult.php"><i class="fa fa-circle-o"></i> Add Result</a></li>
                <li><a href="page-login.html"><i class="fa fa-circle-o"></i> Login Page</a></li>
                <li><a href="page-error.html"><i class="fa fa-circle-o"></i> Error Page</a></li>
              </ul>
            </li>
           <!--   <li class="treeview"><a href="#"><i class="fa fa-share"></i><span>Multilevel Menu</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="blank-page.html"><i class="fa fa-circle-o"></i> Level One</a></li>
                <li class="treeview"><a href="#"><i class="fa fa-circle-o"></i><span> Level One</span><i class="fa fa-angle-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="blank-page.html"><i class="fa fa-circle-o"></i> Level Two</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i><span> Level Two</span></a></li>
                  </ul>
                </li>
              </ul>
            </li> -->
          </ul>
        </section>
      </aside>