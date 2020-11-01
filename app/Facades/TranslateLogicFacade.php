<?php
namespace App\Facades;
use Illuminate\Support\Facades\Facade;

class TranslateLogicFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
      return 'translate-logic';
    }

}
