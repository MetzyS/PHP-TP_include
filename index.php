<?php
$page = filter_input(INPUT_GET, "page");
$array = [
    "dimanche" => "fermé",
    "lundi" => "18h à 22h",
    "mardi" => "18h à 20h",
    "mercredi" => "16h30 à 18h",
    "jeudi" => "19h30 à 22h",
    "vendredi" => "18h à 22h",
    "samedi" => "fermé"
];

include('common/template.php');
?>