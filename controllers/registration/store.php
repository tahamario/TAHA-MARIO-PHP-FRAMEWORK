<?php

use Core\App;
use Core\Database;
use Core\Validator;


$db = App::resolve(Database::class);

$email = $_POST['email'];
$password = $_POST['password'];
$name = $_POST['name'];
$errors = [];

//1st validate the inputs
if (!Validator::email($email)) {
    $errors['email'] = 'Please provide a valid email';
}

$nameLength = Validator::length($name, 5, 100);
$passLength = Validator::length($password, 8, 100);

if ($nameLength['rslt_min']) {
    $errors['name'] = 'The name can\'t be low than 5 characters.';
}

if ($passLength['rslt_min']) {
    $errors['password'] = 'The password can\'t be low than 8 characters.';
}

if ($passLength['rslt_max']) {
    $errors['password'] = 'The password can\'t allow more than 100 characters.';
}

//check if the user email already existe in DB
$user = $db->query('SELECT * FROM USERS WHERE email = :email', [
    'email' => $email
])->findOne();
//if existe i will show them a info message.
if ($user) {
    $errors['email'] = 'This email already existed';
} else {
    //if not existe i will register them in the DB
    //then redirect to notes page.
    $db->query('insert into users (nom, email, password) values (:name, :email, :password)', [
        'name' => $name,
        'email' => $email,
        'password' => password_hash($password, PASSWORD_BCRYPT)
    ]);

    $_SESSION['auth'] = [
        'name' => $name,
        'email' => $email
    ];

    header('location:/notes');
    exit();
}

if (!empty($errors)) {
    return view('registration/create.view', ['errors' => $errors]);
}