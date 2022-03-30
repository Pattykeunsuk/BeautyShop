<!--Contenido especificos -->
<?= $this->extend ("Plantillas_base/portal_base")?>

<!--CSS especificos de cada vista-->
<?= $this->section ("css")?>

<?= $this->endSection ("")?>

<!--Contenido-->
<?= $this->section ("contenido")?>

	<!-- Gallery -->

	<div class="gallery">
		<div class="gallery_image" style="background-image:url(<?= base_url(RECURSOS_PORTAL_IMAGES. 'gallery.jpg');?>)"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="gallery_title text-center">
						<ul>
							<li><a href="#">#beautyshop</a></li>
							<li><a href="#">#Bshopinstagram</a></li>
							<li><a href="#">#Beautygirl</a></li>
						</ul>
					</div>
					<div class="gallery_text text-center">*Encuentra tu estilo.</div>
					<!--<div class="button gallery_button"><a href="#">submit</a></div>-->
				</div>
			</div>
		</div>	
		<!--inicio de la primer fila-->
		<div class="gallery_slider_container">
			
			<!-- Gallery Slider -->
			<div class="owl-carousel owl-theme gallery_slider">
				
				<!-- Gallery Item -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="<?= base_url(RECURSOS_PORTAL_IMAGES. 'gallery_1.jpg');?>">
						<img src="<?= base_url(RECURSOS_PORTAL_IMAGES. 'gallery_1.jpg');?>" alt="">
					</a>
				</div>

				<!-- Gallery Item -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="<?= base_url(RECURSOS_PORTAL_IMAGES. 'gallery_2.jpg');?>">
						<img src="<?= base_url(RECURSOS_PORTAL_IMAGES. 'gallery_2.jpg');?>" alt="">
					</a>
				</div>

				<!-- Gallery Item -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="<?= base_url(RECURSOS_PORTAL_IMAGES. 'gallery_3.jpg');?>">
						<img src="<?= base_url(RECURSOS_PORTAL_IMAGES. 'gallery_3.jpg');?>" alt="">
					</a>
				</div>

				<!-- Gallery Item -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="<?= base_url(RECURSOS_PORTAL_IMAGES. 'gallery_4.png');?>">
						<img src="<?= base_url(RECURSOS_PORTAL_IMAGES. 'gallery_4.png');?>" alt="">
					</a>
				</div>

				<!-- Gallery Item -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="<?= base_url(RECURSOS_PORTAL_IMAGES. 'gallery_5.jpg');?>">
						<img src="<?= base_url(RECURSOS_PORTAL_IMAGES. 'gallery_5.jpg');?>" alt="">
					</a>
				</div>

				<!-- Gallery Item -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="<?= base_url(RECURSOS_PORTAL_IMAGES. 'gallery_6.jpg');?>">
						<img src="<?= base_url(RECURSOS_PORTAL_IMAGES. 'gallery_6.jpg');?>" alt="">
					</a>
				</div>
				</div>
			</div>
		<!--Fin de la primer fila-->


		<!--inicio de la segunda fila-->
		<div class="gallery_slider_container">
			
			<!-- Gallery Slider -->
			<div class="owl-carousel owl-theme gallery_slider">
				
				<!-- Gallery Item -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="<?= base_url(RECURSOS_PORTAL_IMAGES. 'gallery_7.jpg');?>">
						<img src="<?= base_url(RECURSOS_PORTAL_IMAGES. 'gallery_7.jpg');?>" alt="">
					</a>
				</div>

				<!-- Gallery Item -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="<?= base_url(RECURSOS_PORTAL_IMAGES. 'gallery_8.jpg');?>">
						<img src="<?= base_url(RECURSOS_PORTAL_IMAGES. 'gallery_8.jpg');?>" alt="">
					</a>
				</div>

				<!-- Gallery Item -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="<?= base_url(RECURSOS_PORTAL_IMAGES. 'gallery_9.jpg');?>">
						<img src="<?= base_url(RECURSOS_PORTAL_IMAGES. 'gallery_9.jpg');?>" alt="">
					</a>
				</div>

				<!-- Gallery Item -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="<?= base_url(RECURSOS_PORTAL_IMAGES. 'gallery_10.jpg');?>">
						<img src="<?= base_url(RECURSOS_PORTAL_IMAGES. 'gallery_10.jpg');?>" alt="">
					</a>
				</div>

				<!-- Gallery Item -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="<?= base_url(RECURSOS_PORTAL_IMAGES. 'gallery_11.jpg');?>">
						<img src="<?= base_url(RECURSOS_PORTAL_IMAGES. 'gallery_11.jpg');?>" alt="">
					</a>
				</div>

				<!-- Gallery Item -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="<?= base_url(RECURSOS_PORTAL_IMAGES. 'gallery_12.jpg');?>">
						<img src="<?= base_url(RECURSOS_PORTAL_IMAGES. 'gallery_12.jpg');?>" alt="">
					</a>
				</div>

			</div>
		</div>
		<!--Fin de la segunda fila-->


		
		</div>	
	</div>


<?= $this->endSection ("")?>

<!--JS-->
<?= $this->section ("js")?>
<?= $this->endSection ("")?>