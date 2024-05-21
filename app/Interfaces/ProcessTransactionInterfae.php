<?php

namespace App\Interfaces;

use App\Domain\Entities\TransactionProcess;

interface ProcessTransactionInterface
{
    public function processTransactionStatus(TransactionProcess $transaction): void;
}
