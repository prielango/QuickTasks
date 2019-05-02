<?php

function slot_run($x)
{
    $matrix = [];
    for ($n = 0; $n < $x; $n++) {
        $row = [];
        for ($i = 0; $i < $x; $i++) {
            $row[] = rand(0, 1);
        }
        $matrix[] = $row;
    }
    return $matrix;
}

var_dump(slot_run(5));
