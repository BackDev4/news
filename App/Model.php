<?php

namespace App;

abstract class Model
{

    public const TABLE = '';

    public $id;

    public static function findAll()
    {
        $db = new Db();
        $sql = sprintf('SELECT * FROM %s', static::TABLE);
        return $db->query($sql, [], static::class);

    }

    public static function findById($id)
    {
        $db = new Db();
        $sql = sprintf('SELECT * FROM %s', static::TABLE . ' WHERE id=:id');
        $data = $db->query($sql, [':id' => $id], static::class);
        return $data ? $data[0] : null;
    }

    public function delete()
    {
        if (isset($_POST["id"]) && !empty($_POST["id"])) {
            $id = $_POST["id"];
            $db = new Db();
            $db->execute("DELETE FROM users WHERE id = '$id'");
        }
    }

    public function insert()
    {
        $fields = get_object_vars($this);

        $cols = [];
        $data = [];

        foreach ($fields as $name => $value) {

            if ('id' == $name) {
                continue;
            }
            $cols[] = $name;
            $data [':' . $name] = $value;

        }

        $sql = 'INSERT INTO ' . static::TABLE . '
         (' . implode(',', $cols) . ')
        VALUES
        (' . implode(',', array_keys($data)) . ')
        ';

        $db = new Db();
        $db->execute($sql, $data);
        $this->id = $db->getLastId();
    }

}
