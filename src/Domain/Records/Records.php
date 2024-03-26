<?php

declare(strict_types=1);

namespace App\Domain\Records;

use JsonSerializable;

class Records implements JsonSerializable
{
    private ?int $id;
    private ?int $transId;

    private string $plaka;
    private string $price;

    private string $createdAt;


    public function __construct(?int $id, ?int $transId, string $plaka, string $price, string $createdAt)
    {
        $this->id           = $id;
        $this->transId      = $transId;
        $this->plaka        = $plaka;
        $this->price        = $price;
        $this->createdAt    = $createdAt;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTransId(): ?int
    {
        return $this->transId;
    }

    public function getPlaka(): string
    {
        return $this->plaka;
    }

    public function getPostPrice(): string
    {
        return $this->price;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        return [
            'id'            => $this->id,
            'transId'       => $this->transId,
            'plaka'         => $this->plaka,
            'price'         => $this->price,
            'createdAt'     => $this->createdAt,
        ];
    }
}
