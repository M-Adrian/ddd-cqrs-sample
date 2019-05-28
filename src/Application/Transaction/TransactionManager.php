<?php
declare(strict_types=1);

namespace App\Application\Transaction;


interface TransactionManager
{
    public function begin();
    public function commit();
    public function rollback();
}