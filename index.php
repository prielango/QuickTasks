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

$matrix = slot_run(5);

function get_winning_rows($array)
{
    $lucky = [];
    foreach ($array as $key => $row) {
        $sum = 0;
        foreach ($row as $value) {
            $sum += $value;
        }
        if ($sum === count($row)) {
            $lucky[] = $key;
        }
    }
    return $lucky;
}

$luckyIndexes = get_winning_rows($matrix);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .box {
            display: inline-block;
            height: 50px;
            width: 50px;
        }

        .one {
            background: blue;
        }

        .zero {
            background: red;
        }
    </style>
</head>

<body>
    <div>
        <?php foreach ($matrix as $row) : ?>
            <div class="row">
                <?php foreach ($row as $value) : ?>
                    <div class="<?php print "box " . ($value === 1 ? "one" : "zero"); ?>"></div>
                <?php endforeach; ?>

            </div>
        <?php endforeach; ?>
        <p><?php var_dump($luckyIndexes); ?></p>
    </div>
</body>

</html>