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

    public function lendABook(Book $book): void
    {
        if (is_null($this->lend) && is_null($book->getLend()) && !$this->stolen) {
            $lend = new Lend($this, $book, new\DateTime());
            $book->setLend($lend);
            $this->lend = $lend;
            echo $this->name . " lent the book " . $book->getName() . PHP_EOL;
        } else {
            echo "You can't lend a book anymore" . PHP_EOL;
        }
    }

    public function giveBack(): void
    {
        $today = new \DateTime();
        if ($this->lend === null) {
            echo "You don't have any lend at the moment.";
        } elseif ($today > $this->getLend()->getDate()) {
            echo "You can't borrow another book because you are not trustworthy." . PHP_EOL;
            $this->lend->getBook()->setLend(null);
            $this->lend = null;
            $this->stolen = true;
        } elseif ($today < $this->getLend()->getDate()) {
            echo $this->name . " gave back the book " . $this->lend->getBook()->getName() . PHP_EOL;
            $this->lend->getBook()->setLend(null);
            $this->lend = null;
        }
    }

    /**
     * @return null
     */
    public function getLend(): Lend
    {
        return $this->lend;
    }

    public function __toString()
    {
        if (!$this->stolen) {
            return $this->name . " has lent the book " . $this->lend->getBook()->getName() . " the : " . $this->lend->getDate()->format('Y-m-d') . PHP_EOL;
        } else {
            return $this->name . " returned the book late. You can't lend a book anymore." . PHP_EOL;
        }

    }
}