<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>specialists</title>
    <link rel="stylesheet" href="<?= base_url("assets/css/specialist.css") ?>">
</head>
<body>
    <?php $this->load->view("header") ?>

    <div class="title"><h1>Nos suggestions de Specialistes</h1></div>

    <div class="list-container">
        <?php foreach ($specialists as $sp){ ?>
            <div class="specialist-card" >
                <div class="img-container" ></div>
                <div class="text-container" >
                    <h2>Nom : <?= $sp["nom"] ?></h2>
                    <h2>Specialité : <?= $sp["Specialité"] ?></h2>
                    <h2>Contact : <?= $sp["contact"] ?></h2>
                </div>
            </div>
        <?php } ?>
    </div>

</body>
</html>