<?php

const BASE_PATH = __DIR__ . '/../';

session_start();

require BASE_PATH . 'Core/functions.php';
// dd($GLOBALS["_GET"]);

spl_autoload_register(function ($class) {
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    require base_path("{$class}.php");
});

require base_path('bootstrap.php');

$router = new \Core\Router();

require base_path('routes/web.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);


// require 'config.php';
// require 'Database.php';
// require 'routes/web.php';

// $post = $db->query('select * from notes where id = :id',   [':id' => '1'])->fetch(PDO::FETCH_OBJ);
// echo($post->user_id);

// $posts = $db->query('select * from notes where user_id = :id', [':id' => '5'])->fetchAll(PDO::FETCH_CLASS);

// foreach ($posts as $post) {
//     echo '<li>' . $post->title . '</li>';
// }

// $num = null;
// echo ($num) ?? "\nle variable n'existe pas";
// echo ($num == 10)  ? "ouii" :  "\nle variable n'existe pas";
    
// define('name','taha');

// const age = 15;

// echo name;
// echo '<br />';
// echo age;
// echo '<br />';
// echo '<br />';


// class Car {
//     public CONST name ='Toyota';

//     public $color;

//     public function __construct($color = 'Black')
//     {
//         $this->color = $color;
//     }

//     public function mode (){
//         $mode = 'eco';
//         return $mode;
//     }
// }

// $car = new Car();
// echo ($car->color);
// echo '<br />';
// echo $car->mode().' <br />';
// echo(Car::name);

// class Person
// {
//     public $name;
//     public $age;

//     public function canTalk () {
//         echo $this->name.' can talk';
//     }
// }

// $person1 = new Person();
// $person1->name = 'taha';

// $person1->canTalk();

// $names = [];
// $ages = [];
// for($i=0; $i <= 10; $i++){
//     $names[]= 'name'.$i;
//     array_push($ages, 'age'.$i);
// }
// dd($names);
// dd($ages);