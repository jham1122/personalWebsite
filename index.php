<!DOCTYPE html>

<html lang="">

<head>
<title>My Personal Website</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body style="background-image:url('bgimg.png')">

<!--start of navigation of the website -->
<?php include 'topNav.php';?>

<!-- End of the top navigator-->

<div class="bgded overlay" style="background-image:url('images/jamWel.jpg'); background-position:top;">
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article>
      <h3 class="heading" style="font-family:bi;">Hi, I'm Jamicah Bernandino</h3>
      <p>Welcome to my simple website. Please feel free to browse.</p>
    </article>
    <!-- ################################################################################################ -->
  </div>
</div>

<div class="wrapper row3">
  <main class="hoc container" style="background-image:url('images/indexbg.jpg'); background-size:100%;"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <section id="introblocks">
      <ul class="nospace group btmspace-80 elements elements-four">
        <li class="one_quarter">
          <article><a href="pages/AboutMe.php"><i class="fas fa-info"></i></a>
            <h6 class="heading">About me</h6>
            <p> </p>
          </article>
        </li>
        <li class="one_quarter">
          <article><a href="pages/gallery.php"><i class="fas fa-camera"></i></a>
            <h6 class="heading">Gallery</h6>
            <p> </p>
          </article>
        </li>
        <li class="one_quarter">
          <article><a href="#"><i class="fas fa-calendar-plus"></i></a>
            <h6 class="heading">Extras</h6>
            <p> </p>
          </article>
        </li>
        <li class="one_quarter">
          <article><a href="pages/contact.php"><i class="fas fa-phone"></i></a>
            <h6 class="heading">Contact Me</h6>
            <p></p>
          </article>
        </li>
      </ul>
    </section>
    <!-- ################################################################################################ -->
    <section id="introblocks" style="padding-left:80px;">
   		<h5 style="padding-top:80px">Effects of using our mobile phones.</h5>
        <video width="800px" height="500px" controls>
    		<source src="vids/selpon.mp4" type="video/mp4">
		</video>
		<h5 style="padding-top:80px">Stuff I found over the Internet.</h5>
        <video width="800px" height="500px" controls>
    		<source src="vids/mem.mp4" type="video/mp4">
		</video>
    </section>
  </main>
</div>



<!--footer start-->
<?php include 'pages/footer.php';?>
<!--End footer-->
<a id="backtotop" href="#top"><i class="fas fa-chevron-up`"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<!-- Homepage specific -->
<script src="layout/scripts/jquery.easypiechart.min.js"></script>
<!-- / Homepage specific -->
</body>
</html>