<?php

namespace App\Model;

use App\Model\AbstractManager;
use Symfony\Component\HttpClient\HttpClient;

class CardManager extends AbstractManager
{
    public const TABLE = 'pictures';

    public function selectSix()
    {
        $query = "SELECT * FROM " . self::TABLE . " ORDER BY RAND() LIMIT  6";

        return $this->pdo->query($query)->fetchAll();
    }
}
