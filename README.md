### Клонировать репозиторий

    git clone https://github.com/dian-agevorgyan/logging-app

### Установить все зависимости с помощью composer

    composer install

### Скопировать пример файла .env и внести необходимые изменения конфигурации в файл .env

    cp .env.example .env

### Сгенерировать новый ключ приложения

    php artisan key:generate

### Выполнить миграции

    php artisan migrate

### Запустить локальный сервер разработки

    php artisan serve
