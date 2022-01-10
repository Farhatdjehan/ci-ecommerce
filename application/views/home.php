<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css" crossorigin="anonymous">

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/landing-page.css" crossorigin="anonymous">

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/themify.css" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/slick-theme.css" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/slick.css" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/color1.css" crossorigin="anonymous">
	<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/color2.css" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/color3.css" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/color4.css" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/color5.css" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/color6.css" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/color7.css" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/color8.css" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/color9.css" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/color10.css" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/color11.css" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/color12.css" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/color13.css" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/color14.css" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/color15.css" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/color16.css" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/color17.css" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/color18.css" crossorigin="anonymous"> -->

</head>

<body>
	<div>
		<header id="sticky" class="sticky undefined">
			<div class="mobile-fix-option"></div>
			<div class="top-header">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="header-contact">
								<ul>
									<li>Welcome to Our store Multikart</li>
									<li><i class="fa fa-phone" aria-hidden="true"></i>Call Us: 123 - 456 - 7890</li>
								</ul>
							</div>
						</div>
						<div class="text-right col-lg-6">
							<ul class="header-dropdown">
								<li class="mobile-wishlist"><a href="/page/account/wishlist"><i class="fa fa-heart" aria-hidden="true"></i> wishlist</a></li>
								<li class="onhover-dropdown mobile-account"><i class="fa fa-user" aria-hidden="true"></i> My Account<ul class="onhover-show-div">
										<li><a href="/page/account/login">Login</a></li>
										<li><a href="/page/account/register">Register</a></li>
										<li><a>Logout</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="main-menu">
							<div class="menu-left">
								<div class="navbar"><a>
										<div class="bar-style"> <i class="fa fa-bars sidebar-bar" aria-hidden="true"></i></div>
									</a>
									<div id="mySidenav" class="sidenav"><a class="sidebar-overlay"></a>
										<nav><a>
												<div class="sidebar-back text-left"><i class="fa fa-angle-left pr-2" aria-hidden="true"></i> Back</div>
											</a>
											<ul id="sub-menu" class="sidebar-menu">
												<li><a href="#">clothing<span class="sub-arrow"></span></a>
													<ul class="mega-menu clothing-menu">
														<li>
															<div m="0" class="row">
																<div class="col-xl-4">
																	<div class="link-section">
																		<h5>women's fashion</h5>
																		<ul>
																			<li><a href="#">dresses</a></li>
																			<li><a href="#">skirts</a></li>
																			<li><a href="#">westarn wear</a></li>
																			<li><a href="#">ethic wear</a></li>
																			<li><a href="#">sport wear</a></li>
																		</ul>
																		<h5>men's fashion</h5>
																		<ul>
																			<li><a href="#">sports wear</a></li>
																			<li><a href="#">western wear</a></li>
																			<li><a href="#">ethic wear</a></li>
																		</ul>
																	</div>
																</div>
																<div class="col-xl-4">
																	<div class="link-section">
																		<h5>accessories</h5>
																		<ul>
																			<li><a href="#">fashion jewellery</a></li>
																			<li><a href="#">caps and hats</a></li>
																			<li><a href="#">precious jewellery</a></li>
																			<li><a href="#">necklaces</a></li>
																			<li><a href="#">earrings</a></li>
																			<li><a href="#">wrist wear</a></li>
																			<li><a href="#">ties</a></li>
																			<li><a href="#">cufflinks</a></li>
																			<li><a href="#">pockets squares</a></li>
																		</ul>
																	</div>
																</div>
																<div class="col-xl-4"><a href="#" class="mega-menu-banner"><img src="/_next/static/images/fashion-8fe963c25349f8d9c4e28eb5947dcb20.jpg" alt="" class="img-fluid media"></a></div>
															</div>
														</li>
													</ul>
												</li>
												<li><a href="#">bags<span class="sub-arrow"></span></a>
													<ul>
														<li><a href="#">shopper bags</a></li>
														<li><a href="#">laptop bags</a></li>
														<li><a href="#">clutches</a></li>
														<li><a href="#">purses<span class="sub-arrow"></span></a>
															<ul>
																<li><a href="#">purses</a></li>
																<li><a href="#">wallets</a></li>
																<li><a href="#">leathers</a></li>
																<li><a href="#">satchels</a></li>
															</ul>
														</li>
													</ul>
												</li>
												<li><a href="#">footwear<span class="sub-arrow"></span></a>
													<ul>
														<li><a href="#">sport shoes</a></li>
														<li><a href="#">formal shoes</a></li>
														<li><a href="#">casual shoes</a></li>
													</ul>
												</li>
												<li><a href="#">watches</a></li>
												<li><a href="#">Accessories<span class="sub-arrow"></span></a>
													<ul>
														<li><a href="#">fashion jewellery</a></li>
														<li><a href="#">caps and hats</a></li>
														<li><a href="#">precious jewellery</a></li>
														<li><a href="#">more..<span class="sub-arrow"></span></a>
															<ul>
																<li><a href="#">necklaces</a></li>
																<li><a href="#">earrings</a></li>
																<li><a href="#">wrist wear</a></li>
																<li><a href="#">accessories<span class="sub-arrow"></span></a>
																	<ul>
																		<li><a href="#">ties</a></li>
																		<li><a href="#">cufflinks</a></li>
																		<li><a href="#">pockets squares</a></li>
																		<li><a href="#">helmets</a></li>
																		<li><a href="#">scarves</a></li>
																		<li><a href="#">more...<span class="sub-arrow"></span></a>
																			<ul>
																				<li><a href="#">accessory gift sets</a></li>
																				<li><a href="#">travel accessories</a></li>
																				<li><a href="#">phone cases</a></li>
																			</ul>
																		</li>
																	</ul>
																</li>
																<li><a href="#">belts &amp; more</a></li>
																<li><a href="#">wearable</a></li>
															</ul>
														</li>
													</ul>
												</li>
												<li><a href="#">house of design</a></li>
												<li><a href="#">beauty &amp; personal care<span class="sub-arrow"></span></a>
													<ul>
														<li><a href="#">makeup</a></li>
														<li><a href="#">skincare</a></li>
														<li><a href="#">premium beaty</a></li>
														<li><a href="#">more<span class="sub-arrow"></span></a>
															<ul>
																<li><a href="#">fragrances</a></li>
																<li><a href="#">luxury beauty</a></li>
																<li><a href="#">hair care</a></li>
																<li><a href="#">tools &amp; brushes</a></li>
															</ul>
														</li>
													</ul>
												</li>
												<li><a href="#">home &amp; decor</a></li>
												<li><a href="#">kitchen</a></li>
											</ul>
										</nav>
									</div>
								</div>
								<div class="brand-logo"><a href="/"><img src="/assets/images/icon/logo.png" alt="" class="img-fluid"></a></div>
							</div>
							<div class="menu-right pull-right">
								<div>
									<div class="main-navbar">
										<div id="mainnav">
											<div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
											<ul class="nav-menu" style="right: 0px;">
												<li class="back-btn">
													<div class="mobile-back text-right"><span>Back navbar</span><i class="fa fa-angle-right pl-2" aria-hidden="true"></i></div>
												</li>
												<li class=" "><a class="nav-link"> Home<span class="sub-arrow"></span></a>
													<ul class="nav-submenu">
														<li class="sub-menu "><a>New Demos<span class="new-tag">new</span><i class="fa fa-angle-right pl-2"></i></a>
															<ul class="nav-sub-childmenu active">
																<li><a class="sub-menu-title" href="/layouts/Tools">Tools</a></li>
																<li><a class="sub-menu-title" href="/layouts/Christmas">Christmas</a></li>
																<li><a class="sub-menu-title" href="/layouts/Marketplace">Marketplace</a></li>
																<li><a class="sub-menu-title" href="/layouts/Game">Game</a></li>
																<li><a class="sub-menu-title" href="/layouts/Gym">Gym</a></li>
																<li><a class="sub-menu-title" href="/layouts/Marijuana">Marijuana</a></li>
																<li><a class="sub-menu-title" href="/layouts/Leftsidebar">Left-Sidebar</a></li>
																<li><a class="sub-menu-title" href="/layouts/Jewellery">Jewellery</a></li>
																<li><a class="sub-menu-title" href="/layouts/Pets">Pets</a></li>
																<li><a class="sub-menu-title" href="/layouts/Metros">Metros</a></li>
																<li><a class="sub-menu-title" href="/layouts/Vedioslider">Video-Slider</a></li>
																<li><a class="sub-menu-title" href="/layouts/Nursery">Nursery</a></li>
															</ul>
														</li>
														<li class="sub-menu "><a>Clothing<i class="fa fa-angle-right pl-2"></i></a>
															<ul class="nav-sub-childmenu active">
																<li><a class="sub-menu-title" href="/">Fashion1</a></li>
																<li><a class="sub-menu-title" href="/layouts/Fashion2">Fashion2</a></li>
																<li><a class="sub-menu-title" href="/layouts/Fashion3">Fashion3</a></li>
																<li><a class="sub-menu-title" href="/layouts/Kids">Kids</a></li>
															</ul>
														</li>
														<li class="sub-menu "><a>Basics<i class="fa fa-angle-right pl-2"></i></a>
															<ul class="nav-sub-childmenu active">
																<li><a class="sub-menu-title" href="/layouts/Basics/Lookbook">Lookbook</a></li>
																<li><a class="sub-menu-title" href="/layouts/Basics/Video">Video</a></li>
																<li><a class="sub-menu-title" href="/layouts/Basics/Parallax">Parallax</a></li>
																<li><a class="sub-menu-title" href="/layouts/Basics/Fullpage">Full Page</a></li>
															</ul>
														</li>
														<li class=""><a href="/layouts/Beauty"> Beauty</a></li>
														<li class="sub-menu "><a>electronic<i class="fa fa-angle-right pl-2"></i></a>
															<ul class="nav-sub-childmenu active">
																<li><a class="sub-menu-title" href="/layouts/Electronic/Electronic-1">Electronic-1</a></li>
																<li><a class="sub-menu-title" href="/layouts/Electronic/Electronic-2">Electronic-2</a></li>
															</ul>
														</li>
														<li class=""><a href="/layouts/Furniture"> Furniture</a></li>
														<li class=""><a href="/layouts/Vegetables"> Vegetables</a></li>
														<li class=""><a href="/layouts/Watch"> Watch</a></li>
														<li class=""><a href="/layouts/Lights"> Lights</a></li>
														<li class=""><a href="/layouts/Goggles"> Goggles</a></li>
														<li class=""><a href="/layouts/Shoes"> Shoes</a></li>
														<li class=""><a href="/layouts/Bags"> Bags</a></li>
														<li class=""><a href="/layouts/Flowers"> Flowers</a></li>
													</ul>
												</li>
												<li class=" "><a class="nav-link"> Shop<span class="sub-arrow"></span></a>
													<ul class="nav-submenu">
														<li class=""><a href="/shop/left_sidebar"> Left Sidebar</a></li>
														<li class=""><a href="/shop/right_sidebar"> Right Sidebar</a></li>
														<li class=""><a href="/shop/no_sidebar"> No Sidebar</a></li>
														<li class=""><a href="/shop/sidebar_popup"> Sidebar Popup</a></li>
														<li class=""><a href="/shop/metro"> Metro<span class="new-tag">new</span></a></li>
														<li class=""><a href="/shop/full_width"> Full Width<span class="new-tag">new</span></a></li>
														<li class=""><a href="/shop/three_grid"> 3 Grid</a></li>
														<li class=""><a href="/shop/six_grid"> 6 Six</a></li>
														<li class=""><a href="/shop/list_view"> List View</a></li>
													</ul>
												</li>
												<li class=" "><a class="nav-link"> Products<span class="sub-arrow"></span></a>
													<ul class="nav-submenu">
														<li class="sub-menu "><a>Sidebar<i class="fa fa-angle-right pl-2"></i></a>
															<ul class="nav-sub-childmenu active">
																<li><a class="sub-menu-title" href="/product-details/1">Left Sidebar</a></li>
																<li><a class="sub-menu-title" href="/product-details/right_sidebar">Right Sidebar</a></li>
																<li><a class="sub-menu-title" href="/product-details/no-sidebar">No Sidebar</a></li>
															</ul>
														</li>
														<li class="sub-menu "><a>Thumbnail Image<i class="fa fa-angle-right pl-2"></i></a>
															<ul class="nav-sub-childmenu active">
																<li><a class="sub-menu-title" href="/product-details/thumbnail_left">Left Image</a></li>
																<li><a class="sub-menu-title" href="/product-details/thumbnail_right">Right Image</a></li>
																<li><a class="sub-menu-title" href="/product-details/thumbnail_outside">Image Outside</a></li>
															</ul>
														</li>
														<li class="sub-menu "><a>3-Column<i class="fa fa-angle-right pl-2"></i></a>
															<ul class="nav-sub-childmenu active">
																<li><a class="sub-menu-title" href="/product-details/3_col_left">Thumbnail Left</a></li>
																<li><a class="sub-menu-title" href="/product-details/3_col_right">Thumbnail Right</a></li>
																<li><a class="sub-menu-title" href="/product-details/3_col_bottom">Thumbnail Bottom</a></li>
															</ul>
														</li>
														<li class=""><a href="/product-details/4_image"> 4 Image</a></li>
														<li class=""><a href="/product-details/bundle_product"> Bundle Product</a></li>
														<li class=""><a href="/product-details/sticky"> Sticky</a></li>
														<li class=""><a href="/product-details/accordian"> Accordian</a></li>
														<li class=""><a href="/product-details/image_swatch"> Image Swatch</a></li>
														<li class=""><a href="/product-details/vertical_tab"> Vertical Tab</a></li>
													</ul>
												</li>
												<li class=" mega-menu"><a class="nav-link"> features<span class="sub-arrow"></span></a>
													<div class="mega-menu-container  ">
														<div class="container">
															<div class="row">
																<div class="col mega-box ">
																	<div class="link-section">
																		<div class="menu-title">
																			<h5>Portfolio</h5>
																		</div>
																		<div class="menu-content">
																			<ul>
																				<li><a href="/portfolio/grid-2">Portfolio Grid 2</a></li>
																				<li><a href="/portfolio/grid-3">Portfolio Grid 3</a></li>
																				<li><a href="/portfolio/grid-4">Portfolio Grid 4</a></li>
																				<li><a href="/portfolio/masonry-grid-2">masonry Grid 2</a></li>
																				<li><a href="/portfolio/masonry-grid-3">masonry Grid 3</a></li>
																				<li><a href="/portfolio/masonry-grid-4">masonry Grid 4</a></li>
																				<li><a href="/portfolio/masonry-full-width">masonry Full Width</a></li>
																			</ul>
																		</div>
																	</div>
																</div>
																<div class="col mega-box ">
																	<div class="link-section">
																		<div class="menu-title">
																			<h5>Add To Cart</h5>
																		</div>
																		<div class="menu-content">
																			<ul>
																				<li><a href="/layouts/Nursery">Cart Modal Popup</a></li>
																				<li><a href="/layouts/Vegetables">Qty Counter</a></li>
																				<li><a href="/layouts/Bags">Cart Top</a></li>
																				<li><a href="/layouts/Shoes">Cart Bottom</a></li>
																				<li><a href="/layouts/Watch">Cart Left</a></li>
																				<li><a href="/layouts/Tools">Cart Right</a></li>
																			</ul>
																		</div>
																	</div>
																</div>
																<div class="col mega-box ">
																	<div class="link-section">
																		<div class="menu-title">
																			<h5>Theme Element</h5>
																		</div>
																		<div class="menu-content">
																			<ul>
																				<li><a href="/portfolio/title">Title</a></li>
																				<li><a href="/portfolio/collection-banner">Collection Banner</a></li>
																				<li><a href="/portfolio/home-slider">Home Slider</a></li>
																				<li><a href="/portfolio/category">Category</a></li>
																				<li><a href="/portfolio/service">Service</a></li>
																			</ul>
																		</div>
																	</div>
																</div>
																<div class="col mega-box ">
																	<div class="link-section">
																		<div class="menu-title">
																			<h5>Product Element</h5>
																		</div>
																		<div class="menu-content">
																			<ul>
																				<li><a href="/portfolio/product-box">Product Box</a></li>
																				<li><a href="/portfolio/product-slider">Product Slider</a></li>
																				<li><a href="/portfolio/no-slider">No Slider</a></li>
																				<li><a href="/portfolio/multi-slider">Multi Slider</a></li>
																				<li><a href="/portfolio/tab">Tab</a></li>
																			</ul>
																		</div>
																	</div>
																</div>
																<div class="col mega-box ">
																	<div class="link-section">
																		<div class="menu-title">
																			<h5>Email Template</h5>
																		</div>
																		<div class="menu-content">
																			<ul>
																				<li><a href="/portfolio/order-success">Order Success</a></li>
																				<li><a href="/portfolio/order-success-2">Order Success 2</a></li>
																				<li><a href="/portfolio/email-template">Email Template</a></li>
																				<li><a href="/portfolio/email-template-2">Email Template 2</a></li>
																			</ul>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</li>
												<li class=" "><a class="nav-link"> Pages<span class="sub-arrow"></span></a>
													<ul class="nav-submenu">
														<li class="sub-menu "><a>vendor<span class="new-tag">new</span><i class="fa fa-angle-right pl-2"></i></a>
															<ul class="nav-sub-childmenu active">
																<li><a class="sub-menu-title" href="/page/vendor/vendor-dashboard">Vendor Dashboard</a></li>
																<li><a class="sub-menu-title" href="/page/vendor/vendor-profile">Vendor Profile</a></li>
																<li><a class="sub-menu-title" href="/page/vendor/become-vendor">Become Vendor</a></li>
															</ul>
														</li>
														<li class="sub-menu "><a>Account<i class="fa fa-angle-right pl-2"></i></a>
															<ul class="nav-sub-childmenu active">
																<li><a class="sub-menu-title" href="/page/account/wishlist">Wishlist</a></li>
																<li><a class="sub-menu-title" href="/page/account/cart">cart</a></li>
																<li><a class="sub-menu-title" href="/page/account/dashboard">dashboard</a></li>
																<li><a class="sub-menu-title" href="/page/account/login">login</a></li>
																<li><a class="sub-menu-title" href="/page/account/login-auth">login-auth</a></li>
																<li><a class="sub-menu-title" href="/page/account/register">register</a></li>
																<li><a class="sub-menu-title" href="/page/account/contact">contact</a></li>
																<li><a class="sub-menu-title" href="/page/account/forget-pwd">forgot-password</a></li>
																<li><a class="sub-menu-title" href="/page/account/profile">profile</a></li>
																<li><a class="sub-menu-title" href="/page/account/checkout">checkout</a></li>
															</ul>
														</li>
														<li class=""><a href="/page/about-us"> about-us</a></li>
														<li class=""><a href="/page/search"> search</a></li>
														<li class=""><a href="/page/typography"> typography<span class="new-tag">new</span></a></li>
														<li class=""><a href="/page/review"> review</a></li>
														<li class=""><a href="/page/order-success"> order-success</a></li>
														<li class="sub-menu "><a>compare<i class="fa fa-angle-right pl-2"></i></a>
															<ul class="nav-sub-childmenu active">
																<li><a class="sub-menu-title" href="/page/compare">compare</a></li>
																<li><a class="sub-menu-title" href="/page/compare-2">compare-2<span class="new-tag">new</span></a></li>
															</ul>
														</li>
														<li class=""><a href="/page/collection"> collection</a></li>
														<li class=""><a href="/page/lookbook"> lookbook</a></li>
														<li class=""><a href="/page/site-map"> site-map</a></li>
														<li class=""><a href="/page/404"> 404</a></li>
														<li class=""><a href="/page/coming-soon"> coming-soon</a></li>
														<li class=""><a href="/page/faq"> faq</a></li>
													</ul>
												</li>
												<li class=" "><a class="nav-link"> Blogs<span class="sub-arrow"></span></a>
													<ul class="nav-submenu">
														<li class=""><a href="/blogs/blog_left_sidebar"> blog left sidebar</a></li>
														<li class=""><a href="/blogs/blog_right_sidebar"> blog right sidebar</a></li>
														<li class=""><a href="/blogs/no_sidebar"> no sidebar</a></li>
														<li class=""><a href="/blogs/blog_detail"> blog detail</a></li>
													</ul>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div>
									<div class="icon-nav">
										<ul>
											<li class="onhover-div mobile-search">
												<div><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAXCAYAAADgKtSgAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyFpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpDQjYyN0M4NTcyRTkxMUU4Qjc1MkM2QUU2ODQ1OUQ1NiIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpDQjYyN0M4NjcyRTkxMUU4Qjc1MkM2QUU2ODQ1OUQ1NiI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOkNCNjI3QzgzNzJFOTExRThCNzUyQzZBRTY4NDU5RDU2IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkNCNjI3Qzg0NzJFOTExRThCNzUyQzZBRTY4NDU5RDU2Ii8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+WYb6uAAAAbNJREFUeNqslU0oRFEUx++bptSQxbCwflO+kiJFWEgpFhZTIhvFklJKsvOdBVIiK8ZKFIkFUZqVsLCyIU3WFkhGNOXjf+o/9RrvznvzZk79undm7vzOfad7zzNM01Q2kQ+6QDuoAAa4A2dgD7wlF8ZiMaULw0Y+DuZTvvtlgmRMgUknuS/l8znFD6AXFFMq64J8mlswAS6BX6UJqzwKWvnHUrADni2/v4J9UA3GQAMTOMplcQsfd1o5xwIYBXWhUGguXc3zMH6BR2CqzEJKVAUKUft3u533cD6iMo9hjn26soQ5P/Egj3IM6+Ryjn9AQnmLOCjXyQ2VfRg6+T1Hv0dxAR228kPO2zyImzke6OTbnC97kK9w3NLJP9knyniZ3MYgqAEzdmc8tXFdgXrevCUH8RBYBS8QF7npLU3gGiyCG9DJ1puMAOgAFxTLboO4/mtu5N9sRrOgFhzxDMcp+gDHoJGdswSsS3mQYNNtP5eQR+3mTistL4tTsAueLGtF3A8iKNGAG7nrkJcFd/4vgS8Ht1NRGJEE1hLlRG6TYENlceW1CSCWqYyBnMotCeTkJf4EGAA6kXMrGB0cpgAAAABJRU5ErkJggg==" alt="" class="img-fluid media"><i class="fa fa-search"></i></div>
											</li>
											<li class="onhover-div mobile-setting">
												<div><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAZCAYAAADE6YVjAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyFpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpDMENEOTc1QjcyRTkxMUU4QjcwRThEQkM4NUVBNzhFNSIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpDMENEOTc1QzcyRTkxMUU4QjcwRThEQkM4NUVBNzhFNSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOkMwQ0Q5NzU5NzJFOTExRThCNzBFOERCQzg1RUE3OEU1IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkMwQ0Q5NzVBNzJFOTExRThCNzBFOERCQzg1RUE3OEU1Ii8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+7VNBOgAAAv5JREFUeNqclnuITFEcx++sKazHGvEHosws1r/IeoUirRLL0P6BTYvUsnlNm1dGS0hEi1WKSSuPvItlYmVJ2rTyj5U0YrDLem2bRxHr86vf6HTde/dy6tPp/u4553vO+T3uDYTDYctH6wuXoA+0QwDaYFYqlXrd0eQsy1+bD4NgEkzWvhcs8TPZSWQCPILNhk123gjNBo/hV2ZAJBKJQSNM60ikAO7ANVgP1Wp/pycx20BoVYFDdDvgMiR5nusmMh2uwkJYC+KsmXAL9sIJm8hxqGDBWvpFkId/yulnwxlTyBSpgd062dIrCcEztVfYRMS2BdIyDoGUGOku0q0ToT93bUSXLLJaTg8tPgPC0rUtwzc96J5DgncxsQWN9+LofvAEcuGD9Y8Nge46/0ZGwMnxS/X4CYc1RsM5uAkXYKLDmCr4hkCRaZSTdFVnd9FEC+siZiuDSjgJ4uihUAcbNKoy7SFEOVGZhv13OCU+qVexNh2YhJ3GxHFwV5OwzrCPgvsS9uw8aVzZKrpC3XA3uS0RadUoane5armeJljgcj0jEcn38FNafPIWenv4Mwduu7yTk3X2EMime5+lRc8rkr7AGJd3Y+GHR3h/lVsSX7yEe5kSoUm53xgb1ys7CA2GPQ9WSiW27V4idI4+Ss587hQKhU7rkZs0fCWLf6qzLU0s2a2MGwCDoRiOSWSx2ypDoNQoQWktqrGAw/ekQQtigc0+BdZAT9kdHIArZsYjIiE+Atswe56YTXYxHGY4XHGt4tWWw1PEjiC02CnjpbQvU5Fm6z8aC3/U+fMQ2uYksh32wQvbXLGVuqxbwmKVNqEW9etGJ5GonqZQnyVB30C+Vuhym8AK2CPJiNAn6K9+mar2YieR83JMrVtxjap6zQWpqCU2Efm+b2Xn4yUA5BAIbKK/LmOxV7tV4bP6hZSCedjIgRzNJ7O9gmy9Iik5u/QLGeU54RVdln7fc222oFbekPFLNAQeGL6I6w381YI+A0fiv0gzPyMiJeOon8m/BRgAuQrmGVlzgYMAAAAASUVORK5CYII=" alt="" class="img-fluid media"><i class="fa fa-cog"></i></div>
												<div class="show-div setting">
													<h6>language</h6>
													<ul>
														<li><a>English</a></li>
														<li><a>Franch</a></li>
													</ul>
													<h6>currency</h6>
													<ul class="list-inline">
														<li>
															<div>$ USD</div>
														</li>
														<li>
															<div>₹ IND</div>
														</li>
														<li>
															<div>€ EUR</div>
														</li>
														<li>
															<div>£ GBP</div>
														</li>
													</ul>
												</div>
											</li>
											<li class="onhover-div mobile-cart">
												<div class="cart-qty-cls">0</div>
												<div><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAXCAYAAADgKtSgAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyFpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpDNzE0NDdGMjcyRTkxMUU4QjY4MkE5N0U1QkVGNzJENyIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpDNzE0NDdGMzcyRTkxMUU4QjY4MkE5N0U1QkVGNzJENyI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOkM3MTQ0N0YwNzJFOTExRThCNjgyQTk3RTVCRUY3MkQ3IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkM3MTQ0N0YxNzJFOTExRThCNjgyQTk3RTVCRUY3MkQ3Ii8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+hNS3IQAAAf9JREFUeNqklU1IFVEUx+fZKwldmEGJHyjvWbpxUUi0aaEouAzMQIUnSpC6UHfiVxuN2hluXKkbN4roJgRBUtyECIpYEcJDhBYRqahoIT6n34EzcJne14wHfm/ePcz8597/vedMIBQKWUkiG0agAfIgADb8ggUYiEajR4kezkgi/BxOoR0+QjPUQiPMQwschsPhpkQCgQQzb4VJGIPuJBN4D73QyQrG0xGXRBTewLCVOnpgFCp4wZdUtizCfprCFoIfuHyHpVSe34cyiFje4iXk438omfgz+AtrXpSZ/Y5ufnU8z8WzOijX/Dbc8qB/KZ7rf7FoBbqC/HyCKpiAOfit1ngNOV13xB7ogMdBFZ6BVz4ExZL/cngf4/JaxKf0XP+BIsjyIo6QOZT92lO9WRFvg114B+vww/If91R4hBUNmUUkby1Uz33ZwirkEJxITyJ/6RzFIm1KD6zrRZnqlKZqXPWwYYzlFGzCQyP3mdlG/HTFAqh0td9HkGPknkKxH/EzrTqzUM7hwsgduO5JW9xS/7yM0xbPUSucuAm3IdPI5cLdRAJB42prITkhbaHfGP+EQS0SJ/pg1VVEtqMbNPzNdK1kS3HiGN66v0Su8r9SnTP3l+irnpAXukl2HF/tOGPnHmkb07LhvLDEnLnEE1jWj3HMRwHdgG9Q4yT+CTAApdl93m9bmRMAAAAASUVORK5CYII=" alt="" class="img-fluid media"><i class="fa fa-shopping-cart"></i></div>
												<ul class="show-div shopping-cart">
													<li>
														<h5>Your cart is currently empty.</h5>
													</li>
												</ul>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div id="search-overlay" class="search-overlay" style="display: none;">
			<div><span class="closebtn" title="Close Overlay">×</span>
				<div class="overlay-content">
					<div class="container">
						<div class="row">
							<div class="col">
								<form class="">
									<div class="form-group"><input id="exampleInputPassword1" placeholder="Search a Product" type="text" class="form-control form-control"></div><button type="submit" class="btn btn-primary btn btn-secondary"><i class="fa fa-search"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	<section class="p-0">
		<div class="slick-slider slide-1 home-slider slick-initialized" dir="ltr"><button type="button" data-role="none" class="slick-arrow slick-prev" style="display: block;"> Previous</button>
			<div class="slick-list">
				<div class="slick-track" style="width: 7555px; opacity: 1; transform: translate3d(-1511px, 0px, 0px);">
					<div data-index="-1" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 1511px;">
						<div>
							<div tabindex="-1" style="width: 100%; display: inline-block;">
								<div class="home home2 text-center">
									<div class="container">
										<div class="row">
											<div class="col">
												<div class="slider-contain">
													<div>
														<h4>welcome to fashion</h4>
														<h1>women fashion</h1><a class="btn btn-solid" href="/left-sidebar/collection">shop now </a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div data-index="0" class="slick-slide slick-active slick-current" tabindex="-1" aria-hidden="false" style="outline: none; width: 1511px;">
						<div>
							<div tabindex="-1" style="width: 100%; display: inline-block;">
								<div class="home home1 text-center">
									<div class="container">
										<div class="row">
											<div class="col">
												<div class="slider-contain">
													<div>
														<h4>welcome to fashion</h4>
														<h1>men fashion</h1><a class="btn btn-solid" href="/left-sidebar/collection">shop now </a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div data-index="1" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 1511px;">
						<div>
							<div tabindex="-1" style="width: 100%; display: inline-block;">
								<div class="home home2 text-center">
									<div class="container">
										<div class="row">
											<div class="col">
												<div class="slider-contain">
													<div>
														<h4>welcome to fashion</h4>
														<h1>women fashion</h1><a class="btn btn-solid" href="/left-sidebar/collection">shop now </a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div data-index="2" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 1511px;">
						<div>
							<div tabindex="-1" style="width: 100%; display: inline-block;">
								<div class="home home1 text-center">
									<div class="container">
										<div class="row">
											<div class="col">
												<div class="slider-contain">
													<div>
														<h4>welcome to fashion</h4>
														<h1>men fashion</h1><a class="btn btn-solid" href="/left-sidebar/collection">shop now </a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div data-index="3" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 1511px;">
						<div>
							<div tabindex="-1" style="width: 100%; display: inline-block;">
								<div class="home home2 text-center">
									<div class="container">
										<div class="row">
											<div class="col">
												<div class="slider-contain">
													<div>
														<h4>welcome to fashion</h4>
														<h1>women fashion</h1><a class="btn btn-solid" href="/left-sidebar/collection">shop now </a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><button type="button" data-role="none" class="slick-arrow slick-next" style="display: block;"> Next</button>
		</div>
	</section>
	<section class="pb-0">
		<div class="container">
			<div class="row partition2">
				<div class="col-md-6">
					<a href="#">
						<div class="collection-banner p-right text-center">
							<img src="assets/images/sub-banner1.jpg" class="img-fluid" alt="" />
							<div class="contain-banner">
								<div>
									<h4>save 30%</h4>
									<h2>men</h2>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-6">
					<div class="collection-banner p-right text-center">
						<a href="#">
							<img src="assets/images/sub-banner2.jpg" class="img-fluid" alt="" />
							<div class="contain-banner">
								<div>
									<h4>save 60%</h4>
									<h2>women</h2>
								</div>
							</div>

					</div>
					</a>
				</div>
			</div>
		</div>
	</section>
	<div>
		<div class="title1  section-t-space">
			<h4>special offer</h4>
			<h2 class="title-inner1">top collection</h2>
		</div>
		<section class="section-b-space p-t-0">
			<div class="container">
				<div class="row">
					<div class="col">
						<!-- <Slider {...properties} class="product-4 product-m no-arrow">
                                    { items.map((product, index ) =>
                                        <div key={index}>
                                            <ProductItem product={product} symbol={symbol}
                                                         onAddToCompareClicked={() => addToCompare(product)}
                                                         onAddToWishlistClicked={() => addToWishlist(product)}
                                                         onAddToCartClicked={() => addToCart(product, 1)} key={index} />
                                        </div>)
                                    }
                                </Slider> -->
					</div>
				</div>
			</div>
		</section>
	</div>
	<section class="p-0">
		<div class="full-banner parallax-banner1 parallax text-center p-left">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="banner-contain">
							<h2>2018</h2>
							<h3>fashion trends</h3>
							<h4>special offer</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="container">
		<section class="border-section small-section">
			<div class="row">
				<div class="service-block col-md-4">
					<div class="media">
						<div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -117 679.99892 679">
								<path d="m12.347656 378.382812h37.390625c4.371094 37.714844 36.316407 66.164063 74.277344 66.164063 37.96875 0 69.90625-28.449219 74.28125-66.164063h241.789063c4.382812 37.714844 36.316406 66.164063 74.277343 66.164063 37.96875 0 69.902344-28.449219 74.285157-66.164063h78.890624c6.882813 0 12.460938-5.578124 12.460938-12.460937v-352.957031c0-6.882813-5.578125-12.464844-12.460938-12.464844h-432.476562c-6.875 0-12.457031 5.582031-12.457031 12.464844v69.914062h-105.570313c-4.074218.011719-7.890625 2.007813-10.21875 5.363282l-68.171875 97.582031-26.667969 37.390625-9.722656 13.835937c-1.457031 2.082031-2.2421872 4.558594-2.24999975 7.101563v121.398437c-.09765625 3.34375 1.15624975 6.589844 3.47656275 9.003907 2.320312 2.417968 5.519531 3.796874 8.867187 3.828124zm111.417969 37.386719c-27.527344 0-49.851563-22.320312-49.851563-49.847656 0-27.535156 22.324219-49.855469 49.851563-49.855469 27.535156 0 49.855469 22.320313 49.855469 49.855469 0 27.632813-22.21875 50.132813-49.855469 50.472656zm390.347656 0c-27.53125 0-49.855469-22.320312-49.855469-49.847656 0-27.535156 22.324219-49.855469 49.855469-49.855469 27.539063 0 49.855469 22.320313 49.855469 49.855469.003906 27.632813-22.21875 50.132813-49.855469 50.472656zm140.710938-390.34375v223.34375h-338.375c-6.882813 0-12.464844 5.578125-12.464844 12.460938 0 6.882812 5.582031 12.464843 12.464844 12.464843h338.375v79.761719h-66.421875c-4.382813-37.710937-36.320313-66.15625-74.289063-66.15625-37.960937 0-69.898437 28.445313-74.277343 66.15625h-192.308594v-271.324219h89.980468c6.882813 0 12.464844-5.582031 12.464844-12.464843 0-6.882813-5.582031-12.464844-12.464844-12.464844h-89.980468v-31.777344zm-531.304688 82.382813h99.703125v245.648437h-24.925781c-4.375-37.710937-36.3125-66.15625-74.28125-66.15625-37.960937 0-69.90625 28.445313-74.277344 66.15625h-24.929687v-105.316406l3.738281-5.359375h152.054687c6.882813 0 12.460938-5.574219 12.460938-12.457031v-92.226563c0-6.882812-5.578125-12.464844-12.460938-12.464844h-69.796874zm-30.160156 43h74.777344v67.296875h-122.265625zm0 0" fill="#ff4c3b"></path>
							</svg></div>
						<div class="media-body">
							<h4>free shipping</h4>
							<p>free shipping world wide</p>
						</div>
					</div>
				</div>
				<div class="service-block col-md-4">
					<div class="media">
						<div><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 480 480" style="enable-background:new 0 0 480 480;" xml:space="preserve" width="512px" height="512px">
								<g>
									<g>
										<g>
											<path d="M472,432h-24V280c-0.003-4.418-3.588-7.997-8.006-7.994c-2.607,0.002-5.05,1.274-6.546,3.41l-112,160     c-2.532,3.621-1.649,8.609,1.972,11.14c1.343,0.939,2.941,1.443,4.58,1.444h104v24c0,4.418,3.582,8,8,8s8-3.582,8-8v-24h24     c4.418,0,8-3.582,8-8S476.418,432,472,432z M432,432h-88.64L432,305.376V432z" fill="#ff4c3b"></path>
											<path d="M328,464h-94.712l88.056-103.688c0.2-0.238,0.387-0.486,0.56-0.744c16.566-24.518,11.048-57.713-12.56-75.552     c-28.705-20.625-68.695-14.074-89.319,14.631C212.204,309.532,207.998,322.597,208,336c0,4.418,3.582,8,8,8s8-3.582,8-8     c-0.003-26.51,21.486-48.002,47.995-48.005c10.048-0.001,19.843,3.151,28.005,9.013c16.537,12.671,20.388,36.007,8.8,53.32     l-98.896,116.496c-2.859,3.369-2.445,8.417,0.924,11.276c1.445,1.226,3.277,1.899,5.172,1.9h112c4.418,0,8-3.582,8-8     S332.418,464,328,464z" fill="#ff4c3b"></path>
											<path d="M216.176,424.152c0.167-4.415-3.278-8.129-7.693-8.296c-0.001,0-0.002,0-0.003,0     C104.11,411.982,20.341,328.363,16.28,224H48c4.418,0,8-3.582,8-8s-3.582-8-8-8H16.28C20.283,103.821,103.82,20.287,208,16.288     V40c0,4.418,3.582,8,8,8s8-3.582,8-8V16.288c102.754,3.974,185.686,85.34,191.616,188l-31.2-31.2     c-3.178-3.07-8.242-2.982-11.312,0.196c-2.994,3.1-2.994,8.015,0,11.116l44.656,44.656c0.841,1.018,1.925,1.807,3.152,2.296     c0.313,0.094,0.631,0.172,0.952,0.232c0.549,0.198,1.117,0.335,1.696,0.408c0.08,0,0.152,0,0.232,0c0.08,0,0.152,0,0.224,0     c0.609-0.046,1.211-0.164,1.792-0.352c0.329-0.04,0.655-0.101,0.976-0.184c1.083-0.385,2.069-1.002,2.888-1.808l45.264-45.248     c3.069-3.178,2.982-8.242-0.196-11.312c-3.1-2.994-8.015-2.994-11.116,0l-31.976,31.952     C425.933,90.37,331.38,0.281,216.568,0.112C216.368,0.104,216.2,0,216,0s-0.368,0.104-0.568,0.112     C96.582,0.275,0.275,96.582,0.112,215.432C0.112,215.632,0,215.8,0,216s0.104,0.368,0.112,0.568     c0.199,115.917,91.939,210.97,207.776,215.28h0.296C212.483,431.847,216.013,428.448,216.176,424.152z" fill="#ff4c3b"></path>
											<path d="M323.48,108.52c-3.124-3.123-8.188-3.123-11.312,0L226.2,194.48c-6.495-2.896-13.914-2.896-20.408,0l-40.704-40.704     c-3.178-3.069-8.243-2.981-11.312,0.197c-2.994,3.1-2.994,8.015,0,11.115l40.624,40.624c-5.704,11.94-0.648,26.244,11.293,31.947     c9.165,4.378,20.095,2.501,27.275-4.683c7.219-7.158,9.078-18.118,4.624-27.256l85.888-85.888     C326.603,116.708,326.603,111.644,323.48,108.52z M221.658,221.654c-0.001,0.001-0.001,0.001-0.002,0.002     c-3.164,3.025-8.148,3.025-11.312,0c-3.125-3.124-3.125-8.189-0.002-11.314c3.124-3.125,8.189-3.125,11.314-0.002     C224.781,213.464,224.781,218.53,221.658,221.654z" fill="#ff4c3b"></path>
										</g>
									</g>
								</g>
							</svg></div>
						<div class="media-body">
							<h4>24 X 7 service</h4>
							<p>online service for new customer</p>
						</div>
					</div>
				</div>
				<div class="service-block col-md-4">
					<div class="media">
						<div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -14 512.00001 512">
								<path d="m136.964844 308.234375c4.78125-2.757813 6.417968-8.878906 3.660156-13.660156-2.761719-4.777344-8.878906-6.417969-13.660156-3.660157-4.78125 2.761719-6.421875 8.882813-3.660156 13.660157 2.757812 4.78125 8.878906 6.421875 13.660156 3.660156zm0 0" fill="#ff4c3b"></path>
								<path d="m95.984375 377.253906 50.359375 87.230469c10.867188 18.84375 35.3125 25.820313 54.644531 14.644531 19.128907-11.054687 25.703125-35.496094 14.636719-54.640625l-30-51.96875 25.980469-15c4.78125-2.765625 6.421875-8.878906 3.660156-13.660156l-13.003906-22.523437c1.550781-.300782 11.746093-2.300782 191.539062-37.570313 22.226563-1.207031 35.542969-25.515625 24.316407-44.949219l-33.234376-57.5625 21.238282-32.167968c2.085937-3.164063 2.210937-7.230469.316406-10.511719l-20-34.640625c-1.894531-3.28125-5.492188-5.203125-9.261719-4.980469l-38.472656 2.308594-36.894531-63.90625c-5.34375-9.257813-14.917969-14.863281-25.605469-14.996094-.128906-.003906-.253906-.003906-.382813-.003906-10.328124 0-19.703124 5.140625-25.257812 13.832031l-130.632812 166.414062-84.925782 49.03125c-33.402344 19.277344-44.972656 62.128907-25.621094 95.621094 17.679688 30.625 54.953126 42.671875 86.601563 30zm102.324219 57.238282c5.523437 9.554687 2.253906 21.78125-7.328125 27.316406-9.613281 5.558594-21.855469 2.144531-27.316407-7.320313l-50-86.613281 34.640626-20c57.867187 100.242188 49.074218 85.011719 50.003906 86.617188zm-22.683594-79.296876-10-17.320312 17.320312-10 10 17.320312zm196.582031-235.910156 13.820313 23.9375-12.324219 18.664063-23.820313-41.261719zm-104.917969-72.132812c2.683594-4.390625 6.941407-4.84375 8.667969-4.796875 1.707031.019531 5.960938.550781 8.527344 4.996093l116.3125 201.464844c3.789063 6.558594-.816406 14.804688-8.414063 14.992188-1.363281.03125-1.992187.277344-5.484374.929687l-123.035157-213.105469c2.582031-3.320312 2.914063-3.640624 3.425781-4.480468zm-16.734374 21.433594 115.597656 200.222656-174.460938 34.21875-53.046875-91.878906zm-223.851563 268.667968c-4.390625-7.597656-6.710937-16.222656-6.710937-24.949218 0-17.835938 9.585937-34.445313 25.011718-43.351563l77.941406-45 50 86.601563-77.941406 45.003906c-23.878906 13.78125-54.515625 5.570312-68.300781-18.304688zm0 0" fill="#ff4c3b"></path>
								<path d="m105.984375 314.574219c-2.761719-4.78125-8.878906-6.421875-13.660156-3.660157l-17.320313 10c-4.773437 2.757813-10.902344 1.113282-13.660156-3.660156-2.761719-4.78125-8.878906-6.421875-13.660156-3.660156s-6.421875 8.878906-3.660156 13.660156c8.230468 14.257813 26.589843 19.285156 40.980468 10.980469l17.320313-10c4.78125-2.761719 6.421875-8.875 3.660156-13.660156zm0 0" fill="#ff4c3b"></path>
								<path d="m497.136719 43.746094-55.722657 31.007812c-4.824218 2.6875-6.5625 8.777344-3.875 13.601563 2.679688 4.820312 8.765626 6.566406 13.601563 3.875l55.71875-31.007813c4.828125-2.6875 6.5625-8.777344 3.875-13.601562-2.683594-4.828125-8.773437-6.5625-13.597656-3.875zm0 0" fill="#ff4c3b"></path>
								<path d="m491.292969 147.316406-38.636719-10.351562c-5.335938-1.429688-10.820312 1.734375-12.25 7.070312-1.429688 5.335938 1.738281 10.816406 7.074219 12.246094l38.640625 10.351562c5.367187 1.441407 10.824218-1.773437 12.246094-7.070312 1.429687-5.335938-1.738282-10.820312-7.074219-12.246094zm0 0" fill="#ff4c3b"></path>
								<path d="m394.199219 7.414062-10.363281 38.640626c-1.429688 5.335937 1.734374 10.816406 7.070312 12.25 5.332031 1.425781 10.816406-1.730469 12.25-7.070313l10.359375-38.640625c1.429687-5.335938-1.734375-10.820312-7.070313-12.25-5.332031-1.429688-10.816406 1.734375-12.246093 7.070312zm0 0" fill="#ff4c3b"></path>
							</svg></div>
						<div class="media-body">
							<h4>festival offer</h4>
							<p>new online special festival offer</p>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="title1 section-t-space">
					<h4>Recent Story</h4>
					<h2 class="title-inner1">from the blog</h2>
				</div>
			</div>
		</div>
	</div>
	<footer class="footer-light undefined">
		<div class="light-layout upper-footer">
			<div class="container">
				<section class="small-section border-section border-top-0">
					<div class="row">
						<div class="col-lg-6">
							<div class="subscribe">
								<div>
									<h4>KNOW IT ALL FIRST!</h4>
									<p>Never Miss Anything From Multikart By Signing Up To Our Newsletter. </p>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<form class="form-inline subscribe-form">
								<div class="mx-sm-3 form-group"><input id="exampleFormControlInput1" placeholder="Enter your email" type="text" class="form-control form-control"></div><button type="submit" class="btn btn-solid btn btn-secondary">subscribe</button>
							</form>
						</div>
					</div>
				</section>
			</div>
		</div>
		<section class="section-b-space light-layout">
			<div class="container">
				<div class="footer-theme partition-f row">
					<div class="col-md-6 col-lg-4">
						<div class="footer-title footer-mobile-title">
							<h4>about</h4>
						</div>
						<div class="footer-contant" style="display: block;">
							<div class="footer-logo"><a href="/"><img src="/assets/images/icon/logo.png" alt="" class="img-fluid"></a></div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, </p>
							<div class="footer-social">
								<ul>
									<li><a href="https://www.facebook.com" target="_blank"> <i class="fa fa-facebook" aria-hidden="true"></i> </a></li>
									<li><a href="https://plus.google.com" target="_blank"> <i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									<li><a href="https://twitter.com" target="_blank"> <i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
									<li><a href="https://rss.com" target="_blank"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="offset-xl-1 col">
						<div class="sub-title">
							<div class="footer-title">
								<h4>my account</h4>
							</div>
							<div class="footer-contant" style="display: block;">
								<ul>
									<li><a href="/shop/left_sidebar">womens</a></li>
									<li><a href="/shop/left_sidebar"> clothing </a></li>
									<li><a href="/shop/left_sidebar">accessories</a></li>
									<li><a href="/shop/left_sidebar"> featured </a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="sub-title">
							<div class="footer-title">
								<h4>why we choose</h4>
							</div>
							<div class="footer-contant" style="display: block;">
								<ul>
									<li><a href="#">shipping &amp; return</a></li>
									<li><a href="#">secure shopping</a></li>
									<li><a href="#">gallary</a></li>
									<li><a href="#">affiliates</a></li>
									<li><a href="#">contacts</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="sub-title">
							<div class="footer-title">
								<h4>store information</h4>
							</div>
							<div class="footer-contant" style="display: block;">
								<ul class="contact-list">
									<li><i class="fa fa-map-marker"></i>Multikart Demo Store, Demo store India 345-659</li>
									<li><i class="fa fa-phone"></i>Call Us: 123-456-7898</li>
									<li><i class="fa fa-envelope-o"></i>Email Us: <a href="#">Support@Fiot.com</a></li>
									<li><i class="fa fa-fax"></i>Fax: 123456</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="sub-footer undefined">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-6 col-xl-6">
						<div class="footer-end">
							<p><i class="fa fa-copyright" aria-hidden="true"></i> 2020-21 themeforest powered by pixelstrap</p>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-xl-6">
						<div class="payment-card-bottom">
							<ul>
								<li><a href="#"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAAGAklEQVRIia2Ve2xXZxnHP+97zu/S+43S0gJtaZFLpcWNtnR0Y5AiMFgci05ZwhYJ7g+n0WQmriaKUwOLl+m2RI1zKm5RnHOblmFHWC+6lW5gZBQcQscoG92klPZ3P5ffOY9//PorYNyUZd/kJOd9832fz3me8zx51ZLWBwEQEZRS5OeHCAY0OeEAhqGxnXSLY3ubbCe9ynG9hnTaLxURgkFzsiA/NDKvqmhw0cLy59fdXP9KWVkuFy4kKCoMs6C2BNM08DwfAPWfoIKCMDkhg7QnnYmE3ZVMpdemPR8FGIbGMBQA6bRPynKxrDRmQNO8dM7Als1Ld61f+5EDSkFxUYhgMDADMsqrO8lKa00oZJJKuT+eiliP2E66zjA0pqkxDI3W6gqvIhQ0yc8LEQwYvH56vPaFvtPbJi4lq9etaeieVV6Ca9vItP9yRoChVQDod13vBq0VSl0O/L+ktcKy0rxxZoK1q+tf3f/U9tWhcNiKRiJordFZowJ8X17yPP8Gw9DXBCFzllDIYOmSCnr7Rlq3bNszCB75+bn4vqAK5nahlELBYwI7rin6f5FSoJRiavRt7ty+5tdPPLbtbtexUJ+6+1eI77elfRm6thzeD6ZIWS4TlxL89KHbblq+bP5flYgDyGF8WfEhcTLSGttyicXt4+GQuUzZVqJRwXGlNBIMz/jEToH4BMN52R1AIZ6N0gpUcMbrWEm0VpjBnIzTs3HdNIZh4Lgenue3mI7jbUUbkI4irz9LgXMCKlaSLFtPbp5woPcEExNJmhorGRh8k623N1FSWsSe3wxx+Mgozc3VbLvjOoLBAPv+/BrRmM0nblmCYRo4lpv9lq3EotH+WCwusXhUkudflYGvd0j8AURkVMYTIhj3yue++Fv5yc8HBO6R4eOjcs+X9krlop3SvOr7smbzoyIiMnzinMAOwbxXjg2PiohILBrNPoc00IB44ENOVQs9c5/mtj3NwCm6D7wNns0DXZ2cfWuKlrWLSSRtfvZwDyuaqzn60n30dn8BgO98r5fimgrKa0s5cvR8poQyU91aDRRnpgjAZ3un4uDFW3n6SZs/7O3hpk3LmTNnFi/0nqa8LI+2loXs3HUH+54bpqn1Qd59d5Lx8Uv87tlj9P1pB52rGzjQdxrItPq0Ck0uU3Adi4YFpWxYv4AdO49ix6c4+FxmtE6eGqft+rkAfLNrI5+5fRlLFn+Drm/tp721BiIpHn/iMENH3qJ2XjHgEg6bWFY604TAVBZkWR5gcmNbFZEzg9TVzmJV+yIGh05h/essK1fM59vf7aFjwyPs/tEAxTXVhEIBvnx/Nys7FxGJe5SV5NDXc5Jjw+cxAznZ0DETGAGqsqk6jsOWzY1Mjt3Fxlub8H0Pw9B8pevTrLu5gUOHzzHw8hmiMZt9e+9iVmkuyvO5/7411NRUMDZ2kd0P9YFSOM5M142qWDS6C+jK7vi+T2FRLhAAIBqJUJAfRhkhfM9CG6Erqw2409408WiS/MIcIEDaTZFMOmitAR5WsUikCTP8GoEgyBXnFe+5VjrzPtNV7+VVgA/43koVi8cgOf535XvLJVgI4vGhSCnwXED+iRFerKKeoN8caDe7NwxKzmwI5F41AB8Y4ntgTyLzOjulqOFFU6VS+PWrD/kL7/ylHvzFZ6Wy4OoyfBBpAzU5hcyue0qK6l/ETaBikSkI5yOGQeD36/6mRg5eJ7PnT8OulZhpEhU9h1/Z8g9v9Q8alcoFN46KRaPg+0hhEThOOPDM+r+okf4WKSsHM+///2dKg+dA4h3IrTzm3fJMh1/bHlOWDyp7lWuNikYhELTSn+xr9do+/7iKjaOmzoLvTrfZ+2QhHiTGIHUBqdv0pH/9Vz+GEYwpG3AT4GQzyh7wPQgXICGNPrlvoz76w6+pd17uUI6NBAMQKgFj+s7ybXBiqHQSMfOQ0sZXZO6a3VTd+EcibyDFC5HajWDHMtGvAiHg2YAgeeVgxTFG93eo8/2bmTzZrhJjdbjxIkARyI1IuOwshfVDUrr0eSn9aL9SQOoiJMaQilak5uMzoH8DaWu8+ia13NAAAAAASUVORK5CYII=" alt="" class="media"></a></li>
								<li><a href="#"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAAFjklEQVRIiaWWa4ycVRnHf+e8Zy47l52d7qXdWdputwsLtpUVWivLVkrgk2DwkghY1EBq8Erwgwnxg+FLIwlRMUGNxgYb+AJagjFySyRlu25Li9SitbSulO223e7M7Ozc573MOccPs0Nqs11t+CfvhzfPyfM77/Oc8/xfMf74fv6HtgJ3AWPAtcAqQAAFYBqYAl4G3lopiVohdjvwA+DOK8Q7gcGl+A+BA8CPgNeXWyyvkORp4I0VIMtpJ/Aa8Ov/B+QAE8C3rwJwub5Oq4zRlUAHgR0fAdLWJ2n17kNd2qNfArcACGsJVJhyLImvwghriXt1Em4VYQxCWFzCLJoUrgkjhCUp63SJCg4GgwD4BLAP+NqloG3AN4S1WCmZS68h6lbZdOZdeisLBE6ImZ61vD8wTIfvUl6MkJQenwodJxPJEVjF6eZ63g1GiDouGSdP0zoAXwV+Axxsg37e+ooQ86lexk9M8qWpF9mYnSHmu2ghKcY7mRrayjNjD3Dn6pN8l33cGJ0G2QAkjWaKP9dv5iflB5kOBtgYOt+G/QLYIsYf378J+AfA+VX9fO7wH3jspacwKkw21UvgOAgLcd0gcq7Euc2D3PpIFhHPQbUP3yqEgJBsgLNAqdHPfdknec+sZ70zh8YB2CaB+4W1zHetZvt7h/n+Sz9jMd7FTLofX4WwCIwULPpxCpsy3DCcpXRM4gVrca3AmCbaSlwdo+EPkuqYY2/3HhK2RoV4u//3S2C86TgoYfj8gd+h6y5532LyOfwLF2gWFvFm5wiy5+lccxZzTZlSzqd2fAYVcUHFsOWz2NpFcHN4iyEy9iS74q8xp3vboDEFDNeicdYeO8ToyACJ3T9lYzSG1Zr5555FaIHqXUPixuvoSEzjz19EywpyeBwx9gCqMoP+1x/BNEF72Egatuxg/G9VfvX2LKZTIjGDCujyVZjkB9P03LSOru89iq5WKU9MsmHPHiJDG/DOnEHXG8jULpy6T6hWQ23bgTn9CPrvzxK+91Vk+jpss46ZPQB9GXrUC6RkmcB2ExGmUwJCGkMQT2KTSVjI41+YI5zpp+OGEXS1SnR4GBkNY7wGxtcE2UXy+35LaPDjODd/C9G5HqJpbOEUxFZD8QRufpog3I3EfnhhizGvHsuObufff32B4AtfJB9LEcn0I5QCazGej656pEY8Oga7qB6dIeKcxBR3gXYJJh4DDObi28ihe3D0EU6VOijIPlaJ8wAVBUx3BF7m3DVDvD6hePjgBOVYGuu5WK0RCBASY8OYUR+xqYHjJUnvjBJMPoEJJBgDgI2miR55AhTsN3tJCLd9GGYU8Bewn04Xc/z+rofYWpxh7PQRpgeG0I6DsBYEaC0J3q+TDOVJfNZgkyE8dx0i2iqNRRKTJUjC0wvf4WB9M9eGZrGtcXTIWbfz3hyIb0YDj3Ksk6mR7fSV8mye/SddtRKRpk9no0pfLUc53MmPN+4m2NbN9aGjKFtESQ8lK4ScAhDiqcLDPFn+MhmVJyQ0LY/kUbHksMeAUWU0uWQ3Tcfh9hOTjJ45Tk+lQOCEONszwOTHxnhr4CaSxTJ3qze5LfYOA2qBwDqcCtbycv02ptwtDKgsceGiW+ZwCri+DbqlPdalNfgqTD7ZDUDcq9OUDrVIjLhXp7e2gGvDXFi6jHFZR1tJ1SRIyBqrncJSKUW7P3cAb7SH6iHgGeBBIyRKN1lTnMcKgREty0rXigA0cVBCs05dxCLQViIk9DnFywEAz9Ny6v8yvoeAdy5dJazFMRrHaJaTwKKExmHZ+AngvvbL5Q57K3B02axXp+MsmeiVQC4tG977ESDP0XLXykqgtnYDnwEmrwJwGLgH+AoszZ1LtNJ/3StLzzhwN61SbABStC5HCfiA1kH6E/DmSrv4D19DRIS7aeNEAAAAAElFTkSuQmCC" alt="" class="media"></a></li>
								<li><a href="#"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAADwUlEQVRIibWWW0wcVRiAvzN7gV12ubVcCoJWQTQaLChekKJW1EjbaGxMxaTRqG1MMTE+GFMS6oOJfW5SrbHBS1If8Mk00iaatDQYKaKGNdZWi0qQCqUsMLMsy+7M7u/DOIhrXEoLXzKZnHP+Od+cy8x/VMQwWIa7gK1AI1ANFAIKmAaGga+B48BApk5UBtFDQAfQstyb/E0vcAD4YiWiQ0D7FQrSOQLsWU7kAk4Bm69S4vAN8ACw4FRoaQF9qyABuBt77RZZKjoM3LcKEoc64GOn4ExdA/Zw14JmoM8Z0TtrJAF4F+wR3SYiPyqlCAT9gAvEYm4uhoiglPrXUyKgFAR8XnBrYCWZi5mL9SJCMNsDbhfxeBLTsgAa3ECbphRej4uLE9Nc+GOSqopiritdh7OE5kIMT3YWC/Mxsv3ZAIxemmEkHKWqOEhZYQA0BSjMBZPL0QTjs1HyPVCYF0Qp1eYGmnJyfFwK67Ts/4ANQR/hWILOnVsoLsjFo8EdG0s5+8som6rKmZya4dzFaV7v/Z0cJczELd5suZWSPD+WadFcU0F79yBGNEbXU/WICJqmGt1AFZqbwQtjDI9P0bnzadrfO0ZoZJyJoWG6T33Pq082cX5simcfrqfrWB8l11eiW15e23wjL382RGhcZ/K3MB/1D3NgWy1/6vM8XrOB8tIi5iIRUim5QRPIBwiNTOCyUnzSG+KNHc2sD/op8Hnxez3kZHmpLivkmY4jbKosorWpjtGJaY4OjbHvwRoKfF4CLo3KwhxODk8C8EhVEWA6S5vrdrs0BdD15SBNtTfR89Zuu2VHByUBH3hcvPhoA4dPnCExEaZz12Ns7w5xT2UBPXu2AEKw41NKfF5K8v0kRTDiFnXl+Uh8UYRbRGZj81H/wd3bqS5bj1gmppXk+P7nOT82SXVFMevyAhz6vJ+2F1rJCuTxyp3l3FwUBDNBImlx4rlGzl2OcEtRkCy3i3gyhVIwn0g6ngiGbpzWZ2fFJin67KwYui5L+fanX2Vr5/syORUWM5EQEVMkGV8Sa4pIyr6n7HZd18UwDInY14CKGMbbwL7/+9pEBIBgbi5YCYxoDE1L/0Uuy0EVMYxaIJQpSimFphTJVGqlAod7NeAHYChTlIhci+RnYMCZg71X28sVsBf+SRP9wIdrIOkGTsJ/M+x3QP0qSc4CtzuF9O1zPzC4CpIQaUk0XbSAnYa7rkFyFDu7RjKJHF4CWoGvViA4AzwB7AIkvTHTuc6hCdiGPRUbgTzsA6QOjGBvpB7gdKZO/gJX4qTG+gXfMQAAAABJRU5ErkJggg==" alt="" class="media"></a></li>
								<li><a href="#"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAAEXklEQVRIia2Vy48UVRSHv3vrVlV39WseMIwOyDsM8ggqGEUMkrAwYuJWFrjwkRj8B4xx5cadC+Mj8RFjYmJYYNyIosb4HtCIYUGizoAzY8tMnAc9dHdVdVfde130NMy0MEiYX1LJvXXrnO/m1Mn5iS3Hy9xAu4FDwF5gM9ADCGAWGAF+BE4Ap5dKIpYAHQBeAA7e6Cbz+hp4Gfj8WofyOkGvAV/dBATgIeAk8Nb/ATnAt8BzNwHo1DO0yphZCvQd8OAtQNq6l9a/uyboTeD+ZYC0dRfwfidoD/DsMkLaeoL5CikAAa8DVDRoBACusCghCA0I7KJogcBikfMnBpBYbCsXBoEvLCUJGt4AdihgmxRiz0xTszMLGWGxBiIE46Fmb9EhtoByaDY1WSWJrUFqgwGslGQkxKnFWovvCC43NVo6jGmJL9gO7FbA4ammYWve4chqjw1dHho4M9VgV6/HuUrCmpxi+nKDO7oDJqoJWSUo5XwSbfjnUoTvOfQXfZSE0VrKoTUB7wzXeWUkRCmJIzisHMG+mShl/6Yi52PN0FhMV0/AnzVwA8GXFUM+tmzWhiR1+GIyZGteUk08fptt8uKObj4enmNqJmT1qgLDEyFl4VJzFCUlMK1q7xX9x/4qD+bkwEvb80xHmrmG5nJqWVvymIwMh9YX+PCPOQpJwrq+HMqV9LqCc5UEBTS0RWDR2jJcTXnqzhInLlQpFDI8f3aOvAAlmFRY2+UqyU+XUsoNQEi6rKFeSfCN4eRolShKOFVJuEfX6StlGApTaCT0F32Gxqus6MpgHAcRNvlsvE4j0QxfrGGjJjrj4ilZFNs+KtfrqQ0mGgZftLpmrgn7V7k83C0ZmY4o5D36Cj7nZyNUqukv+fiuw4XpiI19AY04wTEWFfhcnA1ZWfSJGymDBYdXLxomQx2q1FLxHRGsC5wr7VtPEw6sybEy6+Baw8CKHGORYXCgSHk6YqDoUtYOITEm66OF5O4cTFkHaTOs683yS7nG+v48q2brjFbTqqQ16jsksMZC1EBZi0xTbBgjG002FhWDJZdNvuXg6gARNYhqDaSFza6hPNfExAm9aM5XmtyWlTSMHZPAD52YQAnGqgk5V1ITivHI0FPKEsYp1lO8XU7ozSruWBGwNu9ye17xdyoYSSRru3xiBCrwmYwMp2cSejw5JLYcL+8Ezi4EOQKqiSXjOXRlHGailOlIs6HkMRsmxKkl8CSJtgSuJOc5NLVFW4vrCOpNQ3fGYaKe4hhD0ZP3tY3vV2DX1cKBtqBta/RIIZBAam1rLSA19sooWlR0IcCCxeIIgSP43cKgmj8/yoKxbgEpWoCFchfsXdleL/7m6ivRznUUrk7vIeC9/0bcso7RcupFfvQkcGYZIeeAx9ubTod9APh5GSBn6TDRTlBMy4bfvQXIB7TctboUqK2ngUeA728CcAp4DDgCHa3IvMNeR5/OP/uAR2mVYj1QYn4kAqO0GukT4JulbvEv6ofAhwGHwC0AAAAASUVORK5CYII=" alt="" class="media"></a></li>
								<li><a href="#"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAAE80lEQVRIibWWa2wUVRiGn7ntzC67LYUWBAxpQUqkBm+AtrUQE4iQIpgmhGAMYPCCaIiJPxRI9I8GNdGooEAgEECNoCiIYCIaLm0pVLDWAoVSCZXaUiiku1v2MrMznz+WJVCQooH335mcc5555zvzvUeJRiL0ojFAOVACjAD6AQpwEWgG9gM7gYM320S5CehxYDEwsbc3uaw9wFLgp/8CWg68fIuAnloNvNAbSAN2A2X/E5JRLTABSGQeqD0mVN4GCMA40rW7oqtBK4Di2wDJ6EFgfWaQ+XRjSdu9ExoPVGYcfXqHIACfQdpREXDkDoIAxurALM/zME0fpuW/4SwvlULVdQCitoBPQYAsANfBcT0Mn3ndumQiTjJpo6rqLB14zDRNYrEYy1esxvT7qXiynNa2dtrazyIiTCgr4aNlK8gZks/8meUoP65EyR/F9s5+jC4sICsYYNumb9F0jcEDB9LecQ7XTTF96hRM04ebckt04B7Tsqg+UMve6oOUFo9j9osLGTliGFU1tcx5eiYnmjfScbGL0okjcTYsxPhuI9ZIg99aRnFs5jsMD7qsWrcB13GYNnUKx5ua+b2+gUAgwIyK6XRHo/kq0BegKxzmsdJiKqaVU3XgIFmhEO+//Rb1R46ybOUaFr6ygCdKx+CeOkTKB3aTwxvPP8XmHbv4YvMW3nz9NfJychhfWszxppPk9Mvh0XFjSDk2qFqWtnjRoiW6YRiaprH56y3UH23kpefm4nke0Wg3mqZRMa2cTV9t4lRnN49MrsB37jBe0cNY89bQ3nqG+wsLKJ88iZoD1eTmDeDewhEMGXwXAb9FfsEwUqbPIRqJ/B2JRMROJqSttVUi4bCIiNjJpLS0/CWO44iISOOxRqmq3i8ZnQ0npO1c15Wx57pypuW0NJ1sFhER17Glrb1DoiIS/WVdhxKNRPaKyHhVVQn4/TiOg5NK0ScYZO+ePTQ2NhKLx8nt35/s7Cw6L1zkfDjGsPyh5PUNUVlZSTKZpLCwkDlz5yKeRyIeR/WZKIZOcv9mWPHMIRWoVhQFEeFSLIbtOIgIALquEw6HudDZic80KSq6D9d18eIRsvw+wuEwiqrieh62bROLxUjE47iagWPo2LVb4YOZkDu0RolGIqOB+hv9P4ZhYFoW4a4uHMchFAphWhYAFzo7iUaj5BcU4LkuiUSCRCyGlZeHB7BrFbJmPph+GD2pJNPr6oAHroaICJqmAeDz+RARbNsm417XdTRNw3EcVEUBFFJ+CwFY/yry/ceQFYQBBU3k3D0yAyqmR1u/ZXkeBLPTSdbSgKxdAH9UwaDBYJgQyJ6Ebv18dfCtBZ69ZYAIWEHwqeCk4If3kG3vQrwbBg0H8UDVvkHVZuC51yXsYeChmwOAPqG0AwGqPkd2fggn6iC3PwT7gZMEVWtEUUfhucD1UW4B+0jn07Uy/GClGyvdEfh1C7JvHRypBMuA3KFpl04SAtkNGP4youfDqOk66z22S5CO4TV43jx0H/S53NEdDxqroX4nUrcdTjWAqcHgAlBUSDlpi2afL8kaOBs77uK5ZED/ft3StCmk7CWcrC7l+B6k+QCcroPopfRpCuWlHYibBmlGLYZ/KWZgK74AJLoh3A6a0QsoFII/65BPKsroPDMVM1BCoG8+upGNCKBEUNUWNL0GzdyBZuxGuVxEMwjJ2DWgfwC09kc21Mu6AAAAAABJRU5ErkJggg==" alt="" class="media"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</body>

</html>