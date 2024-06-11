<?php
declare(strict_types=1);

class WorldCityRepository
{

    public function __construct(private PDO $pdo)
    {

    }

    private function arrayToModel(array $entry): WorldCityModel
    {
        return new WorldCityModel(
            $entry['id'],
            $entry['city'],
            $entry['city_ascii'],
            (float)$entry['lat'],
            (float)$entry['lng'],
            $entry['country'],
            $entry['iso2'],
            $entry['iso3'],
            $entry['admin_name'],
            $entry['capital'],
            $entry['population'],
        );
    }

    public function fetchById(int $id): ?WorldCityModel
    {
        $stmt = $this->pdo->prepare('SELECT * FROM `worldcities` WHERE `id` = :id');

        $stmt->bindValue(':id', $id);
        $stmt->execute();
        $entry = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($entry) {
            return $this->arrayToModel($entry);
        } else {
            return null;
        }
    }


    public function fetch(): array
    {
        $stmt = $this->pdo->prepare(
            'SELECT * 
                   FROM `worldcities` 
                   ORDER BY `population` 
                   DESC LIMIT 10'
        );

        $stmt->execute();


        $models = [];
        $entries = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($entries as $entry) {
            $models[] = $this->arrayToModel($entry);
        }
        return $models;
    }


}


