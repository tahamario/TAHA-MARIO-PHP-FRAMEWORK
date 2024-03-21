<?php
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$heading = 'Edit Note';

$id = $_GET['id'];
define('user_id', 1);


$note = $db->query('select * from notes where id = :id', ['id' => $id])->findOneOrFail();

$db->authorize($note->user_id != user_id);


view('notes/edit.view', ['heading' => $heading, 'note' => $note]);