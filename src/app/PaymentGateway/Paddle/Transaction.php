<?php

declare(strict_types=1);

namespace App\PaymentGateway\Paddle;

use App\Enums\Status;

class Transaction
{
    // private string $status;

    // public function __construct()
    // {
    //     $this->setStatus(Status::PENDING);
    // }

    // public function setStatus(string $status): self
    // {
    //     if (!isset(Status::ALL_STATUS[$status])) {
    //         throw new \InvalidArgumentException('Invalid status');
    //     }
    //     $this->status = $status;

    //     return $this;
    // }

    private static int $count = 0;

    public function __construct(
        public float $amount,
        public string $description
    ) {
        Transaction::$count++;
    }

    public static function getCount(): int
    {
        return Transaction::$count;
    }

    public function process()
    {
        echo 'process';
    }
}
