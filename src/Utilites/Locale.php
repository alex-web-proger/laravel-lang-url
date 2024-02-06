<?php

namespace Alexlen\LangUrl\Utilites;

use Illuminate\Support\Facades\Route;

class Locale
{
    public static function getLocaleName($locale)
    {
        $locales = [
            'en' => __('Английский'),
            'ru' => __('Русский'),
            'ua' => __('Украинский'),
        ];
        return $locales[$locale] ?? $locale;
    }

    /**
     * Список возможных локалей приложения
     */
    public static function getLocales()
    {
        return config('app.locales', []);
    }

    /**
     * Текущая локаль приложения
     */
    public static function getMainLocale()
    {
        return config('app.locale');
    }

    /**
     * Получение локали из урла
     */
    public static function getUrlLocale()
    {
        $locale = request()->segment(1, '');

        if ($locale && in_array($locale, self::getLocales())) {
            return $locale;
        }
    }

    public static function setLocaleFromUrl()
    {
        $locale = Locale::getUrlLocale();
        app()->setLocale($locale ?: Locale::getMainLocale());
    }
}
