<!DOCTYPE html>
<html lang="en">
<head>
<title><?= $nombre_pagina;?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Wish shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?= base_url(RECURSOS_PORTAL_STYLES. 'bootstrap4/bootstrap.min.css');?>">
<link href="<?= base_url(RECURSOS_PORTAL_PLUGINS. 'font-awesome-4.7.0/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?= base_url(RECURSOS_PORTAL_PLUGINS. 'OwlCarousel2-2.2.1/owl.carousel.css');?>">
<link rel="stylesheet" type="text/css" href="<?= base_url(RECURSOS_PORTAL_PLUGINS. 'OwlCarousel2-2.2.1/owl.theme.default.css');?>">
<link rel="stylesheet" type="text/css" href="<?= base_url(RECURSOS_PORTAL_PLUGINS. 'OwlCarousel2-2.2.1/animate.css');?>">
<link href="<?= base_url(RECURSOS_PORTAL_PLUGINS. 'colorbox/colorbox.css');?>" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?= base_url(RECURSOS_PORTAL_STYLES. 'main_styles.css');?>">
<link rel="stylesheet" type="text/css" href="<?= base_url(RECURSOS_PORTAL_STYLES. 'responsive.css');?>">

<!-- ************************************************ -->
<!-- ***************CSS de esta pagina*************** -->
<!-- ************************************************ -->
<?= $this-> renderSection ("css");?>
<!-- ************************************************ -->
<!-- ***************PLUGINS de esta pagina*************** -->
<!-- ************************************************ -->
<?= $this-> renderSection ("Plugins");?>
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="header_inner d-flex flex-row align-items-center justify-content-start">
			<div class="logo"><a href="<?= route_to('Inicio');?>">BeautyShop</a></div>
			<nav class="main_nav">
				<ul>
					<li><a href="<?= route_to('Inicio');?>">home</a></li>
					<li><a href="<?= route_to('Skin');?>">skincare</a></li>
					<li><a href="<?= route_to('Category');?>">category</a></li>
					<li><a href="<?= route_to('Galery');?>">galery</a></li>
					<li><a href="<?= route_to('Contact');?>">contact</a></li>
				</ul>
			</nav>
			<div class="header_content ml-auto">
				<div class="search header_search">
					<form action="#">
						<input type="search" class="search_input" required="required">
						<button type="submit" id="search_button" class="search_button"><img src="<?= base_url (RECURSOS_PORTAL_IMAGES. 'magnifying-glass.svg');?>" alt=""></button>
					</form>
				</div>
				<div class="shopping">
					<!-- Cart -->
					<a href="#">
						<div class="cart">
							<img src="<?= base_url (RECURSOS_PORTAL_IMAGES. 'shopping-bag.svg');?>" alt="">
							<div class="cart_num_container">
								<div class="cart_num_inner">
									<div class="cart_num">1</div>
								</div>
							</div>
						</div>
					</a>
					<!-- Star -->
					<a href="#">
						<div class="star">
							<img src="<?= base_url (RECURSOS_PORTAL_IMAGES.'star.svg');?>" alt="">
							<div class="star_num_container">
								<div class="star_num_inner">
									<div class="star_num">0</div>
								</div>
							</div>
						</div>
					</a>
					<!-- Avatar -->
					<a href="#">
						<div class="avatar">
							<img src="<?= base_url (RECURSOS_PORTAL_IMAGES. 'avatar.svg');?>" alt="">
						</div>
					</a>
				</div>
			</div>

			<div class="burger_container d-flex flex-column align-items-center justify-content-around menu_mm"><div></div><div></div><div></div></div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="logo menu_mm"><a href="#">BeautyShop</a></div>
		<div class="search">
			<form action="#">
				<input type="search" class="search_input menu_mm" required="required">
				<button type="submit" id="search_button_menu" class="search_button menu_mm"><img class="menu_mm" src="<?= base_url (RECURSOS_PORTAL_IMAGES. 'magnifying-glass.svg');?>" alt=""></button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="<?= route_to('Inicio');?>">home</a></li>
				<li class="menu_mm"><a href="<?= route_to('Skin');?>">skincare</a></li>
				<li class="menu_mm"><a href="<?= route_to('Category');?>">category</a></li>
				<li class="menu_mm"><a href="<?= route_to('Galery');?>">galery</a></li>
				<li class="menu_mm"><a href="<?= route_to('Contact');?>">contact</a></li>
			</ul>
		</nav>
	</div>
  <!-- **************************************************************-->
  <!-- **************************************************************-->
  <!-- ****************Termina el encabezado*************************-->
  <!-- **************************************************************-->
  <!-- **************************************************************-->

  <!-- **************************************************************-->
  <!-- ****************Contenido principal***************************-->
  <!-- **************************************************************-->
  <?= $this-> renderSection("contenido")?>
<!-- Footer -->

<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="footer_logo"><a href="<?= route_to('Inicio');?>">BeautyShop</a></div>
					<nav class="footer_nav">
						<ul>
							<li><a href="<?= route_to('Inicio');?>">home</a></li>
							<li><a href="<?= route_to('Skin');?>">skincare</a></li>
							<li><a href="<?= route_to('Category');?>">category</a></li>
							<li><a href="<?= route_to('Galery');?>">galery</a></li>
							<li><a href="<?= route_to('Contact');?>">contact</a></li>
						</ul>
					</nav>
					<div class="footer_social">
						<ul>
							
							<li><a href="https://www.instagram.com/pattykeun/?utm_source=qr"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							
						</ul>
					</div>
					<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> DULCE MENDOZA | ANA PATRICIA NETZAHUATL RUGERIO <i class="fa fa-heart-o" aria-hidden="true"></i> Del <a href="https://colorlib.com" target="_blank">8D</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="<?= base_url(RECURSOS_PORTAL_JS. 'jquery-3.2.1.min.js');?>"></script>
<script src="<?= base_url(RECURSOS_PORTAL_STYLES. 'bootstrap4/popper.js');?>"></script>
<script src="<?= base_url(RECURSOS_PORTAL_STYLES. 'bootstrap4/bootstrap.min.js');?>"></script>
<script src="<?= base_url (RECURSOS_PORTAL_PLUGINS. 'OwlCarousel2-2.2.1/owl.carousel.js');?>"></script>
<script src="<?= base_url (RECURSOS_PORTAL_PLUGINS. 'easing/easing.js');?>"></script>
<script src="<?= base_url (RECURSOS_PORTAL_PLUGINS. 'parallax-js-master/parallax.min.js');?>"></script>
<script src="<?= base_url (RECURSOS_PORTAL_PLUGINS. 'colorbox/jquery.colorbox-min.js');?>"></script>
<script src="<?= base_url(RECURSOS_PORTAL_JS. 'custom.js');?>"></script>

<!-- ************************************************ -->
<!-- ***************JS de esta pagina*************** -->
<!-- ************************************************ -->
<?= $this-> renderSection ("js");?>
</body>
</html>