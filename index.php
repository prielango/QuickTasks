<?php

$result = "";
if (isset($_POST['skaicius'])) {
    $result = pow($_POST['skaicius'], 2);
}

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
    <form action="/quick_task/" method="POST">
        <label for="skaicius"></label>
        <input type="text" id="skaicius" name="skaicius">
        <button type="submit">Submit</button>
    </form>
    <p>
        Atsakymas: <?php print $result; ?>
    </p>
</body>

</html>