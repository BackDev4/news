<?php

namespace App;

use JetBrains\PhpStorm\Internal\LanguageLevelTypeAware;

class DbExeption extends \Exception
{

    protected $query;

    public function __construct($query, $message = "", int $code = 0, ?Throwable $previous = null)
    {
        $this->query = $query;
        parent::__construct($message, $code, $previous);
    }

    public function getQuery()
    {
        return $this->query;
    }

}
