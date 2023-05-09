<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data2_materiels.php');
include('include/data4_aside.php');
include('include/data5_menus.php');

echo $twig->render('materiels.twig', [
	'articles' => $materiels,
	'aside' => $aside,
	'menu' => $menu,
	'lien' => 'materiels_eng.php'
]);