<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data5_menus_eng.php');
include('include/data4_aside_eng.php');
include('include/data7_a_propos_eng.php');

echo $twig->render('a_propos.twig', [
    'menu' => $menu,
    'aside' => $aside,
    'a_propos' => $a_propos,
    'lien' => 'a_propos.php',
]);