<?php

namespace src\Domain\Gifts\Enums;

enum GiftStatus : string {
    case AVAILABLE = 'available';
    case RESERVED = 'reserved';
    case PURCHASED = 'purchased';
}

