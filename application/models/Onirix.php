<?php

class Onirix extends \CI_Model
{

    private $apiKey = "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";
    private $endPoint =  'https://api.openai.com/v1/engines/davinci-codex/completions';

    public function __construct(){
        parent::__construct();

    }


    public function prompt($prompt){
        // la demande à envoyer
        $data = array(
            'prompt' => $prompt,
            'max_tokens' => 200,
            'temperature' => 0.7
        );

        // Configuration de la requête HTTP
        $options = array(
            'http' => array(
                'header' => "Content-type: application/json\r\nAuthorization: Bearer " . $this->apiKey,
                'method' => 'POST',
                'content' => json_encode($data)
            )
        );

        // Envoi de la requête HTTP à l'API
        $context = stream_context_create($options);
        $result = file_get_contents($this->endPoint, false, $context);

        return $result;
    }
}