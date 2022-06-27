<?php

namespace App;

abstract class Model
{



    public const TABLE = '';

    public $id;

    public static function findAll()
    {
        $db = new Db();
        $sql = sprintf("SELECT * FROM %s", static::TABLE);
        return $db->query($sql, [], static::class);

    }

}
