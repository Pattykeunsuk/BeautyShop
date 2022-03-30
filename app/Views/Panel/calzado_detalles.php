<?= $this->extend("plantillas/panel_base") ?>

<!-- CSS -->
<?= $this->section("css") ?>
<link href="<?= base_url(RECURSOS_PANEL_PLUGINS.'bootstrap-select/css/bootstrap-select.css');?>" rel="stylesheet" />    
<?= $this->endSection(); ?>

<!-- CONTENIDO -->
<?= $this->section("contenido") ?>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <!--  -->
            <div class="header">
                <h2>
                    Detalles Make up
                    <small>Todos los campos marcados con (<font color="red">*</font>) son obligatorios</small>
                </h2>
            </div>
            <!--  -->
            <div class="body">
                <form class="" action="" >
                    <div class="row">
                        <div class="col-md-12">
                            <center>
                                <img src="<?= base_url(CONTENIDO_IMAGENES_CALZADO.'nooknak.jpg');?>" alt="" id="" height="150px;">
                            </center>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-4">
                            <label for="nombres">Marca (<font color="red">*</font>)</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">person</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" class="form-control" value="UYU BEAUTY" placeholder="Escribe la marca">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="nombres">Módelo (<font color="red">*</font>)</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">person</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" class="form-control " value="AHA.BHA.PHA" placeholder="Escribe el módelo">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="nombres">Color (<font color="red">*</font>)</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">person</i>
                                </span>
                                <div class="form-line">
                                    <input type="color" class="form-control " value="">
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <label for="nombres">Categoría (<font color="red">*</font>)</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">person</i>
                                </span>
                                <input name="sexo" type="radio" id="dama" checked>
                                <label for="dama">Skincare</label><br>
                                <input name="sexo" type="radio" id="caballero" />
                                <label for="caballero">Caballeros</label>
                                
                            </div>
                        </div>



                        <div class="col-md-4">
                            <label for="nombres">Precio (<font color="red">*</font>)</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">person</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" class="form-control " placeholder="Escribe el precio" value="830.00">
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        
                        <div class="col-md-12">
                            <label for="nombres">descripción (<font color="red">*</font>)</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">person</i>
                                </span>
                                <div class="form-line">
                                    <textarea name="" id="" class="form-control" cols="30" rows="5" placeholder="Escribe la descripción aquí...">Es un limpiador corporal que ayuda a tratar y eliminar el acné de la espalda y del pecho. Formulado con 10,000 ppm de árbol de té, AHA, BHA y PHA que ayudan a limpiar exceso de sebo, las células muertas y las impurezas de la piel. Deja la piel super limpia e hidratada sin tensión</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="nombres">Imagen del calzado </label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">person</i>
                                </span>
                                <div class="form-line">
                                    <input type="file" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="button" class="btn btn-primary m-t-15 waves-effect">Actualizar</button>
                    <a type="button" href="<?= route_to('calzados');?>" class="btn btn-warning m-t-15 waves-effect">Cancelar</a>
                </form>
            </div>  
        </div>  
    </div>
<?= $this->endSection(); ?>

<!-- JS -->
<?= $this->section("js") ?>

<?= $this->endSection(); ?>
