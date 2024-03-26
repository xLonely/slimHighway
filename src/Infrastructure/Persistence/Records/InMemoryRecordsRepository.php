<?php

declare(strict_types=1);

namespace App\Infrastructure\Persistence\Records;

use PDO;
use App\Models\DB;
use App\Domain\Records\Records;
use App\Domain\Records\RecordsNotFoundException;
use App\Domain\Records\RecordsRepository;

class InMemoryRecordsRepository implements RecordsRepository
{
    /**
     * @var Records[]
     */
    private array $records;

    /**
     * @param Records[]|null $records
     */
    public function __construct(array $records = null)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function findAll(): array
    {
        $sql = "SELECT * FROM pass_records";

        try {
            $db = new Db();
            $conn = $db->connect();
            $stmt = $conn->query($sql);
            $records = $stmt->fetchAll(PDO::FETCH_OBJ);
            $db = null;

            return $records;
        } catch (PDOException $e) {
            $error = array(
                "message" => $e->getMessage()
            );

            return $error;
        }

    }


    public function findRecordsOfId(int $id): array
    {
        $sql = "SELECT * FROM pass_records WHERE id = ".$id;

        try {
            $db = new Db();
            $conn = $db->connect();
            $stmt = $conn->query($sql);
            $records = $stmt->fetchAll(PDO::FETCH_OBJ);
            $db = null;

            return $records;
        } catch (PDOException $e) {
            $error = array(
                "message" => $e->getMessage()
            );

            return $error;
        }

    }

    /**
     * {@inheritdoc}
     */
}
