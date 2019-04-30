<?php

$gerimai = [
    [
        'name' => "Vanduo",
        'kaina' => 0.6,
        'nuolaida' => 0,
    ],
    [
        'name' => "Vodka",
        'kaina' => 10,
        'nuolaida' => 0.1,
    ],
    [
        'name' => "Cola",
        'kaina' => 1.5,
        'nuolaida' => 0.2,
    ],
    [
        'name' => "Sultys",
        'kaina' => 3,
        'nuolaida' => 0.25,
    ]
];

foreach ($gerimai as $key => $gerimas) {
    if ($gerimas['nuolaida'] > 0) {
        $gerimas['css_class'] = 'nuolaida';
    } else {
        $gerimas['css_class'] = "benuolaidos";
    }
    $gerimai[$key] = $gerimas;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quick Task</title>
    <style>
        .nuolaida {
            font-weight: bold;
            font-size: 20px;
        }

        ul {
            list-style: none;
        }
    </style>
</head>

<body>
    <ul>
        <?php foreach ($gerimai as $gerimas) : ?>
            <li class=<?php print $gerimas['css_class']; ?>>
                <?php print "{$gerimas['name']}: {$gerimas['kaina']}"; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>