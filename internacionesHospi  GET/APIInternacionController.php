<?php

class APIInternacionController{
    private $modelo;
    private $vista;
    private $camaController;

    public function __construct($modelo, $vista, $camaController){
        $this->modelo = $modelo;
        $this->vista = $vista;
        $this->camaController = $camaController;
    }

    // esto como constante ? 
    // * HACE CONTROLES A LARGO PLAZO

    if(!empty($req->params['id_usuario'])){
        $id_usuario = $req->params['id_usuario'];
    } else {
        return $this->vista->response("El id_usuario es requerido",400); // modificar para 404
    };

    $campos_validos=['ingreso'];

    if(!in_array($req->query->sort, $campos_validos)){
        return $this->vista->response("El campo no es valido",400);
    } else {
        $sort = $req->query->sort;
    }

    $order = "ASC";
    if($req->query->order === "DESC"){
        $order = "DESC";
    }

    public function getAllByOrden($req,$res){
        
       $internaciones= $this->modelo->getAllByOrden($id_usuario,$order,$sort);
       return $this->vista->response($internaciones,200);
    }

    // Obtener Id de la cama donde fue internado por ultima vez
    public function getCamaByUser($req,$res){
        
      $cama = $this->modelo->getByCamaUser($req->params['id_cama'],$req->params['id_usuario'],$req->query->sort,$req->query->order,$req->query->limit);
      return $this->vista->response($cama->id_cama,200);
    }
}