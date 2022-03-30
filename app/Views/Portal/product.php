<!--Contenido especificos -->
<?= $this->extend ("Plantillas_base/portal_base")?>

<!--CSS especificos de cada vista-->
<?= $this->section ("css")?>
<link rel="stylesheet" type="text/css" href="<?= base_url(RECURSOS_PORTAL_STYLES. 'contact.css');?>">
<link rel="stylesheet" type="text/css" href="<?= base_url(RECURSOS_PORTAL_STYLES. 'contact_responsive.css');?>">

<?= $this->endSection ("")?>

<!--Contenido-->
<?= $this->section ("contenido")?>

<!-- Home -->
<br>
<br>
<br><br><br><br><br>
<br>
<br>
<div class="home">
<div class="product">
		<div class="container">
			<div class="row">
				
			</div></div>
			<div class="row product_row">

				<!-- Product Image -->
				<div class="col-lg-7">
					<div class="product_image">
						<div class="product_image_large"><img src="<?= base_url(RECURSOS_PORTAL_IMAGES. 'review_1.png');?>" alt=""></div>
						<div class="product_image_thumbnails d-flex flex-row align-items-start justify-content-start">
							<div class="product_image_thumbnail" style="background-image:url(images/product_image_1.jpg)" data-image="images/product_image_1.jpg"></div>
							<div class="product_image_thumbnail" style="background-image:url(images/product_image_2.jpg)" data-image="images/product_image_2.jpg"></div>
							<div class="product_image_thumbnail" style="background-image:url(images/product_image_4.jpg)" data-image="images/product_image_4.jpg"></div>
						</div>
					</div>
				</div>

				<!-- Product Content -->
				<div class="col-lg-5">
					<div class="product_content">
						<div class="product_name">Kit de exfoliante facial</div>
						<div class="product_price">$470.00</div>
						<div class="rating rating_4" data-rating="4">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<!-- In Stock -->
						<div class="in_stock_container">
							<div class="in_stock in_stock_true"></div>
							<span>in stock</span>
						</div>
						<div class="product_text">
							<p>Kit exfoliante para rostro piel grasa, son exfoliantes de la marca BeautyShop, remueve impuresas y le da a tu rostro la suavidad que se merece, apicalo antes de dormir y al día siguiente sentiras tu piel rejuvenecida. Cosiente tu piel com los 4 pasos de BeuatyShop, dale a tu rostro lo que necesita.</p>
						</div>
						<!-- Product Quantity -->
						<div class="product_quantity_container">
							<span>Cantidad</span>
							<div class="product_quantity clearfix">
								<input id="quantity_input" type="text" pattern="[0-9]*" value="1">
								<div class="quantity_buttons">
									<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-caret-up" aria-hidden="true"></i></div>
									<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-caret-down" aria-hidden="true"></i></div>
								</div>
							</div>
						</div>
						<!-- Product Size -->
						<div class="product_size_container">
							<span>Tamaño</span>
							<div class="product_size">
								<ul class="d-flex flex-row align-items-start justify-content-start">
									<li>
										<input type="radio" id="radio_1" name="product_radio" class="regular_radio radio_1">
										<label for="radio_1">Chica</label>
									</li>
									<li>
										<input type="radio" id="radio_2" name="product_radio" class="regular_radio radio_2" checked>
										<label for="radio_2">Grande</label>
									</li>
								</ul>
							</div>
							<div class="button cart_button"><a href="#">Carrito</a></div>
						</div>
					</div>
				</div>
			</div>
<br>
<br>
<br>
<br>
<br>

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
	<!-- Product -->

	



<?= $this->endSection ("")?>

<!--JS-->
<?= $this->section ("js")?>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="<?= base_url(RECURSOS_PORTAL_JS. 'contact_custom.js');?>"></script>
<?= $this->endSection ("")?>