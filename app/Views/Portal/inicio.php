<!--Contenido especificos -->
<?= $this->extend ("Plantillas_base/portal_base")?>

<!--CSS especificos de cada vista-->
<?= $this->section ("css")?>

<?= $this->endSection ("")?>

<!--Contenido-->
<?= $this->section ("contenido")?>
<!-- Home -->

<div class="home">
		
		<!-- Home Slider -->

		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(<?= base_url(RECURSOS_PORTAL_IMAGES. 'home_slider_1.jpg');?>)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Precios de Promoción</div>
							<div class="home_slider_title">Nueva Colección</div>
						</div>	
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(<?= base_url(RECURSOS_PORTAL_IMAGES. 'home_slider_2.jpg');?>)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Precios Unicos</div>
							<div class="home_slider_title">Nuevos Tonos</div>
						</div>	
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(<?= base_url(RECURSOS_PORTAL_IMAGES. 'home_slider_3.jpg');?>)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Crea tu Imagen</div>
							<div class="home_slider_title">Las Mejores Tendencias</div>
						</div>	
					</div>
				</div>

			</div>
			
			<!-- Home Slider Nav -->

			<div class="home_slider_next d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url(RECURSOS_PORTAL_IMAGES. 'arrow_r.png');?>" alt=""></div>

			<!-- Home Slider Dots -->

			<div class="home_slider_dots_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_slider_dots">
								<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
									<li class="home_slider_custom_dot active">01.<div></div></li>
									<li class="home_slider_custom_dot">02.<div></div></li>
									<li class="home_slider_custom_dot">03.<div></div></li>
								</ul>
							</div>
						</div>
					</div>
				</div>		
			</div>
		</div>
	</div>

	<!-- Promo -->

	<div class="promo">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle">LO MEJOR PARA TI</div>
						<div class="section_title">promociones</div>
					</div>
				</div>
			</div>
			<div class="row promo_container">


				<!-- Promo Item -->
				<div class="col-lg-4 promo_col">
					<div class="promo_item">
						<div class="promo_image">
							<img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'promo_2.jpeg');?>" alt="">
							<div class="promo_content promo_content_2">
								<div class="promo_title">-30% off</div>
								<div class="promo_subtitle">Cremas y protectores</div>
							</div>
						</div>
						<div class="promo_link"><a href="#">Compra ahora</a></div>
					</div>
				</div>

				<!-- Promo Item -->
				<div class="col-lg-4 promo_col">
					<div class="promo_item">
						<div class="promo_image">
							<img src="<?= base_url(RECURSOS_PORTAL_IMAGES. 'promo_3.jpg');?>" alt="">
							<div class="promo_content promo_content_3">
								<div class="promo_title">-25% off</div>
								<div class="promo_subtitle">Crema de noche</div>
							</div>
						</div>
						<div class="promo_link"><a href="#">Compra ahora</a></div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- New Arrivals -->

	<div class="arrivals">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle">solo lo mejor</div>
						<div class="section_title">Lo mas Nuevo</div>
					</div>
				</div>
			</div>
			<div class="row products_container">

				<!-- Product -->
				<div class="col-lg-4 product_col">
					<div class="product">
						<div class="product_image">
							<img src="<?= base_url(RECURSOS_PORTAL_IMAGES. 'product_1.png');?>" alt="">
						</div>
						<div class="rating rating_4">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<div class="product_content clearfix">
							<div class="product_info">
								<div class="product_name"><a href="product.html">Tinta Mate</a></div>
								<div class="product_price">$120.00</div>
							</div>
							<div class="product_options">
								<div class="product_buy product_option"><img src="<?= base_url(RECURSOS_PORTAL_IMAGES. 'shopping-bag-white.svg');?>" alt=""></div>
								<div class="product_fav product_option">+</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Product -->
				<div class="col-lg-4 product_col">
					<div class="product">
						<div class="product_image">
							<img src="<?= base_url(RECURSOS_PORTAL_IMAGES. 'product_2.png');?>" alt="">
						</div>
						<div class="rating rating_4">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<div class="product_content clearfix">
							<div class="product_info">
								<div class="product_name"><a href="product.html">Tinta Mate Nude</a></div>
								<div class="product_price">$120.00</div>
							</div>
							<div class="product_options">
								<div class="product_buy product_option"><img src="<?= base_url(RECURSOS_PORTAL_IMAGES. 'shopping-bag-white.svg');?>" alt=""></div>
								<div class="product_fav product_option">+</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Product -->
				<div class="col-lg-4 product_col">
					<div class="product">
						<div class="product_image">
							<img src="<?= base_url(RECURSOS_PORTAL_IMAGES. 'product_3.png');?>" alt="">
						</div>
						<div class="rating rating_4">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<div class="product_content clearfix">
							<div class="product_info">
								<div class="product_name"><a href="product.html">Tinta Velvety</a></div>
								<div class="product_price">$120.00</div>
							</div>
							<div class="product_options">
								<div class="product_buy product_option"><img src="<?= base_url(RECURSOS_PORTAL_IMAGES. 'shopping-bag-white.svg');?>" alt=""></div>
								<div class="product_fav product_option">+</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>



	<!-- Newsletter -->

	<div class="newsletter">
		<div class="newsletter_content">
			<div class="newsletter_image" style="background-image:url(<?= base_url(RECURSOS_PORTAL_IMAGES. 'newsletter.jpg');?>)"></div>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title_container text-center">
							<div class="section_subtitle">Encuentra tu Estilo</div>
							<div class="section_title">Registrate y obten el 20% en descuentos</div>
						</div>
					</div>
				</div>
				<div class="row newsletter_container">
					<div class="col-lg-10 offset-lg-1">
						<div class="newsletter_form_container">
							<form action="#">
								<input type="email" class="newsletter_input" required="required" placeholder="Ingresa tu correo">
								<button type="submit" class="newsletter_button">Registrate</button>
							</form>
						</div>
						<div class="newsletter_text">Integrate ahora y forma parte de BeautyShop tu lugar tu estilo.</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?= $this->endSection ("")?>

<!--JS-->
<?= $this->section ("js")?>
<?= $this->endSection ("")?>