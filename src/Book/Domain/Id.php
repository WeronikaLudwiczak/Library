<?php
declare(strict_types=1);

namespace Book\Domain;

use SharedKernel\Application\UUID;
use Ramsey\Uuid\Uuid as BaseUUID;

class Id extends UUID
{
    public static function generate():Id
    {
        return new self((string) BaseUUID::uuid4());
    }

}