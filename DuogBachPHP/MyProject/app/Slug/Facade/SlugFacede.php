<?php

namespace App\Slug\Facade;

use Illuminate\Support\Facades\Facade;

class Slug extends Facade
{
    protected static function getFacadeAccessor()
    {
        return "slug";
    }
}
