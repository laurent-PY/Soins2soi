<?php
include '../script/pdoconect.php';
include '../script/req_ins.php';
$messageAddSuccess = false;
$messageChampVide = false;
if (isset($_POST['subMess'])) {
    if (!empty($_POST['pseudo_message']) && !empty($_POST['titre_message']) && !empty($_POST['date_message']) && !empty($_POST['contenu_message'])) {
        $messageChampVide = false;
        insMess();
        $messageAddSuccess = true;

    }else {
        $messageChampVide = true;
    }
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="../styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tutoBootStrap</title>
</head>

<body class="bckgrnd">
<div class="container">
    <div id="menuNavbar">
        <nav class="navbar fixed-top navbar-expand-md navbar-light bg-light shadow p-3 mb-5 bg-white rounded">
            <a class="navbar-brand" href="#">Soin 2 Soi</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="../index.php">Accueil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="soins.php">Soins</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="initiation.php">Initiation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Informations pratiques</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="livre_dor.php">Livre d'or </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- fin de div container -->
    <div class="container">
        <div class="card marginTop">
            <div class="card-body">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-md-3"><label>Veuillez entrer votre pseudo</label></div>
                        <div class="col-md-4"><input name="pseudo_message" type="text" class="form-control"></div>
                        <div class="col-md-5"></div>
                        <div class="col-md-3"><label>Un petit titre =) </label></div>
                        <div class="col-md-4"><input name="titre_message" type="text" class="form-control"></div>
                        <div class="col-md-5"></div>
                        <div class="col-md-3"><label>La date de voter passage</label></div>
                        <div class="col-md-4"><input name="date_message" type="date" class="form-control"></div>
                        <div class="col-md-5"></div>
                        <div class="col-md-3"><label>Par ici le message  </label></div>
                        <div class="col-md-6"><textarea name="contenu_message" class="form-control" rows="10" ></textarea></div>
                        <div class="col-md-3"></div>
                        <div class="col-md-3">
                            <div class="col-md-2"><label for="sub"><input type="submit" class="btn btn-success" name="subMess" value="Sauver"></label></div>
                        </div>
                        <div class="col-md-6 mrgTop">
                            <?php if ($messageChampVide)  {
                                ?> <div class="alert alert-warning alert-dismissible" role="alert" id="hideDivChampAbsent">
                                    Veuillez remplir tous les champ du formulaire.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <?php
                            }
                            ?>
                            <?php if ($messageAddSuccess) {
                            ?> <div class="alert alert-success alert-dismissible fade show" role="alert" id="hideDivAjoutOk">
                                Votre message a été envoyé. Merci !
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button
                            </div>
                            <?php
                        }
                            ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    window.setTimeout("document.getElementById('hideDivChampAbsent').style.display='none';", 2000);
    window.setTimeout("document.getElementById('hideDivAjoutOk').style.display='none';", 2000);
    window.setTimeout("document.getElementById('hideDivItemExist').style.display='none';", 2000);
</script>
</body>
</html>