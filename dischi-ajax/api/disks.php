<?php

$genre = empty($_GET['genre']) ? 'all' : strtolower($_GET['genre']);

include __DIR__ . '/../db/data.php';

header('Content-Type: application/json');

if($genre == 'all') {
    $arr_filtered = $arr_disks;
} else {
    $arr_filtered= array_filter($arr_disks, function ($disc) use($genre) {
        return strtolower($disc['genre']) == $genre;
    });
};

echo json_encode($arr_filtered);