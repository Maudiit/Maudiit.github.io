<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data5_menus.php');
include('include/data4_aside.php');
include('include/data7_a_propos.php');

echo $twig->render('a_propos.twig', [
    'menu' => $menu,
    'aside' => $aside,
    'a_propos' => $a_propos,
    'lien' => 'a_propos_eng.php',
]);