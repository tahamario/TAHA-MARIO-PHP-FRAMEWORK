<?php

use Core\App;
use Core\Database;
use Core\Validator;
// require base_path('Core/Validator.php');

$db = App::resolve(Database::class);
$errors = [];
$heading = 'Create Note';


//validation
foreach ($_POST as $name => $val) {

    if (Validator::string($_POST[$name])) {
        $errors[$name] = 'This field is required.';
    }

    if (Validator::length($_POST[$name], 1, 100)['rslt_min']) {
        $errors[$name] = 'This field can\'t be low than 1 characters.';
    }

    if (Validator::length($_POST[$name], 1, 100)['rslt_max']) {
        $errors[$name] = 'This field can not allow more than 100 characters.';
    }

    // $errors[$name] = Validator::length($_POST[$name], 1, 100);

    // if (!Validator::email($_POST[$name])) {
    //     $errors[$name] = 'This field accept only email.';
    // }else{
    //     $errors[$name] = Validator::length($_POST[$name], 1, 100);
    // }
}

if (!empty($errors)) {
    return view('notes/create.view', ['heading' => $heading, 'errors' => $errors]);
}

$db->query('insert into notes (title, body, user_id) values (:title, :body, :user_id)', [
    'title' => $_POST['title'],
    'body' => $_POST['body'],
    'user_id' => 1
]);

header('location:/notes');
die();
