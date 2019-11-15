<?php


namespace Ipssi\Evaluation\Elements;


class Element
{
    private $name;
    private $position;

    public function __construct($name, $position)
    {
        $this->name = $name;
        $this->position = $position;
    }

    public function __toString()
    {
        return PHP_EOL . $this->name . " is in x = " . $this->position[0] . ", y = " . $this->position[1];
    }
}