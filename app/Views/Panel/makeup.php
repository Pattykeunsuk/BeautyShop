<?= $this->extend("plantillas/panel_base") ?>

<!-- CSS -->
<?= $this->section("css") ?>
    <!-- JQuery DataTable Css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.11.4/datatables.min.css"/>
 

<?= $this->endSection(); ?>

<!-- CONTENIDO -->
<?= $this->section("contenido") ?>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <!--  -->
            <div class="header">
                <h2>
                    Todos el make up<br><br>
                    <a type="button" href="<?= route_to('Make Up Nuevo');?>" class="btn btn-primary waves-effect"><i class="material-icons">add_circle</i>  Agregar make up</a>
                </h2>
            </div>
            <!--  -->   
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="tabla-calzados">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Imagen</th>
                                <th>Make up</th>
                                <th>Categoría</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><img src="<?= base_url(CONTENIDO_IMAGENES_CALZADO.'nooknak.jpg'); ?>" alt="" height="150px"></td>
                                <td>AHA.BHA.PHA</td>
                                <td>Skin care</td>
                                <td>
                                    <a type="button" href="<?= route_to('calzado_detalles',1);?>" class="btn btn-warning waves-effect"><i class="material-icons">info</i> Detalles</a>
                                    <a type="button" href="<?= route_to('dashboard',1);?>" class="btn btn-danger waves-effect"><i class="material-icons">delete</i> Eliminar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><img src="<?= base_url(CONTENIDO_IMAGENES_CALZADO.'andrea.jpg'); ?>" alt="" height="150px"></td>
                                <td>Parches Revitalizantes para Ojeras</td>
                                <td>Skincare</td>
                                <td>
                                    <a type="button" href="<?= route_to('calzado_detalles',2);?>" class="btn btn-warning waves-effect"><i class="material-icons">info</i> Detalles</a>
                                    <a type="button" href="<?= route_to('dashboard',2);?>" class="btn btn-danger waves-effect"><i class="material-icons">delete</i> Eliminar</a>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <th>#</th>
                            <th>Imagen</th>
                            <th>Make up</th>
                            <th>Categoría</th>
                            <th>Acciones</th>
                        </tfoot>
                    </table>
                </<div>
            </div>  
        </div>  
    </div>
<?= $this->endSection(); ?>

<!-- JS -->
<?= $this->section("js") ?>
    <!-- Jquery DataTable Plugin Js -->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.11.4/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#tabla-calzados').DataTable();
        });
    </script>    
<?= $this->endSection(); ?>
