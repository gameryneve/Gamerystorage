<!DOCTYPE html>
<html lang="fr">
<?php
require '../config/config.php';
?>
<head>
    <title><?= $config['sitetitle'] ?> | Administration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<nav class="nav">
    <a href="/" class="nav-link">Acceuil</a>
    <a href="apireference.php" class="nav-link">Référence api</a>
</nav>
<div class="container">
    <h2><img src="svg/alert.svg"> Utilisateur non validé</h2>
    <table class="table">
        <thead>
        <th scope="col">Nom</th>
        <th scope="col">Prénom</th>
        <th scope="col">email</th>
        <th scope="col">Validé</th>
        </thead>
    </table>

</div>
<?php
require '../config/script.php';
?>
</body>
</html>