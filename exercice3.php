<?php
require_once('vendor/autoload.php');

use Ipssi\Bibliotheque\Adherent;
use Ipssi\Bibliotheque\Book;
use Ipssi\Bibliotheque\Library;

$book1 = new Book("test1");
$book2 = new Book("test2");
$book3 = new Book("test3");

$bookList = array($book1, $book2, $book3);

$library = new Library($bookList);

$adherent = new Adherent("jean");

$adherent->lendABook($book2);
$adherent->lendABook($book1);
$adherent->giveBack($adherent->getLend());


