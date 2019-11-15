<?php

require_once('vendor/autoload.php');

use Ipssi\Evaluation\InvalidIndexException;
use Ipssi\Evaluation\InvalidParametersException;

$climate = new League\CLImate\CLImate;
$endProcess = false;

class Diviseur
{
    public function division(int $index, int $diviseur)
    {
        $valeurs = [17, 12, 15, 38, 29, 157, 89, -22, 0, 5];

        return $valeurs[$index] / $diviseur;
    }
}

do {
    $input = $climate->input("Entrez l’indice de l’entier à diviser : ");
    $index = $input->prompt();

    $input = $climate->input("Entrez le diviseur : ");
    $diviseur = $input->prompt();

    try {
        if (!is_numeric($index) || !is_numeric($diviseur)) {
            throw new InvalidParametersException(array($index, $diviseur));
        }
        if ($index > 9) {
            throw new InvalidIndexException($index);
        }
        $climate->output("Le résultat de la division est : " . (new Diviseur())->division($index, $diviseur));
        $endProcess = true;
    } catch (InvalidParametersException $e) {
        echo $e->getMessage();
    } catch (InvalidIndexException $e) {
        echo $e->getMessage();
    }
} while ($endProcess !== true);