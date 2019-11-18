<?php


namespace Ipssi\Bibliotheque;


class Adherent
{
    private $name;
    private $lend = null;
    private $stolen = false;

    public function __construct(string $name)
    {
        $this->name = $name;
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
     * @return null
     */
    public function getLend()
    {
        return $this->lend;
    }

    /**
     * @param null $lend
     */
    public function setLend($lend): void
    {
        $this->lend = $lend;
    }

    /**
     * @return bool
     */
    public function isStolen(): bool
    {
        return $this->stolen;
    }

    /**
     * @param bool $stolen
     */
    public function setStolen(bool $stolen): void
    {
        $this->stolen = $stolen;
    }

    public function lendABook(Book $book)
    {
        if (is_null($this->lend) && is_null($book->getLend()) && !$this->stolen) {
            $lend = new Lend($this, $book, new\DateTime());
            $book->setLend($lend);
            $this->lend = $lend;
            echo "The book '" . $book->getName() . "' is yours" . PHP_EOL;
        } else {
            echo "you can't take a book" . PHP_EOL;
            //TODO : Exceptions
        }
    }

    public function giveBack(Lend $lend)
    {
        $today = new \DateTime();
        if ($lend->getDate() > $today->modify('-14 day')) {
            $lend->getBook()->setLend(null);
            $lend->getAdherent()->setLend(null);
            echo "you gave the book " . $lend->getBook()->getName() . PHP_EOL;
        } else {
            $this->stolen = true;
        }
    }
}