<?php


namespace Ipssi\Evaluation;


class InvalidDataException extends IpssiEvalException
{
    private $invalidData;
    private $argument;
    private $class;

    public function __construct($invalidData, string $argument, string $class, string $message)
    {
        $this->invalidData = $invalidData;
        $this->argument = $argument;
        $this->class = $class;

        $this->message = "Invalid " . $this->argument . " in " . $this->class . " '" . $message . PHP_EOL;
    }
}