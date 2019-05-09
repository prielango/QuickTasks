<?php

$input = filter_input_array(INPUT_POST, [
    'vardas' => FILTER_SANITIZE_SPECIAL_CHARS,
]);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <p><?php print $input['vardas']; ?></p>
    <form method="POST">
        <input type="text" name="vardas">
        <button type="submit">Submit</button>
    </form>
</body>

</html>