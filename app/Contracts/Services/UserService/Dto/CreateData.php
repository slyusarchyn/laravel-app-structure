<?php

declare(strict_types=1);

namespace App\Contracts\Services\UserService\Dto;

use App\ValueObjects\Email;
use App\ValueObjects\Phone;

class CreateData
{
    public function __construct(
        public readonly Email $email,
        public readonly string $name,
        public readonly Phone $phone,
    ) {
    }
}
