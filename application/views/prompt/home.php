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
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<script src="<?php echo base_url("assets/js/prompt.js") ?>" defer></script>
<script src="<?php echo base_url("assets/js/prompt-submition.js") ?>" defer></script>

<body>
 <div class="historique">
        <div class="text simple" ><h2>Historique</h2></div>
        <div class="icon">plus</div>
        <div class="history-container" >
            <div class="history reve" ><h2>Dormir debout</h2></div>
            <div class="history reve" ><h2>Dormir assis</h2></div>
            <div class="history cauchemar" ><h2>Dormir nu</h2></div>
            <div class="history cauchemar" ><h2>Dormir dehors</h2></div>
            <div class="history reve" ><h2>Dormir rassasié</h2></div>
            <div class="history cauchemar" ><h2>ne pas Dormir</h2></div>
        </div>
        </div>
 </div>
    <div class="container" id="background-container">
        <div class="sun"></div>
        <div class="form-prompt-container">
            <form action="" class="form-prompt">
                <div class="prompt-input">
                    <textarea name="dream-input" placeholder="Decrivez votre reve..." class="form-input" id="dream-input"></textarea>
                    <button class="form-submit" id="dream-submit">GO</button>
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