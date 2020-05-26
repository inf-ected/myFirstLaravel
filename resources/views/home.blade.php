@extends('layouts.app')

@section('title-block') HOME @endsection
@section('content')
<h1>HOME</h1>
<p> Запуск npm install потом npm run dev или npm run watch - отслеживание изменений <br>
    cls - очст консоль <br>
    php artisan serve запуск артичаном <br>
    php artisan make:controller ContactController - создать кнтрлер<br>
    php artisan make:request ContactRequest - создать отдельный файл с валидаций<br>
    php artisan make:model Contact -m - создать модель с миграцией<br>
    php artisan migrate - выполнить миграции<br>
    <div class="alert alert-info">
        Командой php --ini посмотрите где лежит файл php.ini (Loaded Configuration File), в файле найдите  ;extension=pdo_mysql и раскомментируйте эту строку (уберите ; )<br>
    </div>
    <div class="alert alert-info">
        Стоит в файле: /config/database.php для настроек MySQL прописать
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci'
    </div>
    php artisan migrate:reset - откат всего<br>
    php artisan migrate:rollback - откат последней миграции<br>
    php artisan migrate:rollback --step=3 - откат на три миграции<br>
    php artisan config:cache очистка кэша <br>

    <div class="alert alert-dark">
        <h4>деплой</h4>
        .env поменять имя , снять дебаг мод false, поменять урл
        <br>
        db connection все поменять
        <br>
        сменить ключ php artisan key:generate
        <br>
        очистить кэш php artisan config:cache
        <br>
        .htaccess удалить multiviews если хост не поддерживает(500ерор) и перенести файл в root
        <br>
        .htaccess<del> DirectoryIndex public/index.php</del>
        <br>
        удалить мусор
        storage->logs    bootstrap->cache/config.php
        <br>
    </div>
     <div class="alert alert-warning">
<ul>
    <li>перенести public в public_html
        изменить пути в public/index.php для bootstrap & vendor autoload</li>
    <li>там же добавить в буутстрап переопределение паблик пафа
        $app->bind('path.public',function(){return __DIR__;});</li>
    <li>создаем бд + дамп с локал sql файлом</li>
    <li>
        .env смена  данных по бд
        сохраняем кей -например"wiezO1Jxxxxxxxxxxxxxxxxxxxxxxx+ETrxu4z1U="</li>
    <li>config/app.php
        Encryption Key
        приводим к виду
        'key' => env('APP_KEY', base64_decode('xxxxx-тут-сохраненный-кей-xxxxx')),</li>
    <li>Application Debug Mode
        true</li>
    <li>config/database.php
        'mysql' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', '_ldb'),
            'username' => env('DB_USERNAME', '_infon'),
            'password' => env('DB_PASSWORD', 'xxxxxxx'),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            //'options' => extension_loaded('pdo_mysql') ? array_filter([
            //    PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            //]) : [],
    'options'=>[PDO::ATTR_EMULATE_PREPARES=>true],
        ],
    </li>
    <li>
.htaccess
<del>delete  DirectoryIndex public_html/index.php</del>
    </li>
</ul>

    </div>


    https://www.bootstrapcdn.com/ <br>
    https://getbootstrap.com/docs/4.5/examples/ <br>
</p>
@endsection

@section('asside')
@parent
<p> Дополнительный текст который подключен в home.php из asside.php через parent <br>
</p>
@endsection
