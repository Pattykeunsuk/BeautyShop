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
<div>
	<br><br><br><br><br><br><br>
</div>
<!-- Google Map -->
		
<div class="map">
		<div id="google_map" class="google_map">
			<div class="map_container">
				<div id="map"></div>
			</div>
		</div>
	</div>
	
	<!-- Contact Form -->

	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="review_form_container">
						<div class="review_form_title">Contactanos</div>
						<div class="review_form_content">
							<form action="#" id="review_form" class="review_form">
								<div class="d-flex flex-md-row flex-column align-items-start justify-content-between">
									<input type="text" class="review_form_input" placeholder="Nombre" required="required">
									<input type="email" class="review_form_input" placeholder="Correo eletrónico" required="required">
									<input type="text" class="review_form_input" placeholder="Asunto">
								</div>
								<textarea class="review_form_text" name="review_form_text" placeholder="Mensaje"></textarea>
								<button type="submit" class="review_form_button">Enviar mensaje</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact Text -->

	<div class="contact_text">
		<div class="container">
			<div class="row">

				<!-- Contact Info -->
				<div class="col-lg-5">

					<div class="contact_info">
						<div class="contact_title">Información de contacto</div>
						<div class="contact_info_content">
							<ul>
								<li>
									<div class="contact_info_icon"><img src="i<?= base_url(RECURSOS_PORTAL_IMAGES. 'contact_info_1.png');?>" alt=""></div>
									<div class="contact_info_text">Chiautempan No. 55, Tlaxcala México</div>
								</li>
								<li>
									<div class="contact_info_icon"><img src="<?= base_url(RECURSOS_PORTAL_IMAGES. 'contact_info_2.png');?>" alt=""></div>
									<div class="contact_info_text">Sucursal1@beautyshop.com</div>
								</li>
								<li>
									<div class="contact_info_icon"><img src="<?= base_url(RECURSOS_PORTAL_IMAGES. 'contact_info_3.png');?>" alt=""></div>
									<div class="contact_info_text">+55 246 218 2905</div>
								</li>
							</ul>
						</div>
						<div class="contact_info_social">
							<ul>
								
								<li><a href="https://www.instagram.com/pattykeun/?utm_source=qr"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								
							</ul>
						</div>
					</div>
				</div>

				<!-- FAQ -->
				<div class="col-lg-7">
					<div class="faq">
						<div class="contact_title">Preguntas Frecuentes</div>
						<div class="faq_content">

							<!-- Accordions -->
							<div class="accordions">

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center"><div>Los productos se venden fuera del país?</div></div>
									<div class="accordion_panel">
										<p>Los productos se venden detro y fuera del país, el envio por paquetes fuera del país tiene un costo de envio dependiendo la paquetería.</p>
									</div>
								</div>

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center"><div>Hacen entregas en toda la República Mexicana?</div></div>
									<div class="accordion_panel">
										<p>Si, se hacen envios a toda la república mexicana con un costo de $300 por envio a cualquier domicilio dentro de México.</p>
									</div>
								</div>

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center active"><div>Haces pedidos por mayoreo?</div></div>
									<div class="accordion_panel">
										<p>Si, despues de 10 piezas se pueden adquirir las piezas por mayoreo dentro del país, para personas en el extrajero se debe realizar una compra minima de 30 piezas.</p>
									</div>
								</div>

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
<?= $this->endSection ("")?>

<!--JS-->
<?= $this->section ("js")?>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="<?= base_url(RECURSOS_PORTAL_JS. 'contact_custom.js');?>"></script>
<?= $this->endSection ("")?>