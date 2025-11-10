<?php 

namespace src\Domain\Gifts\Entities;

use src\Domain\Gifts\Enums\GiftStatus;

class Gift{
     public function __construct(
        public readonly?int $id,
        public string $name,
        public ?string $description,
        public ?int $priceCents,
        public GiftStatus $status = GiftStatus::AVAILABLE) {
    }
}