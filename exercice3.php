<?php
require_once('vendor/autoload.php');

use Ipssi\Bibliotheque\Adherent;
use Ipssi\Bibliotheque\Book;
use Ipssi\Bibliotheque\Library;

$book1 = new Book("Harry Poter", "J. K. Rowling");
$book2 = new Book("Doctor Sleep", "Stephen King");
$book3 = new Book("Bad Adherent", "random book");

$bookList = array($book1, $book2, $book3);

$library = new Library($bookList);

$adherent1 = new Adherent("Laura");
$adherent2 = new Adherent("Jérémy");
$adherent3 = new Adherent("Retard Man");

$adherent3->lendABook($book3);
//testing limit date parameters for lends
$adherent3->getLend()->setDate((new \DateTime())->modify('-15 day'));
$adherent3->giveBack();
$adherent3->lendABook($book3);

$adherent1->lendABook($book1);
$adherent1->giveBack();
$adherent1->lendABook($book2);

$adherent2->lendABook($book1);

echo "____________________________________________" . PHP_EOL;

echo $adherent1->__toString();
echo $adherent2->__toString();
echo $adherent3->__toString();

