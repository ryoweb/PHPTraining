# PHP 8とApacheをベースにしたイメージを使用
FROM php:8.0-apache
# 必要なパッケージをインストール
RUN apt update && apt install -y \
    git \
    libzip-dev \
    zip \
    && rm -rf /var/lib/apt/lists/*
# PHPの拡張をインストール
RUN docker-php-ext-install pdo_mysql shmop \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug
# composerを別のイメージからコピー
COPY --from=composer /usr/bin/composer /usr/bin/composer