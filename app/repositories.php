<?php

declare(strict_types=1);

use App\Domain\User\UserRepository;
use App\Domain\Records\RecordsRepository;
use App\Infrastructure\Persistence\User\InMemoryUserRepository;
use App\Infrastructure\Persistence\Records\InMemoryRecordsRepository;
use DI\ContainerBuilder;

return function (ContainerBuilder $containerBuilder) {
    // Here we map our UserRepository interface to its in memory implementation
    $containerBuilder->addDefinitions([
        UserRepository::class => \DI\autowire(InMemoryUserRepository::class),
        RecordsRepository::class => \DI\autowire(InMemoryRecordsRepository::class),
    ]);
};
