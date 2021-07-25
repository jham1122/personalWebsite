<!DOCTYPE html>
<!--
Template Name: Chillaid
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Jamicah Bernandino | Pages | Gallery</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="../layout/styles/w3.css">
<?php include 'modal.php' ?>
</head>
<body id="top">

<!--start of navigation of the website -->
<?php include 'topNav.php';?>
<!-- End of the top navigator-->
<div class="bgded" style="background-image:url('../images/bgtop.jpg');">
  <div id="breadcrumb" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <h1 style="color:#C30; font-family:'Courier New', Courier, monospace; font-style:italic"><b>"Life isn't about finding yourself. Life is about creating yourself."</b></h1>
    <!-- ################################################################################################ -->
  </div>
</div>
<?php 
$imgStyle = 'Style = "height:200px; width:200px; cursor:pointer" onclick="onClick(this)" class="w3-hover-opacity"';
?>
<div class="wrapper row3">
  <main class="hoc clear" > 
    <!-- main body -->
    <div class="content" style="background-image:url('../images/schoolbg.jfif'); background-size:cover; padding-top:50px"> 
      <div id="gallery">
        <figure>
          <header class="heading" style="color:#66F">My Pictures</header>
          <ul class="nospace clear">
            <li class="one_quarter" style="width:200px; height:200px;">
            <img <?php echo $imgStyle ?> src="../images/myPics/1.jpg" >
            </li>
            <li class="one_quarter" style="width:200px; height:200px;">
            <img <?php echo $imgStyle ?> src="../images/myPics/2.jpg" >
            </li>
            <li class="one_quarter" style="width:200px; height:200px;">
            <img <?php echo $imgStyle ?> src="../images/myPics/3.jpg" >
            </li>
            <li class="one_quarter" style="width:200px; height:200px;">
            <img <?php echo $imgStyle ?> src="../images/myPics/4.jpg" >
            </li>
            <li class="one_quarter" style="width:200px; height:200px;">
            <img <?php echo $imgStyle ?> src="../images/myPics/5.jpg" >
            </li>
            <li class="one_quarter" style="width:200px; height:200px;">
            <img <?php echo $imgStyle ?> src="../images/myPics/6.jpg" >
            </li>
            <li class="one_quarter" style="width:200px; height:200px;">
            <img <?php echo $imgStyle ?> src="../images/myPics/7.jpg" >
            </li>
          </ul>
        </figure>
      </div>
      
      <div id="gallery">
        <figure>
          <header class="heading" style="color:#66F" id="schools">My Schools</header>
          <ul class="nospace clear">
          	<li class="one_quarter" style="width:200px; height:200px;">
            <img <?php echo $imgStyle ?> src="../images/schools/smecs.png" >
            </li>
         	<li class="one_quarter" style="width:200px; height:200px;">
            <iframe <?php echo $imgStyle ?> src="https://www.youtube.com/embed/CG7Ss5oLCBA" title="SMECS" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </li>
           </ul>
           
           <ul class="nospace clear">
            <li class="one_quarter" style="width:200px; height:200px;">
            <img <?php echo $imgStyle ?> src="../images/schools/ecc.jpg" >
            </li>
            <li class="one_quarter" style="width:200px; height:200px;">
            <img <?php echo $imgStyle ?> src="../images/schools/ecc1.jpg" >
            </li>
             <li class="one_quarter" style="width:200px; height:200px;">
            <iframe  <?php echo $imgStyle ?> src="https://www.youtube.com/embed/51a4kpuS0cM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </li>
            </ul>
            
            <ul class="nospace clear">
            <li class="one_quarter" style="width:200px; height:200px;">
            <img <?php echo $imgStyle ?> src="../images/schools/isu.jpg" >
            </li>
            <li class="one_quarter" style="width:200px; height:200px;">
            <iframe <?php echo $imgStyle ?> src="https://www.youtube.com/embed/GA7tBo4ce7U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </li>
            </ul>
        </figure>
      </div>
            
      <!-- ################################################################################################ -->
    </div>
  </main>
</div>
<div class="bgded overlay row4" style="background-image:url('../images/bgtop.jpg');">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    
    <!-- ################################################################################################ -->
  </footer>
</div>
<!--footer start-->
<?php include 'footer.php';?>

<!--End footer-->
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<?php include 'modScript.php';?>
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>

</body>
</html>