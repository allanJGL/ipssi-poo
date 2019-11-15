<?php


namespace Ipssi\Evaluation;


class InvalidDivisorException extends InvalidDataException
{
    public function __construct($invalidData)
    {
        $message = $invalidData . "' given." . PHP_EOL . "Please enter a number > 1";
        parent::__construct($invalidData, "Can't divide by 0", \Diviseur::class, $message);
    }
}