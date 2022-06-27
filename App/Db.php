<?php

namespace App;

class Db
{

    protected $connect;

    public function __construct()
    {
        $config = (include __DIR__ . '/../config.php') ['db'];
        $this->connect =
            new \PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'],
                $config['user'], $config['password']
            );
    }

    public function query($sql, $data = [], $class)
    {
        $sth = $this->connect->prepare($sql);
        $sth->execute($data);
        $data = $sth->fetchAll(\PDO::FETCH_CLASS,$class);
        return $data;
    }
}
