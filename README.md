## Laravel - Метка языка в url
Добавляет метку языка в url и переключает локаль приложения согласно ей.

Позволяет привести url к виду <code>site-name.com/en/posts </code> 
### Установка

```sh
 composer require alexlen/laravel-lang-url
```

### Описание

Маршрутам, которым должна добавляться метка языка, необходимо добавить префикс:

<pre>
Route::prefix(Locale::getUrlLocale())->group(function () {
   ...
});
</pre>

Для переключения языка используется следующий url: <code>site-name.com/set-locale/{lang} </code>

Пример переключения:

<pre>
site-name.com/set-locale/en   // Переключиться на английский язык 
site-name.com/set-locale/ru   // Переключиться на русский язык
site-name.com/set-locale/ua   // Переключиться на украинский язык 
</pre> 


