<?php
include("connect.php");
session_start();
if(isset($_SESSION['login_user']))
{	
  
    $sql= "select * from product_master where Product_id=1 ";
    $result=mysqli_query($db,$sql);
	
	$sql1= "select * from product_master where Product_id=2 ";
    $result1=mysqli_query($db,$sql1);
	
	$sql2= "select * from product_master where Product_id=3 ";
    $result2=mysqli_query($db,$sql2);
	
	$sql3= "select * from product_master where Product_id=4 ";
    $result3=mysqli_query($db,$sql3);
	
	$sql4= "select * from product_master where Product_id=5 ";
    $result4=mysqli_query($db,$sql4);

    $sql5= "select * from product_master where Product_id=6 ";
    $result5=mysqli_query($db,$sql5);
	
	$sql6= "select * from product_master where Product_id=7 ";
    $result6=mysqli_query($db,$sql6);
	
	$sql7= "select * from product_master where Product_id=8 ";
    $result7=mysqli_query($db,$sql7);
	
    $sql8= "select * from product_master ";
    $result8=mysqli_query($db,$sql8);
	


     
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en-US"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en-US"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en-US"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en-US"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en-US"> <!--<![endif]-->
<head>
	<title>Classes</title>
	<meta name="description" content=" &raquo; Gallery | Just another WordPress site" />
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="icon" href="https://demo.gridgum.com/wordpress/kids/wp-content/themes/kidsPlanet/favicon.ico" type="image/x-icon" />
		<link rel="pingback" href="" />
	<link rel="alternate" type="application/rss+xml" title="Kids Planet" href="https://demo.gridgum.com/wordpress/kids/feed/" />
	<link rel="alternate" type="application/atom+xml" title="Kids Planet" href="https://demo.gridgum.com/wordpress/kids/feed/atom/" />
	
  <!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
    	<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt="" /></a>
    </div>
  <![endif]-->

  <!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->
  
<script type="text/javascript" src="[JS library]"></script>
<!--[if (gte IE 6)&(lte IE 8)]>
  <script type="text/javascript" src="https://demo.gridgum.com/wordpress/kids/wp-content/themes/kidsPlanet/js/selectivizr-min.js"></script>
  <noscript><link rel="stylesheet" href="[fallback css]" /></noscript>
<![endif]--> 


    <link rel="stylesheet" type="text/css" media="all" href="https://demo.gridgum.com/wordpress/kids/wp-content/themes/kidsPlanet/css/normalize.css" />
    <link rel="stylesheet" title="styles1" type="text/css" media="all" href="https://demo.gridgum.com/wordpress/kids/wp-content/themes/kidsPlanet/style.css" />
    <link rel="stylesheet" type="text/css" media="all" href="https://demo.gridgum.com/wordpress/kids/wp-content/themes/kidsPlanet/css/prettyPhoto.css" />

	<link rel="stylesheet" type="text/css" media="all" href="https://demo.gridgum.com/wordpress/kids/wp-content/themes/kidsPlanet/css/480.css" /> 
    <link rel="stylesheet" type="text/css" media="all" href="https://demo.gridgum.com/wordpress/kids/wp-content/themes/kidsPlanet/css/320.css" />    
	<link rel="stylesheet" type="text/css" media="all" href="https://demo.gridgum.com/wordpress/kids/wp-content/themes/kidsPlanet/css/768.css" />
	<link rel="stylesheet" type="text/css" media="all" href="https://demo.gridgum.com/wordpress/kids/wp-content/themes/kidsPlanet/css/1300.css" />  

	<link rel="stylesheet" type="text/css" media="all" href="https://demo.gridgum.com/wordpress/kids/wp-content/themes/kidsPlanet/css/bootstrap.css" />  
	<link rel="stylesheet" type="text/css" media="all" href="https://demo.gridgum.com/wordpress/kids/wp-content/themes/kidsPlanet/css/bootstrap-responsive.css" />  
	
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,400italic,700' rel='stylesheet' type='text/css'>



	<meta name='robots' content='noindex,follow' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="Kids Planet &raquo; Feed" href="https://demo.gridgum.com/wordpress/kids/feed/" />
<link rel="alternate" type="application/rss+xml" title="Kids Planet &raquo; Comments Feed" href="https://demo.gridgum.com/wordpress/kids/comments/feed/" />
<link rel="alternate" type="application/rss+xml" title="Kids Planet &raquo; Gallery Comments Feed" href="https://demo.gridgum.com/wordpress/kids/gallery/feed/" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/demo.gridgum.com\/wordpress\/kids\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.9"}};
			!function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55358,56760,9792,65039],[55358,56760,8203,9792,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='contact-form-7-css'  href='https://demo.gridgum.com/wordpress/kids/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.0.3' type='text/css' media='all' />
<link rel='stylesheet' id='wp-pagenavi-css'  href='https://demo.gridgum.com/wordpress/kids/wp-content/plugins/wp-pagenavi/pagenavi-css.css?ver=2.70' type='text/css' media='all' />
<link rel='stylesheet' id='wp-advanced-rp-css-css'  href='https://demo.gridgum.com/wordpress/kids/wp-content/plugins/advanced-recent-posts-widget/css/advanced-recent-posts-widget.css?ver=4.9.9' type='text/css' media='all' />
<script type='text/javascript' src='https://demo.gridgum.com/wordpress/kids/wp-content/themes/kidsPlanet/js/jquery-1.7.2.min.js?ver=1.7.2'></script>
<script type='text/javascript' src='https://demo.gridgum.com/wordpress/kids/wp-content/themes/kidsPlanet/js/modernizr.js?ver=2.0.6'></script>
<script type='text/javascript' src='https://demo.gridgum.com/wordpress/kids/wp-content/themes/kidsPlanet/js/superfish.js?ver=1.4.8'></script>
<script type='text/javascript' src='https://demo.gridgum.com/wordpress/kids/wp-content/themes/kidsPlanet/js/jquery.easing.1.3.js?ver=1.3'></script>
<script type='text/javascript' src='https://demo.gridgum.com/wordpress/kids/wp-content/themes/kidsPlanet/js/jquery.prettyPhoto.js?ver=3.1.3'></script>
<script type='text/javascript' src='https://demo.gridgum.com/wordpress/kids/wp-content/themes/kidsPlanet/js/jquery.tools.min.js?ver=1.2.8'></script>
<script type='text/javascript' src='https://demo.gridgum.com/wordpress/kids/wp-content/themes/kidsPlanet/js/jquery.loader.js?ver=1.0'></script>
<script type='text/javascript' src='https://demo.gridgum.com/wordpress/kids/wp-includes/js/swfobject.js?ver=2.2-20120417'></script>
<script type='text/javascript' src='https://demo.gridgum.com/wordpress/kids/wp-content/themes/kidsPlanet/js/jquery.cycle.all.js?ver=2.99'></script>
<script type='text/javascript' src='https://demo.gridgum.com/wordpress/kids/wp-content/themes/kidsPlanet/js/jquery.twitter.js?ver=1.0'></script>
<script type='text/javascript' src='https://demo.gridgum.com/wordpress/kids/wp-content/themes/kidsPlanet/js/jquery.flickrush.js?ver=1.0'></script>
<script type='text/javascript' src='https://demo.gridgum.com/wordpress/kids/wp-content/themes/kidsPlanet/js/si.files.js?ver=1.0'></script>
<script type='text/javascript' src='https://demo.gridgum.com/wordpress/kids/wp-content/themes/kidsPlanet/js/audiojs/audio.js?ver=1.0'></script>
<script type='text/javascript' src='https://demo.gridgum.com/wordpress/kids/wp-content/themes/kidsPlanet/js/flexie.js?ver=1.0.3'></script>
<script type='text/javascript' src='https://demo.gridgum.com/wordpress/kids/wp-content/themes/kidsPlanet/js/custom.js?ver=1.0'></script>
<link rel='https://api.w.org/' href='https://demo.gridgum.com/wordpress/kids/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://demo.gridgum.com/wordpress/kids/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://demo.gridgum.com/wordpress/kids/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.9.9" />
<link rel="canonical" href="https://demo.gridgum.com/wordpress/kids/gallery/" />
<link rel='shortlink' href='https://demo.gridgum.com/wordpress/kids/?p=12' />
<link rel="alternate" type="application/json+oembed" href="https://demo.gridgum.com/wordpress/kids/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdemo.gridgum.com%2Fwordpress%2Fkids%2Fgallery%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://demo.gridgum.com/wordpress/kids/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdemo.gridgum.com%2Fwordpress%2Fkids%2Fgallery%2F&#038;format=xml" />

<style>
h1 { font: normal 32px/32px Arial, Helvetica, sans-serif;  color:; }
h2 { font: normal 24px/24px Arial, Helvetica, sans-serif;  color:; }
h3 { font: normal 18px/18px Arial, Helvetica, sans-serif;  color:; }
h4 { font: normal 14px/18px Arial, Helvetica, sans-serif;  color:; }
h5 { font: normal 12px/18px Arial, Helvetica, sans-serif;  color:; }
h6 { font: normal 10px/18px Arial, Helvetica, sans-serif;  color:; }
#main { font: normal 12px/18px Arial, Helvetica, sans-serif;  color:; }
</style>
  <!--[if lt IE 9]>
  <style type="text/css">
    .border {
      behavior:url(https://demo.gridgum.com/wordpress/kids/wp-content/themes/kidsPlanet/PIE.php)
      }
  </style>
  <![endif]-->
  
  <script type="text/javascript">
  	// initialise plugins
		jQuery(function(){
			// main navigation init
			jQuery('ul.sf-menu').superfish({
				delay:       1000, 		// one second delay on mouseout 
				animation:   {opacity:'show',height:'show'}, // fade-in and slide-down animation
				speed:       'normal',  // faster animation speed 
				autoArrows:  false,   // generation of arrow mark-up (for submenu) 
				dropShadows: false
			});
			
		});

	
		// Init for audiojs
		audiojs.events.ready(function() {
			var as = audiojs.createAll();
		});
		
		// Init for si.files
		SI.Files.stylizeAll();
  </script>
  

  <style type="text/css">
		
				
				
		
  </style>

<!--[if gt IE 7]>
    <link rel="stylesheet" type="text/css" media="all" href="https://demo.gridgum.com/wordpress/kids/wp-content/themes/kidsPlanet/css/ie.css" />
<![endif]--> 




</head>



<body class="page-template page-template-page-Portfolio page-template-page-Portfolio-php page page-id-12 chrome" >


<div id="main"><!-- this encompasses the entire Web site -->

	<div id="clouds"></div>


<?php require_once('header.php')?>
	

	 	
		<section id="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="span12 breadcrumb">
						<span xmlns:ib="http://rdf.data-vocabulary.org/#">		</span>			</div>
				</div>
			</div>	
		</section>

		<section id="titleArea">
			<div class="container">
				<div class="row">
					<div class="span12">
						<h3>Class Wise Notes</h3>	
					</div>
				</div>
			</div>
		</section>
		


	<section id="primaryWrapContent" class="clearfix">

    <div class="container">
    	<div class="clearfix">
    		<div class="row">
	        	<div class="span12">  

					<div id="content">
						<div class="header-title">
		
														<h1>Categories</h1>
														
	
	</div>


				<!-- BEGIN Gallery -->

				<div id="filter-by" class="clearfix">
	                    <a href="#" data-filter="isotope-item" class="active">All</a>
	                    <a href="shopdemo.php" data-filter="album-1">Standard 1</a>
	                    <a href="shopdemo.php" data-filter="album-2">Standard 2</a>
	                    <a href="shopdemo.php" data-filter="album-3">Standard 3</a>
	                    <a href="shopdemo.php" data-filter="album-4">Standard 4</a>
	                    <a href="shopdemo.php" data-filter="album-5">Standard 5</a>
	                    <a href="shopdemo.php" data-filter="album-6">Standard 6</a>
	                    <a href="shopdemo.php" data-filter="album-7">Standard 7</a>
	                    <a href="shopdemo.php" data-filter="album-8">Standard 8</a>
	                    	                </div>

				<div id="galleryHolder" class="one_column">
				
				  <ul class="isotope clearfix">


				  	


<?php 
$space=1;
$i=1;
while($row = mysqli_fetch_assoc($result)){

    ?>				  
							
							
							<li class="galleryItem isotope-item album-1 ">	
						
								<a class="image-wrap" href="shopdemo.php">
									<img class="img-border" src="<?php echo $row['Image']; ?>" >
							
								</a>
			                   
							</li>
							
							
							<li class="galleryItem isotope-item album-1 ">	
								<h3><?php echo $row['Productmaster_name']; ?> </h3>
								<a href="downloads.php?path=<?php echo $row['files'] ?>">Download</a>
							</li>

							<?php
								
								
								if($space==$i)
								{
									$i+=2;
							
							?>
							<li class="galleryItem isotope-item album-1 ">	
							 
								
			                   
							</li>
							
							<?php
								
								}
								$space++;
							
							?>
							
		
					  
      <?php
}
   
?>


<?php 
$space=1;
$i=1;
while($row = mysqli_fetch_assoc($result1)){

    ?>				  
							
							
							<li class="galleryItem isotope-item album-2 ">	
						
								<a class="image-wrap" href="home.php">
									<img class="img-border" src="<?php echo $row['Image']; ?>" >
							
								</a>
			                   
							</li>
							
							
							<li class="galleryItem isotope-item album-2 ">

								<h3><?php echo $row['Productmaster_name']; ?> </h3> 	
								<a href="downloads.php?path=<?php echo $row['files'] ?>">Download</a>		                   
							</li>
							
							<?php
								
								
								if($space==$i)
								{
									$i+=2;
							
							?>
							<li class="galleryItem isotope-item album-2 ">	
							 
								
			                   
							</li>
							
							<?php
								
								}
								$space++;
							
							?>
							
		
					  
      <?php
}
   
?>


<?php 
$space=1;
$i=1;
while($row = mysqli_fetch_assoc($result2)){

    ?>				  
							
							
							<li class="galleryItem isotope-item album-3 ">	
						
								<a class="image-wrap" href="home.php">
									<img class="img-border" src="<?php echo $row['Image']; ?>" >
							
								</a>
			                   
							</li>
							
							
							<li class="galleryItem isotope-item album-3 ">
								<h3><?php echo $row['Productmaster_name']; ?> </h3>
								<a href="downloads.php?path=<?php echo $row['files'] ?>">Download</a>		                   
							</li>
							
							<?php
								
								
								if($space==$i)
								{
									$i+=2;
							
							?>
							<li class="galleryItem isotope-item album-3 ">	
							 
								
			                   
							</li>
							
							<?php
								
								}
								$space++;
							
							?>
							
		
					  
      <?php
}
   
?>

<?php 
$space=1;
$i=1;
while($row = mysqli_fetch_assoc($result3)){

    ?>				  
							
							
							<li class="galleryItem isotope-item album-4 ">	
						
								<a class="image-wrap" href="home.php">
									<img class="img-border" src="<?php echo $row['Image']; ?>" >
							
								</a>
			                   
							</li>
							
							
							<li class="galleryItem isotope-item album-4 ">
								<h3><?php echo $row['Productmaster_name']; ?> </h3>
								<a href="downloads.php?path=<?php echo $row['files'] ?>">Download</a>		                   
							</li>
							
							<?php
								
								
								if($space==$i)
								{
									$i+=2;
							
							?>
							<li class="galleryItem isotope-item album-3 ">	
							 
								
			                   
							</li>
							
							<?php
								
								}
								$space++;
							
							?>
							
		
					  
      <?php
}
   
?>

<?php 
$space=1;
$i=1;
while($row = mysqli_fetch_assoc($result4)){

    ?>				  
							
							
							<li class="galleryItem isotope-item album-5 ">	
						
								<a class="image-wrap" href="home.php">
									<img class="img-border" src="<?php echo $row['Image']; ?>" >
							
								</a>
			                   
							</li>
							
							
							<li class="galleryItem isotope-item album-5 ">
								<h3><?php echo $row['Productmaster_name']; ?> </h3>
								<a href="downloads.php?path=<?php echo $row['files'] ?>">Download</a>		                   
							</li>
							
							<?php
								
								
								if($space==$i)
								{
									$i+=2;
							
							?>
							<li class="galleryItem isotope-item album-5 ">	
							 
								
			                   
							</li>
							
							<?php
								
								}
								$space++;
							
							?>
							
		
					  
      <?php
}
   
?>


<?php 
$space=1;
$i=1;
while($row = mysqli_fetch_assoc($result5)){

    ?>				  
							
							
							<li class="galleryItem isotope-item album-6 ">	
						
								<a class="image-wrap" href="home.php">
									<img class="img-border" src="<?php echo $row['Image']; ?>" >
							
								</a>
			                   
							</li>
							
							
							<li class="galleryItem isotope-item album-6 ">
								<h3><?php echo $row['Productmaster_name']; ?> </h3>
								<a href="downloads.php?path=<?php echo $row['files'] ?>">Download</a>		                   
							</li>
							
							<?php
								
								
								if($space==$i)
								{
									$i+=2;
							
							?>
							<li class="galleryItem isotope-item album-6 ">	
							 
								
			                   
							</li>
							
							<?php
								
								}
								$space++;
							
							?>
							
		
					  
      <?php
}
   
?>

<?php 
$space=1;
$i=1;
while($row = mysqli_fetch_assoc($result6)){

    ?>				  
							
							
							<li class="galleryItem isotope-item album-7 ">	
						
								<a class="image-wrap" href="home.php">
									<img class="img-border" src="<?php echo $row['Image']; ?>" >
							
								</a>
			                   
							</li>
							
							
							<li class="galleryItem isotope-item album-7 ">
								<h3><?php echo $row['Productmaster_name']; ?> </h3>
								<a href="downloads.php?path=<?php echo $row['files'] ?>">Download</a>		                   
							</li>
							
							<?php
								
								
								if($space==$i)
								{
									$i+=2;
							
							?>
							<li class="galleryItem isotope-item album-7 ">	
							 
								
			                   
							</li>
							
							<?php
								
								}
								$space++;
							
							?>
							
		
					  
      <?php
}
   
?>


<?php 
$space=1;
$i=1;
while($row = mysqli_fetch_assoc($result7)){

    ?>				  
							
							
							<li class="galleryItem isotope-item album-8 ">	
						
								<a class="image-wrap" href="home.php">
									<img class="img-border" src="<?php echo $row['Image']; ?>" >
							
								</a>
			                   
							</li>
							
							
							<li class="galleryItem isotope-item album-8 ">
								<h3><?php echo $row['Productmaster_name']; ?> </h3>
								<a href="downloads.php?path=<?php echo $row['files'] ?>">Download</a>		                   
							</li>
							
							<?php
								
								
								if($space==$i)
								{
									$i+=2;
							
							?>
							<li class="galleryItem isotope-item album-8 ">	
							 
								
			                   
							</li>
							
							<?php
								
								}
								$space++;
							
							?>
							
		
					  
      <?php
}
   
?>



<script>
function addcart(str) {
  var xhttp;   
 
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        if(this.responseText==0)
            window.location.href = "login.php";
      alert(this.responseText);
    }
  };
  xhttp.open("GET", "addtocart.php?Productmaster_id="+str, true);
  xhttp.send();
}
</script>

					  
				  
				  

							    
				  
				    				  </ul>
									  
									  
									 
				  <div class="clear"></div>
					
				</div><!-- END Gallery -->
			
	


							<!-- Posts navigation -->						<!-- Posts Navigation -->


											</div><!-- #content -->

				</div>
			</div>	
		</div>
	</div>

<!-- </div>	 -->
<!-- end #main -->
    </section> <!-- end of .primary_content_wrap -->    
</div>    <!-- #main -->  

<section id="before_footer">
    <div class="container clearfix">
        <div class="row">  
            <div class="span12">  
                <div id="text-5">			<div class="textwidget"><div id="ribbon">Give your child professional basic education!</div></div>
		</div>    
            </div>
        </div> 
    </div>       
</section>
  
<?php 
require_once('footer.php');
?>



<script type='text/javascript' src='https://demo.gridgum.com/wordpress/kids/wp-content/themes/kidsPlanet/js/jquery.carouFredSel-6.2.1-packed.js?ver=6.2.1'></script>
<script type='text/javascript' src='https://demo.gridgum.com/wordpress/kids/wp-content/themes/kidsPlanet/js/bootstrap.js?ver=2.3'></script>
<script type='text/javascript' src='https://demo.gridgum.com/wordpress/kids/wp-content/themes/kidsPlanet/js/jquery.isotope.min.js?ver=2.0.0'></script>
<script type='text/javascript' src='https://demo.gridgum.com/wordpress/kids/wp-content/themes/kidsPlanet/js/jquery.spritely.js?ver=0.6.8'></script>
<script type='text/javascript' src='https://demo.gridgum.com/wordpress/kids/wp-includes/js/comment-reply.min.js?ver=4.9.9'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"https:\/\/demo.gridgum.com\/wordpress\/kids\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}}};
/* ]]> */
</script>
<script type='text/javascript' src='https://demo.gridgum.com/wordpress/kids/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.0.3'></script>
<script type='text/javascript' src='https://demo.gridgum.com/wordpress/kids/wp-includes/js/wp-embed.min.js?ver=4.9.9'></script>
 <!-- this is used by many Wordpress features and for plugins to work properly -->

<!--   </div> end of #wrapMain -->
</body>
</html>

<?php

}
else
{
	header("location: login.php");
}

?>
					   

