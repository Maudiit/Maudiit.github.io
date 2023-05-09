<?php

// Initialise Twig
include('include/twig.php');
include('include/data5_menus.php');
include('include/data8_contact.php');
include('include/data4_aside.php');
$twig = init_twig();

echo $twig->render('contact.twig', [
    'menu' => $menu,
    'contact' => $contact,
    'aside' => $aside,
]);