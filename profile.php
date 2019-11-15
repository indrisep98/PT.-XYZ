<?php
include 'header.php';

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Web Inventaris</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->

<!-- side nav css file -->
<link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
<!-- //side nav css file -->
 
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->

<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->

<!-- calendar -->
<link rel="stylesheet" href="css/monthly.css">
<!-- //calendar -->

<style>
#chartdiv {
  width: 100%;
  height: 295px;
}
</style>

	<!-- requried-jsfiles-for owl -->
					<link href="css/owl.carousel.css" rel="stylesheet">
					<script src="js/owl.carousel.js"></script>
						<script>
							$(document).ready(function() {
								$("#owl-demo").owlCarousel({
									items : 3,
									lazyLoad : true,
									autoPlay : true,
									pagination : true,
									nav:true,
								});
							});
						</script>
					<!-- //requried-jsfiles-for owl -->
</head> 
<body class="cbp-spmenu-push">
<div class="main-content">
  <div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
  <?php
                 
                  error_reporting(0);
                  require "koneksi.php";
        
                      $username = $_SESSION['username'];
                      $data = mysqli_query($koneksi, "SELECT * FROM user where username = '$username'");
  
?>

 <?php foreach($data as $a):?>

		<!--left-fixed -navigation-->
	<?php
    include 'sidebar.php';

    ?>
    <!--Main-->
     <div id="page-wrapper">
      <div class="main-page">
        <div class="tables">
           <h2 class="title1">Profile User</h2>
          <div class="table-responsive bs-example widget-shadow">
          <thead>
          <tr>

                <td>
                  <div class="col-md-6">
                  <h5>Username</h5><br>
                  <h5>Password</h5><br>
                  <h5 >Level</h5>
                </div>
                </td>

          </thead>
          <tbody>
            <div class="profil">
                <td class="profil">
                  <h5><?= $a['username'];?></h5><br>
                  <h5><?= $a['password'];?></h5><br>
                  <h5 ><?= $a['level'];?></h5><br>
                </td>
                
              </tr>
                <?php endforeach; ?>
       </div>
     </tbody>
      </div>
     </div>
   </div>
 </div>
</body>

  <!--The end of main-->

    <!--footer-->
  <div class="footer">
     <p>&copy; 2018 Bagian Teknologi. All Rights Reserved <a href="https://posindonesia.co.id/" target="_blank">PT Pos Indonesia</a></p>    
  </div>
    <!--//footer-->
  </div>
    
  <!-- new added graphs chart js-->
  
    
  
  <!-- Classie --><!-- for toggle left push menu script -->
    <script src="js/classie.js"></script>
    <script>
      var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
        showLeftPush = document.getElementById( 'showLeftPush' ),
        body = document.body;
        
      showLeftPush.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( body, 'cbp-spmenu-push-toright' );
        classie.toggle( menuLeft, 'cbp-spmenu-open' );
        disableOther( 'showLeftPush' );
      };
      

      function disableOther( button ) {
        if( button !== 'showLeftPush' ) {
          classie.toggle( showLeftPush, 'disabled' );
        }
      }
    </script>
  <!-- //Classie --><!-- //for toggle left push menu script -->
    
  <!--scrolling js-->
  <script src="js/jquery.nicescroll.js"></script>
  <script src="js/scripts.js"></script>
  <!--//scrolling js-->
  
  <!-- side nav js -->
  <script src='js/SidebarNav.min.js' type='text/javascript'></script>
  <script>
      $('.sidebar-menu').SidebarNav()
    </script>
  <!-- //side nav js -->

  <!-- calendar -->
 
  
  <!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
  <!-- //Bootstrap Core JavaScript -->
  
</body>
</html>