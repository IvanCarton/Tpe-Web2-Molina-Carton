<?php

require_once './libs/smarty-3.1.40/libs/Smarty.class.php';

    class MarcasView {

        private $smarty;

        public function __construct() {
            $this->smarty = new Smarty();
        }

        function verMarcas($marcas)
        {        
            //Se asigna
            $this->smarty->assign('marcas', $marcas);
            //Se renderiza el template
            $this->smarty->display('templates/listarMarcas.tpl');
            
        }

        function verMarcasAdmin($marcas)
        {        
            //Se asigna
            $this->smarty->assign('marcas', $marcas);
            //Se renderiza el template
            $this->smarty->display('templates/adminMarca.tpl');
        }
    } 
?>