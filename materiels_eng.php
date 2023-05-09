<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data2_materiels_eng.php');
include('include/data4_aside_eng.php');
include('include/data5_menus_eng.php');

echo $twig->render('materiels.twig', [
	'articles' => $materiels,
	'aside' => $aside,
	'menu' => $menu,
	'lien' => 'materiels.php'
]);