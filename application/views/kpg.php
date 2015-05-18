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
          <a class="brand" href="<?php echo base_url()."index.php/home" ?>">Public Utility</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="<?php echo base_url()."index.php/home" ?>">Home</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">

  <div class="row-fluid">
    <div class="span8">
     <h1>Profil</h1>
     <p>Selamat datang,<strong> <?php echo ucfirst($nama); ?></strong>.</p> 
    </div>
  </div>


  <div class="row-fluid">
    <div class="span2">
      <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li><a id="txt"></a></li>
              <li class="nav-header">Menu</li>
              <li class="active"><a href="<?php echo base_url()."index.php/home" ?>">Home</a></li>
              <li><a data-toggle="modal" href="#TopUp">Top Up</a></li>
              <li><a href="home/pemakaian">Pemakaian</a></li>
              <li><a href="home/meter">Meter Data</a></li>
              <li class="nav-header">Account</li>
              <li><a href="home/edit">Edit Profil</a></li>
              <li><a href="home/ubah_pass">Ubah Password</a></li>
              <li><a href="logout">Log Out</a></li>
            </ul>
      </div><!--/.well -->
    </div>

    <div class="span10">
      <table class="table table-condensed">
        <tr>
          <th>ID Pelanggan</th>
          <td><?php echo $id; ?></td>
        </tr>
        <tr>
          <th>Nama</th>
          <td><?php echo $nama; ?></td>
        </tr>
        <tr>
          <th>Alamat</th>
          <td><?php echo $alamat; ?></td>
        </tr>
        <tr>
          <th>Status</th>
          <td><?php echo $status; ?></td>
        </tr>
        <tr>
          <th>Sisa Pemakaian</th>
          <td><h2><?php echo $sisa." kwh"; ?></h2></td>
        </tr>
        <tr>
          <th>Lokasi</th>
          <td><span class="label"><?php echo $koordinat; ?></span><br>
          <iframe width="500" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=<?php echo $koordinat; ?>&amp;num=1&amp;t=h&amp;ie=UTF8&amp;z=24&amp;ll=<?php echo $koordinat; ?>&amp;output=embed"></iframe></td>
        </tr>
      </table>
      </div>
    </div>

    <div id="TopUp" class="modal hide fade">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h3>Top Up</h3>
            </div>

            <div class="modal-body">
            	
    	       		<h4>Top Up Listrik Pintar</h4>
		              <p>Silahkan masukkan 20 digit kode voucher.</p>
		
		              <form method="post" accept-charset="utf-8" action="<?php echo base_url()."index.php/home/topup/$no_meter" ?>"  class="well form-inline"/>
		                <input type="text" id="kode" name="kode" class="input-large" placeholder="Kode Voucher.." size="22">
		                <button type="submit" class="btn btn-inverse">Submit</button>
		              </form>
            	
            	
    	       		<h4>Cek Status Top Up</h4>
		              <p>Silahkan masukkan 20 digit kode voucher.</p>
		
		              <form method="post" accept-charset="utf-8" action="<?php echo base_url()."index.php/home/status/$no_meter" ?>"  class="well form-inline"/>
		                <input type="text" id="code_s" name="code_s" class="input-large" placeholder="Kode Voucher..">
		                <button type="submit" class="btn btn-inverse">Submit</button>
		              </form>
            
            	
              
            </div>

            <div class="modal-footer">
              <a href="#" class="btn" data-dismiss="modal">Batal</a>
            </div>
    </div>

  <hr>

    <footer>
      <p>&copy; PT PLN (Persero) 2012</p>
    </footer>

</div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="<?php echo base_url()."assets/js/jquery.js" ?>"></script>
    <script src="<?php echo base_url()."assets/js/bootstrap-transition.js" ?>"></script>
    <script src="<?php echo base_url()."assets/js/bootstrap-alert.js" ?>"></script>
    <script src="<?php echo base_url()."assets/js/bootstrap-modal.js" ?>"></script>
    <script src="<?php echo base_url()."assets/js/bootstrap-dropdown.js" ?>"></script>
    <script src="<?php echo base_url()."assets/js/bootstrap-scrollspy.js" ?>"></script>
    <script src="<?php echo base_url()."assets/js/bootstrap-tab.js" ?>"></script>
    <script src="<?php echo base_url()."assets/js/bootstrap-tooltip.js" ?>"></script>
    <script src="<?php echo base_url()."assets/js/bootstrap-popover.js" ?>"></script>
    <script src="<?php echo base_url()."assets/js/bootstrap-button.js" ?>"></script>
    <script src="<?php echo base_url()."assets/js/bootstrap-collapse.js" ?>"></script>
    <script src="<?php echo base_url()."assets/js/bootstrap-carousel.js" ?>"></script>
    <script src="<?php echo base_url()."assets/js/bootstrap-typeahead.js" ?>"></script>

  </body>
</html>
