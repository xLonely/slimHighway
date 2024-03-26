<?php

declare(strict_types=1);

namespace App\Application\Actions\Records;

use Psr\Http\Message\ResponseInterface as Response;

class ListRecordsAction extends RecordsAction
{
    /**
     * {@inheritdoc}
     */
    protected function action(): Response
    {
        $records = $this->recordsRepository->findAll();

        return $this->respondWithData($records);
    }
}
