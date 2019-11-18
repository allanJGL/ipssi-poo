<?php


namespace Ipssi\Bibliotheque;


class Lend
{
    private $adherent;
    private $book;
    private $date;

    public function __construct(Adherent $adherentName, Book $bookName, \DateTime $date)
    {
        $this->adherent = $adherentName;
        $this->book = $bookName;
        $this->date = $date->modify('+14 day');
    }

    /**
     * @return Adherent
     */
    public function getAdherent(): Adherent
    {
        return $this->adherent;
    }

    /**
     * @param \DateTime $date
     */
    public function setDate(\DateTime $date): void
    {
        $this->date = $date;
    }

    /**
     * @return Book
     */
    public function getBook(): Book
    {
        return $this->book;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDate(): \DateTimeInterface
    {
        return $this->date;
    }
}