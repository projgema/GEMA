<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Login - Gereja Mahasiswa Bandung</title>
<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Creative Studio Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,300,600,800,400' rel='stylesheet' type='text/css'>
<script src="js/jquery.min.js"></script>
<link href="<?php echo base_url()."assets/css/login/bootstrap.css" ?>" rel="stylesheet">
<link href="<?php echo base_url()."assets/css/login/bootstrap-responsive.css" ?>" rel="stylesheet">
</head>
<body>
<!-- header -->
<div class="header-top">
</div>
	
<!-- header -->
<div class="contact">
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php echo base_url()?>">Gema's Admin</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li><a href="<?php echo site_url('home');?>">Home</a></li>
              
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
    <div class="row">
      <div class="span4 offset2">
          <ul class="thumbnails">
        <li class="span8">
            <img src="<?php echo base_url()."assets/images/banner.jpg" ?>" border="0">
          
        </li>
      </ul>
        </div>
    </div>

    <div class="row">
        <div class="span4 offset4">
          <?php
          $attributes = array('class' => 'well');
          echo form_open('verifylogin', $attributes); ?>
           <label><strong>Login</strong></label>
           <input class="span3" placeholder="Username…" type="text" size="20" id="username" name="username"/>
           <h6><?php echo form_error('username'); ?></h6>
           <input class="span3" placeholder="Password…" type="password" size="20" id="password" name="password"/>
           <h6><?php echo form_error('password'); ?></h6>
           </label>
           <button type="submit" class="btn btn-inverse">Login</button>
           <br /><br />
           <h5><a href="<?php echo base_url()."index.php/lost" ?>">Lupa Password</a></h5>
           <!--<h6><?php echo validation_errors(); ?></h6>-->
        </form>
        </div>
    </div>              
    </div> 
</div>
<!-- bglow -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="foot-left">
				<div class="foot-nav">
					<ul>
						<li><a href="index.php.html">home</a></li>|
						<li><a href=" about.html">about us</a></li>|
						<li><a href=" portfolio.html">portfolio</a></li>|
						<li><a href=" services.html">services</a></li>|
						<li><a href=" 404.html">blog</a></li>|
						<li class="active"><a href=" contact.html">contact us</a></li>
							<div class="clearfix"> </div>
					</ul>
				</div>
				<p>Copyrights © 2015 Creative Studio All rights reserved | Template by <a href="http://w3layouts.com/">&nbsp; W3layouts</a></p>
			</div>
			<div class="foot-right">
				<a href="index.php.html"><img src="<?php echo base_url();?>assets/images/footlogo.png" class="img-responsive" alt=""></a>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- footer -->
</body>
</html>