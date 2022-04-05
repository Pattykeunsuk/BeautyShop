<?php
    namespace App\Models;
    use CodeIgniter\Model;


    class Tabla_maquillaje extends Model {

        protected $table      = 'maquillaje';
        protected $primaryKey = 'id_maquillaje';
        protected $returnType = 'object';

        protected $allowedFields = [
                                    'estatus_maquillaje', 'id_maquillaje', 'marca', 'modelo', 'color', 'tamaño',
                                    'tipo', 'precio', 'imagen_maquillaje', 'destacado', 'descripcion', 'fecha'
                                    ];
        
        //Funciones que nos ayudaran a realizar peticiones (consultas) para obtener la información que deseemos
        public function data_table_maquillaje($tipo_categoria = 0) {
            $resultado = $this
                    ->select('
                                estatus_maquillaje, id_maquillaje, marca, modelo, color, tamaño,
                                tipo, precio, imagen_maquillaje, destacado
                            ')
                    ->where('tipo',$tipo_categoria)
                    ->orderBy('modelo', 'ASC')
                    ->findAll();
             return $resultado;
        }//end data_table_maquillaje

        public function obtener_maquillaje($id_maquillaje = 0){
            $resultado = $this
                        ->select('
                                    estatus_maquillaje, id_maquillaje, marca, modelo, color, tamaño,
                                    tipo, precio, imagen_maquillaje, destacado, descripcion
                                ')
                        ->where('id_maquillaje', $id_maquillaje)
                        ->first();
            return $resultado;
        }//end obtener_maquillaje

        public function maquillaje_limit($limit) {
            $resultado = $this
                ->select('
                            estatus_maquillaje, id_maquillaje, marca, modelo, color, tamaño,
                            tipo, precio,descripcion, imagen_maquillaje, destacado
                        ')
                ->orderBy('modelo', 'ASC')
                ->limit($limit)
                ->find();
            return $resultado;
        }// 

        public function maquillaje_actuales($fecha ='0000-00-00',$limit = 0) {
            $resultado = $this
                ->select('
                            estatus_maquillaje, id_maquillaje, marca, modelo, color, tamaño,
                            tipo, precio,descripcion, imagen_maquillaje, destacado
                        ')
                ->orderBy('modelo', 'ASC')
                ->where('fecha',$fecha)
                ->limit($limit)
                ->find();
            return $resultado;
        }// 

        // public function omaquillaje($id_categoria = 0, $limit = 0){
        //     $resultado = $this
        //                 ->select('
        //                             maquillaje.estatus_maquillaje, maquillaje.id_maquillaje, maquillaje.marca, maquillaje.modelo, maquillaje.color, maquillaje.tamaño,
        //                             maquillaje.tipo, maquillaje.precio, maquillaje.imagen_maquillaje, maquillaje.destacado, maquillaje.fecha, ofertas.estatus_ofertas,
        //                             ofertas.id_oferta, ofertas.descuento, ofertas.fin_oferta
        //                         ')
        //                 ->where('maquillaje.tipo', $id_categoria)
        //                 ->join('ofertas','maquillaje.id_maquillaje= ofertas.id_maquillaje', 'left')
        //                 ->limit($limit)
        //                 ->find();
        //     return $resultado;
        // }//end obtener_oferta_maquillaje

        // public function obtener_oferta_maquillaje($id_maquillaje = 0){
        //     $resultado = $this
        //                 ->select('
        //                             maquillaje.estatus_maquillaje, maquillaje.id_maquillaje, maquillaje.marca, maqmaquillaje.modelo, maquillaje.color, maquillaje.tamaño,
        //                             maquillaje.tipo, maquillaje.precio, maquillaje.imagen_maquillaje, maquillaje.destacado, maquillaje.fecha, 
        //                             maquillaje.descripcion, ofertas.estatus_ofertas,
        //                             ofertas.id_oferta, ofertas.descuento, ofertas.fin_oferta, ofertas.id_maquillaje
        //                         ')
        //                 ->where('maquillaje.id_maquillaje', $id_maquillaje)
        //                 ->join('ofertas','maquillaje.id_maquillaje= ofertas.id_maquillaje', 'left')
        //                 ->first();
        //     return $resultado;
        // }//end obtener_oferta_maquillaje
    }//End Model maquillaje
    



