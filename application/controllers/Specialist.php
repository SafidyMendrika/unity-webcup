<?php

class Specialist extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->specialists = array(
            array("nom"=>"Albert Martieux","Specialité"=>"education","contact"=>"+33 18 56 214"),
            array("nom"=>"Bernard Dupuis ","Specialité"=>"professionnel","contact"=>"+33 17 54 111"),
            array("nom"=>"Kevin Chantecler","Specialité"=>"amoureuse","contact"=>"+33 89 65 397"),
        );
        $this->edt = array(
            array("08H00 - 16H00","Fermé","09H30 - 13H00","08H30 - 14H00","09H - 15H00"),
            array("09H00 - 17H00","08H30 - 13H00","FERME","10H30 - 17H00","Fermé"),
            array("08H00 - 17H00","08H30 - 15H00","FERME","Fermé","08H00 18H00"),
        );
    }
    public function detals($specialite){
        $data["specialist"] = $this->specialists[$specialite];
        $data["edt"] = $this->edt[$specialite];

        var_dump($data);
        $this->load->view("specialist/detals",$data);
    }
    public function index(){
        $data["specialists"] =$this->specialists;
        $this->load->view("specialist/specialists",$data);
    }
}