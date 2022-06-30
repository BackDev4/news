<?php

namespace App\Models;

use App\Model;

class User extends Model
{

    public const TABLE = 'users';
    protected $email;
    protected $name;

}
