<?php 
    namespace App\Controllers\Panel;
    use App\Controllers\BaseController;
    use App\Libraries\Permisos;

    class Catalogo_dama extends BaseController{

        private $session;
        private $permitido = TRUE;

        public function __construct(){
            //cargar el permiso roles
            helper('permisos_roles_helper');
            //instancia de la sesion
            $session = session();
            //Verifica si el usuario logeado cuenta con los permiso de esta area
            if (acceso_usuario(TAREA_CATALOGO_DAMA)) {
                $session->tarea_actual = TAREA_CATALOGO_DAMA;
            }//end if 
            else{
                $this->permitido = FALSE;
            }//end else
        }//end constructor

        public function index(){
            //verifica si tiene permisos para continuar o no
            if($this->permitido){
                return $this->crear_vista("panel/catalogo_dama", $this->cargar_datos());
            }//end if rol permitido
            else{
                mensaje("No tienes permiso para acceder a este módulo, contacte al administrador", WARNING_ALERT);
                return redirect()->to(route_to('acceso'));
            }//end else rol no permitido
        }//end index

        private function cargar_datos(){
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
                                           : (($session->sexo_usuario == SEXO_FEMENINO) ? base_url(RECURSOS_CONTENIDO.'imagenes/usuario/female.png') : base_url(RECURSOS_CONTENIDO.'imagenes/usuario/male.jpg'));
           
                                           //Cargamos el modelo correspondiente
            $datos['nombre_pagina'] = 'Catalogo para dama';

            //Cargamos el modelo correspondiente
            $tabla_maquillaje = new \App\Models\Tabla_maquillaje;
            $datos['maquillaje_dama'] = $tabla_maquillaje->data_table_maquillaje(TIPO_MAQUILLAJE_DAMA);

            return $datos;
        }//end cargar_datos

        private function crear_vista($nombre_vista, $contenido = array()){
            $contenido['menu'] = crear_menu_panel(TAREA_CATALOGO, TAREA_CATALOGO_DAMA);
            return view($nombre_vista, $contenido);
        }//end crear_vista

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
        public function eliminar($id_maquillaje = 0) {
            //Cargamos el modelo correspondiente
            $tabla_maquillaje = new \App\Models\Tabla_maquillaje;
            //Query
            $maquillaje = $tabla_maquillaje->obtener_maquillaje($id_maquillaje); 
            if (!empty($maquillaje)) {
                //Borra la imagen del usuario en caso de que tenga
                $this->eliminar_archivo($maquillaje->imagen_maquillaje);
                //Se va a eliminar el usuario
                if($tabla_maquillaje->delete($id_maquillaje)) {
                    mensaje("El maquillaje ha sido eliminado exitosamente", SUCCESS_ALERT);
                }//end if eliminar
                else {
                    mensaje("Hubo un error al eliminar el maquillaje, intenta nuevamente", DANGER_ALERT);
                }//end else

            }//end if count
            else {
                mensaje("El maquillaje que deseas eliminar no existe", WARNING_ALERT);
            }//end else count
            //redirecciona al modulo de usuarios
            return redirect()->to(route_to('catalogo_dama_panel'));
        }//end eliminar

    }//End Class Catalogo_dama
