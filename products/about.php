<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title> Smart Bazaar | About Us</title>
<link rel="shortcut icon" href="../images/shopping2.png"  /> 
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="../css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="../js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="../js/move-top.js"></script>
<script type="text/javascript" src="../js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>
<!-- header -->
	<div class="agileits_header">
		<div class="w3l_offers">
			<a href="products.php">Today's special Offers !</a>
		</div>
		<div class="w3l_search">
			<form action="#" method="post">
				<input type="text" name="Product" value="Search a product..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search a product...';}" required="">
				<input type="submit" value=" ">
			</form>
		</div>
		<div class="product_list_header" style="background: #F7660C";>  
			<form action="#" method="post" class="last">
                <fieldset>
                    <input type="hidden" name="cmd" value="_cart" />
                    <input type="hidden" name="display" value="1" />
                    <input type="submit" name="submit" value="View your cart" class="button" />
                </fieldset>
            </form>
		</div>
		<div class="w3l_header_right">
			<ul>
				<li class="dropdown profile_details_drop">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
					<div class="mega-dropdown-menu">
						<div class="w3ls_vegetables">
							<ul class="dropdown-menu drp-mnu">
								<li><a href="login.php">Login</a></li> 
								<li><a href="login.php">Sign Up</a></li>
							</ul>
						</div>                  
					</div>	
				</li>
			</ul>
		</div>
		<div class="w3l_header_right1">
			<h2><a href="mail.php">Contact Us</a></h2>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- script-for sticky-nav -->
	<script>
	$(document).ready(function() {
		 var navoffeset=$(".agileits_header").offset().top;
		 $(window).scroll(function(){
			var scrollpos=$(window).scrollTop(); 
			if(scrollpos >=navoffeset){
				$(".agileits_header").addClass("fixed");
			}else{
				$(".agileits_header").removeClass("fixed");
			}
		 });
		 
	});
	</script>
<!-- //script-for sticky-nav -->
	<div class="logo_products">
		<div class="container">
			<div class="w3ls_logo_products_left">
				<h1><a href="../index.php"><span>2018</span>GIH</a></h1>
			</div>
			<div class="w3ls_logo_products_left1">
				<ul class="special_items">
					<li><a href="events.php">Events</a><i>/</i></li>
					<li><a href="about.php">About Us</a><i>/</i></li>
					<li><a href="products.php">Best Deals</a><i>/</i></li>
					<li><a href="services.php">Services</a></li>
				</ul>
			</div>
			<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>(+91) 9687113602</li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:meetpanchal738@gmail.com">admin@gmail.com</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
<!-- products-breadcrumb -->
	<div class="products-breadcrumb" style="background: rgb(247, 102, 12);">
		<div class="container" ">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="../index.php">Home</a><span>|</span></li>
				<li>About Us</li>
			</ul>
		</div>
	</div>
<!-- //products-breadcrumb -->
<!-- banner -->
	<div class="banner">
		<div class="w3l_banner_nav_left">
			<nav class="navbar nav_bottom">
			 <!-- Brand and toggle get grouped for better mobile display -->
			  <div class="navbar-header nav_2">
				  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
			   </div> 
			   <!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs"
				style="background-color: #00244a; color: #fff;">
					<ul class="nav navbar-nav nav_1">
						<li><a href="products.php">Branded Foods</a></li>
						<li><a href="household.php">Households</a></li>
						<li class="dropdown mega-dropdown active">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Veggies & Fruits<span class="caret"></span></a>				
							<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
								<div class="w3ls_vegetables">
									<ul>	
										<li><a href="vegetables.php">Vegetables</a></li>
										<li><a href="vegetables.php">Fruits</a></li>
									</ul>
								</div>                  
							</div>				
						</li>
						<li><a href="kitchen.php">Kitchen</a></li>
						<li><a href="short-codes.php">Short Codes</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Beverages<span class="caret"></span></a>
							<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
								<div class="w3ls_vegetables">
									<ul>
										<li><a href="drinks.php">Soft Drinks</a></li>
										<li><a href="drinks.php">Juices</a></li>
									</ul>
								</div>                  
							</div>	
						</li>
						<li><a href="pet.php">Pet Food</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Frozen Foods<span class="caret"></span></a>
							<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
								<div class="w3ls_vegetables">
									<ul>
										<li><a href="frozen.php">Frozen Snacks</a></li>
										<li><a href="frozen.php">Frozen Nonveg</a></li>
									</ul>
								</div>                  
							</div>	
						</li>
						<li><a href="bread.php">Bread & Bakery</a></li>
					</ul>
				 </div><!-- /.navbar-collapse -->
			</nav>
		</div>
		<div class="w3l_banner_nav_right">
<!-- about -->
		<div class="privacy about">
			<h3>About Us</h3>
			<p class="animi">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis 
				praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias 
				excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui 
				officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem 
				rerum facilis est et expedita distinctio.</p>
			<div class="agile_about_grids">
				<div class="col-md-6 agile_about_grid_right">
					<img src="../images/31.jpg" alt=" " class="img-responsive" />
				</div>
				<div class="col-md-6 agile_about_grid_left">
					<ol>
						<li>laborum et dolorum fuga</li>
						<li>corrupti quos dolores et quas</li>
						<li>est et expedita distinctio</li>
						<li>deleniti atque corrupti quos</li>
						<li>excepturi sint occaecati cupiditate</li>
						<li>accusamus et iusto odio</li>
					</ol>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
<!-- //about -->
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->
<!-- team -->
	<div class="team">
		<div class="container">
			<h3>Meet Our Amazing Team</h3>
			

			<!-- Edited Images r1-->
			<div class="agileits_team_grids">
				<div class="col-md-3 agileits_team_grid">
					<img src="../images/meet.jpg" alt=" " class="img-responsive"  style="height: 170px;  width: 240px;" />
					<h4>Meet Panchal</h4>
					<p>Lead Developer</p>
					<ul class="agileits_social_icons agileits_social_icons_team">
						<li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="col-md-3 agileits_team_grid">
					<img src="../images/rushabh.jpg" alt=" " class="img-responsive" style="height: 170px;  width: 240px;" />
					<h4>Rushabh Narekar</h4>
					<p>Back-end Developer</p>
					<ul class="agileits_social_icons agileits_social_icons_team">
						<li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="col-md-3 agileits_team_grid">
					<img src="../images/viju.jpg" alt=" " class="img-responsive" style="height: 170px; width: 240px; " />
					<h4>Vijay Solanki</h4>
					<p>Front-end Developer </p>
					<ul class="agileits_social_icons agileits_social_icons_team">
						<li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="col-md-3 agileits_team_grid">
					<img src="../images/mansi1.jpg" alt=" " class="img-responsive"  style="height: 170px;  width: 240px;" />
					<h4>Mansi Brahmbhatt</h4>
					<p>Database Administrator</p>
					<ul class="agileits_social_icons agileits_social_icons_team">
						<li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>



			<!-- Edited Images r2-->
		<div class="agileits_team_grids">
				<div class="col-md-3 agileits_team_grid">
					<img src="../images/raj.jpg" alt=" " class="img-responsive" style="height: 170px;  width: 240px;" />
					<h4>Raj Patel</h4>
					<p>Content Manager</p>
					<ul class="agileits_social_icons agileits_social_icons_team">
						<li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="col-md-3 agileits_team_grid">
					<img src="../images/krupa.jpg" alt=" " class="img-responsive" style="height: 170px;  width: 240px;" />
					<h4>Krupa Shah</h4>
					<p> Theme Manager</p>
					<ul class="agileits_social_icons agileits_social_icons_team">
						<li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="col-md-3 agileits_team_grid">
					<img src="../images/vikas.jpg" alt=" " class="img-responsive" style="height: 170px; width: 240px; " />
					<h4>Vikas Salunkhe</h4>
					<p>Editor</p>
					<ul class="agileits_social_icons agileits_social_icons_team">
						<li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>




		</div>
	</div>
<!-- //team -->
<!-- testimonials -->
	<div class="testimonials">
		<div class="container">
			<h3>Testimonials</h3>
				<div class="w3_testimonials_grids">
					<div class="wmuSlider example1 animated wow slideInUp" data-wow-delay=".5s">
						<div class="wmuSliderWrapper">
							<article style="position: absolute; width: 100%; opacity: 0;"> 
								<div class="banner-wrap">
									<div class="col-md-6 w3_testimonials_grid">
										<p><i class="fa fa-quote-right" aria-hidden="true"></i>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis 
											voluptatibus maiores alias consequatur aut perferendis doloribus asperiores 
											repellat.</p>
										<h4>Andrew Smith <span>Customer</span></h4>
									</div>
									<div class="col-md-6 w3_testimonials_grid">
										<p><i class="fa fa-quote-right" aria-hidden="true"></i>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis 
											voluptatibus maiores alias consequatur aut perferendis doloribus asperiores 
											repellat.</p>
										<h4>Thomson Richard <span>Customer</span></h4>
									</div>
									<div class="clearfix"> </div>
								</div>
							</article>
							<article style="position: absolute; width: 100%; opacity: 0;"> 
								<div class="banner-wrap">
									<div class="col-md-6 w3_testimonials_grid">
										<p><i class="fa fa-quote-right" aria-hidden="true"></i>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis 
											voluptatibus maiores alias consequatur aut perferendis doloribus asperiores 
											repellat.</p>
										<h4>Crisp Kale <span>Customer</span></h4>
									</div>
									<div class="col-md-6 w3_testimonials_grid">
										<p><i class="fa fa-quote-right" aria-hidden="true"></i>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis 
											voluptatibus maiores alias consequatur aut perferendis doloribus asperiores 
											repellat.</p>
										<h4>John Paul <span>Customer</span></h4>
									</div>
									<div class="clearfix"> </div>
								</div>
							</article>
							<article style="position: absolute; width: 100%; opacity: 0;"> 
								<div class="banner-wrap">
									<div class="col-md-6 w3_testimonials_grid">
										<p><i class="fa fa-quote-right" aria-hidden="true"></i>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis 
											voluptatibus maiores alias consequatur aut perferendis doloribus asperiores 
											repellat.</p>
										<h4>Rosy Carl <span>Customer</span></h4>
									</div>
									<div class="col-md-6 w3_testimonials_grid">
										<p><i class="fa fa-quote-right" aria-hidden="true"></i>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis 
											voluptatibus maiores alias consequatur aut perferendis doloribus asperiores 
											repellat.</p>
										<h4>Rockson Doe <span>Customer</span></h4>
									</div>
									<div class="clearfix"> </div>
								</div>
							</article>
						</div>
					</div>
					<script src="../js/jquery.wmuSlider.js"></script> 
					<script>
						$('.example1').wmuSlider();         
					</script> 
				</div>
		</div>
	</div>
<!-- //testimonials -->
<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<div class="w3agile_newsletter_left">
				<h3>sign up for our newsletter</h3>
			</div>
			<div class="w3agile_newsletter_right">
				<form action="#" method="post">
					<input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="submit" value="subscribe now">
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //newsletter -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-md-3 w3_footer_grid">
				<h3>information</h3>
				<ul class="w3_footer_grid_list">
					<li><a href="events.php">Events</a></li>
					<li><a href="about.php">About Us</a></li>
					<li><a href="products.php">Best Deals</a></li>
					<li><a href="services.php">Services</a></li>
					<li><a href="short-codes.php">Short Codes</a></li>
				</ul>
			</div>
			<div class="col-md-3 w3_footer_grid">
				<h3>policy info</h3>
				<ul class="w3_footer_grid_list">
					<li><a href="faqs.php">FAQ</a></li>
					<li><a href="privacy.php">privacy policy</a></li>
					<li><a href="privacy.php">terms of use</a></li>
				</ul>
			</div>
			<div class="col-md-3 w3_footer_grid">
				<h3>what in stores</h3>
				<ul class="w3_footer_grid_list">
					<li><a href="pet.php">Pet Food</a></li>
					<li><a href="frozen.php">Frozen Snacks</a></li>
					<li><a href="kitchen.php">Kitchen</a></li>
					<li><a href="products.php">Branded Foods</a></li>
					<li><a href="household.php">Households</a></li>
				</ul>
			</div>
			<div class="col-md-3 w3_footer_grid">
				<h3>twitter posts</h3>
				<ul class="w3_footer_grid_list1">
					<li><label class="fa fa-twitter" aria-hidden="true"></label><i>01 day ago</i><span style="color: white;">
						Vrajesh Kadia
					</span>
						<SPAN>
						Shopping for clothes is time consuming, it's tiring, and it can feel like a waste of an autumn afternoon.	
					</SPAN>
					</li>
					<li><label class="fa fa-twitter" aria-hidden="true"></label><i>02 day ago</i><span style="color: white;">Vatshal Panchal</span><span>
						The best way to get anybody's attention is dinner. I have good kitchen skills and good grocery shopping skills.</span></li>
				</ul>
			</div>
			
			<div class="clearfix"> </div>
			<div class="agile_footer_grids">
				<div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
					<div class="w3_footer_grid_bottom">
						<h4>100% secure payments</h4>
						<img src="../images/card.png" alt=" " class="img-responsive" />
					</div>
				</div>
				<div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
					<div class="w3_footer_grid_bottom">
						<h5>connect with us</h5>
						<ul class="agileits_social_icons">
							<li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#" class="dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="wthree_footer_copy">
				<p>© 2016 Smart Bazaar. All rights reserved | Design by <a href="http://w3layouts.com/">GIH-2018</a></p>
			</div>
		</div>
	</div>
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="../js/minicart.js"></script>
<script>
		paypal.minicart.render();

		paypal.minicart.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});

	</script>
</body>
</html>