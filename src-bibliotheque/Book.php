<?php


namespace Ipssi\Bibliotheque;


class Book
{
    private $title;
    private $author;

    private $lend = null;

    public function __construct(string $name, string $author)
    {
        $this->title = $name;
        $this->author = $author;
    }

    /**
     * @param mixed $lend
     */
    public function setLend(?Lend $lend): void
    {
        $this->lend = $lend;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getLend(): ?Lend
    {
        return $this->lend;
    }
}