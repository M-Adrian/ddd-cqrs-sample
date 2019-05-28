<?php
declare(strict_types=1);

namespace App\Infrastructure\Persistence\InMemory;


use App\Application\Transaction\TransactionManager;

class InMemoryTransactionManager implements TransactionManager
{

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