<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\TranslateRepositoryInterface;
use Illuminate\Http\Request;

class TranslateController extends Controller
{
    private $translateRepository;

    public function __construct (TranslateRepositoryInterface $translateRepository = null)
    {
        $this->translateRepository = $translateRepository;
    }

    public function translate (Request $request)
    {
        return $this->translateRepository->translate($request->text);
    }

}
