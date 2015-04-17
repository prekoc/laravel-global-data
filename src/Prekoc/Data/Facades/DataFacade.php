<?php

namespace Prekoc\Data\Facades;
 
use Illuminate\Support\Facades\Facade;
 
class DataFacade extends Facade
{
    protected static function getFacadeAccessor() { 
        return 'PrekocData';
        
    }
}