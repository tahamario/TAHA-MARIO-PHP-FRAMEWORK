<?php 

use Core\App;
use Core\Database;
use Core\Validator;
// require base_path('Core/Validator.php');

$db = App::resolve(Database::class);

$errors = [];
$heading = 'Edit Note';

const user_id = 1;


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
    return view('notes/edit.view', ['heading' => $heading, 'errors' => $errors]);
}

$db->query('update notes set title = :title, body = :body, user_id = :user_id where id = :id_note;', [
    'title' => $_POST['title'],
    'body' => $_POST['body'],
    'id_note' => $_POST['id_note'],
    'user_id' => user_id
]);

header('location:/notes');
die();