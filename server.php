<?php
$albums = json_decode(file_get_contents('albums.json'), true);

header('Content-Type: application/json');

echo json_encode($albums);
