<?php

$formFields = [
    [
        'type' => 'text',
        'name' => 'username',
        'placeholder' => 'username',
        'label' => 'Enter username'
    ],
    [
        'type' => 'password',
        'name' => 'password',
        'placeholder' => 'password',
        'label' => 'Enter password'
    ],
    [
        'type' => 'email',
        'name' => 'email',
        'placeholder' => 'email',
        'label' => 'Enter email'
    ],
    [
        'type' => 'submit',
        'name' => 'submit',
        'label' => 'Submit'
    ],

]

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
    <form method="POST">
        <?php foreach ($formFields as $field) : ?>
            <label>
                <?php if ($field['type'] === 'submit') : ?>
                    <button type="submit" name="<?php print $field['name']; ?>"><?php print $field['label']; ?></button>
                <?php else : ?>
                    <span><?php print $field['label']; ?></span>
                    <input type="<?php print $field['type']; ?>" name="<?php print $field['name']; ?>" placeholder="<?php print $field['placeholder']; ?>" />
                <?php endif; ?>
            </label>
        <?php endforeach; ?>
    </form>
</body>

</html>