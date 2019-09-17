<?php

$bucketlist = array();

$value = readline("Hoe veel activiteiten wil je toevoegen? ");

for ($i = 1; $i <= $value; $i++) {
    $item = readline("Wat wil je toevoegen aan jouw bucket list: ");
    $bucketlist[] = $item;
}

foreach ($bucketlist as $list) {
echo $list."\n";
}