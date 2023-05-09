<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data3_voca.php');
include('include/data4_aside.php');
include('include/data5_menus.php');

echo $twig->render('vocabulaire.twig', [
	'articles' => $vocabulaire,
	'aside' => $aside,
	'menu' => $menu,
]);