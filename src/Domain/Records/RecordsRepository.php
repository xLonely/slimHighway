<?php

declare(strict_types=1);

namespace App\Domain\Records;

interface RecordsRepository
{
    /**
     * @return Records[]
     */
    public function findAll(): array;

    /**
     * @param int $id
     * @return Records
     * @throws RecordsNotFoundException
     */
    public function findRecordsOfId(int $id): array;
}
