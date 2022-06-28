<?php

require 'autoload.php';

function buy(\App\Models\HasPrice $item)
{

}

$item = new \App\Models\GiftCard();
buy($item);
