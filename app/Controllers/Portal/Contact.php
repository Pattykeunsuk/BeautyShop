<?php

namespace App\Controllers\Portal;
use App\Controllers\BaseController;
class Contact extends BaseController
{
    public function __construct()
    {
    
    }///Se cierra constructor

    public function index()
    {
        return $this->crear_vista('Portal/Contact', $this->cargar_datos());
    }/// fin de index

    private function cargar_datos()
    ///declatación de arreglo
    {
        $datos=array();

        ///
        $datos['nombre_pagina']='Contact';

        return $datos;
    }

    public function crear_vista($nombre_vista='', $contenido= array())
    {
      $contenido ['menu'] ='crear_menu_portal(PAGINA_CONTACT)';
      return view ($nombre_vista, $contenido);
    }///final de crear vista
}/// Final de la clase inicio