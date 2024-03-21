<?php

use Core\App;
use Core\Database;
use Core\Validator;


$db = App::resolve(Database::class);

$email = $_POST['email'];
$password =  $_POST['password'];
$errors = [];

//1st validate the inputs
if (!Validator::email($email)) {
    $errors['email'] = 'Please provide a valid email';
}

//Query to select user
$user = $db->query('SELECT * FROM USERS WHERE email = :email', [
    'email' => $email,
])->findOne();


// Verify the user if existe or no
if ($user) {
    // Verify the password
    if (password_verify($password, $user->password)) {
        // Password is correct
        // Proceed with login
        $_SESSION['auth'] = [
            'name' => $user->nom,
            'email' => $user->email,
        ];

        header('location:/notes');
        exit();
    } else {
        // Password is incorrect
        $errors['credential'] = 'Incorrect email or password. please check your login credentials.';
    }
} else {
    // User not found
    $errors['credential'] = 'Incorrect email or password. please check your login credentials.';
}

if (!empty($errors)) {
    return view('login/create.view', ['errors' => $errors]);
}
