<?php

namespace App\Domain\Entities;

use App\Domain\ValueObjects\TransactionId;

class TransactionProcess
{
    public function __construct(
        public TransactionId $transaction_id,
        public string $receipt_number,
        public bool $valid
    ) {
    }

    public function TransactionId(): TransactionId
    {
        return $this->transaction_id;
    }

    public function setReceiptNumber(string $receipt_number): void
    {
        $this->receipt_number = $receipt_number;
    }

    public function getReceiptNumber(): string
    {
        return $this->receipt_number;
    }

    public function setValid(bool $valid): void
    {
        $this->valid = $valid;
    }

    public function getValid(): bool
    {
        return $this->valid;
    }
}
