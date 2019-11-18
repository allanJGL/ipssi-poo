<?php
namespace Ipssi\Bibliotheque;

class Library
{
    private $bookList;

    public function __construct(array $bookList)
    {
        $this->bookList = $bookList;
    }

}