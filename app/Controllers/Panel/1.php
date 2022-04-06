<?php 
    namespace App\Controllers\Panel;
    use App\Controllers\BaseController;
    use App\Libraries\Permisos;

    class Maquillaje_detalles extends BaseController{

        private $session;
        private $permitido = TRUE;

        public function __construct(){
            //cargar el permiso roles
            helper('permisos_roles_helper');
            //instancia de la sesion
            $session = session();
            //Verifica si el usuario logeado cuenta con los permiso de esta area
            if (acceso_usuario(TAREA_MAQUILLAJE_DETALLES)) {
                $session->tarea_actual = TAREA_MAQUILLAJE_DETALLES;
            }//end if 
            else{
                $this->permitido = FALSE;
            }//end else
        }//end constructor

        public function index($id_maquillaje = NULL){
            //verifica si tiene permisos para continuar o no
            if($this->permitido){
                $tabla_maquillaje = new \App\Models\Tabla_maquillaje;
                if($tabla_maquillaje->find($id_maquillaje) == null){
                    mensaje('No se encuentra el maquillaje propocionado.', WARNING_ALERT);
                    return redirect()->to(route_to('usuarios'));
                }//end if no existe el usuario
                else{
                    dd($tabla_maquillaje);
                    return $this->crear_vista("panel/detalles_maquillaje", $this->cargar_datos($id_maquillaje));
                }//end else no existe el usuario
            }//end if rol permitido
            else{
                mensaje("No tienes permiso para acceder a este módulo, contacte al administrador", WARNING_ALERT);
                return redirect()->to(route_to('acceso'));
            }//end else rol no permitido
        }//end index

        private function cargar_datos($id_maquillaje = NULL){
            //======================================================================
            //==========================DATOS FUNDAMENTALES=========================
            //======================================================================
            //Declaración del arreglo
            $datos = array();
            //Instancia de la variable de sesión
            $session = session();

           //Datos fundamentales para la plantilla base
           $datos['nombre_completo_usuario'] = $session->usuario_completo;
           $datos['nombre_usuario'] = $session->nombre_usuario;
           $datos['email_usuario'] = $session->email_usuario;
           $datos['imagen_usuario'] = ($session->imagen_usuario != NULL) 
                                           ? base_url(RECURSOS_CONTENIDO.'imagenes/usuario/'.$session->imagen_usuario) 
                                           : (($session->sexo_usuario == SEXO_FEMENINO) ? base_url(RECURSOS_CONTENIDO.'imagenes/usuario/female.png') : base_url(RECURSOS_CONTENIDO.'imagenes/usuario/male.png'));
           //Cargamos el modelo correspondiente
           $tabla_usuarios = new \App\Models\Tabla_maquillaje;
            $maquillaje = $tabla_maquillaje->obtener_maquillaje($id_maquillaje);

            //Datos propios por vista y controlador
            $datos['nombre_pagina'] = 'Detalles del maquillaje: '.$maquillaje->modelo;
            $datos['maquillaje'] = $maquillaje;
            // dd($datos['maquillaje']);
            return $datos;
        }//end cargar_datos

        private function crear_vista($nombre_vista, $contenido = array()){
            $contenido['menu'] = crear_menu_panel(TAREA_USUARIO_DETALLES, '');
            return view($nombre_vista, $contenido);
        }//end crear_vista

        private function subir_archivo($file = NULL){
            $file_size = $file->getSize();
            $file_extension = $file->getClientExtension();
            $file_info = \Config\Services::image()
                                        ->withFile($file)
                                        ->getFile()
                                        ->getProperties(true);
            $file_name = (hash("sha256", fecha_actual())).'.'.$file_extension;
            if($file_size <= 2097152 &&
                ($file_extension == 'jpeg' || $file_extension == 'jpg' || $file_extension == 'png') &&
                $file_info['width'] <= 1200 && $file_info['height'] <= 1200){
                $file->move(IMG_DIR_MAQUILLAJE, $file_name);
                return $file_name;
            }//end if la imagen cumple con los requisitos
            else{
                mensaje('Tu imagen no cumple con los requisitos solicitados.', DANGER_ALERT);
                return NULL;
            }//end else
        }//end subir_archivo

        private function eliminar_archivo ($file = NULL){
            
            if (!empty($file)) {
                if(file_exists(IMG_DIR_MAQUILLAJE.'/'.$file)){
                    unlink(IMG_DIR_MAQUILLAJE.'/'.$file);
                    return TRUE;
                }//end if
            }//end if is_null
            else{
                return FALSE;
            }//end else is_null
        }//end eliminar_archivo

        // -----------------------------------------------------
        // -----------------------------------------------------
        public function editar() {
            $id_maquillaje = $this->request->getPost('id_maquillaje');
            $maquillaje_anterior = $this->request->getPost('maquillaje_anterior');

            ///Cargamos el modelo correspondiente
            $tabla_maquillaje = new \App\Models\Tabla_maquillaje;

            //Declaración del arreglo 
            $maquillaje = array();
            $maquillaje['estatus_maquillaje'] = ESTATUS_HABILITADO;
            $maquillaje['marca'] = $this->request->getPost('marca_maquillaje');
            $maquillaje['modelo'] = $this->request->getPost('modelo_maquillaje');
            $maquillaje['color'] = $this->request->getPost('color_maquillaje');
            $maquillaje['tamaño'] = $this->request->getPost('tamaño_maquillaje');
            $maquillaje['tipo'] = $this->request->getPost('categoria_maquillaje');
            $maquillaje['precio'] = $this->request->getPost('precio_maquillaje');
            $maquillaje['descripcion'] = $this->request->getPost('descripcion_maquillaje');
            $maquillajemaquillaje['destacado'] = $this->request->getPost('destacado_maquillaje');
            $maquillaje['fecha'] = fecha_actual();
            //verificar si tiene algo el input de file
            if(!empty($this->request->getFile('image_maquillaje')) && $this->request->getFile('image_maquillaje')->getSize() > 0){
                $this->eliminar_archivo($maquillaje_anterior);
                $maquillaje['imagen_maquillaje'] = $this->subir_archivo($this->request->getFile('image_maquillaje'));
            }//end if existe imagen

            if($tabla_maquillaje->update($id_maquillaje, $maquillaje) > 0){
                mensaje("La información del maquillaje ha sido actualizada exitosamente", SUCCESS_ALERT);
                // return redirect()->to(route_to('usuarios'));
                return ($maquillaje['tipo']  != TIPO_MAQUILLAJE) ? redirect()->to(route_to('dashboard')) : redirect()->to(route_to('dashboard')) ;
            }//end if se actualiza el usuario
            else{
                mensaje("Hubo un error al actualizar la información del maquillaje. Intente nuevamente, por favor", DANGER_ALERT);
                return redirect()->to(route_to('dashboard',$id_maquillaje));
            }//end else se inserta el usuario
            
        }//end editar

    }//End Class maquillaje_detalles
