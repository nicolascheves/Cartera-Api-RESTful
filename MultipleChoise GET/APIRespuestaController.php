<?php

class APIRespuestaController{
    private $modelo;
    private $vista;
    private $preguntaModelo;

    public function __construct($res){
        $this->modelo = new RespuestaModel();
        $this->preguntaModelo = new PreguntaModel();
        $this->usuarioModel = new UsuarioModel();
        $this->vista = new RespuestaView($res);
    }

    public function getPreguntasActivas($req, $res){
        // OPCIONAL
        $preguntas = $this->preguntaModelo->getActivas();
        return $this->vista->response($preguntas, 200);
    }


    // ENDOPINT: GET    api/respuestas/{:id_pregunta}/usuario/{:id_usuario} ? sort=fecha & order=asc
    public function getByPrgANDUser($req,$res){
        // ASC  (dudas )
        $id_pregunta = $req->params('id_pregunta'); 
        $id_usuario = $req->params('id_usuario');
        $order = $req->query->order;

        $respuestas = $this->model->getByPrgANDUser($id_pregunta, $id_usuario, $order);
        return $this->vista->response($respuestas ,200);
    }

}

º Lista las preguntas activas
    GET     api/preguntas/activas

º Obt las respuestas a una pregunta del usuario log ordenado x fecha
    GET    api/respuestas/{:id_pregunta}/usuario/{:id_usuario} ? sort=fecha & order=asc


