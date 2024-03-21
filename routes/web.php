<?php

use Core\Router;

Router::get('/', 'controllers/index.php');
Router::get('/about', 'controllers/about.php');
Router::get('/contact', 'controllers/contact.php');
Router::get('/curl', 'views/curl.php');

Router::get('/register', 'controllers/registration/create.php')->only('guest');
Router::post('/register', 'controllers/registration/store.php');

Router::get('/login', 'controllers/login/create.php')->only('guest');
Router::post('/login', 'controllers/login/store.php');

Router::post('/logout', 'controllers/logout/logout.php')->only('auth');

/* Note Routes */
Router::get('/notes', 'controllers/notes/index.php')->only('auth');
Router::get('/note', 'controllers/notes/show.php');

Router::delete('/note', 'controllers/notes/destroy.php');

Router::get('/note/create', 'controllers/notes/create.php');
Router::post('/note', 'controllers/notes/store.php');

Router::get('/note/edit', 'controllers/notes/edit.php');
Router::put('/note', 'controllers/notes/update.php');