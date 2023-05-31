# на основе какого образа создаю
FROM php:fpm
# тут я копирую в файловую систему специальный скрипт, он не имеет никакого отношения к докеру
# просто из php нужно будет проинициализировать бд, для этого нужно понять запустилась ли она полностью
# это какой-то скрипт из инета, который проверяет запустилась ли бд и ждёт, если нет, потом выполняет, что надо
COPY wait-for-it.sh /usr/bin/wait-for-it
# тут указываю папку в контейнере, в которой будут выполняться все следующие команды
WORKDIR /var/www/full
# тут куча команд в контейнере, чтобы php был готов к работе
RUN apt update \
    && apt install -y zlib1g-dev g++ git libicu-dev zip libzip-dev zip \
    && docker-php-ext-install intl opcache pdo pdo_mysql \
    && pecl install apcu \
    && docker-php-ext-enable apcu \
    && docker-php-ext-configure zip \
    && docker-php-ext-install zip \
    && chmod +x /usr/bin/wait-for-it \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && curl -sS https://get.symfony.com/cli/installer | bash
# тут прописываю команды, которые будут выполняться каждый раз при запуске контейнера, делаю файлы php исполняемыми (кстати хз, почему решил делать это тут, можно было сверху)
# жду пока бд запустится, если запустилась обновляю её обычной командой, потом генерирую ключи, да при каждом запуске, хз как это сделать один раз (ну вообще можно написать bash скрипт)
# и запускаю интерпретатор php, после этого он готов к работе
CMD chmod +x bin/console ; composer install ; wait-for-it database:3306 -- bin/console d:s:u --force ; bin/console league:oauth2-server:create-client --grant-type=password baseClient ; php-fpm