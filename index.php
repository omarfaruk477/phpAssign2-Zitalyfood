<?php
if (file_exists( __DIR__.'/autoload.php')){
    require_once __DIR__.'/autoload.php';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>zItalyFood | Free Restaurant Html5 Templates</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/slide.css">
	<link rel="stylesheet" href="css/menu.css">
	<!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="wrap-body">
	<!--///////////////////////////////////////Top-->
	<div class="top">
		<div class="zerogrid">
			<ul class="number f-left">
				<li class="mail"><p><?php echo $header["header_top_contact"]["email"];?></p></li>
				<li class="phone"><p><?php echo $header["header_top_contact"]["phone"];?></p></li>
			</ul>
			<ul class="top-social f-right">

			<?php foreach($header["social"] as $s_item) : ?>
				<li><a href="<?php echo $s_item["link"];?>" target="_blank"><?php echo $s_item["icon"];?></a></li>
			<?php endforeach ; ?>
			
			</ul>
		</div>
	</div>
	<!--////////////////////////////////////Header-->
	<header>
		<div class="zerogrid">
			<center><div class="logo"> <a href="https://www.facebook.com/omarfaruk477" target="_blank"><img src="<?php echo $header["logo"];?>" style="width:100px; height:100px; border-radius:50px;"></a></div></center>
		</div>
	</header>
	<div class="site-title">
		<div class="zerogrid">
			<div class="row">
				<h2 class="t-center"><?php echo $header["header_tag_title"];?></h2>
			</div>
		</div>
	</div>
    <!--//////////////////////////////////////Menu-->
    <a href="#" class="nav-toggle">Toggle Navigation</a>
    <nav class="cmn-tile-nav">
		<ul class="clearfix">

		<?php foreach($navBar as $menu) : ?>
			<li class="colour-1"><a href="<?php echo $menu["link"];?>"><?php echo $menu["name"];?></a></li>			
		<?php endforeach ; ?>

		</ul>
    </nav>
	
	<div class="zerogrid">
		<div class="callbacks_container">
			<ul class="rslides" id="slider4">
				<li>
					<img src="images/banner1.jpg" alt="">
					<div class="caption">
						<h2>We've got the best spareribs in town.</h2></br>
						<p>Nulla eget mauris quis elit mollis ornare vitae ut odio. Cras tincidunt, augue vitae sollicitudin commodo,quam elit varius est, et ornare ante massa quis tellus. Mauris nec lacinia nisl. </p>
					</div>
				</li>
				<li>
					<img src="images/banner2.jpg" alt="">
					<div class="caption">
						<h2>If food is an experience, then you'll find it at the restaurant.</h2></br>
						<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
					</div>
				</li>
				<li>
					<img src="images/banner3.jpg" alt="">
					<div class="caption">
						<h2>Enjoy our take-away menu.</h2></br>
						<p>At vero eos et accusam et justo duo dolores et ea rebum. Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
					</div>
				</li>
			</ul>
		</div>
	</div>
	
<!--////////////////////////////////////Container-->
<section id="container" class="index-page">
	<div class="wrap-container zerogrid">
		<!-----------------content-box-1-------------------->
		<section class="content-box box-1">
			<div class="zerogrid">
				<div class="row box-item"><!--Start Box-->
					<h2>“Your awesome company slogan goes here, we have the best food around”</h2>
					<span>Unc elementum lacus in gravida pellentesque urna dolor eleifend felis eleifend</span>
				</div>
			</div>
		</section>
		<!-----------------content-box-2-------------------->
		<section class="content-box box-2">
			<div class="zerogrid">
				<div class="row wrap-box"><!--Start Box-->
					<div class="header">
						<h2>Welcome</h2>
						<hr class="line">
						<span>text text text text text</span>
					</div>
					<div class="row">
						<div class="col-1-3">
							<div class="wrap-col">
								<div class="box-item">
									<span class="ribbon">Menu Card<b></b></span>
									<img src="images/menu.jpg" alt="">
									<p>The sliding menucard will surely impress your customers! Set up several pages and display them side by side, just as on a paper menucard!</p>
									<a href="#" class="button button-1">Detail</a>
								</div>
							</div>
						</div>
						<div class="col-1-3">
							<div class="wrap-col">
								<div class="box-item">
									<span class="ribbon">Fast Food<b></b></span>
									<img src="images/fast-food.jpg" alt="">
									<p>The sliding menucard will surely impress your customers! Set up several pages and display them side by side, just as on a paper menucard!</p>
									<a href="#" class="button button-1">Detail</a>
								</div>
							</div>
						</div>
						<div class="col-1-3">
							<div class="wrap-col">
								<div class="box-item">
									<span class="ribbon">Reservation<b></b></span>
									<img src="images/reservation.jpg" alt="">
									<p>The sliding menucard will surely impress your customers! Set up several pages and display them side by side, just as on a paper menucard!</p>
									<a href="#" class="button button-1">Detail</a>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-1-3">
							<div class="wrap-col">
								<div class="box-item">
									<span class="ribbon">Chef<b></b></span>
									<img src="images/chef.jpg" alt="">
									<p>The sliding menucard will surely impress your customers! Set up several pages and display them side by side, just as on a paper menucard!</p>
									<a href="#" class="button button-1">Detail</a>
								</div>
							</div>
						</div>
						<div class="col-1-3">
							<div class="wrap-col">
								<div class="box-item">
									<span class="ribbon">Preview<b></b></span>
									<img src="images/preview.jpg" alt="">
									<p>The sliding menucard will surely impress your customers! Set up several pages and display them side by side, just as on a paper menucard!</p>
									<a href="#" class="button button-1">Detail</a>
								</div>
							</div>
						</div>
						<div class="col-1-3">
							<div class="wrap-col">
								<div class="box-item">
									<span class="ribbon">Text Heading<b></b></span>
									<img src="images/reservation.jpg" alt="">
									<p>The sliding menucard will surely impress your customers! Set up several pages and display them side by side, just as on a paper menucard!</p>
									<a href="#" class="button button-1">Detail</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</section>

<!--////////////////////////////////////Footer-->
<footer class="zerogrid">
	<div class="wrap-footer">
		<div class="row">
			<div class="col-1-3">
				<div class="wrap-col">
					<h4>Customer Testimonials</h4>
					<div class="row">
						<img src="images/a-1.jpg">
						<h5>Nick Roach</h5>
						<p>Pellentesque elementum leo et justo dapibus convalli. In justo nibh, congue nec dapibus ac, placerat eget sem. Nunc consequat felis non elit ultricies in varius massa laoreet. Aenean lectus nisl, ellentesque in fermentum sit amet, convallis a lorem condimentum mollis. Aenean lectus nisl, ellentesque in fermentum sit amet.</p>
					</div>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<h4>Location</h4>
					<div class="wrap-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.289259162295!2d-120.7989351!3d37.5246781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8091042b3386acd7%3A0x3b4a4cedc60363dd!2sMain+St%2C+Denair%2C+CA+95316%2C+Hoa+K%E1%BB%B3!5e0!3m2!1svi!2s!4v1434016649434" width="100%" height="200" frameborder="0" style="border:0"></iframe></div>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<h4>Open Daily</h4>
					<p><span>mon.</span> 17:00 - 21:00</p>
					<p><span>tue.-wed.</span> 16:30 – 21:00</p>
					<p><span>thu.-sat.</span> 16:30 – 21:00</p>
					<p><span>sun.</span> 11:00 – 21:00</p>
					<p><span>Need help getting home?</span></br>
					We will call a cab for you!</p>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright">
		<div class="wrapper">
			Copyright 2015 - Designed by <a href="https://www.zerotheme.com">ZEROTHEME</a>
			<ul class="quick-link f-right">
				<li><a href="#">Privacy Policy</a></li>
				<li><a href="#">Terms of Use</a></li>
			</ul>
		</div>
	</div>
</footer>


	<!-- js -->
	<script src="js/classie.js"></script>
	<script src="js/demo.js"></script>

	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/responsiveslides.min.js"></script>
	<script>
	$(function () {
	  // Slideshow 4
	  $("#slider4").responsiveSlides({
		auto: true,
		pager: false,
		nav: false,
		speed: 500,
		namespace: "callbacks",
		before: function () {
		  $('.events').append("<li>before event fired.</li>");
		},
		after: function () {
		  $('.events').append("<li>after event fired.</li>");
		}
	  });
	});
	</script>
</div>
</body></html>