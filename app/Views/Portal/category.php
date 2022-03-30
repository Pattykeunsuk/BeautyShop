<!--Contenido especificos -->
<?= $this->extend ("Plantillas_base/portal_base")?>

<!--CSS especificos de cada vista-->
<?= $this->section ("css")?>

<?= $this->endSection ("")?>

<!--Contenido-->
<?= $this->section ("contenido")?>
		
	<!-- New Arrivals -->

	<div class="arrivals">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle"><br><br></div>
						<div class="section_subtitle">solo lo mejor</div>
						<div class="section_title">Categorias</div>
					</div>
				</div>
			</div>
			<div class="row products_container">

				<!-- Product -->
				<div class="col-lg-4 product_col">
					<div class="product">
						<div class="product_image">
							<img src="<?= base_url(RECURSOS_PORTAL_IMAGES. 'product_s20.jpg');?>" alt="">
						
						</div>
						<div class="product_content clearfix">
							<div class="product_info">
								<div class="product_name"><a href="product.html">Maquillaje</a></div>
								
							</div>
							
						</div>
					</div>
				</div>

				<!-- Product -->
				<div class="col-lg-4 product_col">
					<div class="product">
						<div class="product_image">
							<img src="<?= base_url(RECURSOS_PORTAL_IMAGES. 'product_s22.jpg');?>" alt="">
						</div>
						
						<div class="product_content clearfix">
							<div class="product_info">
								<div class="product_name"><a href="product.html">Cuidado de la piel</a></div>
								
							</div>
							
						</div>
					</div>
				</div>

				<!-- Product -->
				<div class="col-lg-4 product_col">
					<div class="product">
						<div class="product_image">
							<img src="<?= base_url(RECURSOS_PORTAL_IMAGES. 'product_s23.jpg');?>" alt="">
						</div>
						
						<div class="product_content clearfix">
							<div class="product_info">
								<div class="product_name"><a href="product.html">Caballeros</a></div>
								
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