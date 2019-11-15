<?php


namespace Ipssi\Evaluation\Exceptions;


class InvalidParametersException extends InvalidDataException
{
    public function __construct($invalidData)
    {
        $message = $invalidData[0] . " and " . $invalidData[1] . "' given." . PHP_EOL . "Please enter numbers only";
            parent::__construct($invalidData, "parameters", \Diviseur::class, $message);
    }
}