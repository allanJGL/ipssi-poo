<?php


namespace Ipssi\Evaluation;


class Document
{

    private $listElement;
    private $backgroundColor;

    public function __construct(array $listElement, string $backgroundColor)
    {
        $this->listElement = $listElement;
        $this->backgroundColor = $backgroundColor;
    }

    public function displayElements(): string
    {
        $str = "";
        foreach ($this->listElement as $oneElement) {
            $str = $str . $oneElement->__toString();
        }
        return $str;
    }

    public function __toString()
    {
        return "This document's color is : " . $this->backgroundColor . " and its elements are : " . $this->displayElements();
    }

}