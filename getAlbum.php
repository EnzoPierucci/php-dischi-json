<?php
header('Content-Type: application/json');

if (isset($_GET['title'])) {
    $albums = json_decode(file_get_contents('data/dischi.json'), true);
    $selectedAlbum = array_filter($albums, function ($album) {
        return $album['title'] === $_GET['title'];
    });

    echo json_encode(array_values($selectedAlbum)[0]); 
} else {
    echo file_get_contents('dischi.json');
}