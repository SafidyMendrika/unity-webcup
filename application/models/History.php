<?php

class History extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function histories($iduser){
        $query = $this->db->query("SELECT * FROM historique as h JOIN prediction as p ON h.idprediction = p.id where iduser = ".$iduser);

        return $query->result_array();
    }
}