<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data3_voca_eng.php');
include('include/data4_aside_eng.php');
include('include/data5_menus_eng.php');

echo $twig->render('vocabulaire.twig', [
	'articles' => $vocabulaire,
	'aside' => $aside,
	'menu' => $menu,
	'lien' => 'vocabulaire.php',
]);