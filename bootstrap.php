<?php

use Core\App;
use Core\Container;
use Core\Database;



Container::bind('Core\Database', function () {
    require base_path('config.php');
    return new Database($config['database']);
});

App::setContainer(Container::class);

