<?php

// Home page
$app->get('/', function () use ($app) {
    $books = $app['dao.book']->findAll(); /* Requete de demande donnée */
    return $app['twig']->render('index.html.twig', array('books' => $books));  /* Premier valeur fait reference au fichier twig. La 2eme valeur est le contenu généré */
});