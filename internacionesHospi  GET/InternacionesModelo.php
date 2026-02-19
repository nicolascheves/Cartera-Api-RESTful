<?php

class InternacionesModelo extends Modelo{
    public function getAllByOrder($id,$sort,$order){
        $consulta = $this->db->prepare("SELECT *FROM Internaciones WHERE id_usuario=? ORDER BY $sort $order");
        $consulta->execute([$id]);
        return $consulta->fetchAll(PDO::FETCH_OBJ);
    }

    // Obtener Id de la cama donde fue internado por ultima vez
    public function getByCamaUser($id_cama,$id_suario,$sort,$order,$limit){
        $consulta = $this->db->prepare("SELECT * FROM Internaciones WHERE id_usuario=? AND id_cama=? ORDER BY $sort $order LIMIT $limit");
        $consulta->execute([$id_suario,$id_cama]);
        return $consulta->fetch(PDO::FETCH_OBJ);
    } 

}