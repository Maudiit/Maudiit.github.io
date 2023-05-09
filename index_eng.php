<?php

// Initialise Twig
include('include/twig.php');
include('include/data5_menus_eng.php');
include('include/data4_aside_eng.php');
include('include/data6_accueil_eng.php');
$twig = init_twig();


echo $twig->render('index.twig', [
    'menu' => $menu,
    'aside' => $aside,
    'accueil' => $accueil,
    'lien' => 'index.php'
]);