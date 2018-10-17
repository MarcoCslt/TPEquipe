<?php
    require_once('fonctions.php');

    $nbdep = $_POST["nbdep"];
    $nbfin = $_POST["nbfin"];
    $pas = $_POST["pas"];
    $color = $_POST["color"];
    Calcul($nbdep,$nbfin,$pas,$color);
?>