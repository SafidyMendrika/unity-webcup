<?php

class Onirix extends \CI_Model
{

    private $apiKey = "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";
    private $endPoint =  'https://api.openai.com/v1/engines/davinci-codex/completions';

    public function __construct(){
        parent::__construct();

    }


    public function prompt($prompt){
        $max_tokens = 50;
        $model = 'text-davinci-002';
        // la demande à envoyer
        $data = array(
            'prompt' => $prompt,
            'max_tokens' => $max_tokens,
            'model' => $model
        );

        $options = array(
            'http' => array(
                'header' => "Content-type: application/json\r\nAuthorization: Bearer " . $this->apiKey . "\r\n",
                'method' => 'POST',
                'content' => json_encode($data),
                'verify_peer' => true,
            )
        );

        // Envoi de la requête HTTP à l'API

        $context = stream_context_create($options);
        $result = file_get_contents('https://youtube.com', false, $context);


        return $result;
    }
}