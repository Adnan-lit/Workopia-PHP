<?php

$config = require basePath('config/db.php');
$db = new Database($config);

$id = $_GET['id'] ?? '';

$params = [
    'id' => $id
];

$listing = $db->query('SELECT * FROM listings WHERE user_id = :id', $params)->fetch();


// inspect($listing);
loadView('listings/show', [
    'listing' => $listing
]);
