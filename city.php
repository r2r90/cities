<?php

require __DIR__ . '/inc/all.inc.php';

$id = (int)($_GET['id'] ?? 0);

$worldCityRepository = new WorldCityRepository($pdo);
$city = $worldCityRepository->fetchById($id);

if (!$city) {
    header('Location:index.php');
    die();
}


render('city.view', [
    'city' => $city
]);

