<?php

require_once('vendor/autoload.php');

use Ipssi\Evaluation\InvalidIndexException;
use Ipssi\Evaluation\InvalidParametersException;
use Ipssi\Evaluation\InvalidDivisorException;

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
    $divisor = $input->prompt();

    try {
        if (!is_numeric($index) || !is_numeric($divisor)) {
            throw new InvalidParametersException(array($index, $divisor));
        }
        if ($index > 9 || $index < 0) {
            throw new InvalidIndexException($index);
        }
        if (intval($divisor) === 0) {
            throw new InvalidDivisorException($divisor);
        }
        $climate->output("Le résultat de la division est : " . (new Diviseur())->division($index, $divisor));
        $endProcess = true;
    } catch (InvalidParametersException $e) {
        echo $e->getMessage();
    } catch (InvalidIndexException $e) {
        echo $e->getMessage();
    } catch (InvalidDivisorException $e) {
        echo $e->getMessage();
    }
} while ($endProcess !== true);