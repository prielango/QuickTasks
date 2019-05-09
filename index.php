<?php

$formFields = [
    'inputs' => [
        'username' => [
            'type' => 'text',
            'name' => 'username',
            'placeholder' => 'username',
            'label' => 'Enter username'
        ],
        'password' => [
            'type' => 'password',
            'name' => 'password',
            'placeholder' => 'password',
            'label' => 'Enter password'
        ],
        'email' => [
            'type' => 'email',
            'name' => 'email',
            'placeholder' => 'email',
            'label' => 'Enter email'
        ],
    ],
    'buttons' => [
        'submit' => [
            'type' => 'submit',
            'name' => 'submit',
            'label' => 'Submit'
        ],
    ]
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
        <?php foreach ($formFields['inputs'] as $input) : ?>
            <label>
                <span><?php print $input['label']; ?></span>
                <input type="<?php print $input['type']; ?>" name="<?php print $input['name']; ?>" placeholder="<?php print $input['placeholder']; ?>" />
            </label>
        <?php endforeach; ?>
        <?php foreach ($formFields['buttons'] as $button) : ?>
            <button type="submit" name="<?php print $button['name']; ?>"><?php print $button['label']; ?></button>
        <?php endforeach; ?>
    </form>
</body>

</html>