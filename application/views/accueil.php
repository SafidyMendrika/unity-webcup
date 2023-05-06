<!DOCTYPE html>
<html lang="en" style="overflow: hidden">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo base_url("assets/style/style.css")?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/bulma/bulma.min.css") ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/bulma/bulma-dashboard.min.css")?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/font/fontawesome/css/all.min.css")?>" />

    <script src="<?php echo site_url("assets/js/download.js")?>" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>

    <title>Accueil</title>
</head>
<body>
<div class="dashboard is-full-height has-background-white-ter">
    <div
            class="dashboard-panel is-small box is-paddingless is-hidden-mobile pt-5"
    >
        <header class="dashboard-panel-header">
            <div class="has-text-centered">
                <h1 class="title" id="logo">DIMPEX</h1>
            </div>
        </header>

        <div class="dashboard-panel-content">
            <aside class="menu">
                <ul class="menu-list">
                    <li>
                        <a href="<?php echo site_url('/Accueil')?>" class="p-4 is-active has-background-info">
                            <span><i class="fas fa-home"></i></span>
                            <span style="position: absolute; left: 50px;">Accueil</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('/Comptes')?>" class="p-4">
                            <span><i class="fas fa-mail-bulk"></i></span>
                            <span style="position: absolute; left: 50px;">Comptes</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('/Journals')?>" class="p-4">
                            <span><i class="fas fa-journal-whills"></i></span>
                            <span style="position: absolute; left: 50px;">Journal</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('/GrandLivre')?>" class="p-4">
                            <span><i class="fas fa-book-open"></i></span>
                            <span style="position: absolute; left: 50px;">Grand livre</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('/BalanceController')?>" class="p-4">
                            <span><i class="fas fa-balance-scale"></i></span>
                            <span style="position: absolute; left: 50px;">Balance</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('/Devises')?>" class="p-4">
                            <span><i class="fas fa-dollar-sign"></i></span>
                            <span style="position: absolute; left: 50px;">Devises</span>
                        </a>
                    </li>
                </ul>
            </aside>
        </div>
    </div>

    <div class="dashboard-main">
        <div class="box m-4 is-6 pb-5">
            <h1 class="title">Information</h1>
            <br>

            <div id="about">
                <h1 class="is-size-5">Nom: <?php echo $row['nomsociete'];?></h1>
                <h1 class="is-size-5">Email: <?php echo $row['mail'];?></h1>
                <h1 class="is-size-5">Date de creation:  <?php echo $row['datecreation'];?></h1>
                <h1 class="is-size-5">NIF:  <?php echo $row['nif'];?></h1>
                <h1 class="is-size-5">STAT:  <?php echo $row['stat'];?></h1>
                <h1 class="is-size-5">RCS:  <?php echo $row['rcs'];?></h1>
                <h1 class="is-size-5">Capital:  <?php echo $row['capital'];?></h1>
                <h1 class="is-size-5">Devise:  <?php echo $row['nomdevise'];?>Ariary</h1>
                <h1 class="is-size-5">Adresse:  <?php echo $row['adresse'];?></h1>
                <h1 class="is-size-5">Siege:  <?php echo $row['siege'];?></h1>
                <h1 class="is-size-5">Objet:  <?php echo $row['objet'];?></h1>
                <h1 class="is-size-5">Exercice:  <?php echo $row['datedebutexercice'];?></h1>


            </div>
            <br>

            <button class="button is-info" onclick="downloadPDF()">Download PDF</button>
        </div>

    </div>

</div>
</body>
</html>
