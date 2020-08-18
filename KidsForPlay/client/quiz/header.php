<header id="header" class="clearfix">

		<div class="container">
			<div class="row">
				<div class="logo span4">
						                    	                        <a href="home.php" id="logo">
	                        	<img src="1a.png" height="50" width="50" alt="Kids For Play" title="Kids For Play"></a>
							                            	</div>
				<div class="span6 offset2">
					<div id="social_networks-2"><!-- <h2>Follow Us:</h2>		
			<ul class="social-networks">
				
								    								<li>
							<a rel="external" title="facebook" href="https://www.facebook.com/">
						    											<img src="https://demo.gridgum.com/wordpress/kids/wp-content/themes/kidsPlanet/images/icons/facebook.png" alt="">
															</a>
						</li>
													    								<li>
							<a rel="external" title="twitter" href="https://www.twitter.com/">
						    											<img src="https://demo.gridgum.com/wordpress/kids/wp-content/themes/kidsPlanet/images/icons/twitter.png" alt="">
															</a>
						</li>
													    										    										    								<li>
							<a rel="external" title="linkedin" href="https://www.linkedin.com/">
						    											<img src="https://demo.gridgum.com/wordpress/kids/wp-content/themes/kidsPlanet/images/icons/linkedin.png" alt="">
															</a>
						</li>
													    										    								<li>
							<a rel="external" title="youtube" href="https://www.youtube.com/">
						    											<img src="https://demo.gridgum.com/wordpress/kids/wp-content/themes/kidsPlanet/images/icons/youtube.png" alt="">
															</a>
						</li>
													    										    										    										    										    								<li>
							<a rel="external" title="vimeo" href="https://www.vimeo.com/">
						    											<img src="https://demo.gridgum.com/wordpress/kids/wp-content/themes/kidsPlanet/images/icons/vimeo.png" alt="">
															</a>
						</li>
													    										      
      		</ul> -->
      
		</div>
<?php
if(isset($_SESSION['login_user']))
{	
  
   
?>	
		<div id="text-2"><h2>Welcome</h2>			
			<div class="textwidget"><a href="callto:1 800 222 1242"><?php echo $_SESSION["login_user"]; ?></a></div>
				</div>	
<?php

}
else
{
?>
		<div id="text-2"><h2>Welcome To</h2>			
			<div class="textwidget"><a href="callto:1 800 222 1242">KidsForPlay </a></div>
				</div>	
<?php				
}
?>

				</div>
			</div>
		</div>
		
		<section id="navArea">
			<div class="container">
				<div class="row">
					<nav class="primary span12">
							<div class="clearfix">
								
								<div class="responds"><span>Menu</span></div>	
<?php require_once('menu.php')?>					        
							</div>
						</nav><!--.primary-->
					</div>
				</div>	
		</section>

	</header>

