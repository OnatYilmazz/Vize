<?php include'panel/baglanti.php';

$ayar=$baglanti->prepare("SELECT * from ayar  where ayarid=?");

$ayar->execute(array(2));

$ayarcek=$ayar->fetch(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>Yılmaz İnşaat</title>

	<!-- Mobile Specific Metas
	================================================== -->

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


	<!-- CSS
	================================================== -->

	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Template styles-->
	<link rel="stylesheet" href="css/style.css">
	<!-- Responsive styles-->
	<link rel="stylesheet" href="css/responsive.css">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Animation -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Colorbox -->
	<link rel="stylesheet" href="css/colorbox.css">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
	<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body>

	<div class="body-inner">

		<div id="top-bar" class="top-bar">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
						<ul class="top-info">
							<li><i class="fa fa-map-marker">&nbsp;</i>
								<p class="info-text"><?php echo $ayarcek['adres']?></p>
							</li>
						</ul>
					</div>
					<!--/ Top info end -->

					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 top-social text-right">
						<ul class="unstyled">
							<li>
								<a title="Facebook" href="<?php echo $ayarcek['facebook']?>">
									<span class="social-icon"><i class="fa fa-facebook"></i></span>
								</a>
								<a title="Twitter" href="<?php echo $ayarcek['twitter']?>">
									<span class="social-icon"><i class="fa fa-twitter"></i></span>
								</a>
								<a title="Instagram" href="<?php echo $ayarcek['instagram']?>">
									<span class="social-icon"><i class="fa fa-instagram"></i></span>
								</a>
								<a title="Youtube" href="<?php echo $ayarcek['youtube']?>">
									<span class="social-icon"><i class="fa fa-youtube"></i></span>
								</a>
							</li>
						</ul>
					</div>
					<!--/ Top social end -->
				</div>
				<!--/ Content row end -->
			</div>
			<!--/ Container end -->
		</div>
		<!--/ Topbar end -->

		<!-- Header start -->
		<header id="header" class="header-one">
			<div class="container">
				<div class="row">
					<div class="logo-area clearfix">
						<div class="logo col-xs-12 col-md-3">
							<a href="index.php">
								<img src="logo.png" alt="">
							</a>
						</div><!-- logo end -->

						<div class="col-xs-12 col-md-9 header-right">
							<ul class="top-info-box">
								<li>
									<div class="info-box">
										<div class="info-box-content">
											<p class="info-box-title">Telefon</p>
											<p class="info-box-subtitle"><?php echo $ayarcek['telefon']?></p>
										</div>
									</div>
								</li>
								<li>
									<div class="info-box">
										<div class="info-box-content">
											<p class="info-box-title">Email</p>
											<p class="info-box-subtitle"><?php echo $ayarcek['email']?></p>
										</div>
									</div>
								</li>
								<li class="last">
									<div class="info-box last">
										<div class="info-box-content">
											<p class="info-box-title">Global Sertifika</p>
											<p class="info-box-subtitle">ISO 9001:2017</p>
										</div>
									</div>
								</li>
								<li class="header-get-a-quote">
									<a class="btn btn-primary" href="iletisim.php">İletişim</a>
								</li>
							</ul><!-- Ul end -->
						</div><!-- header right end -->
					</div><!-- logo area end -->

				</div><!-- Row end -->
			</div><!-- Container end -->

			<nav class="site-navigation navigation navdown">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="site-nav-inner pull-left">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>

								<div class="collapse navbar-collapse navbar-responsive-collapse">
									<ul class="nav navbar-nav">
										<li class="dropdown active">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">ANASAYFA<i
													class="fa fa-angle-down"></i></a>
											<ul class="dropdown-menu" role="menu">
												<li class="active"><a href="index.php">Anasayfa</a></li>
												<li><a href="index-2.html">Yan Sayfa</a></li>
											</ul>
										</li>

										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">ŞİRKET<i
													class="fa fa-angle-down"></i></a>
											<ul class="dropdown-menu" role="menu">
												<li><a href="hakkimizda.php">Hakkımızda</a></li>
												<li><a href="team.html">Çalışanlarımız</a></li>
												<li><a href="testimonials.html">Görüşler</a></li>
												<li><a href="faq.html">Sıkça Sorulan Sorular</a></li>
												<li><a href="pricing.html">Fiyatlandırma</a></li>
											</ul>
										</li>

										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">PROJELER<i
													class="fa fa-angle-down"></i></a>
											<ul class="dropdown-menu" role="menu">
												<li><a href="projects.php">Tüm Projeler</a></li>
												<li><a href="projects-single.html">Tekli Projeler</a></li>
											</ul>
										</li>

										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">HİZMETLER<i
													class="fa fa-angle-down"></i></a>
											<ul class="dropdown-menu" role="menu">
												<li><a href="services.html">Tüm Hizmetler</a></li>
												<li><a href="service-single.html">Tekli Hizmetler</a></li>
											</ul>
										</li>

										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">ÖZELLİKLER <i
													class="fa fa-angle-down"></i></a>
											<ul class="dropdown-menu" role="menu">
												<li><a href="typography.html">Typography</a></li>
												<li><a href="404.html">404</a></li>
												<li class="dropdown-submenu">
													<a href="#.">Parent Menu</a>
													<ul class="dropdown-menu">
														<li><a href="#">Child Menu 1</a></li>
														<li><a href="#">Child Menu 2</a></li>
														<li><a href="#">Child Menu 3</a></li>
													</ul>
												</li>
											</ul>
										</li>

										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">HABERLER<i
													class="fa fa-angle-down"></i></a>
											<ul class="dropdown-menu" role="menu">
												<li><a href="haberler.php">Haberler</a></li>
												<li><a href="news-single.html">Tekli Haberler</a></li>
											</ul>
										</li>

										<li><a href="iletisim.php">İLETİŞİM</a></li>

									</ul>
									<!--/ Nav ul end -->
								</div>
								<!--/ Collapse end -->

							</div><!-- Site Navbar inner end -->

						</div>
						<!--/ Col end -->
					</div>
					<!--/ Row end -->

					<div class="nav-search">
						<span id="search"><i class="fa fa-search"></i></span>
					</div><!-- Search end -->

					<div class="search-block" style="display: none;">
						<input type="text" class="form-control" placeholder="Arama">
						<span class="search-close">&times;</span>
					</div><!-- Site search end -->
				</div>
				<!--/ Container end -->

			</nav>
			<!--/ Navigation end -->
		</header>
		<!--/ Header end -->