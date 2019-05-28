<?php
declare(strict_types=1);

namespace App\Infrastructure\Persistence\DoctrineMySql;


use App\Application\Transaction\TransactionManager;
use Doctrine\ORM\EntityManagerInterface;

class DoctrineMySqlTransactionManager implements TransactionManager
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }


    public function begin()
    {
        echo 'interfaces working' . PHP_EOL;
    }

    public function commit()
    {
        $this->em->flush();
    }

    public function rollback()
    {
        $this->em->clear();
    }
}