<?php

require_once './libs/smarty-3.1.40/libs/Smarty.class.php';

    class AutosView {

        private $smarty;

        public function __construct() {
            $this->smarty = new Smarty();
        }

        function verAutos($autos)
        {        
            //Se asigna
            $this->smarty->assign('autos', $autos);
            //Se renderiza el template
            $this->smarty->display('templates/listarAutos.tpl');
        }

        function verAutosAdmin($autos)
        {        
            //Se asigna
            $this->smarty->assign('autos', $autos);
            //Se renderiza el template
            $this->smarty->display('templates/adminAuto.tpl');
        }

        function mostrarAuto($autos) {

            $this->smarty->assign('autos', $autos);
            $this->smarty->display('templates/ListarAutos.tpl');
            
        }

        function verAuto_Marca($autos) {

            $this->smarty->assign('autos', $autos);
            $this->smarty->display('templates/ListarAutos.tpl');
        }
    /*
        function filterAuto() {
    
        // Titulo
        $this->smarty_for_auto->assign('titulo', 'Filtrando los autos');
    
        // renderizo el template
        $this->smarty_for_auto->display('./templates/auto_templates/filtrando_auto.tpl');
        }*/
    
        /*/ Formulario para crear carrera /*/
    
        /*function formCreateAuto($marcas) {
    
            // Titulo
            $this->smarty_for_auto->assign('titulo', 'Creando nuevo auto');
    
            // paso las carreras
            $this->smarty_for_auto->assign('marcas', $marcas);
            // renderizo el template
            $this->smarty_for_auto->display('./templates/auto_templates/creando_auto.tpl');
        }
    
        function showUpdateAuto($auto, $marcas) {
            
            // Titulo
            $this->smarty_for_auto->assign('titulo', 'Modificando auto');
    
            // paso la materia
            $this->smarty_for_auto->assign('auto', $auto);
            // paso las carreras
            $this->smarty_for_auto->assign('marcas', $marcas);
            // renderizo el template
            $this->smarty_for_auto->display('./templates/auto_templates/modificando_auto.tpl');
        }*/
    }

    





    
?>