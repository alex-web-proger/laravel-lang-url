<?php

namespace Alexlen\LangUrl\Actions;

use Alexlen\LangUrl\Utilites\Locale;
use Illuminate\Support\Facades\Redirect;

/**
 * Переключаем язык на требуемый
 */
class LangAction
{
    public function __invoke($lang)
    {
        $referer = Redirect::back()->getTargetUrl();
        $parse_url = parse_url($referer, PHP_URL_PATH);

        $segments = explode('/', $parse_url);

        //удалить старую метку
        if (in_array($segments[1], Locale::getLocales())) {
            unset($segments[1]);
        }

        //Добавить новую, если язык не основной
        if ($lang != Locale::getMainLocale()) {
            array_splice($segments, 1, 0, $lang);
        }

        //сформировать URL с новой меткой языка
        $url = request()->root() . implode("/", $segments);
        if (parse_url($referer, PHP_URL_QUERY)) {
            $url = $url . '?' . parse_url($referer, PHP_URL_QUERY);
        }

        return redirect($url);
    }
}
