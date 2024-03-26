<?php

declare(strict_types=1);

namespace App\Application\Actions\Records;

use App\Application\Actions\Action;
use App\Domain\Records\RecordsRepository;
use Psr\Log\LoggerInterface;

abstract class RecordsAction extends Action
{
    protected RecordsRepository $recordsRepository;

    public function __construct(LoggerInterface $logger,RecordsRepository $recordsRepository)
    {
        parent::__construct($logger);
        $this->recordsRepository = $recordsRepository;
    }

}