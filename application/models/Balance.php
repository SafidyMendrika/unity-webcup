<?php

class Balance extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this->numcompte='';
        $this->label='';
        $this->debit=0;
        $this->credit=0;
        $this->load->model('balance');
    }

   

    public function findAll(){
        $query = $this->db->get('v_balance');
        $result = array();
        foreach ($query->result() as $row) {
            $c = new Balance();
            $c->numcompte= $row->numcompte;
            $c->label= $row->label;
            $c->debit= $row->debit;
            $c->credit= $row->credit;
            array_push($result,$c);
        }
        return $result;
    }

}