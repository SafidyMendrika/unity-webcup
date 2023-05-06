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
                <button class="type-button" data-type="reve">Reve</button>
                <button class="type-button" data-type="cauchemar">Cauchemar</button>
            </div>

        </div>

        <img id="land-foreground-1" src="<?php echo base_url("assets/svg/land-foreground-1.svg") ?>" >
        <img id="land-background-1" src="<?php echo base_url("assets/svg/land-background-1.svg") ?>" >
        <img id="land-background-2" src="<?php echo base_url("assets/svg/land-background-2.svg") ?>" >
    </div>
</body>
</html>