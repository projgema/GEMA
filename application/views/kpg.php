<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>KPG's PAGE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo base_url()."assets/css/bootstrap.css" ?>" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="<?php echo base_url()."assets/css/bootstrap-responsive.css" ?>" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo base_url()."favicon.ico" ?>">

   <script type="text/javascript">
   function startTime()
   {
   var today=new Date();
   var h=today.getHours();
   var m=today.getMinutes();
   var s=today.getSeconds();
   // add a zero in front of numbers<10
   m=checkTime(m);
   s=checkTime(s);
   document.getElementById('txt').innerHTML=h+":"+m+":"+s;
   t=setTimeout('startTime()',500);
   }

   function checkTime(i)
   {
    if (i<10)
   {
    i="0" + i;
   }
    return i;
   }
  </script>
  </head>

    <body onload="startTime()">    

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">

  <div class="row-fluid">
    <div class="span8">
     <h1>Profil</h1>
     <p>Selamat datang,<strong> <?php echo ucwords($email); ?></strong>.</p> 
    </div>
  </div>


  <div class="row-fluid">
    <div class="span2">
      <div class="well sidebar-nav">
            <ul class="nav nav-list">
                <li>Halaman KPG</li>
                <li><a href="admin/logout">Log Out</a></li>
            </ul>
      </div>
  </body>
</html>
