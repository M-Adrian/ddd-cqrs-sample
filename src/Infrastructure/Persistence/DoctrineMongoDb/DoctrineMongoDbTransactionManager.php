<?php
declare(strict_types=1);

namespace App\Infrastructure\Persistence\DoctrineMongoDb;


use App\Application\Transaction\TransactionManager;

class DoctrineMongoDbTransactionManager implements TransactionManager
{

//    private $dm;
//
//    public function __construct()
//    {
//        $dm = 0;
//        $this->dm = $dm;
//    }

    public function begin()
    {
        // TODO: Implement begin() method.
    }

    public function commit()
    {
        // TODO: Implement commit() method.
    }

    public function rollback()
    {
        // TODO: Implement rollback() method.
    }
}