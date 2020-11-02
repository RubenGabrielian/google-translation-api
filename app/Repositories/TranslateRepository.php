<?php

namespace App\Repositories;

use App\Repositories\Interfaces\TranslateRepositoryInterface;
use Stichoza\GoogleTranslate\GoogleTranslate;

class TranslateRepository implements TranslateRepositoryInterface {
    public function translate($text)
    {
        $tr = new GoogleTranslate();
        $tr->setSource('en');
        $tr->setTarget('hy');

        return $tr->translate($text);
    }
}
