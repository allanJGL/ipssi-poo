<?php


namespace Ipssi\Evaluation\Elements;



class TextElement extends Element
{

    private $color;

    public function __construct($name, $position, $color)
    {
        $this->color = $color;
        parent::__construct($name, $position);
    }

    public function __toString()
    {
        return parent::__toString() . " it's color code is : " . $this->color;
    }

}