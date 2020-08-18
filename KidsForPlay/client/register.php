<?php
require_once("connect.php");
 if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $name=$_POST['um'];
      $email=$_POST['em'];
	  $password=$_POST['psw'];
	  $repassword=$_POST['repsw'];
	  $city=$_POST["ct"];
	  $phone=$_POST["pn"];
	  $address=$_POST['ad'];
	  $state=$_POST['st'];
	  $pd=md5($password);
	

	  if($password==$repassword)
	  {
	  $sql = "SELECT * FROM userinfo WHERE email = '$email'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
		if($count==1)
		{
			 
			echo '<script language="javascript">';
         	echo 'alert ("user exist")';
         	echo '</script>';

		}
		else
		{

			
			$sq = "INSERT INTO userinfo(username,city,address,state,email,phone,passsword) VALUES ('$name','$city','$address','$state','$email','$phone','$pd')";
			
			if(mysqli_query($db,$sq))
			{
				echo '<script language="javascript">';
				echo 'alert ("Record Saved")';
         		echo '</script>';
				 header("location: login.php");
			}
        
			else
			{
				echo '<script language="javascript">';
				echo 'alert ("Record Not Saved")';
         		echo '</script>';
			}
		}
	}
	  		else
	  		{
		 		echo '<script language="javascript">';
         		echo 'alert ("Password Not Match")';
         		echo '</script>';
      		}

}
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en-US"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en-US"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en-US"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en-US"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en-US"> <!--<![endif]-->
<head>
	<title>Register</title>
	<meta name="description" content=" &raquo; Classes | Just another WordPress site" />
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
<link rel="alternate" type="application/rss+xml" title="Kids Planet &raquo; Classes Comments Feed" href="https://demo.gridgum.com/wordpress/kids/classes/feed/" />
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

body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password], input[type=number], input[type=email] {
  width: 60%;
  height: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

input[type=submit] {
  background-color: #2B2C86;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 60%;
}	

button {
  background-color: #2B2C86;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 60%;
}

button:hover {
  opacity: 0.8;
}


.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
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
<link rel="canonical" href="https://demo.gridgum.com/wordpress/kids/classes/" />
<link rel='shortlink' href='https://demo.gridgum.com/wordpress/kids/?p=18' />
<link rel="alternate" type="application/json+oembed" href="https://demo.gridgum.com/wordpress/kids/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdemo.gridgum.com%2Fwordpress%2Fkids%2Fclasses%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://demo.gridgum.com/wordpress/kids/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdemo.gridgum.com%2Fwordpress%2Fkids%2Fclasses%2F&#038;format=xml" />

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



<body class="page-template page-template-page-fullwidth_withLeftSidebar page-template-page-fullwidth_withLeftSidebar-php page page-id-18 chrome" >


<div id="main"><!-- this encompasses the entire Web site -->

	<div id="clouds"></div>

	
	<?php require_once('header.php'); ?>

	 	
		<section id="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="span12 breadcrumb">
						<span xmlns:ib="http://rdf.data-vocabulary.org/#"><div class="ib-trail"><ul><li class="ib-crumb ib-added menu-item menu-item-home"><span typeof="ib:Breadcrumb"></li></ul></div></span>					</div>
				</div>
			</div>	
		</section>

		<section id="titleArea">
			<div class="container">
				<div class="row">
					<div class="span12">
						<h3>Register</h3><p>Welcome, we are here to serve you the best for kids welfare. </p>	
					</div>
				</div>
			</div>
		</section>
		


	<section id="primaryWrapContent" class="clearfix">
    <div class="container">
        <div class="clearfix">
            <div class="row">
                <div class="span3 clearfix">
  <aside id="sidebarLeft">
                <div class="span9">  


           
<table align="">
<tr>
<td>	
<form method="post">
  
  <div class="container">

  	<tr>
    <td align="center"><h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UserName </h3>
	<input type="text" placeholder="Enter Name" name="um" required size=100> 
	</td>
	</tr>

	<tr>
    <td align="center"><h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password</h3>
    <input type="password" placeholder="Enter Password" name="psw" required></td>
	</tr>

	<tr>
	<td align="center"><h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Re-enter Password</h3>
    <input type="password" placeholder="Re-enter Password" name="repsw" required></td>
	</tr>

	<tr>
	<td align="center"><h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Phone no</h3>
    <input type="number" placeholder="Enter Phone no" name="pn" required size=10></td>
	</tr>

	<tr>
	<td align="center"><h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-mail Id</h3>
    <input type="email" placeholder="Enter Email" name="em" required></td>
	</tr>

	<tr>
	<td align="center"><h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Address</h3>
    <input type="text" placeholder="Enter Address" name="ad" required></td>
	</tr>

	<tr>
	<td align="center"><h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City</h3>
    <input type="text" placeholder="Enter City" name="ct" required></td>
	</tr>

	<tr>
	<td align="center"><h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State</h3>
    <input type="text" placeholder="Enter State" name="st" required></td>
    </tr>

    <br> 
		<br> 
		<br> 


    <tr>
	<td align="center"><input type = "submit" value = " Register "></td>
    </tr>




</td>		
</tr>



</table>			
		
			
                
         </div>




</form>
</div>
      </div>
			

                  <!--  <div class="wrap_content">         
                    	                            <div id="post-18" class="page post-18 type-page status-publish hentry">
                    			<h1>Our Classes</h1>
<div class="clearfix box">
<img src="https://demo.gridgum.com/wordpress/kids//wp-content/uploads/2014/06/yay-906310-300x199.jpg" alt="yay-906310" width="300" height="199" class="alignleft size-medium wp-image-114" srcset="https://demo.gridgum.com/wordpress/kids/wp-content/uploads/2014/06/yay-906310-300x199.jpg 300w, https://demo.gridgum.com/wordpress/kids/wp-content/uploads/2014/06/yay-906310.jpg 671w" sizes="(max-width: 300px) 100vw, 300px" /></p>
<h3>Aenean semper aliquet</h3>
<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat consectetuer adipiscing elit. Nunc suscipit. </p>
<p><a class="read" href="#">read more</a><br />
</div>
<div class="clearfix box">
<img src="https://demo.gridgum.com/wordpress/kids//wp-content/uploads/2014/06/yay-528871-300x199.jpg" alt="yay-528871" width="300" height="199" class="alignleft size-medium wp-image-104" srcset="https://demo.gridgum.com/wordpress/kids/wp-content/uploads/2014/06/yay-528871-300x199.jpg 300w, https://demo.gridgum.com/wordpress/kids/wp-content/uploads/2014/06/yay-528871.jpg 671w" sizes="(max-width: 300px) 100vw, 300px" /></p>
<h3>Aenean semper aliquet</h3>
<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat consectetuer adipiscing elit. Nunc suscipit. </p>
<p><a class="read" href="#">read more</a><br />
</div>
<div class="clearfix box">
<img src="https://demo.gridgum.com/wordpress/kids//wp-content/uploads/2014/06/yay-529339-300x199.jpg" alt="yay-529339" width="300" height="199" class="alignleft size-medium wp-image-105" srcset="https://demo.gridgum.com/wordpress/kids/wp-content/uploads/2014/06/yay-529339-300x199.jpg 300w, https://demo.gridgum.com/wordpress/kids/wp-content/uploads/2014/06/yay-529339.jpg 671w" sizes="(max-width: 300px) 100vw, 300px" /></p>
<h3>Aenean semper aliquet</h3>
<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat consectetuer adipiscing elit. Nunc suscipit. </p>
<p><a class="read" href="#">read more</a><br />
</div>
                                <div class="pagination">
                    				                                </div><!--.pagination-->
                      <!--     </div><!--#post-# .post-->
                       <!--                      </div>            
                </div><!--#content-->   
      <!--        </div>   -->      
        </div> 
    </div>    
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




