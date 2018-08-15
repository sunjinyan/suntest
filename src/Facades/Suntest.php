<?php
namespace Sun\Suntest\Facades;
use Illuminate\Support\Facades\Facade;
class Suntest extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'suntest';
    }
}