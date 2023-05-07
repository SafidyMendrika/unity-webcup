<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Onirix Prompt</title>
</head>

<link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/css/prompt.css"); ?>">
<link rel="stylesheet" href="<?php echo base_url("assets/css/header.css"); ?>">
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>

<script src="<?php echo base_url("assets/js/prompt-submition.js") ?>" defer></script>

<body>
 <div class="historique">
        <div class="text simple" ><h2>Historique</h2></div>
        <div class="icon-arrow-right">
            <img src="<?php echo base_url("assets/icon/arrow-right-336-svgrepo-com.svg"); ?>" alt="">
        </div>
        <div class="history-container" >
            <?php foreach ($histories as $history){ ?>
                <?php  if ($history["idtypereve"] == 1){ ?>
                <div class="history reve" ><h2><?= $history["prediction"] ?></h2>

                </div>

                <?php } ?>
            <?php } ?>

        </div>
        </div>
 </div>
    <div class="container" id="background-container">
        <div class="sun"></div>

        <div class="response-text-container">
            <div class="response-prompt">
                <h1 data-prompt>Here is my prompt</h1>
            </div>

            <div class="response-card-container">
                <div class="response-card">
                    <div class="response-card-title">
                        <h1 data-categorie>Education</h1>
                    </div>

                    <div class="response-card-text">
                        <p data-prediction>Here is an example text hasgfkshdfhsdlkjhals kljdhflkjsdhlkjh hjsdfhkjhdkjhsdkjhsdkjhsdjk hskdjhlksjdfhlksjdhf kjhsdfkjhsdflkjhsdflkjh jsdhflkjhsdflkjhsdf jSfkjsdhflkjsdhflkjDHf sdfjhsdkfjhsdkfjhkjsd hgdfkjhsgdfkjhgsdfkjh sdfhgskdjhfgksjdhfgkJSDHGF</p>
                    </div>

                    <div class="control-buttons">
                        <a data-retour href="#">Retour</a>
                        <a data-continuer href="#">Continuer</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-prompt-container">
            <form action="#" class="form-prompt">
                <div class="prompt-input">
                    <textarea name="dream-input" placeholder="Décrivez votre rêve..." class="form-input" id="dream-input"></textarea>
                    <div class="icon-send" id="dream-prompt-submit">
                        <img src="<?php echo base_url("assets/icon/send-svgrepo-com.svg"); ?>" alt="">
                    </div>
                </div>

                <input type="hidden" name="dream-type" id="dream-type">
            </form>

            <div class="dream-type-select">
            </div>

        </div>

        <img id="land-foreground-1" src="<?php echo base_url("assets/svg/land-foreground-1.svg") ?>" >
        <img id="land-background-1" src="<?php echo base_url("assets/svg/land-background-1.svg") ?>" >
        <img id="land-background-2" src="<?php echo base_url("assets/svg/land-background-2.svg") ?>" >
        <img id="land-background-3" src="<?php echo base_url("assets/svg/land-background-3.svg") ?>" >
        <img id="clouds-background" src="<?php echo base_url("assets/svg/clouds-background.svg") ?>" >
        
    </div>
</body>

</html>

<script src="<?php echo base_url("assets/js/prompt.js") ?>"></script>

<script>
    var predictions = new Array();

    // Sending the prompt
    var dreamPromptSubmit = document.querySelector("#dream-prompt-submit");
    dreamPromptSubmit.addEventListener('click', (e) => {
        e.preventDefault();

        // Ajax to the controller
        let xhr = new XMLHttpRequest();

        xhr.addEventListener('load' , (res) => {
            let predictions = JSON.parse(res.target.responseText);
            afficher(predictions);

            var textPrompt = document.querySelector("#dream-input").value;
            document.querySelector("#dream-input").textContent = "";

            document.querySelector("[data-prompt]").textContent = textPrompt;
        });

        xhr.addEventListener('error', (res) => {
            console.log("We have an error in the sending of the prompt");
        })

        // Getting the input of the prompt
        var dreamPromptForm = document.querySelector(".form-prompt");
        var formData = new FormData(dreamPromptForm);

        xhr.open('POST', '<?php echo base_url('Prompt/prompt') ?>');
        xhr.send(formData);
    });
</script>

<script>
    window.addEventListener('load', () => {
        var xhr = new XMLHttpRequest();

        xhr.addEventListener('load', (res) => {

            console.log(res.target.responseText);

            var result = res.target.responseText;

            if(result == "false"){
                notifySickness();
            }

        });

        xhr.addEventListener('error', (res) => {
            console.log('Error');
        });

        xhr.open('GET', '<?= base_url("Prompt/checkPatientSanity") ?>');
        xhr.send(null);
    })



    function notifySickness(){
        const notification = document.querySelector()
    }

</script>
</html>

