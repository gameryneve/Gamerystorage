<!doctype html>
<?php
require 'config/config.php';
if(isset($_POST['email'])) {
    if(isset($_GET['id'])) {
        $usern = $bdd->prepare("INSERT INTO user(email, mdp) VALUES(?, ?)");
        $usern->execute(array($_POST['email'], sha1($_POST['password'])));
    } else {

    }
}
?>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/menu.css">

    <title><?= $config['sitetitle'] ?></title>
</head>
<body>
<section class="menu">
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><?= $config['sitetitle'] ?></a>
        <a class="nav-link" href="?id=connection">Connexion</a>
    </nav>
</section>
<div class="container">
    <div class="row row-cols-2">
        <div class="col bg">


        </div>
<div class="col">
    <h5>Connection a la platforme en tant que membre de divefactory</h5>
    <form action="" method="post" class="form-group">
        <label for="email">Email</label>
        <input type="email" required id="email" class="form-control" placeholder="Email" name="email">
        <label for="password">Mot de passe</label>
        <input type="password" id="password" placeholder="mot de passe" class="form-control" required name="password">
        <input type="submit" value="connection">
    </form>
</div>
</div>
<?php
require 'config/script.php';
?>
</body>
</html>