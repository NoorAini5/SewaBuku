<!DOCTYPE HTML>
<!--
	Ion by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title> Sewa Buku </title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/tambah.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	<body> 
        <?php
        require('menu.php');
        ?>

        <?php
       if(isset($_GET['target']))
        {
            $_GET['target'] ;
            if($_GET['target']=='home')
           {require('home.php'); }else
           if($_GET['target']=='profil')
           {require('profil.php'); }else
          if($_GET['target']=='daftarbuku')
		   {require('daftarbuku.php'); }else 
		   if($_GET['target']=='daftaranggota')
           {require('daftaranggota.php'); }else 
           if($_GET['target']=='signup')
		   {require('signup.php'); }else
		   if($_GET['target']=='tambahbuku')
		   {require('tambahbuku.php'); }else
		   if($_GET['target']=='upload')
		   {require('upload.php'); }else
		   if($_GET['target']=='datapenyewa')
		   {require('datapenyewa.php'); }else
        
        { 
            require('home.php'); }
        }
        
        ?>
        		</body>
</html>
	