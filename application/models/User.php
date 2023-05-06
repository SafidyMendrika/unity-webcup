<?php

class User extends CI_Model
{
    public $id;
    public $name;
    public $email;
    public $password;
    public function __construct(){
        parent::__construct();
    }

    public function setSimpleLoginField($email,$mdp){
        $this->email = $email;
        $this->password = $mdp;
    }

    public function login(){
        $query = $this->db->select("id")->from("user")->where("email",$this->email)->where("password",$this->password)->get();

        if($query->row() == 1){
            return $query->result_array();
        }
        return false;
    }
    public function googleLogin(){
        // am farany
        $query = $this->db->select("id")->from("user")->where("email",$this->email)->where("password",$this->password)->get();

        if($query->num_rows()== 1){
            return $query;
        }
        return false;
    }
    public function findById($id){
        $query  = $this->db->select("*")->from("user")->where("id",$id)->get();

        return $query->result_array();
    }
}