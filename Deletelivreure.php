<?php
include '../Consulter/LivreureL.php';
$LivreureL = new LivreureL();
$LivreureL->DeleteLivreure($_GET["Idlivreure"]);
header('Location:Listlivreure.php');
