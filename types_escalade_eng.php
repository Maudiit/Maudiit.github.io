<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data1_types_escalade_eng.php');
include('include/data4_aside_eng.php');
include('include/data5_menus_eng.php');


echo $twig->render('types_escalade.twig', [
	'articles' => $types_escalade,
	'aside' => $aside,
	'menu' => $menu,
	'lien' => 'types_escalade.php'
]);