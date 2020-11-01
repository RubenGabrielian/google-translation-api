<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TranslateController extends Controller
{
    protected $translateLogic;

    public function __construct(\TranslateLogic $translateLogic)
    {
        $this->translateLogic = $translateLogic;
    }

    public function translate (Request $request)  {
        return $this->translateLogic->translate($request->text);
    }

}
