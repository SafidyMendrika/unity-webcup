<?php

class Onirix extends \CI_Model
{

    private $apiKey = "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";
    private $endPoint =  'https://api.openai.com/v1/engines/davinci-codex/completions';

    public function __construct(){
        parent::__construct();

    }


    public function processPrompt($prompt) {
        $splitedPrompt = preg_split('/[\s,]+/', strtolower($prompt));
        var_dump($splitedPrompt);
        // Populating a dictionnary of category
        $predictionsCategory = array();

        $predictionCategoryQuery = $this->db->query("SELECT * FROM categorieprediction");

        foreach ($predictionCategoryQuery->result_array() as $predictionCategory) {
           // var_dump($predictionCategory);
            $predictionsCategory[$predictionCategory["id"]] = null;
        }

        // Comparer avec les mots cle
        $keywords_query = $this->db->query('SELECT * FROM motcle');
        for ($i = 0; $i < count($splitedPrompt); $i++) {
            foreach ($keywords_query->result_array() as $keyword) {
                if ($keyword["mot"] == $splitedPrompt[$i]) {
                    // Un mot cle
                    $prediction = $this->getRandomPrediction($keyword["id"]);

                    if ($predictionsCategory[$prediction["idcategorie"]] != null) break;

                    $predictionsCategory[$prediction["idcategorie"]] = $prediction;
                }
            }
        }

        // Save the users predictions
        $data = array();
       foreach($predictionsCategory as $prediction) {
           if ($prediction) {
               $row = array(
                   //"iduser" => $_SESSION['iduser'],
                   "iduser" => 1,
                   "idprediction" => $prediction['id']
               );
               $data[] = $row;
           }
       }

        $this->db->insert_batch('historique', $data);

        return $predictionsCategory;
    }

    function getRandomPrediction($keywordId) {
        $predictionQuery = $this->db->query('SELECT pm.idprediction as id, p.prediction as prediction, p.idcategorieprediction as idcategorie, c.nomcategorie as nomcategorie, t.libele as nomreve FROM prediction_motcle as pm JOIN motcle as m ON m.id = pm.idmotcle JOIN prediction as p ON p.id = pm.idprediction JOIN categorieprediction c ON c.id = p.idcategorieprediction JOIN typereve t ON t.id = p.idtypereve where m.id = '.$keywordId);
        $predictionArray = array();

        foreach ($predictionQuery->result_array() as $prediction) {

            $predictionArray[] = $prediction;
        }
        $randomIndex = rand( 0,count($predictionArray) - 1);
        return $predictionArray[$randomIndex];
    }

    function countDream(){
        $iduser = $this->session->get_userdata("idUser");

        $this->db->select("*")->from("historique")->where("iduser",$iduser)->join("prediction","prediction.id = historique.idprediction");

        
    }
}