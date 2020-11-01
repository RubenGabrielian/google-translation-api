<?php

namespace App;
use Stichoza\GoogleTranslate\GoogleTranslate;

class TranslateLogic {



    public function translate ($text)
    {
        $tr = new GoogleTranslate();
        $tr->setSource('en');
        $tr->setTarget('hy');
        return $tr->translate($text);
    }
}
