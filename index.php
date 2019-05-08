<?php

$result = 0;

if (isset($_POST['dideja'])) {
    $result = $_POST['dideja'] + 1;
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
        <button type="submit" name="dideja" value="<?php print $result; ?>"><?php print $result; ?></button>
    </form>
</body>

</html>