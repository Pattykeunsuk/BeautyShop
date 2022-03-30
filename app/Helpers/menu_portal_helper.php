<?php
    /**
     * Esta funcion nos va a permitir crear el menu co todas
     * las opciones del menu y sus subseciones en caso de que las tenga
     * [Menu]
     *      [Opcion 1]
     *      [Opcion 2]
     * *      [SubOpcion 2.1]
     * *      [SubOpcion 2.2]
    */

    function configurar_menu_portal($pagina_actual = '') {
        //Arreglo que almacenra todo el menu
        $menu = array();
        //Arreglo que almacenra las opciones del menu
        $menu_opcion = array();
        //Arreglo que almacenra las opciones del menu
        $menu_sub_opcion = array();

        //Pagina Inicio
        $menu_opcion = array();
        $menu_opcion['is_active'] = ($pagina_actual == PAGINA_INICIO) ? TRUE : FALSE ;
        $menu_opcion['href'] = route_to('Inicio');
        $menu_opcion['text'] = 'inicio';
        $menu_opcion['icon'] = 'fa fa-address-book';
        $menu_opcion['submenu'] = array();
        $menu['inicio'] = $menu_opcion;

        //Pagina Skincare
        $menu_opcion = array();
        $menu_opcion['is_active'] = ($pagina_actual == PAGINA_SKIN) ? TRUE : FALSE ;
        $menu_opcion['href'] = route_to('skin');
        $menu_opcion['text'] = 'skin';
        $menu_opcion['icon'] = 'fa fa-address-book';
        $menu_opcion['submenu'] = array();
        $menu['skin'] = $menu_opcion;


        //Pagina Galeria
        $menu_opcion = array();
        $menu_opcion['is_active'] = ($pagina_actual == PAGINA_GALERY) ? TRUE : FALSE ;
        $menu_opcion['href'] = route_to('galery');
        $menu_opcion['text'] = 'galery';
        $menu_opcion['icon'] = 'fa fa-address-book';
        $menu_opcion['submenu'] = array();
        $menu['galery'] = $menu_opcion;

        //Pagina Category
        $menu_opcion = array();
        $menu_opcion['is_active'] = ($pagina_actual == PAGINA_CATEGORY) ? TRUE : FALSE ;
        $menu_opcion['href'] = route_to('category');
        $menu_opcion['text'] = 'category';
        $menu_opcion['icon'] = 'fa fa-address-book';
        $menu_opcion['submenu'] = array();
            $menu_sub_opcion = array();
            $menu_sub_opcion['href'] = route_to('samsung');
            $menu_sub_opcion['text'] = 'samsung';
            $menu_opcion['submenu']['samsung'] = $menu_sub_opcion;
            $menu['samsung'] = $menu_opcion;

            $menu_sub_opcion = array();
            $menu_sub_opcion['href'] = route_to('apple');
            $menu_sub_opcion['text'] = 'apple';
            $menu_opcion['submenu']['apple'] = $menu_sub_opcion;
            $menu['apple'] = $menu_opcion;
        //Pagina Contacto
        $menu_opcion = array();
        $menu_opcion['is_active'] = ($pagina_actual == PAGINA_CONTACT) ? TRUE : FALSE ;
        $menu_opcion['href'] = route_to('contact');
        $menu_opcion['text'] = 'Contact';
        $menu_opcion['icon'] = 'fa fa-address-book';
        $menu_opcion['submenu'] = array();
        $menu['contact'] = $menu_opcion;


        return $menu;
    }//end configurar_menu_portal

    function crear_menu_portal($pagina_actual = '') {
        $menu = configurar_menu_portal($pagina_actual);
        // d($menu);
        $html='<ul class="navbar-nav ml-auto">';
            foreach ($menu as $opcion) {
                if(sizeof($opcion['submenu']) > 0){
                    $html.='
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="'.$opcion['text'].'" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"><i class="'.$opcion['icon'].'" aria-hidden="true"></i> '.$opcion['text'].'</a>
                            <div class="dropdown-menu" aria-labelledby="'.$opcion['text'].'">';
                                foreach ($opcion['submenu'] as $sub_opcion_menu) {
                                    $html.='<a class="dropdown-item" href="'.$sub_opcion_menu['href'].'">'.$sub_opcion_menu['text'].'</a>';
                                }//end foreach
                            $html.='</div>
                        </li>
                    ';
                }//End if 
                else{
                    $html.='<li class="nav-item ';$html .= ($opcion['is_active'] != FALSE) ? 'active' : '' ;$html.='">
                                <a href="'.$opcion['href'].'" class="nav-link">
                                    <i class="'.$opcion['icon'].'" aria-hidden="true"></i> '.$opcion["text"].'
                                </a>
                            </li>';
                }//end else
            }//end foreach
        $html.='</ul>';
        return $html;
    }//end crear_menu_portal
















