<?php

namespace App\Domain\ValueObjects;

class TransactionId
{
    public function __construct(
        public string $transaction_id
    ) {
    }

    public function Value(): string
    {
        return $this->transaction_id;
    }

    public function isEqualTo(string $transaction_id): bool
    {
        return $this->transaction_id == $transaction_id;
    }
}
