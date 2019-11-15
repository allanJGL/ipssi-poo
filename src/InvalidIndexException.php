<?php


namespace Ipssi\Evaluation;


class InvalidIndexException extends InvalidDataException
{
    public function __construct($invalidData)
    {
        $message = $invalidData . "' given." . PHP_EOL . "Please enter a index number between 0 and 9";
        parent::__construct($invalidData, "Index out of range", \Diviseur::class, $message);
    }
}