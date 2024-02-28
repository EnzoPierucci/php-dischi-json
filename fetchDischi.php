<?php
header('Content-Type: application/json');

// usa il contenuto del file dischi
$dischiJson = file_get_contents("../data/dischi.json");

echo $dischiJson;
