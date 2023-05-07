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
        $query = $this->db->select(["id","username"])->from("user")->where("email",$this->email)->where("password",md5($this->password))->get();

        if($query->num_rows() == 1){
            return $query->result_array()[0];
        }
        return false;
    }
    public function googleLogin($mail,$name){
        $queryy = $this->db->select(["id","username"])->from("user")->where("email",$mail)->where("username",$name)->get();

        if ($queryy->num_rows() == 1) {
            return $queryy->result_array()[0];
        }
        $this->save($mail,$name);

        $query = $this->db->select(["id","username"])->from("user")->where("email",$mail)->where("username",$name)->get();

        return $query->result_array()[0];
    }
    public function findById($id){
        $query  = $this->db->select("*")->from("user")->where("id",$id)->get();

        return $query->result_array();
    }
    public function save($mail,$name){
        $this->db->query("INSERT INTO user(email,username) VALUES ('$mail','$name')");

    }

}