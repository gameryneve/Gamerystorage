<html lang="en">
<?php
require '../config/config.php';
if (isset($_GET['type'])&& $_GET['type']=['lose']) {
    $new = $bdd->prepare("UPDATE user SET is_new=false WHERE id = ?");
    $new->execute(array($_SESSION['user']));
};
if(isset($_POST['data'])) {
    if(isset($_FILES['file'])) {
        $dir = "../asset/upload/";
        $file = $_FILES["file"]["tmp_name"];
        $filer = $_FILES["file"]["name"];
        $directory = $dir. basename($filer);
        move_uploaded_file( $file, $directory);
    } else {
        $filer = "0";
    }
    $insert = $bdd->prepare("INSERT INTO content(user_id, file_id, message) VALUES(?, ?, ?)");
    $insert->execute(array($_SESSION['user'], $filer, $_POST['data']));
}
$_SESSION['user'] = "1";
?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/menu.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title><?= $config['sitetitle'] ?></title>
</head>
<body>
<section class="menu">
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><?= $config['sitetitle'] ?></a>
        <a class="nav-link" href="evenement.php?opa=12">Calendrier des évènements</a>
    </nav>
</section>
<?php
$user = $bdd->prepare('SELECT * FROM user WHERE id = ?');
$user->execute(array($_SESSION['user']));
while($use = $user->fetch()) {
    $isnew = $use['is_new'];
    ?>
<?php
}
?>
<div class="row row-cols-2">
    <div class="col-sm-2 col-md-3 float-left">
        <ul class="list-group">
            <li class="list-group-item">
                <img src="/asset/blank_profile.png" width="60px">
            </li>
            <li class="list-group-item">
                <img src="/admin/apireference.php?content=gregoire"></img>
            </li>
        </ul>
    </div>
    <div class="col-sm-2 col-md-7">
        <?php
        if ($isnew == true) {
            ?>
            <div class="jumbotron">
                <h1 class="display-4">Bienvenue sur le site</h1>
                <p class="lead">Voici un tutoriel pour démarrer</p>
                <hr class="my-4">
                <p>Vous pouvez retrouvez les liens dans le menu en haut, voir le calendrier des évènements qui sont prévus pour les prochains jours, voir les abonnememts qui sont en cours</p>
                <a class="btn btn-primary btn-lg" href="?opa=close&type=newuser" role="button">Fermer le tutoriel</a>
            </div>
            <?php
        }
        ?>
        <form action="" method="post" enctype="multipart/form-data">
            <textarea name="data" class="form-control" placeholder="quoi de neuf ? "></textarea>
            <input type="file" style="display: none" id="upload" name="file">
            <div class="controlsbar">
            <i class="fa fa-upload float-left" style="color: gray;" onclick="document.getElementById('upload').click()"></i>
                <input type="submit">
            </div>
        </form>
    </div>
</div>
</body>
</html>

