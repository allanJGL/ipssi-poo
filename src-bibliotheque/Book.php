<?php


namespace Ipssi\Bibliotheque;


class Book
{
    private $name;
    private $lend = null;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $lend
     */
    public function setLend($lend): void
    {
        $this->lend = $lend;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getLend()
    {
        return $this->lend;
    }


}