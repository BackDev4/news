<?php

namespace App;

class Db
{

    protected $connect;

    public function __construct()
    {
        $config = (include __DIR__ . '/config.php') ['db'];
        if (!$config['unix']) {
            $this->connect =
                new \PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'],
                    $config['user'], $config['password']
                );
        } else {
            $this->connect = new \PDO(
                "mysql:unix_socket={$config['unix']};dbname={$config['dbname']};user={$config['user']};password=${config['password']}"
            );
        }
    }

    /**
     * @throws DbExeption
     */
    public function query($sql, $data = [], $class = "")
    {
        $sth = $this->connect->prepare($sql);
        $res = $sth->execute($data);
        if (!$res) {
            throw new DbExeption('не выполнен запрос');
        }
        return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
    }

    public function execute($sql, $data = []): bool
    {
        $sth = $this->connect->prepare($sql);
        return $sth->execute($data);
    }

    public function getLastId(): bool|string
    {
        return $this->connect->lastInsertId();
    }

}
