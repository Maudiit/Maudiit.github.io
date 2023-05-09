<?php

// Initialise Twig
include('include/twig.php');
include('include/data5_menus.php');
include('include/data4_aside.php');
include('include//data6_accueil.php');
$twig = init_twig();


echo $twig->render('index.twig', [
    'menu' => $menu,
    'aside' => $aside,
    'accueil' => $accueil,
    'lien' => 'index_eng.php'
]);