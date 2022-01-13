<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charSet="utf-8" />
	<meta name="viewport" content="width=device-width" />
	<title>Welcome to CodeIgniter</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/index.css" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/slick.css" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet" />
	<link rel="preload" href="https://multikart-react.vercel.app/_next/static/css/19a7cf1bd30e5a3608be.css" as="style" />
	<link rel="stylesheet" href="https://multikart-react.vercel.app/_next/static/css/19a7cf1bd30e5a3608be.css" data-n-g="" />
	<link rel="preload" href="https://multikart-react.vercel.app/_next/static/css/3a41324401c2dde98a10.css" as="style" />
	<link rel="stylesheet" href="https://multikart-react.vercel.app/_next/static/css/3a41324401c2dde98a10.css" data-n-g="" /><noscript data-n-css="true"></noscript>
	<link rel="preload" href="https://multikart-react.vercel.app/_next/static/chunks/main-673501fd31c7575d2b4f.js" as="script" />
	<link rel="preload" href="https://multikart-react.vercel.app/_next/static/chunks/webpack-94732704547c2c67e861.js" as="script" />
	<link rel="preload" href="https://multikart-react.vercel.app/_next/static/chunks/framework.4f0f880714794e16be83.js" as="script" />
	<link rel="preload" href="https://multikart-react.vercel.app/_next/static/chunks/212534d8.b82b6318f8a1540be6e5.js" as="script" />
	<link rel="preload" href="https://multikart-react.vercel.app/_next/static/chunks/7a76ef8f69d78dbc281fde3a34a26b1bac9be9ea.223f05eaea1d42acd844.js" as="script" />
	<link rel="preload" href="https://multikart-react.vercel.app/_next/static/chunks/2485148ca233fe14f6a62da3b079bb66a4dbb79d.4b851c3c26d539e54279.js" as="script" />
	<link rel="preload" href="https://multikart-react.vercel.app/_next/static/chunks/4ea16775155c1815073d35dc920b1e1cf3a98f1c.99f1f8215d76c76a6757.js" as="script" />
	<link rel="preload" href="https://multikart-react.vercel.app/_next/static/chunks/2066dc6d5cd406cb40ecfc5bf39e5c654611a165.658d695d25ed2cf66cd8.js" as="script" />
	<link rel="preload" href="https://multikart-react.vercel.app/_next/static/chunks/3ca17a0ba42557df8694392176804e343a75fa2b.816d67f896f48c583efa.js" as="script" />
	<link rel="preload" href="https://multikart-react.vercel.app/_next/static/chunks/f196c7d81676c934bc20be3cfd5f7995192e8fba.df620f642af14b1c70b7.js" as="script" />
	<link rel="preload" href="https://multikart-react.vercel.app/_next/static/chunks/107ee01c9f1f1a19b39d6427f96c9a1d8cc404bd.34631583540cf69b872d.js" as="script" />
	<link rel="preload" href="https://multikart-react.vercel.app/_next/static/chunks/314b472fe5bf7ca3bc7932c1587b3d039c546df7.3ac2e10b33faad47994e.js" as="script" />
	<link rel="preload" href="https://multikart-react.vercel.app/_next/static/chunks/pages/_app-a8f7da90051959317371.js" as="script" />
	<link rel="preload" href="https://multikart-react.vercel.app/_next/static/chunks/52066749.7edc7731c9310e125185.js" as="script" />
	<link rel="preload" href="https://multikart-react.vercel.app/_next/static/chunks/7ea7e0c005f8cce583d5996383515cf6e0961248.8ede4b6b87a5dfe8fd17.js" as="script" />
	<link rel="preload" href="https://multikart-react.vercel.app/_next/static/chunks/c8c8a0b55d741233589048615b480e2be30501c7.c7ccc000338f31b61290.js" as="script" />
	<link rel="preload" href="https://multikart-react.vercel.app/_next/static/chunks/06c2cf4b0bb186c8dbc16b8c685b017373eca37c.5c6d6328b161df94080a.js" as="script" />
	<link rel="preload" href="https://multikart-react.vercel.app/_next/static/chunks/63d5d6dc2a1d56966e611f640d3a09f556f075ab.1388d0f8a4a0aae8df1b.js" as="script" />
	<link rel="preload" href="https://multikart-react.vercel.app/_next/static/chunks/9f30b417808d0ca8ad7b83648983cfcc97d95aad.3c4365917ddd4f6c9cb9.js" as="script" />
	<link rel="preload" href="https://multikart-react.vercel.app/_next/static/chunks/558c76060be4a77c9e943275f73b7b0120f7258e.7af2840bc96f50b6cadf.js" as="script" />
	<link rel="preload" href="https://multikart-react.vercel.app/_next/static/chunks/9375858ba27fc480e3c50f854350b759bf054d41.c4c5132e1e6fa14a0cb4.js" as="script" />
	<link rel="preload" href="https://multikart-react.vercel.app/_next/static/chunks/4bc78289d462a364c6de5b3873ba2f1981ad5aa9.801b948bb73012c72204.js" as="script" />
	<link rel="preload" href="https://multikart-react.vercel.app/_next/static/chunks/7ebe74dfbe0b512cef489cd2c9d2ca565962283d.9c8289083d326db37c01.js" as="script" />
	<link rel="preload" href="https://multikart-react.vercel.app/_next/static/chunks/pages/index-194763a08070598465d8.js" as="script" />
</head>

<body onload="document.getElementById('defaultOpen').click();">
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

					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="main-menu">
							<div class="menu-left">
								<!-- <div class="navbar"><a onclick="openNav()">
										<div class="bar-style"> <i class="fa fa-bars sidebar-bar" aria-hidden="true"></i></div>
									</a>
									<div id="mySidenav" class="sidenav"><a class="sidebar-overlay"></a>
										<nav><a onclick="closeNav()">
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
																<div class="col-xl-4"><a href="#" class="mega-menu-banner"><img src="https://multikart-react.vercel.app/_next/static/images/fashion-8fe963c25349f8d9c4e28eb5947dcb20.jpg" alt="" class="img-fluid media"></a></div>
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
								</div>-->
								<div class="brand-logo"><a href="/"><img src="<?php echo base_url(); ?>assets/images/icon/logo.png" alt="" class="img-fluid"></a></div>
							</div>
							<div class="menu-right pull-right">
								<div>
									<div class="main-navbar">
										<div id="mainnav">
											<div onclick="handleOpen()" class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
											<ul class="nav-menu" id="mobileNav" style="right: 0px;">
												<li onclick="handleClose()" class="back-btn">

													<div class="mobile-back text-right"><span>Back navbar</span><i class="fa fa-angle-right pl-2" aria-hidden="true"></i></div>
												</li>
												<li class=" "><a href="#special"> Home</a>
												</li>
												<li class="mega-menu "><a href="#special"> Kategori<span class="sub-arrow"></span></a>
													<div class="mega-menu-container  ">
														<div class="container">
															<div class="row">
																<div class="col mega-box ">
																	<div class="link-section">
																		<div class="menu-title">
																			<h5>Kategori 1</h5>
																		</div>
																		<div class="menu-content">
																			<ul>
																				<li><a href="#">Sub Kategori 1</a></li>
																				<li><a href="#">Sub Kategori 2</a></li>
																				<li><a href="#">Sub Kategori 3</a></li>
																			</ul>
																		</div>
																	</div>
																</div>
																<div class="col mega-box ">
																	<div class="link-section">
																		<div class="menu-title">
																			<h5>Kategori 2</h5>
																		</div>
																		<div class="menu-content">
																			<ul>
																				<li><a href="#">Sub Kategori 1</a></li>
																				<li><a href="#">Sub Kategori 2</a></li>
																				<li><a href="#">Sub Kategori 3</a></li>
																			</ul>
																		</div>
																	</div>
																</div>
																<div class="col mega-box ">
																	<div class="link-section">
																		<div class="menu-title">
																			<h5>Kategori 3</h5>
																		</div>
																		<div class="menu-content">
																			<ul>

																				<li><a href="#">Sub Kategori 1</a></li>
																				<li><a href="#">Sub Kategori 2</a></li>
																				<li><a href="#">Sub Kategori 3</a></li>
																			</ul>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</li>
												<li class=" "><a href="#special"> Products</a>
													<!-- <ul class="nav-submenu">
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
													</ul> -->
												</li>

												<li><a href="#social-media"> Social</a>
													<!-- <div class="mega-menu-container  ">
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
													</div> -->
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
		<div class="slider home-slider">
			<div>

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
			<div>

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
			<div>

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
			<div>

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
			<div>
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
		<section id="special" class="section-b-space p-t-0 ratio_asos">
			<div class="container">
				<div class="title1 section-t-space">
					<h4></h4>
					<h2 class="title-inner1">special products</h2>
					<div class="line"></div>
				</div>
				<div class="theme-tab" data-tabs="true">
					<ul class="tabs tab-title" role="tablist">
						<li class="tab-list active" id="defaultOpen" onclick="openCity(event, 'new_arrival')">NEW ARRIVAL</li>
						<li class="tab-list" onclick="openCity(event, 'featured')">FEATURED </li>
						<li class="tab-list" onclick="openCity(event, 'special')">SPECIAL</li>
					</ul>
					<div class="react-tabs__tab-panel react-tabs__tab-panel--selected" role="tabpanel" id="react-tabs-1" aria-labelledby="react-tabs-0">
						<div class="row">
							<div id="new_arrival" class="content">
								<div class="container">
									<div class="row">
										<div class="col-md-3 col-12">
											<div class="product-box product-wrap">
												<div class="img-wrapper">
													<div class="lable-block"></div>
													<div class="front"><a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="assets/images/pro3/2.jpg" alt="" class="img-fluid media"></a></div>
													<div class="back"><img src="assets/images/pro3/6.jpg" alt="" class="img-fluid m-auto media"></div>
													<div class="cart-info cart-wrap d-flex flex-column">
														<button title="Add to cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
														<!-- <a title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a> -->
														<a title="Quick View" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-search" aria-hidden="true"></i></a>
														<!-- <a title="Compare"><i class="fa fa-refresh" aria-hidden="true"></i></a> -->
													</div>
													<ul class="product-thumb-list">
														<li class="grid_thumb_img "><a title="Add to Wishlist"><img src="assets/images/pro3/2.jpg" alt="wishlist" class="media"></a></li>
														<li class="grid_thumb_img "><a title="Add to Wishlist"><img src="assets/images/pro3/6.jpg" alt="wishlist" class="media"></a></li>
														<li class="grid_thumb_img "><a title="Add to Wishlist"><img src="assets/images/pro3/25.jpg" alt="wishlist" class="media"></a></li>
													</ul>
												</div>
												<div class="product-detail undefined">
													<div>
														<div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
														<h6>trim dress</h6>
														<h4>$87.00<del><span class="money">$145.00</span></del></h4>
														<ul class="color-variant">
															<li class="yellow" title="yellow"></li>
															<li class="white" title="white"></li>
															<li class="pink" title="pink"></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-3 col-12">
											<div class="product-box product-wrap">
												<div class="img-wrapper">
													<div class="lable-block"></div>
													<div class="front"><a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="assets/images/pro3/2.jpg" alt="" class="img-fluid media"></a></div>
													<div class="back"><img src="assets/images/pro3/4.jpg" alt="" class="img-fluid m-auto media"></div>
													<div class="cart-info cart-wrap d-flex flex-column">
														<button title="Add to cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
														<!-- <a title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a> -->
														<a title="Quick View" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-search" aria-hidden="true"></i></a>
														<!-- <a title="Compare"><i class="fa fa-refresh" aria-hidden="true"></i></a> -->
													</div>
													<ul class="product-thumb-list">
														<li class="grid_thumb_img "><a title="Add to Wishlist"><img src="assets/images/pro3/2.jpg" alt="wishlist" class="media"></a></li>
														<li class="grid_thumb_img "><a title="Add to Wishlist"><img src="assets/images/pro3/4.jpg" alt="wishlist" class="media"></a></li>
														<li class="grid_thumb_img "><a title="Add to Wishlist"><img src="assets/images/pro3/5.jpg" alt="wishlist" class="media"></a></li>
														<li class="grid_thumb_img "><a title="Add to Wishlist"><img src="assets/images/pro3/15.jpg" alt="wishlist" class="media"></a></li>
													</ul>
												</div>
												<div class="product-detail undefined">
													<div>
														<div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
														<h6>belted dress</h6>
														<h4>$111.00<del><span class="money">$185.00</span></del></h4>
														<ul class="color-variant">
															<li class="olive" title="olive"></li>
															<li class="navy" title="navy"></li>
															<li class="red" title="red"></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-3 col-12">
											<div class="product-box product-wrap">
												<div class="img-wrapper">
													<div class="lable-block"></div>
													<div class="front"><a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="assets/images/pro3/2.jpg" alt="" class="img-fluid media"></a></div>
													<div class="back"><img src="assets/images/pro3/2.jpg" alt="" class="img-fluid m-auto media"></div>
													<div class="cart-info cart-wrap d-flex flex-column">
														<button title="Add to cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
														<!-- <a title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a> -->
														<a title="Quick View" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-search" aria-hidden="true"></i></a>
														<!-- <a title="Compare"><i class="fa fa-refresh" aria-hidden="true"></i></a> -->
													</div>
													<ul class="product-thumb-list">
														<li class="grid_thumb_img "><a title="Add to Wishlist"><img src="assets/images/pro3/1.jpg" alt="wishlist" class="media"></a></li>
														<li class="grid_thumb_img "><a title="Add to Wishlist"><img src="assets/images/pro3/2.jpg" alt="wishlist" class="media"></a></li>
													</ul>
												</div>
												<div class="product-detail undefined">
													<div>
														<div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
														<h6>fitted dress</h6>
														<h4>$104.40<del><span class="money">$174.00</span></del></h4>
														<ul class="color-variant">
															<li class="white" title="white"></li>
															<li class="black" title="black"></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>




							</div>
						</div>

						<div id="featured" class="content">

							<div class="container">
								<div class="row">
									<div class="col-md-3 col-12">
										<div class="product-box product-wrap">
											<div class="img-wrapper">
												<div class="lable-block"></div>
												<div class="front"><a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="assets/images/pro3/2.jpg" alt="" class="img-fluid media"></a></div>
												<div class="back"><img src="assets/images/pro3/2.jpg" alt="" class="img-fluid m-auto media"></div>
												<div class="cart-info cart-wrap d-flex flex-column">
													<button title="Add to cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
													<!-- <a title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a> -->
													<a title="Quick View" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-search" aria-hidden="true"></i></a>
													<!-- <a title="Compare"><i class="fa fa-refresh" aria-hidden="true"></i></a> -->
												</div>
												<ul class="product-thumb-list">
													<li class="grid_thumb_img "><a title="Add to Wishlist"><img src="assets/images/pro3/2.jpg" alt="wishlist" class="media"></a></li>
													<li class="grid_thumb_img "><a title="Add to Wishlist"><img src="assets/images/pro3/2.jpg" alt="wishlist" class="media"></a></li>
													<li class="grid_thumb_img "><a title="Add to Wishlist"><img src="assets/images/pro3/15.jpg" alt="wishlist" class="media"></a></li>
												</ul>
											</div>
											<div class="product-detail undefined">
												<div>
													<div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
													<h6>sleeveless dress</h6>
													<h4>$261.00<del><span class="money">$290.00</span></del></h4>
													<ul class="color-variant">
														<li class="pink" title="pink"></li>
														<li class="white" title="white"></li>
														<li class="black" title="black"></li>
													</ul>
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-3 col-12">
										<div class="product-box product-wrap">
											<div class="img-wrapper">
												<div class="lable-block"></div>
												<div class="front"><a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="assets/images/pro3/2.jpg" alt="" class="img-fluid media"></a></div>
												<div class="back"><img src="assets/images/pro3/16.jpg" alt="" class="img-fluid m-auto media"></div>
												<div class="cart-info cart-wrap d-flex flex-column">
													<button title="Add to cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
													<!-- <a title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a> -->
													<a title="Quick View" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-search" aria-hidden="true"></i></a>
													<!-- <a title="Compare"><i class="fa fa-refresh" aria-hidden="true"></i></a> -->
												</div>
												<ul class="product-thumb-list">
													<li class="grid_thumb_img "><a title="Add to Wishlist"><img src="assets/images/pro3/2.jpg" alt="wishlist" class="media"></a></li>
													<li class="grid_thumb_img "><a title="Add to Wishlist"><img src="assets/images/pro3/16.jpg" alt="wishlist" class="media"></a></li>
												</ul>
											</div>
											<div class="product-detail undefined">
												<div>
													<div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
													<h6>v-neck dress</h6>
													<h4>$94.50<del><span class="money">$315.00</span></del></h4>
													<ul class="color-variant">
														<li class="yellow" title="yellow"></li>
														<li class="black" title="black"></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="special" class="content">

							<div class="container">
								<div class="row">
									<div class="col-md-3 col-12">
										<div class="product-box product-wrap">
											<div class="img-wrapper">
												<div class="lable-block"></div>
												<div class="front"><a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="assets/images/pro3/2.jpg" alt="" class="img-fluid media"></a></div>
												<div class="back"><img src="assets/images/pro3/7.jpg" alt="" class="img-fluid m-auto media"></div>
												<div class="cart-info cart-wrap d-flex flex-column">
													<button title="Add to cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
													<!-- <a title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a> -->
													<a title="Quick View" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-search" aria-hidden="true"></i></a>
													<!-- <a title="Compare"><i class="fa fa-refresh" aria-hidden="true"></i></a> -->
												</div>
												<ul class="product-thumb-list">
													<li class="grid_thumb_img "><a title="Add to Wishlist"><img src="assets/images/pro3/2.jpg" alt="wishlist" class="media"></a></li>
													<li class="grid_thumb_img "><a title="Add to Wishlist"><img src="assets/images/pro3/7.jpg" alt="wishlist" class="media"></a></li>
												</ul>
											</div>
											<div class="product-detail undefined">
												<div>
													<div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
													<h6>belted top</h6>
													<h4>$49.00<del><span class="money">$98.00</span></del></h4>
													<ul class="color-variant">
														<li class="white" title="white"></li>
														<li class="skyblue" title="skyblue"></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-3 col-12">
										<div class="product-box product-wrap">
											<div class="img-wrapper">
												<div class="lable-block"></div>
												<div class="front"><a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="assets/images/pro3/2.jpg" alt="" class="img-fluid media"></a></div>
												<div class="back"><img src="assets/images/pro3/10.jpg" alt="" class="img-fluid m-auto media"></div>
												<div class="cart-info cart-wrap d-flex flex-column">
													<button title="Add to cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
													<!-- <a title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a> -->
													<a title="Quick View" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-search" aria-hidden="true"></i></a>
													<!-- <a title="Compare"><i class="fa fa-refresh" aria-hidden="true"></i></a> -->
												</div>
												<ul class="product-thumb-list">
													<li class="grid_thumb_img "><a title="Add to Wishlist"><img src="assets/images/pro3/2.jpg" alt="wishlist" class="media"></a></li>
													<li class="grid_thumb_img "><a title="Add to Wishlist"><img src="assets/images/pro3/10.jpg" alt="wishlist" class="media"></a></li>
												</ul>
											</div>
											<div class="product-detail undefined">
												<div>
													<div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
													<h6>waist dress</h6>
													<h4>$184.00<del><span class="money">$230.00</span></del></h4>
													<ul class="color-variant">
														<li class="green" title="green"></li>
														<li class="black" title="black"></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-3 col-12">
										<div class="product-box product-wrap">
											<div class="img-wrapper">
												<div class="lable-block"></div>
												<div class="front"><a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="assets/images/pro3/2.jpg" alt="" class="img-fluid media"></a></div>
												<div class="back"><img src="assets/images/pro3/12.jpg" alt="" class="img-fluid m-auto media"></div>
												<div class="cart-info cart-wrap d-flex flex-column">
													<button title="Add to cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
													<!-- <a title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a> -->
													<a title="Quick View" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-search" aria-hidden="true"></i></a>
													<!-- <a title="Compare"><i class="fa fa-refresh" aria-hidden="true"></i></a> -->
												</div>
												<ul class="product-thumb-list">
													<li class="grid_thumb_img "><a title="Add to Wishlist"><img src="assets/images/pro3/2.jpg" alt="wishlist" class="media"></a></li>
													<li class="grid_thumb_img "><a title="Add to Wishlist"><img src="assets/images/pro3/10.jpg" alt="wishlist" class="media"></a></li>
												</ul>
												<div class="product-detail undefined">
													<div>
														<div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
														<h6>crop top</h6>
														<h4>$72.60<del><span class="money">$121.00</span></del></h4>
														<ul class="color-variant">
															<li class="olive" title="olive"></li>
															<li class="gray" title="gray"></li>
															<li class="red" title="red"></li>
														</ul>
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
				<div class="react-tabs__tab-panel" role="tabpanel" id="react-tabs-3" aria-labelledby="react-tabs-2"></div>
				<div class="react-tabs__tab-panel" role="tabpanel" id="react-tabs-5" aria-labelledby="react-tabs-4"></div>
			</div>
	</div>
	</section>
	</div>

	<section id="social-media" class="instagram ratio_square">
		<div class="p-0 container-fluid">
			<div class="row">
				<div class="pt-0 col">
					<h2 class="title-borderless"># instagram</h2>
					<div class="slide-7 no-arrow slick-instagram">
						<div class=" slider slick-slider slick-initialized" dir="ltr"><button type="button" data-role="none" class="slick-arrow slick-prev" style="display: block;"> Previous</button>
							<div class="slick-list">
								<div class="slick-track" style="opacity: 1; transform: translate3d(-1512px, 0px, 0px); width: 4968px;">
									<div data-index="-7" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 216px;">
										<div>
											<div tabindex="-1" style="width: 100%; display: inline-block;"><a>
													<div class="instagram-box"><img alt="" src="assets/images/insta/3.jpg" class="bg-img media" style="width: 100%;">
														<div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
													</div>
												</a></div>
										</div>
									</div>
									<div data-index="-6" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 216px;">
										<div>
											<div tabindex="-1" style="width: 100%; display: inline-block;"><a>
													<div class="instagram-box"><img alt="" src="assets/images/insta/5.jpg" class="bg-img media" style="width: 100%;">
														<div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
													</div>
												</a></div>
										</div>
									</div>
									<div data-index="-5" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 216px;">
										<div>
											<div tabindex="-1" style="width: 100%; display: inline-block;"><a>
													<div class="instagram-box"><img alt="" src="assets/images/insta/7.jpg" class="bg-img media" style="width: 100%;">
														<div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
													</div>
												</a></div>
										</div>
									</div>
									<div data-index="-4" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 216px;">
										<div>
											<div tabindex="-1" style="width: 100%; display: inline-block;"><a>
													<div class="instagram-box"><img alt="" src="assets/images/insta/9.jpg" class="bg-img media" style="width: 100%;">
														<div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
													</div>
												</a></div>
										</div>
									</div>
									<div data-index="-3" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 216px;">
										<div>
											<div tabindex="-1" style="width: 100%; display: inline-block;"><a>
													<div class="instagram-box"><img alt="" src="assets/images/insta/11.jpg" class="bg-img media" style="width: 100%;">
														<div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
													</div>
												</a></div>
										</div>
									</div>
									<div data-index="-2" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 216px;">
										<div>
											<div tabindex="-1" style="width: 100%; display: inline-block;"><a>
													<div class="instagram-box"><img alt="" src="assets/images/insta/13.jpg" class="bg-img media" style="width: 100%;">
														<div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
													</div>
												</a></div>
										</div>
									</div>
									<div data-index="-1" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 216px;">
										<div>
											<div tabindex="-1" style="width: 100%; display: inline-block;"><a>
													<div class="instagram-box"><img alt="" src="assets/images/insta/2.jpg" class="bg-img media" style="width: 100%;">
														<div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
													</div>
												</a></div>
										</div>
									</div>
									<div data-index="0" class="slick-slide slick-active slick-current" tabindex="-1" aria-hidden="false" style="outline: none; width: 216px;">
										<div>
											<div tabindex="-1" style="width: 100%; display: inline-block;"><a>
													<div class="instagram-box"><img alt="" src="https://multikart-react.vercel.app/assets/images/insta/1.jpg" class="bg-img media" style="width: 100%;">
														<div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
													</div>
												</a></div>
										</div>
									</div>
									<div data-index="1" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 216px;">
										<div>
											<div tabindex="-1" style="width: 100%; display: inline-block;"><a>
													<div class="instagram-box"><img alt="" src="https://multikart-react.vercel.app/assets/images/insta/3.jpg" class="bg-img media" style="width: 100%;">
														<div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
													</div>
												</a></div>
										</div>
									</div>
									<div data-index="2" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 216px;">
										<div>
											<div tabindex="-1" style="width: 100%; display: inline-block;"><a>
													<div class="instagram-box"><img alt="" src="https://multikart-react.vercel.app/assets/images/insta/5.jpg" class="bg-img media" style="width: 100%;">
														<div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
													</div>
												</a></div>
										</div>
									</div>
									<div data-index="3" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 216px;">
										<div>
											<div tabindex="-1" style="width: 100%; display: inline-block;"><a>
													<div class="instagram-box"><img alt="" src="https://multikart-react.vercel.app/assets/images/insta/7.jpg" class="bg-img media" style="width: 100%;">
														<div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
													</div>
												</a></div>
										</div>
									</div>
									<div data-index="4" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 216px;">
										<div>
											<div tabindex="-1" style="width: 100%; display: inline-block;"><a>
													<div class="instagram-box"><img alt="" src="https://multikart-react.vercel.app/assets/images/insta/9.jpg" class="bg-img media" style="width: 100%;">
														<div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
													</div>
												</a></div>
										</div>
									</div>
									<div data-index="5" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 216px;">
										<div>
											<div tabindex="-1" style="width: 100%; display: inline-block;"><a>
													<div class="instagram-box"><img alt="" src="https://multikart-react.vercel.app/assets/images/insta/11.jpg" class="bg-img media" style="width: 100%;">
														<div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
													</div>
												</a></div>
										</div>
									</div>
									<div data-index="6" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 216px;">
										<div>
											<div tabindex="-1" style="width: 100%; display: inline-block;"><a>
													<div class="instagram-box"><img alt="" src="https://multikart-react.vercel.app/assets/images/insta/13.jpg" class="bg-img media" style="width: 100%;">
														<div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
													</div>
												</a></div>
										</div>
									</div>
									<div data-index="7" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 216px;">
										<div>
											<div tabindex="-1" style="width: 100%; display: inline-block;"><a>
													<div class="instagram-box"><img alt="" src="https://multikart-react.vercel.app/assets/images/insta/2.jpg" class="bg-img media" style="width: 100%;">
														<div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
													</div>
												</a></div>
										</div>
									</div>
									<div data-index="8" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 216px;">
										<div>
											<div tabindex="-1" style="width: 100%; display: inline-block;"><a>
													<div class="instagram-box"><img alt="" src="https://multikart-react.vercel.app/assets/images/insta/4.jpg" class="bg-img media" style="width: 100%;">
														<div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
													</div>
												</a></div>
										</div>
									</div>
									<div data-index="9" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 216px;">
										<div>
											<div tabindex="-1" style="width: 100%; display: inline-block;"><a>
													<div class="instagram-box"><img alt="" src="https://multikart-react.vercel.app/assets/images/insta/3.jpg" class="bg-img media" style="width: 100%;">
														<div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
													</div>
												</a></div>
										</div>
									</div>
									<div data-index="10" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 216px;">
										<div>
											<div tabindex="-1" style="width: 100%; display: inline-block;"><a>
													<div class="instagram-box"><img alt="" src="https://multikart-react.vercel.app/assets/images/insta/6.jpg" class="bg-img media" style="width: 100%;">
														<div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
													</div>
												</a></div>
										</div>
									</div>
									<div data-index="11" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 216px;">
										<div>
											<div tabindex="-1" style="width: 100%; display: inline-block;"><a>
													<div class="instagram-box"><img alt="" src="assets/images/insta/7.jpg" class="bg-img media" style="width: 100%;">
														<div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
													</div>
												</a></div>
										</div>
									</div>
									<div data-index="12" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 216px;">
										<div>
											<div tabindex="-1" style="width: 100%; display: inline-block;"><a>
													<div class="instagram-box"><img alt="" src="assets/images/insta/9.jpg" class="bg-img media" style="width: 100%;">
														<div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
													</div>
												</a></div>
										</div>
									</div>
									<div data-index="13" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 216px;">
										<div>
											<div tabindex="-1" style="width: 100%; display: inline-block;"><a>
													<div class="instagram-box"><img alt="" src="assets/images/insta/11.jpg" class="bg-img media" style="width: 100%;">
														<div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
													</div>
												</a></div>
										</div>
									</div>
									<div data-index="14" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 216px;">
										<div>
											<div tabindex="-1" style="width: 100%; display: inline-block;"><a>
													<div class="instagram-box"><img alt="" src="assets/images/insta/13.jpg" class="bg-img media" style="width: 100%;">
														<div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
													</div>
												</a></div>
										</div>
									</div>
									<div data-index="15" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 216px;">
										<div>
											<div tabindex="-1" style="width: 100%; display: inline-block;"><a>
													<div class="instagram-box"><img alt="" src="assets/images/insta/2.jpg" class="bg-img media" style="width: 100%;">
														<div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
													</div>
												</a></div>
										</div>
									</div>
								</div>
							</div><button type="button" data-role="none" class="slick-arrow slick-next" style="display: block;"> Next</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="section-b-space">
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="slider slick-slider slide-6 no-arrow slick-initialized" dir="ltr"><button type="button" data-role="none" class="slick-arrow slick-prev" style="display: block;"> Previous</button>
							<div class="slick-list">
								<div class="slick-track" style="width: 5038px; opacity: 1; transform: translate3d(-1374px, 0px, 0px);">
									<div data-index="-6" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 229px;">
										<div>
											<div tabindex="-1" style="width: 100%; display: inline-block;">
												<div class="logo-block"><a><img src="assets/images/logos/3.png" alt="" class="media"></a></div>
											</div>
										</div>
									</div>
									<div data-index="-5" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 229px;">
										<div>
											<div tabindex="-1" style="width: 100%; display: inline-block;">
												<div class="logo-block"><a><img src="assets/images/logos/4.png" alt="" class="media"></a></div>
											</div>
										</div>
									</div>
									<div data-index="-4" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 229px;">
										<div>
											<div tabindex="-1" style="width: 100%; display: inline-block;">
												<div class="logo-block"><a><img src="assets/images/logos/5.png" alt="" class="media"></a></div>
											</div>
										</div>
									</div>
									<div data-index="-3" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 229px;">
										<div>
											<div tabindex="-1" style="width: 100%; display: inline-block;">
												<div class="logo-block"><a><img src="assets/images/logos/6.png" alt="" class="media"></a></div>
											</div>
										</div>
									</div>
									<div data-index="-2" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 229px;">
										<div>
											<div tabindex="-1" style="width: 100%; display: inline-block;">
												<div class="logo-block"><a><img src="assets/images/logos/7.png" alt="" class="media"></a></div>
											</div>
										</div>
									</div>
									<div data-index="-1" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 229px;">
										<div>
											<div tabindex="-1" style="width: 100%; display: inline-block;">
												<div class="logo-block"><a><img src="assets/images/logos/8.png" alt="" class="media"></a></div>
											</div>
										</div>
									</div>
									<div data-index="0" class="slick-slide slick-active slick-current" tabindex="-1" aria-hidden="false" style="outline: none; width: 229px;">
										<div>
											<div tabindex="-1" style="width: 100%; display: inline-block;">
												<div class="logo-block"><a><img src="assets/images/logos/1.png" alt="" class="media"></a></div>
											</div>
										</div>
									</div>
									<div data-index="1" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 229px;">
										<div>
											<div tabindex="-1" style="width: 100%; display: inline-block;">
												<div class="logo-block"><a><img src="assets/images/logos/2.png" alt="" class="media"></a></div>
											</div>
										</div>
									</div>
									<div data-index="2" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 229px;">
										<div>
											<div tabindex="-1" style="width: 100%; display: inline-block;">
												<div class="logo-block"><a><img src="assets/images/logos/3.png" alt="" class="media"></a></div>
											</div>
										</div>
									</div>
									<div data-index="3" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 229px;">
										<div>
											<div tabindex="-1" style="width: 100%; display: inline-block;">
												<div class="logo-block"><a><img src="assets/images/logos/4.png" alt="" class="media"></a></div>
											</div>
										</div>
									</div>
									<div data-index="4" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 229px;">
										<div>
											<div tabindex="-1" style="width: 100%; display: inline-block;">
												<div class="logo-block"><a><img src="assets/images/logos/5.png" alt="" class="media"></a></div>
											</div>
										</div>
									</div>
									<div data-index="5" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 229px;">
										<div>
											<div tabindex="-1" style="width: 100%; display: inline-block;">
												<div class="logo-block"><a><img src="assets/images/logos/6.png" alt="" class="media"></a></div>
											</div>
										</div>
									</div>
									<div data-index="6" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 229px;">
										<div>
											<div tabindex="-1" style="width: 100%; display: inline-block;">
												<div class="logo-block"><a><img src="assets/images/logos/7.png" alt="" class="media"></a></div>
											</div>
										</div>
									</div>
									<div data-index="7" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 229px;">
										<div>
											<div tabindex="-1" style="width: 100%; display: inline-block;">
												<div class="logo-block"><a><img src="assets/images/logos/8.png" alt="" class="media"></a></div>
											</div>
										</div>
									</div>
									<div data-index="8" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 229px;">
										<div>
											<div tabindex="-1" style="width: 100%; display: inline-block;">
												<div class="logo-block"><a><img src="assets/images/logos/1.png" alt="" class="media"></a></div>
											</div>
										</div>
									</div>
									<div data-index="9" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 229px;">
										<div>
											<div tabindex="-1" style="width: 100%; display: inline-block;">
												<div class="logo-block"><a><img src="assets/images/logos/2.png" alt="" class="media"></a></div>
											</div>
										</div>
									</div>
									<div data-index="10" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 229px;">
										<div>
											<div tabindex="-1" style="width: 100%; display: inline-block;">
												<div class="logo-block"><a><img src="assets/images/logos/3.png" alt="" class="media"></a></div>
											</div>
										</div>
									</div>
									<div data-index="11" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 229px;">
										<div>
											<div tabindex="-1" style="width: 100%; display: inline-block;">
												<div class="logo-block"><a><img src="assets/images/logos/4.png" alt="" class="media"></a></div>
											</div>
										</div>
									</div>
									<div data-index="12" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 229px;">
										<div>
											<div tabindex="-1" style="width: 100%; display: inline-block;">
												<div class="logo-block"><a><img src="assets/images/logos/5.png" alt="" class="media"></a></div>
											</div>
										</div>
									</div>
									<div data-index="13" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 229px;">
										<div>
											<div tabindex="-1" style="width: 100%; display: inline-block;">
												<div class="logo-block"><a><img src="assets/images/logos/6.png" alt="" class="media"></a></div>
											</div>
										</div>
									</div>
									<div data-index="14" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 229px;">
										<div>
											<div tabindex="-1" style="width: 100%; display: inline-block;">
												<div class="logo-block"><a><img src="assets/images/logos/7.png" alt="" class="media"></a></div>
											</div>
										</div>
									</div>
									<div data-index="15" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 229px;">
										<div>
											<div tabindex="-1" style="width: 100%; display: inline-block;">
												<div class="logo-block"><a><img src="<?php echo base_url(); ?>assets/images/logos/8.png" alt="" class="media"></a></div>
											</div>
										</div>
									</div>
								</div>
							</div><button type="button" data-role="none" class="slick-arrow slick-next" style="display: block;"> Next</button>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
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
	<section class="p-0">
		<div class="full-banner parallax-banner1 parallax text-center p-left">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="banner-contain">
							<h2>2021</h2>
							<h3>fashion trends</h3>
							<h4>special offer</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer class="footer-light undefined">
		<div class="light-layout upper-footer">
			<div class="container">
				<section class="small-section border-section border-top-0">
					<div class="row">
						<div class="col-lg-8">
							<div class="subscribe">
								<div>
									<h4>CONTACT US!</h4>
									<p>Never Miss Anything From Multikart By Signing Up To Our Newsletter. </p>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<form>
								<input placeholder="Enter your email" type="text" class="form-control form-control mb-3">
								<input placeholder="Subject" type="text" class="form-control form-control mb-3">
								<textarea placeholder="Messages" rows="3" class="form-control form-control mb-3"></textarea>
								<button type="submit" class="btn btn-solid btn btn-secondary">Contact Us</button>
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
						<div class="footer-contant mb-3" style="display: block;">
							<div class="footer-logo"><a href="/"><img src="<?php echo base_url(); ?>assets/images/icon/logo.png" alt="" class="img-fluid"></a></div>
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
								<h4>Catalogue</h4>
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
								<h4>Navigation</h4>
							</div>
							<div class="footer-contant" style="display: block;">
								<ul>
									<li><a href="#special">Category</a></li>
									<li><a href="#special">Product</a></li>
									<li><a href="#social-media">Social</a></li>
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

								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- <div class="sub-footer undefined">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12 col-xl-12">
						<div class="footer-end">
							<p><i class="fa fa-copyright" aria-hidden="true"></i> 2020-21 themeforest powered by pixelstrap</p>
						</div>
					</div>

				</div>
			</div>
		</div> -->
	</footer>
	<!-- <script id="__NEXT_DATA__" type="application/json">
		{
			"props": {
				"pageProps": {
					"apolloState": {}
				}
			},
			"page": "/",
			"query": {},
			"buildId": "5r8Y0QIRftY179HaA2Di4",
			"runtimeConfig": {},
			"nextExport": false,
			"isFallback": false,
			"gip": true,
			"head": [
				["meta", {
					"charSet": "utf-8"
				}],
				["meta", {
					"name": "viewport",
					"content": "width=device-width"
				}]
			]
		}
	</script> -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered">
			<div class="modal-content">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				<div class="modal-body px-3">
					<div class="row">
						<div class="col-12 col-md-6">
							<img class="w-100" src="assets/images/pro3/2.jpg" />
						</div>
						<div class="col-12 col-md-6">
							<div class="product-right">
								<h2> trim dress </h2>
								<h3>$145.00</h3>
								<ul class="color-variant">
									<ul class="color-variant">
										<ul class="color-variant">
											<li class="yellow" title="yellow"></li>
											<li class="white" title="white"></li>
											<li class="pink" title="pink"></li>
										</ul>
									</ul>
								</ul>
								<div class="border-product">
									<h6 class="product-title">product details</h6>
									<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
								</div>
								<div class="product-description border-product">
									<h6 class="product-title">quantity</h6>
									<div class="qty-box d-flex align-items-baseline justify-content-between">
										<div class="input-group"><span class="input-group-prepend"><button type="button" class="btn quantity-left-minus" data-type="minus" data-field=""><i class="fa fa-angle-left"></i></button></span><input type="text" name="quantity" class="form-control input-number" value="1"><span class="input-group-prepend"><button type="button" class="btn quantity-right-plus" data-type="plus" data-field=""><i class="fa fa-angle-right"></i></button></span></div>

										<div class="product-buttons"><button class="btn btn-solid">add to cart</button></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
	<script nomodule="" src="https://multikart-react.vercel.app/_next/static/chunks/polyfills-e38e4d741cb5c5eaf613.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
	<script>
		// 	function openTab(evt, tabName) {
		//     var i, tabcontent, tablinks;
		//     tabcontent = document.getElementsByClassName("tabcontent");
		//     for (i = 0; i < tabcontent.length; i++) {
		//       tabcontent[i].style.display = "none";
		//     }
		//     tablinks = document.getElementsByClassName("tablinks");
		//     for (i = 0; i < tablinks.length; i++) {
		//       tablinks[i].className = tablinks[i].className.replace(" active", "");
		//     }
		//     document.getElementById(tabName).style.display = "block";
		//     evt.currentTarget.className += " active";
		//   }


		function openCity(evt, cityName) {
			var i, tabcontent, tablinks;
			tabcontent = document.getElementsByClassName("content");

			for (i = 0; i < tabcontent.length; i++) {
				tabcontent[i].style.display = "none";
			}
			tablinks = document.getElementsByClassName("tab-list");
			for (i = 0; i < tablinks.length; i++) {
				tablinks[i].className = tablinks[i].className.replace(" active", "");
			}
			document.getElementById(cityName).style.display = "block";
			evt.currentTarget.className += " active";
		}
		document.getElementById("defaultOpen").click();

		function closeNav() {
			document.getElementById("mySidenav").style.left = "-300px";
		}

		function openNav() {
			document.getElementById("mySidenav").style.left = "0";
		}

		function handleClose() {
			document.getElementById("mobileNav").style.right = "-300px";
		}

		function handleOpen() {
			document.getElementById("mobileNav").style.right = "0px";
		}
	</script>
</body>

</html>