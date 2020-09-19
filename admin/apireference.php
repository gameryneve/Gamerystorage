<?php
require '../lib/phpqrcode/qrlib.php';
    $lien= $_GET['content']; // Vous pouvez modifier le lien selon vos besoins
    QRcode::png($lien); // On crée notre QR Code
?>