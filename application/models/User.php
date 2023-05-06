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
        require "vendor/autoload.php";

        $client = new Google_Client();
        $client->setClientId('931044001147-sbfcmmvrfjfutoudu3ajn64okd0himh8.apps.googleusercontent.com');
        $client->setClientSecret('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');
        $client->setRedirectUri('https://unityteam.madagascar.webcup.hodi.host/Prompt');
        $client->addScope(Google_Service_Drive::DRIVE);

        $service = new Google_Service_Drive($client);

        $files = $service->files->listFiles(array())->getItems();

        return $files;
    }
    public function findById($id){
        $query  = $this->db->select("*")->from("user")->where("id",$id)->get();

        return $query->result_array();
    }
}