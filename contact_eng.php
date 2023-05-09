<?php

// Initialise Twig
include('include/twig.php');
include('include/data5_menus_eng.php');
include('include/data8_contact_eng.php');
include('include/data4_aside_eng.php');
$twig = init_twig();

echo $twig->render('contact.twig', [
    'menu' => $menu,
    'contact' => $contact,
    'aside' => $aside,
]);