<?php

// app/Duogbach/Facade/DuogbachFacade.php

namespace App\Duogbach\Facade;

use Illuminate\Support\Facades\Facade;

class DuogbachFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'duogbach';
    }
}
