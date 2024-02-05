<?php

namespace Alexlen\LangUrl\Http\Controllers;


use Alexlen\LangUrl\Actions\LangAction;

/**
 * Class LangController
 * @package Alexlen\LangUrl\Http\Controllers
 */
class LangController extends Controller
{
    public function __invoke(LangAction $action, $lang)
    {
        return $action($lang);
    }
}
