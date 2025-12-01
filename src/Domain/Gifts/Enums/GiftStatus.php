<?php

namespace Src\Domain\Gifts\Enums;

enum GiftStatus : string {
    case AVAILABLE = 'available';
    case RESERVED = 'reserved';
    case PURCHASED = 'purchased';
}

