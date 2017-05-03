<?php

// Home page
$app->get('/', function () use ($app) {
    $books = $app['dao.book']->findAll(); /* Requete de demande donnée */
    return $app['twig']->render('index.html.twig', array('books' => $books));  /* Premier valeur fait reference au fichier twig. La 2eme valeur est le contenu généré */
})->bind('home');

// Book details with comments
$app->get('/book/{id}', function ($id) use ($app) {
    $book = $app['dao.book']->find($id);
    $book->setAuthor($app['dao.author']->find($book->getAuthId()));
    // var_dump($book);
    return $app['twig']->render('book.html.twig', array('book' => $book));
})->bind('book');