<?php

namespace src\Domain\Gifts\Entities;

use src\Domain\Gifts\Enums\GiftStatus;
use src\Domain\Gifts\Exceptions\GiftAlreadyPurchased;
use src\Domain\Gifts\Exceptions\GiftAlreadyReserved;
use src\Domain\Gifts\Exceptions\GiftNotAvailable;

class Gift
{
    public function __construct(
        public readonly ?int $id,
        public string $name,
        public ?string $description,
        public ?int $priceCents,
        public GiftStatus $status = GiftStatus::AVAILABLE,
        public ?int $reservedBy = null,
        public ?int $purchasedBy = null
    ) {}

    public function reserve(int $userId): void
    {
        if ($this->status === GiftStatus::PURCHASED) {
            throw new GiftAlreadyPurchased("O presente já foi comprado!");
        }
        if ($this->status === GiftStatus::RESERVED && $this->reservedBy !== $userId) {
            throw new GiftAlreadyReserved("O presente já foi reservado por outro usuário");
        }
        if (
            $this->status === GiftStatus::AVAILABLE || $this->status === GiftStatus::RESERVED
            && $this->reservedBy === $userId
        ) {
            $this->status = GiftStatus::RESERVED;
            $this->reservedBy = $userId;
            return;
        }

        throw new GiftNotAvailable();
    }

    public function purchase(int $userId):void {
        if($this->status === GiftStatus::PURCHASED){
            throw new GiftAlreadyPurchased();
        }

        if($this->status === GiftStatus::RESERVED && $this->reservedBy !== $userId){
            throw new GiftAlreadyReserved();
        }

        $this->status = GiftStatus::PURCHASED;
        $this->purchasedBy = $userId;
    }

     public function release(int $userId):void
        {
            if($this->status === GiftStatus::RESERVED && $this->reservedBy === $userId){
                $this->status = GiftStatus::AVAILABLE;
                $this->reservedBy = null;
                return;
            }

            throw new GiftNotAvailable("Você não pode liberar reserva dos outros");
        }
}
