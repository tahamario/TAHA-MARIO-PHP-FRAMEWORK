<?php
//Connect to our MySql database.
namespace Core;

use PDO;
use Core\Router;

class Database
{
    public $cnx;
    public $statment;
    public $router;

    public function __construct($config, $username = 'root', $password = '')
    {
        $dsn = "mysql:" . http_build_query($config, '', ';');

        $this->cnx = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);

        $this->router = new Router();
    }

    public function query($query, $param = [])
    {
        $this->statment = $this->cnx->prepare($query);
        $this->statment->execute($param);

        return $this;
    }

    public function get($type = PDO::FETCH_OBJ)
    {
        return $this->statment->fetchAll($type);
    }

    public function findOne($type = PDO::FETCH_OBJ)
    {
        return $this->statment->fetch($type);
    }

    public function findOneOrFail($type = PDO::FETCH_OBJ)
    {
        $result = $this->findOne($type);

        if (!$result) {
            $this->router->abort();
        }
        return $result;
    }

    public function authorize($condition)
    {
        if ($condition) {
            $this->router->abort(403);
        }
    }
}
