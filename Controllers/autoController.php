<?php
include_once('models/autosmodel.php');
include_once('views/autosview.php');

class AutoController {
    private $model;
    private $view;
    

    public function __construct()
    {
        $this->model = new AutosModel();
        $this->view = new AutosView();
        
    }

    //Listado de items.
    public function verAutos()
    {
        $autos = $this->model->getAllAutos();
        $this->view->verAutos($autos);
    }

    //Listado de items.
    public function verAutosAdmin()
    {
        $autos = $this->model->getAllAutos();
        $this->view->verAutosAdmin($autos);
    }
    
    //Detalle de Item.
    public function verAuto($id)
    {
        $autos = $this->model->getAuto($id);
        $this->view->mostrarAuto($autos);
    }

    //Listado de Item por Categoria.
    public function verAuto_Marca($id_marca)
    {
        $autos = $this->model->getAutos_marca($id_marca);
        $this->view->verAuto_Marca($autos);
        
    }

    public function delAuto($id)
    {
        $this->model->deleteAuto($id);
        //header("Location: " . BASE_URL."Admin-auto");
        
    }

}