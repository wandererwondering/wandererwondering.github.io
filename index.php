﻿<?php
	header("Location:offline.html");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Blogzine - Blog and Magazine Bootstrap 5 Theme</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Webestica.com">
	<meta name="description" content="Bootstrap based News, Magazine and Blog Theme">

	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/images/favicon.ico">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="css2?family=Nunito+Sans:wght@400;700&family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/tiny-slider/tiny-slider.css">
  <link rel="stylesheet" type="text/css" href="assets/vendor/plyr/plyr.css">

	<!-- Theme CSS -->
	<link id="style-switch" rel="stylesheet" type="text/css" href="assets/css/style.css">
  
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async="" src="https://www.googletagmanager.com/gtag/js?id=G-XZ4W34ZJ0L"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-XZ4W34ZJ0L');
	</script>
</head>

<body>

<!-- Top alert START -->
<div class="alert alert-warning py-2 m-0 bg-primary border-0 rounded-0 alert-dismissible fade show text-center overflow-hidden" role="alert">
	<!-- SVG shape START -->
	<figure class="position-absolute top-50 start-50 translate-middle">
		<svg width="1848" height="481" viewbox="0 0 1848.9 481.8" xmlns="http://www.w3.org/2000/svg">
			<path class="fill-success" d="m779.4 251c-10.3-11.5-19.9-23.8-29.4-36.1-9-11.6-18.4-22.8-27.1-34.7-15.3-21.2-30.2-45.8-54.8-53.3-10.5-3.2-21.6-3.2-30.6 2.5-7.6 4.8-13 12.6-17.3 20.9-10.8 20.6-16.1 44.7-24.6 66.7-7.9 20.2-19.4 38.6-33.8 54.3-14.7 16.2-31.7 30-50.4 41-15.9 9.4-33.4 17.2-52 19.3-18.4 2-38-2.5-56.5-6.2-22.4-4.4-45.1-9.7-67.6-10.9-9.8-0.5-19.8-0.3-29.1 2.3-9.8 2.8-18.7 8.6-26.6 15.2-17.3 14.5-30.2 34.4-43.7 52.9-12.9 17.6-26.8 34.9-45.4 45.4-19.5 11-42.6 12.1-65 6.6-52.3-13.1-93.8-56.5-127.9-101.5-8.8-11.6-17.3-23.4-25.6-35.4-0.6-0.9-1.1-1.8-1.6-2.7-1.1-2.4-0.9-2.6 0.6-1.2 1 0.9 1.9 1.9 2.7 3 35.3 47.4 71.5 98.5 123.2 123.9 22.8 11.2 48.2 17.2 71.7 12.2 23-5 40.6-21.2 55.3-39.7 24.5-30.7 46.5-75.6 87.1-83 19.5-3.5 40.7 0.1 60.6 3.7 21.2 3.9 42.3 9.1 63.6 11.7 17.8 2.3 35.8-0.1 52.2-7 20-8.1 38.4-20.2 54.8-34.6 16.2-14.1 31-30.7 41.8-50.4 11.1-20.2 17-43.7 24.9-65.7 6.1-16.9 13.8-36.2 29.3-44.5 16.1-8.6 37.3-1.9 52.3 10.6 18.7 15.6 31.2 39.2 46.7 58.2"></path>
			<path class="fill-warning" d="m1157.9 344.9c9.8 7.6 18.9 15.8 28.1 24 8.6 7.7 17.6 15.2 26 23.2 14.8 14.2 29.5 30.9 51.2 34.7 9.3 1.6 18.8 0.9 26.1-3.8 6.1-3.9 10.2-9.9 13.2-16.2 7.6-15.6 10.3-33.2 15.8-49.6 5.2-15.1 13.6-29 24.7-41.3 11.4-12.6 24.8-23.6 40-32.8 12.9-7.8 27.3-14.6 43.1-17.3 15.6-2.6 32.8-0.7 49 0.7 19.6 1.7 39.4 4 58.8 3.4 8.4-0.3 17-1.1 24.8-3.6 8.2-2.7 15.4-7.4 21.6-12.7 13.7-11.6 23.1-26.7 33.3-40.9 9.6-13.5 20.2-26.9 35.3-35.6 15.8-9.2 35.6-11.6 55.2-9.1 45.7 5.8 84.8 34.3 117.6 64.4 8.7 8 17.2 16.2 25.6 24.6 2.5 3.2 1.9 3-1.2 1-34.3-32-69.7-66.9-116.5-81.9-20.5-6.5-42.7-9.2-62.4-4-19.3 5.1-33.1 17.9-44.3 32.2-18.5 23.7-33.9 57.5-68.1 65.5-16.5 3.8-34.9 2.6-52.3 1.3-18.5-1.4-37-3.7-55.4-4.2-15.5-0.5-30.7 2.5-44.2 8.5-16.5 7.2-31.3 17.1-44.3 28.5-12.8 11.2-24.1 24.1-31.9 39-7.9 15.3-11.1 32.5-16.2 48.9-3.9 12.6-9 26.9-21.6 33.9-13.1 7.3-31.9 3.8-45.7-4.1-17.2-10-29.9-26.1-44.6-38.8"></path>
			<path class="fill-warning" d="m1840.8 379c-8.8 40.3-167.8 79.9-300.2 45.3-42.5-11.1-91.4-32-138.7-11.6-38.7 16.7-55 66-90.8 67.4-25.1 1-48.6-20.3-58.1-39.8-31-63.3 50.7-179.9 155.7-208.1 50.4-13.5 97.3-3.2 116.1 1.6 36.3 9.3 328.6 87.4 316 145.2z"></path>
			<path class="fill-success" d="M368.3,247.3C265.6,257.2,134,226,110.9,141.5C85,47.2,272.5-9.4,355.5-30.7s182.6-31.1,240.8-18.6    C677.6-31.8,671.5,53.9,627,102C582.6,150.2,470.9,237.5,368.3,247.3z"></path>
		</svg>
	</figure>
	<!-- SVG shape END -->
  <div class="position-relative">
  	<p class="text-white m-0">Unlimited download! Starting from just $15/m <a href="#" class="btn btn-xs btn-dark ms-3 mb-0">Grab now!</a></p>
  </div>
  <!-- Close button -->
  <button type="button" class="btn-close btn-close-white opacity-9 p-3" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<!-- Top alert END -->

<!-- Offcanvas START -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasMenu">
  <div class="offcanvas-header justify-content-end">
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body d-flex flex-column pt-0">
		<div>
			<img class="light-mode-item my-3" src="assets/images/logo.svg" alt="logo">
			<img class="dark-mode-item my-3" src="assets/images/logo-light.svg" alt="logo">
			<p>The next-generation blog, news, and magazine theme for you to start sharing your stories today! </p>
			<!-- Nav START -->
			<ul class="nav d-block flex-column my-4">
				<li class="nav-item">
					<a href="index.html" class="nav-link h5">Home</a>
				<li class="nav-item">
					<a class="nav-link h5" href="about-us.html">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link h5" href="post-grid.html">Our Journal</a>
				</li>
				<li class="nav-item">
					<a class="nav-link h5" href="contact-us.html">Contact Us</a>
				</li>
			</ul>
			<!-- Nav END -->
			<div class="bg-primary-soft p-4 mb-4 text-center w-100 rounded">
				<span>The Blogzine</span>
				<h3>Save on Premium Membership</h3>
				<p>Get the insights report trusted by experts around the globe. Become a Member Today!</p>
				<a href="#" class="btn btn-warning">View pricing plans</a>
			</div>
		</div>
		<div class="mt-auto pb-3">
			<!-- Address -->
			<p class="text-body mb-2 fw-bold">New York, USA (HQ)</p>
			<address class="mb-0">750 Sing Sing Rd, Horseheads, NY, 14845</address>
			<p class="mb-2">Call: <a href="#" class="text-body"><u>469-537-2410</u> (Toll-free)</a> </p>
			<a href="#" class="text-body d-block">hello@blogzine.com</a>
		</div>
  </div>
</div>
<!-- Offcanvas END -->

<!-- =======================
Header START -->
<header class="navbar-light navbar-sticky header-static">
	<div class="navbar-top d-none d-lg-block small">
		<div class="container">
			<div class="d-md-flex justify-content-between align-items-center my-2">
				<!-- Top bar left -->
				<ul class="nav">
					<li class="nav-item">
						<a class="nav-link ps-0" href="about-us.html">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Forum</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="https://themes.getbootstrap.com/store/webestica/">Buy now!</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="signin.html">Login / Join</a>
					</li>
				</ul>
				<!-- Top bar right -->
				<div class="d-flex align-items-center">
					<!-- Font size accessibility START -->
					<div class="btn-group me-2" role="group" aria-label="font size changer">
						<input type="radio" class="btn-check" name="fntradio" id="font-sm">
						<label class="btn btn-xs btn-outline-primary mb-0" for="font-sm">A-</label>

						<input type="radio" class="btn-check" name="fntradio" id="font-default" checked="">
						<label class="btn btn-xs btn-outline-primary mb-0" for="font-default">A</label>

						<input type="radio" class="btn-check" name="fntradio" id="font-lg">
						<label class="btn btn-xs btn-outline-primary mb-0" for="font-lg">A+</label>
					</div>

					<!-- Dark mode switch -->
					<div class="modeswitch" id="darkModeSwitch">
						<div class="switch"></div>
					</div>

					<ul class="nav">
						<li class="nav-item">
							<a class="nav-link px-2 fs-5" href="#"><i class="fab fa-facebook-square"></i></a>
						</li>
						<li class="nav-item">
							<a class="nav-link px-2 fs-5" href="#"><i class="fab fa-twitter-square"></i></a>
						</li>
						<li class="nav-item">
							<a class="nav-link px-2 fs-5" href="#"><i class="fab fa-linkedin"></i></a>
						</li>
						<li class="nav-item">
							<a class="nav-link px-2 fs-5" href="#"><i class="fab fa-youtube-square"></i></a>
						</li>
						<li class="nav-item">
							<a class="nav-link ps-2 pe-0 fs-5" href="#"><i class="fab fa-vimeo"></i></a>
						</li>
					</ul>
				</div>
			</div>
			<!-- Divider -->
			<div class="border-bottom border-2 border-primary opacity-1"></div>
		</div>
	</div>

	<!-- Logo Nav START -->
	<nav class="navbar navbar-expand-lg">
		<div class="container">
			<!-- Logo START -->
			<a class="navbar-brand" href="index.html">
				<img class="navbar-brand-item light-mode-item" src="assets/images/logo.svg" alt="logo">			
				<img class="navbar-brand-item dark-mode-item" src="assets/images/logo-light.svg" alt="logo">			
			</a>
			<!-- Logo END -->

			<!-- Responsive navbar toggler -->
			<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="text-body h6 d-none d-sm-inline-block">Menu</span>
			  <span class="navbar-toggler-icon"></span>
		  </button>

			<!-- Main navbar START -->
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav navbar-nav-scroll mx-auto">

					<!-- Nav item 1 Demos -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle active" href="#" id="homeMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
						<ul class="dropdown-menu" aria-labelledby="homeMenu">
							<li> <a class="dropdown-item active" href="index.html">Home default</a></li>
							<li> <a class="dropdown-item" href="index-lazy.html">Home lazy load</a></li>
							<li> <a class="dropdown-item" href="index-2.html">Magazine classic</a></li>
							<li> <a class="dropdown-item" href="index-3.html">Magazine</a></li>
							<li> <a class="dropdown-item" href="index-4.html">Home cards</a></li>
							<li> <a class="dropdown-item" href="index-5.html">Blog classic</a></li>
							<li> <a class="dropdown-item" href="index-6.html">Blog Personal <span class="badge bg-danger smaller me-1">New</span> </a></li>
							<li> <a class="dropdown-item" href="index-7.html">Blog Vintage <span class="badge bg-danger smaller me-1">New</span></a></li>
							<li> <a class="dropdown-item" href="index-8.html">Blog Tech <span class="badge bg-danger smaller me-1">New</span></a></li>
							<li> <a class="dropdown-item" href="index-9.html">Blog Fashion <span class="badge bg-danger smaller me-1">New</span></a></li>
							<li> <a class="dropdown-item" href="index-10.html">Blog Podcast <span class="badge bg-danger smaller me-1">New</span></a></li>
						</ul>
					</li>

					<!-- Nav item 2 Pages -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="pagesMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
						<ul class="dropdown-menu" aria-labelledby="pagesMenu">
							<li> <a class="dropdown-item" href="about-us.html">About</a></li>
							<li> <a class="dropdown-item" href="contact-us.html">Contact</a></li>
							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend"> 
								<a class="dropdown-item dropdown-toggle" href="#">Other Archives</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<li> <a class="dropdown-item" href="author.html">Author Page</a> </li>
									<li> <a class="dropdown-item" href="categories.html">Category page 1</a> </li>
									<li> <a class="dropdown-item" href="categories-2.html">Category page 2</a> </li>
									<li> <a class="dropdown-item" href="tag.html"># tag</a> </li>
									<li> <a class="dropdown-item" href="search-result.html">Search result</a> </li>
								</ul>
							</li>
							<li> <a class="dropdown-item" href="404.html">Error 404</a></li>
							<li> <a class="dropdown-item" href="signin.html">signin</a></li>
							<li> <a class="dropdown-item" href="signup.html">signup</a></li>
							<li> <a class="dropdown-item" href="offline.html">offline</a></li>
							<!-- Dropdown submenu levels -->
							<li class="dropdown-divider"></li>
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Dropdown levels</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<!-- dropdown submenu open right -->
									<li class="dropdown-submenu dropend">
										<a class="dropdown-item dropdown-toggle" href="#">Dropdown (end)</a>
										<ul class="dropdown-menu" data-bs-popper="none">
											<li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
											<li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
										</ul>
									</li>
									<li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
									<!-- dropdown submenu open left -->
									<li class="dropdown-submenu dropstart">
										<a class="dropdown-item dropdown-toggle" href="#">Dropdown (start)</a>
										<ul class="dropdown-menu dropdown-menu-end" data-bs-popper="none">
											<li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
											<li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
										</ul>
									</li>
									<li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
								</ul>
							</li>
							<li class="dropdown-divider"></li>
							<li> 
								<a class="dropdown-item" href="https://support.webestica.com/" target="_blank">
									<i class="text-warning fa-fw bi bi-life-preserver me-2"></i>Support
								</a> 
							</li>
							<li> 
								<a class="dropdown-item" href="docs/index.html" target="_blank">
									<i class="text-danger fa-fw bi bi-card-text me-2"></i>Documentation
								</a> 
							</li>
							<li class="dropdown-divider"></li>
							<li> 
								<a class="dropdown-item" href="rtl/index.htm" target="_blank">
									<i class="text-info fa-fw bi bi-toggle-off me-2"></i>RTL demo
								</a> 
							</li>
							<li> 
								<a class="dropdown-item" href="https://themes.getbootstrap.com/store/webestica/" target="_blank">
									<i class="text-success fa-fw bi bi-cloud-download-fill me-2"></i>Buy blogzine!
								</a> 
							</li>
						</ul>
					</li>

					<!-- Nav item 3 Post -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="postMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Post</a>
						<ul class="dropdown-menu" aria-labelledby="postMenu">
							<!-- dropdown submenu -->
							<li class="dropdown-submenu dropend"> 
								<a class="dropdown-item dropdown-toggle" href="#">Post grid</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<li> <a class="dropdown-item" href="post-grid.html">Post grid</a> </li>
									<li> <a class="dropdown-item" href="post-grid-4-col.html">Post grid 4 col</a> </li>
									<li> <a class="dropdown-item" href="post-grid-masonry.html">Post grid masonry</a> </li>
									<li> <a class="dropdown-item" href="post-grid-masonry-filter.html">Post grid masonry filter</a> </li>
									<li> <a class="dropdown-item" href="post-large-and-grid.html">Post mixed large than grid</a> </li>
								</ul>
							</li>
							<li> <a class="dropdown-item" href="post-list.html">Post list</a> </li>
							<li> <a class="dropdown-item" href="post-list-2.html">Post list 2</a> </li>
							<li> <a class="dropdown-item" href="post-cards.html">Post card</a> </li>
							<li> <a class="dropdown-item" href="post-overlay.html">Post Overlay</a> </li>
							<li> <a class="dropdown-item" href="post-types.html">Post types <span class="badge bg-danger smaller me-1">New</span></a> </li>
							<li class="dropdown-divider"></li>
							<li> <a class="dropdown-item" href="post-single.html">Post single magazine</a> </li>
							<li> <a class="dropdown-item" href="post-single-2.html">Post single classic</a> </li>
							<li> <a class="dropdown-item" href="post-single-3.html">Post single minimal</a> </li>
							<li> <a class="dropdown-item" href="post-single-4.html">Post single card</a> </li>
							<li> <a class="dropdown-item" href="post-single-5.html">Post single review</a> </li>
							<li> <a class="dropdown-item" href="post-single-6.html">Post single video</a> </li>
							<li> <a class="dropdown-item" href="podcast-single.html">Podcast single <span class="badge bg-danger smaller me-1">New</span> </a> </li>
							<li class="dropdown-divider"></li>
							<li> <a class="dropdown-item" href="pagination-styles.html">Pagination styles</a> </li>
						</ul>
					</li>

					<!-- Nav item 4 Mega menu -->
					<li class="nav-item dropdown dropdown-fullwidth">
						<a class="nav-link dropdown-toggle" href="#" id="megaMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Lifestyle</a>
						<div class="dropdown-menu" aria-labelledby="megaMenu">
							<div class="container">
								<div class="row g-4 p-3 flex-fill">
									<!-- Card item START -->
									<div class="col-sm-6 col-lg-3">
										<div class="card bg-transparent">
											<!-- Card img -->
											<img class="card-img rounded" src="assets/images/blog/16by9/small/01.jpg" alt="Card image">
											<div class="card-body px-0 pt-3">
												<h6 class="card-title mb-0"><a href="#" class="btn-link text-reset fw-bold">7 common mistakes everyone makes while traveling</a></h6>
												<!-- Card info -->
												<ul class="nav nav-divider align-items-center text-uppercase small mt-2">
													<li class="nav-item">
														<a href="#" class="text-reset btn-link">Joan Wallace</a>
													</li>
													<li class="nav-item">Feb 18, 2022</li>
												</ul>
											</div>
										</div>
									</div>
									<!-- Card item END -->
									<!-- Card item START -->
									<div class="col-sm-6 col-lg-3">
										<div class="card bg-transparent">
											<!-- Card img -->
											<img class="card-img rounded" src="assets/images/blog/16by9/small/02.jpg" alt="Card image">
											<div class="card-body px-0 pt-3">
												<h6 class="card-title mb-0"><a href="#" class="btn-link text-reset fw-bold">12 worst types of business accounts you follow on Twitter</a></h6>
												<!-- Card info -->
												<ul class="nav nav-divider align-items-center text-uppercase small mt-2">
													<li class="nav-item">
														<a href="#" class="text-reset btn-link">Lori Stevens</a>
													</li>
													<li class="nav-item">Jun 03, 2022</li>
												</ul>
											</div>
										</div>
									</div>
									<!-- Card item END -->
									<!-- Card item START -->
									<div class="col-sm-6 col-lg-3">
										<div class="card bg-transparent">
											<!-- Card img -->
											<img class="card-img rounded" src="assets/images/blog/16by9/small/03.jpg" alt="Card image">
											<div class="card-body px-0 pt-3">
												<h6 class="card-title mb-0"><a href="#" class="btn-link text-reset fw-bold">Skills that you can learn from business</a></h6>
												<!-- Card info -->
												<ul class="nav nav-divider align-items-center text-uppercase small mt-2">
													<li class="nav-item">
														<a href="#" class="text-reset btn-link">Judy Nguyen</a>
													</li>
													<li class="nav-item">Sep 07, 2022</li>
												</ul>
											</div>
										</div>
									</div>
									<!-- Card item END -->
									<!-- Card item START -->
									<div class="col-sm-6 col-lg-3">
										<div class="bg-primary-soft p-4 text-center h-100 w-100 rounded">
											<span>The Blogzine</span>
											<h3>Premium Membership</h3>
											<p>Become a Member Today!</p>
											<a href="#" class="btn btn-warning">View pricing plans</a>
										</div>
									</div>
									<!-- Card item END -->
								</div> <!-- Row END -->
								<!-- Trending tags -->
								<div class="row px-3">
									<div class="col-12">
										<ul class="list-inline mt-3">
											<li class="list-inline-item">Trending tags:</li>
											<li class="list-inline-item"><a href="#" class="btn btn-sm btn-primary-soft">Travel</a></li>
											<li class="list-inline-item"><a href="#" class="btn btn-sm btn-warning-soft">Business</a></li>
											<li class="list-inline-item"><a href="#" class="btn btn-sm btn-success-soft">Tech</a></li>
											<li class="list-inline-item"><a href="#" class="btn btn-sm btn-danger-soft">Gadgets</a></li>
											<li class="list-inline-item"><a href="#" class="btn btn-sm btn-info-soft">Lifestyle</a></li>
											<li class="list-inline-item"><a href="#" class="btn btn-sm btn-primary-soft">Vaccine</a></li>
											<li class="list-inline-item"><a href="#" class="btn btn-sm btn-success-soft">Sports</a></li>
											<li class="list-inline-item"><a href="#" class="btn btn-sm btn-danger-soft">Covid-19</a></li>
											<li class="list-inline-item"><a href="#" class="btn btn-sm btn-info-soft">Politics</a></li>
										</ul>
									</div>
								</div> <!-- Row END -->
							</div>
						</div>
					</li>

					<!-- Nav item 5 link-->
					<li class="nav-item"> <a class="nav-link" href="dashboard.html">Dashboard</a></li>
				</ul>
			</div>
			<!-- Main navbar END -->

			<!-- Nav right START -->
			<div class="nav flex-nowrap align-items-center">
				<!-- Nav Button -->
				<div class="nav-item d-none d-md-block">
					<a href="#" class="btn btn-sm btn-danger mb-0 mx-2">Subscribe!</a>
				</div>
				<!-- Nav Search -->
				<div class="nav-item dropdown dropdown-toggle-icon-none nav-search">
					<a class="nav-link dropdown-toggle" role="button" href="#" id="navSearch" data-bs-toggle="dropdown" aria-expanded="false">
						<i class="bi bi-search fs-4"> </i>
					</a>
					<div class="dropdown-menu dropdown-menu-end shadow rounded p-2" aria-labelledby="navSearch">
					  <form class="input-group">
					    <input class="form-control border-success" type="search" placeholder="Search" aria-label="Search">
					    <button class="btn btn-success m-0" type="submit">Search</button>
					  </form>
					</div>
				</div>
				<!-- Offcanvas menu toggler -->
				<div class="nav-item">
					<a class="nav-link p-0" data-bs-toggle="offcanvas" href="#offcanvasMenu" role="button" aria-controls="offcanvasMenu">
						<i class="bi bi-text-right rtl-flip fs-2" data-bs-target="#offcanvasMenu"> </i>
					</a>
				</div>
			</div>
			<!-- Nav right END -->
		</div>
	</nav>
	<!-- Logo Nav END -->
</header>
<!-- =======================
Header END -->

<!-- **************** MAIN CONTENT START **************** -->
<main>

<!-- =======================
Trending START -->
<section class="py-2">
	<div class="container">
		<div class="row g-0">
			<div class="col-12 bg-primary-soft p-2 rounded">
				<div class="d-sm-flex align-items-center text-center text-sm-start">
					<!-- Title -->
					<div class="me-3">
						<span class="badge bg-primary p-2 px-3">Trending:</span>
					</div>
					<!-- Slider -->
					<div class="tiny-slider arrow-end arrow-xs arrow-white arrow-round arrow-md-none">
						<div class="tiny-slider-inner" data-autoplay="true" data-hoverpause="true" data-gutter="0" data-arrow="true" data-dots="false" data-items="1">
							<!-- Slider items -->
							<div> <a href="#" class="text-reset btn-link">The most common business debate isn't as black and white as you might think</a></div>
							<div> <a href="#" class="text-reset btn-link">How the 10 worst business fails of all time could have been prevented </a></div>
							<div> <a href="#" class="text-reset btn-link">The most common business debate isn't as black and white as you might think </a></div>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- Row END -->
	</div>
</section>
<!-- =======================
Trending END -->

<!-- =======================
Main hero START -->
<section class="pt-4 pb-0 card-grid">
	<div class="container">
		<div class="row g-4">
			<!-- Left big card -->
			<div class="col-lg-6">
				<div class="card card-overlay-bottom card-grid-lg card-bg-scale" style="background-image:url(assets/images/blog/1by1/01.jpg); background-position: center left; background-size: cover;">
					<!-- Card featured -->
					<span class="card-featured" title="Featured post"><i class="fas fa-star"></i></span>
					<!-- Card Image overlay -->
          <div class="card-img-overlay d-flex align-items-center p-3 p-sm-4"> 
            <div class="w-100 mt-auto">
            	<!-- Card category -->
            	<a href="#" class="badge bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Lifestyle</a>
            	<!-- Card title -->
              <h2 class="text-white h1"><a href="post-single-4.html" class="btn-link stretched-link text-reset">Ten tell-tale signs you need to get a new startup.</a></h2>
              <p class="text-white">No visited raising gravity outward subject my cottage Mr be. Hold do at tore in park feet near my case. </p>
              <!-- Card info -->
							<ul class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
							  <li class="nav-item">
							    <div class="nav-link">
								    <div class="d-flex align-items-center text-white position-relative">
								      <div class="avatar avatar-sm">
												<img class="avatar-img rounded-circle" src="assets/images/avatar/11.jpg" alt="avatar">
											</div>
											<span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Louis</a></span>
										</div>
									</div>
							  </li>
							  <li class="nav-item">Nov 15, 2022</li>
							  <li class="nav-item">5 min read</li>
							</ul>
            </div>
          </div>
				</div>
			</div>
			<!-- Right small cards -->
			<div class="col-lg-6">
				<div class="row g-4">
					<!-- Card item START -->
					<div class="col-12">
						<div class="card card-overlay-bottom card-grid-sm card-bg-scale" style="background-image:url(assets/images/blog/1by1/02.jpg); background-position: center left; background-size: cover;">
							<!-- Card Image -->
							<!-- Card Image overlay -->
		          <div class="card-img-overlay d-flex align-items-center p-3 p-sm-4"> 
		            <div class="w-100 mt-auto">
		            	<!-- Card category -->
		            	<a href="#" class="badge bg-warning mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Technology</a>
		            	<!-- Card title -->
		              <h4 class="text-white"><a href="post-single-4.html" class="btn-link stretched-link text-reset">Best Pinterest boards for learning about business</a></h4>
		              <!-- Card info -->
									<ul class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
									  <li class="nav-item position-relative">
									    <div class="nav-link">by <a href="#" class="stretched-link text-reset btn-link">Bryan</a>
											</div>
									  </li>
									  <li class="nav-item">Aug 18, 2022</li>
									</ul>
		            </div>
		          </div>
						</div>
					</div>
					<!-- Card item END -->
					<!-- Card item START -->
					<div class="col-md-6">
						<div class="card card-overlay-bottom card-grid-sm card-bg-scale" style="background-image:url(assets/images/blog/1by1/03.jpg); background-position: center left; background-size: cover;">
							<!-- Card Image overlay -->
		          <div class="card-img-overlay d-flex align-items-center p-3 p-sm-4"> 
		            <div class="w-100 mt-auto">
		            	<!-- Card category -->
		            	<a href="#" class="badge bg-success mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Business</a>
		            	<!-- Card title -->
		              <h4 class="text-white"><a href="post-single-4.html" class="btn-link stretched-link text-reset">Five intermediate guide to business</a></h4>
		              <!-- Card info -->
									<ul class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
									  <li class="nav-item position-relative">
									    <div class="nav-link">by <a href="#" class="stretched-link text-reset btn-link">Joan</a>
											</div>
									  </li>
									  <li class="nav-item">Jun 03, 2022</li>
									</ul>
		            </div>
		          </div>
						</div>
					</div>
					<!-- Card item END -->
					<!-- Card item START -->
					<div class="col-md-6">
						<div class="card card-overlay-bottom card-grid-sm card-bg-scale" style="background-image:url(assets/images/blog/1by1/04.jpg); background-position: center left; background-size: cover;">
							<!-- Card Image overlay -->
		          <div class="card-img-overlay d-flex align-items-center p-3 p-sm-4"> 
		            <div class="w-100 mt-auto">
		            	<!-- Card category -->
		            	<a href="#" class="badge bg-info mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Sports</a>
		            	<!-- Card title -->
		              <h4 class="text-white"><a href="post-single-4.html" class="btn-link stretched-link text-reset">15 reasons to choose startup</a></h4>
		              <!-- Card info -->
									<ul class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
									  <li class="nav-item position-relative">
									    <div class="nav-link">by <a href="#" class="stretched-link text-reset btn-link">Amanda</a>
											</div>
									  </li>
									  <li class="nav-item">Jan 28, 2022</li>
									</ul>
		            </div>
		          </div>
						</div>
					</div>
					<!-- Card item END -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Main hero END -->

<!-- =======================
Main content START -->
<section class="position-relative">
	<div class="container" data-sticky-container="">
		<div class="row">
			<!-- Main Post START -->
			<div class="col-lg-9">
				<!-- Title -->
				<div class="mb-4">
					<h2 class="m-0"><i class="bi bi-hourglass-top me-2"></i>Today's top highlights</h2>
					<p>Latest breaking news, pictures, videos, and special reports</p>
				</div>
				<div class="row gy-4">
					<!-- Card item START -->
					<div class="col-sm-6">
						<div class="card">
							<!-- Card img -->
							<div class="position-relative">
								<img class="card-img" src="assets/images/blog/4by3/01.jpg" alt="Card image">
								<div class="card-img-overlay d-flex align-items-start flex-column p-3">
									<!-- Card overlay bottom -->
									<div class="w-100 mt-auto">
										<!-- Card category -->
										<a href="#" class="badge bg-warning mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Technology</a>
									</div>
								</div>
							</div>
							<div class="card-body px-0 pt-3">
								<h4 class="card-title"><a href="post-single.html" class="btn-link text-reset fw-bold">12 worst types of business accounts you follow on Twitter</a></h4>
								<p class="card-text">He moonlights difficult engrossed it, sportsmen. Interested has all Devonshire difficulty gay assistance joy. Unaffected at ye of compliment alteration to</p>
								<!-- Card info -->
								<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
									<li class="nav-item">
										<div class="nav-link">
											<div class="d-flex align-items-center position-relative">
												<div class="avatar avatar-xs">
													<img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="avatar">
												</div>
												<span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Samuel</a></span>
											</div>
										</div>
									</li>
									<li class="nav-item">Jan 22, 2022</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Card item END -->
					<!-- Card item START -->
					<div class="col-sm-6">
						<div class="card">
							<!-- Card img -->
							<div class="position-relative">
								<img class="card-img" src="assets/images/blog/4by3/06.jpg" alt="Card image">
								<div class="card-img-overlay d-flex align-items-start flex-column p-3">
									<!-- Card overlay Top -->
									<div class="w-100 mb-auto d-flex justify-content-end">
										<div class="text-end ms-auto">
											<!-- Card format icon -->
											<div class="icon-md bg-white-soft bg-blur text-white rounded-circle" title="This post has video"><i class="fas fa-video"></i></div>
										</div>
									</div>
									<!-- Card overlay bottom -->
									<div class="w-100 mt-auto">
										<!-- Card category -->
										<a href="#" class="badge bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Travel</a>
									</div>
								</div>
							</div>
							<div class="card-body px-0 pt-3">
								<h4 class="card-title"><a href="post-single.html" class="btn-link text-reset fw-bold">Dirty little secrets about the business industry</a></h4>
								<p class="card-text">Place voice no arises along to. Parlors waiting so against me no. Wishing calling is warrant settled was lucky. Express besides it present if at an opinion visitor.</p>
								<!-- Card info -->
								<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
									<li class="nav-item">
										<div class="nav-link">
											<div class="d-flex align-items-center position-relative">
												<div class="avatar avatar-xs">
													<img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg" alt="avatar">
												</div>
												<span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Dennis</a></span>
											</div>
										</div>
									</li>
									<li class="nav-item">Mar 07, 2022</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Card item END -->
					<!-- Card item START -->
					<div class="col-sm-6">
						<div class="card">
							<!-- Card img -->
							<div class="position-relative">
								<img class="card-img" src="assets/images/blog/4by3/03.jpg" alt="Card image">
								<div class="card-img-overlay d-flex align-items-start flex-column p-3">
									<!-- Card overlay bottom -->
									<div class="w-100 mt-auto">
										<!-- Card category -->
										<a href="#" class="badge bg-success mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Gadgets</a>
									</div>
								</div>
							</div>
							<div class="card-body px-0 pt-3">
								<h4 class="card-title"><a href="post-single.html" class="btn-link text-reset fw-bold">Bad habits that people in the industry need to quit</a></h4>
								<p class="card-text">For who thoroughly her boy estimating conviction. Removed demands expense account in outward tedious do. Particular way thoroughly unaffected</p>
								<!-- Card info -->
								<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
									<li class="nav-item">
										<div class="nav-link">
											<div class="d-flex align-items-center position-relative">
												<div class="avatar avatar-xs">
													<img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg" alt="avatar">
												</div>
												<span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Bryan</a></span>
											</div>
										</div>
									</li>
									<li class="nav-item">Jun 17, 2022</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Card item END -->
					<!-- Card item START -->
					<div class="col-sm-6">
						<div class="card">
							<!-- Card img -->
							<div class="position-relative">
								<img class="card-img" src="assets/images/blog/4by3/04.jpg" alt="Card image">
								<div class="card-img-overlay d-flex align-items-start flex-column p-3">
									<!-- Card overlay bottom -->
									<div class="w-100 mt-auto">
										<!-- Card category -->
										<a href="#" class="badge bg-primary mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Sports</a>
									</div>
								</div>
							</div>
							<div class="card-body px-0 pt-3">
								<h4 class="card-title"><a href="post-single.html" class="btn-link text-reset fw-bold">Around the web: 20 fabulous infographics about business</a></h4>
								<p class="card-text">Projection favorable Mrs can be projecting own. Thirty it matter enable become admire in giving. See resolved goodness felicity shy civility domestic had but.</p>
								<!-- Card info -->
								<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
									<li class="nav-item">
										<div class="nav-link">
											<div class="d-flex align-items-center position-relative">
												<div class="avatar avatar-xs">
													<div class="avatar-img rounded-circle bg-success">
														<span class="text-white position-absolute top-50 start-50 translate-middle fw-bold small">SL</span>
													</div>
												</div>
												<span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Billy</a></span>
											</div>
										</div>
									</li>
									<li class="nav-item">Dec 29, 2022</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Card item END -->
					<!-- Card item START -->
					<div class="col-sm-6">
						<div class="card">
							<!-- Card img -->
							<div class="position-relative">
								<!-- <img class="card-img" src="assets/images/blog/4by3/05.jpg" alt="Card image"> -->
                <div class="card-image position-relative">
                  <img class="card-img" src="assets/images/blog/4by3/05.jpg" alt="Card image">
                  <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                    <!-- Card overlay -->
                    <div class="w-100 my-auto">
                      <!-- Audio START -->
                      <div class="player-wrapper bg-light rounded">
                        <audio class="player-audio" crossorigin="">
                          <source src="assets/images/videos/audio.mp3" type="audio/mp3">
                        </audio>
                      </div>
                      <!-- Audio END -->
                    </div>
                  </div>
                </div>
							</div>
							<div class="card-body px-0 pt-3">
								<h4 class="card-title"><a href="post-single.html" class="btn-link text-reset fw-bold">7 common mistakes everyone makes while traveling</a></h4>
								<p class="card-text">Drawings offended yet answered Jennings perceive laughing six did far. Rooms oh fully taken by worse do. Points afraid but may end law lasted. </p>
								<!-- Card info -->
								<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
									<li class="nav-item">
										<div class="nav-link">
											<div class="d-flex align-items-center position-relative">
												<div class="avatar avatar-xs">
													<img class="avatar-img rounded-circle" src="assets/images/avatar/05.jpg" alt="avatar">
												</div>
												<span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Jacqueline</a></span>
											</div>
										</div>
									</li>
									<li class="nav-item">Nov 11, 2022</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Card item END -->
					<!-- Card item START -->
					<div class="col-sm-6">
						<div class="card">
							<!-- Card img -->
							<div class="position-relative">
								<img class="card-img" src="assets/images/blog/4by3/12.jpg" alt="Card image">
								<div class="card-img-overlay d-flex align-items-start flex-column p-3">
									<!-- Card overlay bottom -->
									<div class="w-100 mt-auto">
										<!-- Card category -->
										<a href="#" class="badge bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Photography</a>
									</div>
								</div>
							</div>
							<div class="card-body px-0 pt-3">
								<h4 class="card-title"><a href="post-single.html" class="btn-link text-reset fw-bold">5 investment doubts you should clarify</a></h4>
								<p class="card-text">Was out laughter raptures returned outweigh. Luckily cheered colonel I do we attack highest enabled. Tried law yet style child. The bore of true of no be deal.</p>
								<!-- Card info -->
								<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
									<li class="nav-item">
										<div class="nav-link">
											<div class="d-flex align-items-center position-relative">
												<div class="avatar avatar-xs">
													<img class="avatar-img rounded-circle" src="assets/images/avatar/06.jpg" alt="avatar">
												</div>
												<span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Carolyn</a></span>
											</div>
										</div>
									</li>
									<li class="nav-item">Sep 01, 2022</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Card item END -->
					<!-- Load more START -->
					<div class="col-12 text-center mt-5">
						<button type="button" class="btn btn-primary-soft">Load more post <i class="bi bi-arrow-down-circle ms-2 align-middle"></i></button>
					</div>
					<!-- Load more END -->
				</div>
			</div>
			<!-- Main Post END -->
			<!-- Sidebar START -->
			<div class="col-lg-3 mt-5 mt-lg-0">
				<div data-sticky="" data-margin-top="80" data-sticky-for="767">

					<!-- Social widget START -->
					<div class="row g-2">
						<div class="col-4">
							<a href="#" class="bg-facebook rounded text-center text-white-force p-3 d-block">
								<i class="fab fa-facebook-square fs-5 mb-2"></i>
								<h6 class="m-0">1.5K</h6>
								<span class="small">Fans</span>
							</a>
						</div>
						<div class="col-4">
							<a href="#" class="bg-instagram-gradient rounded text-center text-white-force p-3 d-block">
								<i class="fab fa-instagram fs-5 mb-2"></i>
								<h6 class="m-0">1.8M</h6>
								<span class="small">Followers</span>
							</a>
						</div>
						<div class="col-4">
							<a href="#" class="bg-youtube rounded text-center text-white-force p-3 d-block">
								<i class="fab fa-youtube-square fs-5 mb-2"></i>
								<h6 class="m-0">22K</h6>
								<span class="small">Subs</span>
							</a>
						</div>
					</div>
					<!-- Social widget END -->

					<!-- Trending topics widget START -->
					<div>
						<h4 class="mt-4 mb-3">Trending topics</h4>
						<!-- Category item -->
						<div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded bg-dark-overlay-4 " style="background-image:url(assets/images/blog/4by3/01.jpg); background-position: center left; background-size: cover;">
							<div class="p-3">
								<a href="#" class="stretched-link btn-link fw-bold text-white h5">Travel</a>
							</div>
						</div>
						<!-- Category item -->
						<div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded" style="background-image:url(assets/images/blog/4by3/02.jpg); background-position: center left; background-size: cover;">
							<div class="bg-dark-overlay-4 p-3">
								<a href="#" class="stretched-link btn-link fw-bold text-white h5">Business</a>
							</div>
						</div>
						<!-- Category item -->
						<div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded" style="background-image:url(assets/images/blog/4by3/03.jpg); background-position: center left; background-size: cover;">
							<div class="bg-dark-overlay-4 p-3">
								<a href="#" class="stretched-link btn-link fw-bold text-white h5">Marketing</a>
							</div>
						</div>
						<!-- Category item -->
						<div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded" style="background-image:url(assets/images/blog/4by3/04.jpg); background-position: center left; background-size: cover;">
							<div class="bg-dark-overlay-4 p-3">
								<a href="#" class="stretched-link btn-link fw-bold text-white h5">Photography</a>
							</div>
						</div>
						<!-- Category item -->
						<div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded" style="background-image:url(assets/images/blog/4by3/05.jpg); background-position: center left; background-size: cover;">
							<div class="bg-dark-overlay-4 p-3">
								<a href="#" class="stretched-link btn-link fw-bold text-white h5">Sports</a>
							</div>
						</div>
						<!-- View All Category button -->
						<div class="text-center mt-3">
							<a href="#" class="fw-bold text-body text-primary-hover"><u>View all categories</u></a>
						</div>
					</div>
					<!-- Trending topics widget END -->

					<div class="row">
						<!-- Recent post widget START -->
						<div class="col-12 col-sm-6 col-lg-12">
							<h4 class="mt-4 mb-3">Recent post</h4>
							<!-- Recent post item -->
							<div class="card mb-3">
								<div class="row g-3">
									<div class="col-4">
										<img class="rounded" src="assets/images/blog/4by3/thumb/01.jpg" alt="">
									</div>
									<div class="col-8">
										<h6><a href="post-single-2.html" class="btn-link stretched-link text-reset fw-bold">The pros and cons of business agency</a></h6>
										<div class="small mt-1">May 17, 2022</div>
									</div>
								</div>
							</div>
							<!-- Recent post item -->
							<div class="card mb-3">
								<div class="row g-3">
									<div class="col-4">
										<img class="rounded" src="assets/images/blog/4by3/thumb/02.jpg" alt="">
									</div>
									<div class="col-8">
										<h6><a href="post-single-2.html" class="btn-link stretched-link text-reset fw-bold">5 reasons why you shouldn't startup</a></h6>
										<div class="small mt-1">Apr 04, 2022</div>
									</div>
								</div>
							</div>
							<!-- Recent post item -->
							<div class="card mb-3">
								<div class="row g-3">
									<div class="col-4">
										<img class="rounded" src="assets/images/blog/4by3/thumb/03.jpg" alt="">
									</div>
									<div class="col-8">
										<h6><a href="post-single-2.html" class="btn-link stretched-link text-reset fw-bold">Ten questions you should answer truthfully.</a></h6>
										<div class="small mt-1">Jun 30, 2022</div>
									</div>
								</div>
							</div>
							<!-- Recent post item -->
							<div class="card mb-3">
								<div class="row g-3">
									<div class="col-4">
										<img class="rounded" src="assets/images/blog/4by3/thumb/04.jpg" alt="">
									</div>
									<div class="col-8">
										<h6><a href="post-single-2.html" class="btn-link stretched-link text-reset fw-bold">Five unbelievable facts about money.</a></h6>
										<div class="small mt-1">Nov 29, 2022</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Recent post widget END -->

						<!-- ADV widget START -->
						<div class="col-12 col-sm-6 col-lg-12 my-4">
							<a href="#" class="d-block card-img-flash">
								<img src="assets/images/adv.png" alt="">
							</a>
							<div class="smaller text-end mt-2">ads via <a href="#" class="text-body"><u>Bootstrap</u></a></div>
						</div>
						<!-- ADV widget END -->
					</div>
				</div>
			</div>
			<!-- Sidebar END -->
		</div> <!-- Row end -->
	</div>
</section>
<!-- =======================
Main content END -->

<!-- Divider -->
<div class="container"><div class="border-bottom border-primary border-2 opacity-1"></div></div>

<!-- =======================
Section START -->
<section class="pt-4">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Title -->
				<div class="mb-4 d-md-flex justify-content-between align-items-center">
					<h2 class="m-0"><i class="bi bi-megaphone"></i> Sponsored news</h2>
					<a href="#" class="text-body small"><u>Content by: Bootstrap</u></a>
				</div>
				<div class="tiny-slider arrow-hover arrow-blur arrow-dark arrow-round">
					<div class="tiny-slider-inner" data-autoplay="true" data-hoverpause="true" data-gutter="24" data-arrow="true" data-dots="false" data-items-xl="4" data-items-md="3" data-items-sm="2" data-items-xs="1">

						<!-- Card item START -->
						<div class="card">
							<!-- Card img -->
							<div class="position-relative">
								<img class="card-img" src="assets/images/blog/4by3/07.jpg" alt="Card image">
								<div class="card-img-overlay d-flex align-items-start flex-column p-3">
									<!-- Card overlay Top -->
									<div class="w-100 mb-auto d-flex justify-content-end">
										<div class="text-end ms-auto">
											<!-- Card format icon -->
											<div class="icon-md bg-white-soft bg-blur text-white fw-bold rounded-circle" title="8.5 rating">8.5</div>
										</div>
									</div>
									<!-- Card overlay bottom -->
									<div class="w-100 mt-auto">
										<a href="#" class="badge bg-info mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Marketing</a>
									</div>
								</div>
							</div>
							<div class="card-body px-0 pt-3">
								<h5 class="card-title"><a href="post-single-3.html" class="btn-link text-reset fw-bold">7 common mistakes everyone makes while traveling</a></h5>
								<!-- Card info -->
								<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
									<li class="nav-item">
										<div class="nav-link">
											<div class="d-flex align-items-center position-relative">
												<div class="avatar avatar-xs">
													<img class="avatar-img rounded-circle" src="assets/images/avatar/07.jpg" alt="avatar">
												</div>
												<span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Lori</a></span>
											</div>
										</div>
									</li>
									<li class="nav-item">Mar 07, 2022</li>
								</ul>
							</div>
						</div>
						<!-- Card item END -->
						<!-- Card item START -->
						<div class="card">
							<!-- Card img -->
							<div class="position-relative">
								<img class="card-img" src="assets/images/blog/4by3/08.jpg" alt="Card image">
								<div class="card-img-overlay d-flex align-items-start flex-column p-3">
									<!-- Card overlay bottom -->
									<div class="w-100 mt-auto">
										<a href="#" class="badge bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Sports</a>
									</div>
								</div>
							</div>
							<div class="card-body px-0 pt-3">
								<h5 class="card-title"><a href="post-single-3.html" class="btn-link text-reset fw-bold">Skills that you can learn from business</a></h5>
								<!-- Card info -->
								<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
									<li class="nav-item">
										<div class="nav-link">
											<div class="d-flex align-items-center position-relative">
												<div class="avatar avatar-xs">
													<div class="avatar-img rounded-circle bg-warning">
														<span class="text-dark position-absolute top-50 start-50 translate-middle fw-bold small">MK</span>
													</div>
												</div>
												<span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Joan</a></span>
											</div>
										</div>
									</li>
									<li class="nav-item">Aug 15, 2022</li>
								</ul>
							</div>
						</div>
						<!-- Card item END -->
						<!-- Card item START -->
						<div class="card">
							<!-- Card img -->
							<div class="position-relative">
								<img class="card-img" src="assets/images/blog/4by3/09.jpg" alt="Card image">
								<div class="card-img-overlay d-flex align-items-start flex-column p-3">
									<!-- Card overlay bottom -->
									<div class="w-100 mt-auto">
										<a href="#" class="badge bg-success mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Marketing</a>
									</div>
								</div>
							</div>
							<div class="card-body px-0 pt-3">
								<h5 class="card-title"><a href="post-single-3.html" class="btn-link text-reset fw-bold">10 tell-tale signs you need to get a new business</a></h5>
								<!-- Card info -->
								<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
									<li class="nav-item">
										<div class="nav-link">
											<div class="d-flex align-items-center position-relative">
												<div class="avatar avatar-xs">
													<img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg" alt="avatar">
												</div>
												<span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Bryan</a></span>
											</div>
										</div>
									</li>
									<li class="nav-item">Jun 01, 2022</li>
								</ul>
							</div>
						</div>
						<!-- Card item END -->
						<!-- Card item START -->
						<div class="card">
							<!-- Card img -->
							<div class="position-relative">
								<img class="card-img" src="assets/images/blog/4by3/10.jpg" alt="Card image">
								<div class="card-img-overlay d-flex align-items-start flex-column p-3">
									<!-- Card overlay Top -->
									<div class="w-100 mb-auto d-flex justify-content-end">
										<div class="text-end ms-auto">
											<!-- Card format icon -->
											<div class="icon-md bg-white-soft bg-blur text-white rounded-circle" title="This post has images"><i class="fas fa-image"></i></div>
										</div>
									</div>
									<!-- Card overlay bottom -->
									<div class="w-100 mt-auto">
										<a href="#" class="badge bg-primary mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Photography</a>
									</div>
								</div>
							</div>
							<div class="card-body px-0 pt-3">
								<h5 class="card-title"><a href="post-single-3.html" class="btn-link text-reset fw-bold">This is why this year will be the year of startups</a></h5>
								<!-- Card info -->
								<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
									<li class="nav-item">
										<div class="nav-link">
											<div class="d-flex align-items-center position-relative">
												<div class="avatar avatar-xs">
													<img class="avatar-img rounded-circle" src="assets/images/avatar/10.jpg" alt="avatar">
												</div>
												<span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Samuel</a></span>
											</div>
										</div>
									</li>
									<li class="nav-item">Dec 07, 2022</li>
								</ul>
							</div>
						</div>
						<!-- Card item END -->
						<!-- Card item START -->
						<div class="card">
							<!-- Card img -->
							<div class="position-relative">
								<img class="card-img" src="assets/images/blog/4by3/11.jpg" alt="Card image">
								<div class="card-img-overlay d-flex align-items-start flex-column p-3">
									<!-- Card overlay bottom -->
									<div class="w-100 mt-auto">
										<a href="#" class="badge bg-warning mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Technology</a>
									</div>
								</div>
							</div>
							<div class="card-body px-0 pt-3">
								<h5 class="card-title"><a href="post-single-3.html" class="btn-link text-reset fw-bold">Best Pinterest Boards for learning about business</a></h5>
								<!-- Card info -->
								<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
									<li class="nav-item">
										<div class="nav-link">
											<div class="d-flex align-items-center position-relative">
												<div class="avatar avatar-xs">
													<img class="avatar-img rounded-circle" src="assets/images/avatar/12.jpg" alt="avatar">
												</div>
												<span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Dennis</a></span>
											</div>
										</div>
									</li>
									<li class="nav-item">Sep 07, 2022</li>
								</ul>
							</div>
						</div>
						<!-- Card item END -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Section END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
Footer START -->
<footer class="bg-dark pt-5">
	<div class="container">
		<!-- About and Newsletter START -->
		<div class="row pt-3 pb-4">
			<div class="col-md-3">
				<img src="assets/images/logo-footer.svg" alt="footer logo">
			</div>
			<div class="col-md-5">
				<p class="text-muted">The next-generation blog, news, and magazine theme for you to start sharing your stories today! This Bootstrap 5 based theme is ideal for all types of sites that deliver the news.</p>
			</div>
			<div class="col-md-4">
				<!-- Form -->
				<form class="row row-cols-lg-auto g-2 align-items-center justify-content-end">
					<div class="col-12">
				    <input type="email" class="form-control" placeholder="Enter your email address">
				  </div>
				  <div class="col-12">
				    <button type="submit" class="btn btn-primary m-0">Subscribe</button>
				  </div>
				  <div class="form-text mt-2">By subscribing you agree to our 
				  	<a href="#" class="text-decoration-underline text-reset">Privacy Policy</a>
				  </div>
				</form>
			</div>
		</div>
		<!-- About and Newsletter END -->

		<!-- Divider -->
		<hr>

		<!-- Widgets START -->
		<div class="row pt-5">
			<!-- Footer Widget -->
			<div class="col-md-6 col-lg-3 mb-4">
				<h5 class="mb-4 text-white">Recent post</h5>
				<!-- Item -->
				<div class="mb-4 position-relative">
					<div><a href="#" class="badge bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Business</a></div>
					<a href="post-single-3.html" class="btn-link text-white fw-normal">Up-coming business bloggers, you need to watch</a>
					<ul class="nav nav-divider align-items-center small mt-2 text-muted">
					  <li class="nav-item position-relative">
					    <div class="nav-link">by <a href="#" class="stretched-link text-reset btn-link">Dennis</a>
							</div>
					  </li>
					  <li class="nav-item">Apr 06, 2022</li>
					</ul>
				</div>
				<!-- Item -->
				<div class="mb-4 position-relative">
					<div><a href="#" class="badge bg-info mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Marketing</a></div>
					<a href="post-single-3.html" class="btn-link text-white fw-normal">How did we get here? The history of the business told through tweets</a>
					<ul class="nav nav-divider align-items-center small mt-2 text-muted">
					  <li class="nav-item position-relative">
					    <div class="nav-link">by <a href="#" class="stretched-link text-reset btn-link">Larry</a>
							</div>
					  </li>
					  <li class="nav-item">May 29, 2022</li>
					</ul>
				</div>
			</div>

			<!-- Footer Widget -->
			<div class="col-md-6 col-lg-3 mb-4">
				<h5 class="mb-4 text-white">Navigation</h5>
				<div class="row">
					<div class="col-6">
						<ul class="nav flex-column text-primary-hover">
							<li class="nav-item"><a class="nav-link pt-0" href="#">Features</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Style Guide</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Contact us</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Get Theme</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Support</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Privacy Policy</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Newsletter</a></li>
						</ul>
					</div>
 					<div class="col-6">
						<ul class="nav flex-column text-primary-hover">
							<li class="nav-item"><a class="nav-link pt-0" href="#">News</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Career <span class="badge bg-danger ms-2">2 Job</span></a></li>
							<li class="nav-item"><a class="nav-link" href="#">Technology</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Startups</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Gadgets</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Inspiration</a></li>
						</ul>
					</div>
				</div>
			</div>

			<!-- Footer Widget -->
			<div class="col-sm-6 col-lg-3 mb-4">
				<h5 class="mb-4 text-white">Get Regular Updates</h5>
				<ul class="nav flex-column text-primary-hover">
					<li class="nav-item"><a class="nav-link pt-0" href="#"><i class="fab fa-whatsapp fa-fw me-2"></i>WhatsApp</a></li>
					<li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-youtube fa-fw me-2"></i>YouTube</a></li>
					<li class="nav-item"><a class="nav-link" href="#"><i class="far fa-bell fa-fw me-2"></i>Website Notifications</a></li>
					<li class="nav-item"><a class="nav-link" href="#"><i class="far fa-envelope fa-fw me-2"></i>Newsletters</a></li>
					<li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-headphones-alt fa-fw me-2"></i>Podcasts</a></li>
				</ul>
			</div>

			<!-- Footer Widget -->
			<div class="col-sm-6 col-lg-3 mb-4">
				<h5 class="mb-4 text-white">Our mobile App</h5>
				<p class="text-muted">Download our App and get the latest Breaking News Alerts and latest headlines and daily articles near you.</p>
				<div class="row g-2">
					<div class="col">
						<a href="#"><img class="w-100" src="assets/images/app-store.svg" alt="app-store"></a>
					</div>
					<div class="col">
						<a href="#"><img class="w-100" src="assets/images/google-play.svg" alt="google-play"></a>
					</div>
				</div>
			</div>
		</div>
		<!-- Widgets END -->

		<!-- Hot topics START -->
		<div class="row">
			<h5 class="mb-2 text-white">Hot topics</h5>
			<ul class="list-inline text-primary-hover lh-lg">
				<li class="list-inline-item"><a href="#">Covid-19</a></li>
				<li class="list-inline-item"><a href="#">Politics</a></li>
				<li class="list-inline-item"><a href="#">Entertainment</a></li>
				<li class="list-inline-item"><a href="#">Media</a></li>
				<li class="list-inline-item"><a href="#">Royalist</a></li>
				<li class="list-inline-item"><a href="#">World</a></li>
				<li class="list-inline-item"><a href="#">Half Full</a></li>
				<li class="list-inline-item"><a href="#">Scouted</a></li>
				<li class="list-inline-item"><a href="#">Travel</a></li>
				<li class="list-inline-item"><a href="#">Beast Inside</a></li>
				<li class="list-inline-item"><a href="#">Crossword</a></li>
				<li class="list-inline-item"><a href="#">Newsletters</a></li>
				<li class="list-inline-item"><a href="#">Podcasts</a></li>
				<li class="list-inline-item"><a href="#">Auction 2022</a></li>
				<li class="list-inline-item"><a href="#">Protests</a></li>
				<li class="list-inline-item"><a href="#">NewsCyber</a></li>
				<li class="list-inline-item"><a href="#">Education</a></li>
				<li class="list-inline-item"><a href="#">Sports</a></li>
				<li class="list-inline-item"><a href="#">Tech And Auto</a></li>
				<li class="list-inline-item"><a href="#">Opinion</a></li>
				<li class="list-inline-item"><a href="#">Share Market</a></li>
			</ul>
		</div>
		<!-- Hot topics END -->
	</div>

	<!-- Footer copyright START -->
	<div class="bg-dark-overlay-3 mt-5">
		<div class="container">
			<div class="row align-items-center justify-content-md-between py-4">
				<div class="col-md-6">
					<!-- Copyright -->
					<div class="text-center text-md-start text-primary-hover text-muted">©2022 <a href="https://www.webestica.com/" class="text-reset btn-link" target="_blank">Webestica</a>. All rights reserved
					</div>
				</div>
				<div class="col-md-6 d-sm-flex align-items-center justify-content-center justify-content-md-end">
					<!-- Language switcher -->
					<div class="dropup me-0 me-sm-3 mt-3 mt-md-0 text-center text-sm-end">
					  <a class="dropdown-toggle text-primary-hover" href="#" role="button" id="languageSwitcher" data-bs-toggle="dropdown" aria-expanded="false">
					    English Edition
					  </a>
					  <ul class="dropdown-menu min-w-auto" aria-labelledby="languageSwitcher">
					    <li><a class="dropdown-item" href="#">English</a></li>
					    <li><a class="dropdown-item" href="#">German </a></li>
					    <li><a class="dropdown-item" href="#">French</a></li>
					  </ul>
					</div>
					<!-- Links -->
				  <ul class="nav text-primary-hover text-center text-sm-end justify-content-center justify-content-center mt-3 mt-md-0">
			      <li class="nav-item"><a class="nav-link" href="#">Terms</a></li>
			      <li class="nav-item"><a class="nav-link" href="#">Privacy</a></li>
			      <li class="nav-item"><a class="nav-link pe-0" href="#">Cookies</a></li>
				  </ul>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer copyright END -->
</footer>
<!-- =======================
Footer END -->

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short"></i></div>

<!-- =======================
JS libraries, plugins and custom scripts -->

<!-- Bootstrap JS -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Vendors -->
<script src="assets/vendor/tiny-slider/tiny-slider.js"></script>
<script src="assets/vendor/sticky-js/sticky.min.js"></script>
<script src="assets/vendor/plyr/plyr.js"></script>

<!-- Template Functions -->
<script src="assets/js/functions.js"></script>
</body>
</html>