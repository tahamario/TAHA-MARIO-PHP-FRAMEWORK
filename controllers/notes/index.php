<?php

use Core\App;
use Core\Database;

$heading = 'My Notes';
$db = App::resolve(Database::class);

$notes = $db->query('select * from notes')->get(PDO::FETCH_CLASS);


view('notes/index.view', ['heading' => $heading, 'notes' => $notes]);
