<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$id = $_POST['noteId'];
define('user_id', 1);

$db->authorize($_POST['noteUser'] != user_id);

//delete
$db->query('DELETE FROM NOTES WHERE ID = :id', [
    'id' => $id
]);

header('location: /notes');
exit();
