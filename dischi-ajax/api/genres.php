<?php

include __DIR__ . '/../db/data.php';

$arr_genres = [];

foreach ($arr_disks as $disk) {
    if(!in_array($disk['genre'], $arr_genres)) {
        $arr_genres[] = $disk['genre'];
    }
}

header('Content-Type: application/json');

echo json_encode($arr_genres);