<?php

declare(strict_types=1);

namespace App\Domain\Records;

use App\Domain\DomainException\DomainRecordNotFoundException;

class RecordsNotFoundException extends DomainRecordNotFoundException
{
    public $message = 'The user you requested does not exist.';
}
