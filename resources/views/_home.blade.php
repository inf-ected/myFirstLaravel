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



    https://www.bootstrapcdn.com/ <br>
    https://getbootstrap.com/docs/4.5/examples/ <br>
</p>
@endsection

@section('asside')
@parent
<p> Дополнительный текст который подключен в home.php из asside.php через parent <br>
</p>
@endsection
