<?= $this->extend("plantillas/panel_base") ?>
<!-- CSS -->
<?= $this->section("css") ?>
    <!-- BostrapValidator css -->
    <link rel="stylesheet" href="<?= base_url(RECURSOS_CONTENIDO.'Plugins/css/boostrapvalidator.min.css');?>">

    <!-- Show the validation -->
    <style>
        .has-error .help-block{
            line-height: 45px;
            color: red;
        }
        .has-error input{
            border-color: red !important;
        }
        .has-success input{
            border-color: green !important;
        }
        .has-error select{
            border-color: red !important;
        }
        .has-success select{
            border-color: green !important;
        }
        .has-error textarea{
            border-color: red !important;
        }
        .has-success textarea{
            border-color: green !important;
        }
    </style>
<?= $this->endSection(); ?>
<!-- End  -->

<!-- CONTENIDO -->
<?= $this->section("contenido") ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h5 class="m-0 font-weight-bold text-primary">Editar Maquillaje</h5>
                    <h6>Todos los campos marcados con (<font color="red">*</font>) son obligatorios</h6>
                </div>
                <div class="card-body">
                    <?= form_open_multipart('editar_maquillaje',['id' => 'form-user-register','class' => 'user']); ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <center>
                                    <?php
                                        $img = array(
                                                        'id' => 'img-preview',
                                                        'src'    => base_url(RECURSOS_CONTENIDO.'imagenes/maquillaje/'.$maquillaje->imagen_maquillaje),
                                                        'alt'    => 'maquillaje_img',
                                                        'class'  => 'img-profile',
                                                        'height' => '150px',
                                                    );
                                        echo img($img);
                                        echo form_input(['type' => 'hidden', 'name' => 'maquillaje_anterior', 'value' => $maquillaje->imagen_maquillaje]);
                                        echo form_input(['type' => 'hidden', 'name' => 'id_maquillaje', 'value' => $maquillaje->id_maquillaje]);
                                    ?>
                                </center><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="text-dark" for="">Marca (<font color="red">*</font>):</label>
                                    <?php
                                        $select = array('class' => 'form-control form-select',
                                                            'id' => 'marca-maquillaje'
                                                            );
                                        echo form_dropdown('marca_maquillaje', [''=>'Selecciona una marca para el maquillaje']+MARCA_MAQUILLAJE, $maquillaje->marca, $select);
                                    ?>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="text-dark" for="">Módelo del maquillaje (<font color="red">*</font>):</label>
                                    <?php
                                        $input = array(
                                            'type' => 'text',
                                            'id' => 'modelo-maquillaje',
                                            'name' => 'modelo_maquillaje',
                                            'class' => 'form-control form-control-user',
                                            'placeholder' => 'Módelo del maquillaje',
                                            'value' => $maquillaje->modelo
                                        );
                                        echo form_input($input);
                                    ?>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="text-dark" for="">Color del maquillaje (<font color="red">*</font>):</label>
                                    <?php
                                        $input = array(
                                            'type' => 'text',
                                            'id' => 'color-maquillaje',
                                            'name' => 'color_maquillaje',
                                            'class' => 'form-control form-control-user',
                                            'placeholder' => 'Color del maquillaje',
                                            'value' => $maquillaje->color
                                        );
                                        echo form_input($input);
                                    ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">                       
                                <div class="form-group">
                                    <label class="text-dark" for="">Tamaño del maquillaje (<font color="red">*</font>):</label><br>
                                    <?php
                                        $input = array(
                                            'type' => 'text',
                                            'id' => 'tamaño-maquillaje',
                                            'name' => 'tamaño_maquillaje',
                                            'class' => 'form-control form-control-user',
                                            'placeholder' => 'tamaño del maquillaje',
                                            'value' => $maquillaje->tamaño
                                        );
                                        echo form_input($input);
                                    ?>
                                </div>
                            </div>
                            <div class="col-lg-4">                       
                                <div class="form-group">
                                    <label class="text-dark" for="">Tipo de maquillaje (<font color="red">*</font>):</label>
                                    <?php
                                        $select = array('class' => 'form-control form-select',
                                                            'id' => 'categoria-maquillaje'
                                                            );
                                        echo form_dropdown('categoria_maquillaje', [''=>'Selecciona una categoría para el maquillaje']+TIPO_MAQUILLAJE, $maquillaje->tipo, $select);
                                    ?>
                                </div>
                            </div>
                            <div class="col-lg-4">                       
                                <div class="form-group">
                                    <label class="text-dark" for="">Precio del maquillaje (<font color="red">*</font>):</label>
                                    <?php
                                        $input = array(
                                            'type' => 'number',
                                            'id' => 'precio-maquillaje',
                                            'name' => 'precio_maquillaje',
                                            'class' => 'form-control form-control-user',
                                            'placeholder' => '0000.00',
                                            'min' => '1',
                                            'step' => '0.01',
                                            'value' => $maquillaje->precio
                                        );
                                        echo form_input($input);
                                    ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="text-dark" for="">Destacado (<font color="red">*</font>):</label>
                                    <?php
                                        $select = array('class' => 'form-control form-select',
                                                            'id' => 'destacado-maquillaje'
                                                            );
                                        echo form_dropdown('destacado_maquillaje', [''=>'Selecciona una opción para el maquillaje']+MAQUILLAJE_DESTACADO, $maquillaje->destacado, $select);
                                    ?>   
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="text-dark" for="">Descripción (<font color="red">*</font>):</label>
                                    <?php
                                        $input = array(
                                            'id' => 'descripcion-area',
                                            'name' => 'descripcion_maquillaje',
                                            'placeholder' => 'Escribe aquí la descripción de tu maquillaje...',
                                            'class' => 'form-control',
                                            'rows' => '4',
                                            'value' => $maquillaje->descripcion
                                        );
                                        echo form_textarea($input);
                                    ?>      
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="text-dark" for="">Imagen del maquillaje (<font color="blue">Opcional</font>):</label>
                                    <?php
                                        $input = array(
                                            'type' => 'file',
                                            'id' => 'imagen-maquillaje',
                                            'name' => 'image_maquillaje',
                                            'class' => 'form-control',
                                        );
                                        echo form_input($input);
                                    ?>      
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <a class="btn btn-danger" id="bnt-cancelar" href="<?= route_to('catalogo_maquillaje_panel'); ?>"><i class="fa fa-times"></i> Cancelar</a>
                            <?php
                                $btn_submit = array(
                                                    'name'    => 'btn_submit',
                                                    'id'      => 'btn-submit',
                                                    'value'   => 'true',
                                                    'type'    => 'submit',
                                                    'class' => 'btn btn-success',
                                                    'content' => '<i class="fa fa-lg fa-save"></i> Editar',
                                                );
                                echo form_button($btn_submit);
                            ?>
                        </div>

                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>
<!-- End  -->

<!-- JS -->
<?= $this->section("js") ?>
    <!-- Js boostrap Validation -->
    <script type="text/javascript" src="<?= base_url(RECURSOS_CONTENIDO_PLUGINS.'js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url(RECURSOS_CONTENIDO_PLUGINS.'js/bostrap-validator.min.js')?>"></script>
    <!--  -->
    <script type="text/javascript">
        document.getElementById("imagen-maquillaje").onchange = function(e) {
            // Se crea un objeto FileReader
            let reader = new FileReader();
            // Se leé el archivo seleccionado y se pasa como argumento al objeto FileReader
            reader.readAsDataURL(e.target.files[0]);
            // Se visualiza la imagen una vez que fue cargada en el objeto FileReader
            reader.onload = function(){
                let imgPreview = document.getElementById('img-preview');
                imgPreview.src = reader.result;
            };
        }
    </script>
    <!-- Form validation -->
    <script>
        $(document).ready(function () {
            $('#form-user-register').bootstrapValidator({
                // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    marca_maquillaje: {
                        validators: {
                            notEmpty: {
                                message: 'La marca del maquillaje es requerida'
                            },
                        }//validacion
                    },//end 
                    modelo_maquillaje: {
                        validators: {
                            notEmpty: {
                                message: 'Módelo del maquillaje es requerido'
                            },
                        }//validacion
                    },//end 
                    color_maquillaje: {
                        validators: {
                            notEmpty: {
                                message: 'Color del maquillaje es requerido'
                            },
                        }//validacion
                    },//end 
                    tamaño_maquillaje: {
                        validators: {
                            notEmpty: {
                                message: 'Tamaño del maquillaje es requerida'
                            },
                        }//validacion
                    },//end 
                    categoria_maquillaje: {
                        validators: {
                            notEmpty: {
                                message: 'El tipo de maquillaje es requerida'
                            },
                        }//validacion
                    },//end 
                    precio_maquillaje: {
                        validators: {
                            notEmpty: {
                                message: 'Precio del maquillaje es requerida'
                            },
                        }//validacion
                    },//end 
                    destacado_maquillaje: {
                        validators: {
                            notEmpty: {
                                message: 'Precio del maquillaje es requerida'
                            },
                        }//validacion
                    },//end 
                    descripcion_maquillaje: {
                        validators: {
                            notEmpty: {
                                message: 'Descripción del maquillaje es requerida'
                            },
                        }//validacion
                    },//end 
                    image_maquillaje: {
                        validators: {
                            // notEmpty: {
                            //     message: 'La imagen del maquillaje es requerida'
                            // },
                            file: { 
                                extension: 'jpeg,jpg,png',
                                type: 'image/jpeg,image/png',
                                // maxSize: 2048 * 1024,
                                message: 'El archivo seleccionado no es valido'
                            }
                        }
                    }
                }//end fields
            });
        });
    </script>
<?= $this->endSection(); ?>
<!-- End  -->