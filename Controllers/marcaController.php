<?php
include_once('models/marcasmodel.php');
include_once('views/marcasview.php');

class MarcaController {
    private $model;
    private $view;
    

    public function __construct()
    {
        $this->model = new MarcasModel();
        $this->view = new MarcasView();
        
    }

    //Listado de Categoria.
    public function verMarcas()
    {
        $marcas = $this->model->getAllMarcas();
        $this->view->verMarcas($marcas);
    }

    //Listado de Categoria.
    public function verMarcasAdmin()
    {
        $marcas = $this->model->getAllMarcas();
        $this->view->verMarcasAdmin($marcas);
    }
  
}