# Defome um valor padrão para a versão do PHP caso não seja passado
ARG PHP_VERSION=7.4-fpm-alpine3.16

FROM php:${PHP_VERSION}

ARG USER_NAME
ARG UID=1000
ARG GID=1000
# Adiciona o nome do projeto recebido com compose ou define o padrão como `app`
ARG PROJECT_NAME=app

# Diretório da aplicação
ENV APP_DIR="/var/www/${PROJECT_NAME}"

# --------------------------------------------------------------
# Instalação de dependências do sistema operacional
# --------------------------------------------------------------

# Alpine usa apk em vez de apt-get
RUN apk update && apk add --no-cache \
    supervisor \
    zlib-dev \
    libzip-dev \
    libpng-dev \
    libxml2-dev \
    unzip \
    postgresql-dev \
    curl \
    make \
    linux-headers \
    git \
    oniguruma-dev \
    ${PHPIZE_DEPS}

# --------------------------------------------------------------
# EXTENSÕES DO PHP
# --------------------------------------------------------------    
# Instala extensões do PHP: mysqli, pdo, pdo_mysql, pdo_pgsql, pgsql, session, xml
RUN docker-php-ext-install mysqli pdo pdo_mysql pdo_pgsql pgsql session xml

RUN docker-php-ext-install zip simplexml pcntl gd fileinfo

# Instala a extensão DS (Data Structures) - necessária para Ds\Map
RUN pecl install ds && docker-php-ext-enable ds

# --------------------------------------------------------------    
# Instala a última versão do Composer para o PHP
# --------------------------------------------------------------    
COPY --from=composer/composer:latest-bin /composer /usr/bin/composer

# --------------------------------------------------------------
# Prepara as configurações customizadas do PHP da pasta `/.docker/php`
# --------------------------------------------------------------
COPY ./.docker/php/php.ini "$PHP_INI_DIR/conf.d/99_extra.ini"
COPY ./.docker/php/php-fpm.conf /usr/local/etc/php-fpm.d

# --------------------------------------------------------------
# Prepara o usuário - para resolver problemas de permissão ao alterar arquivos
# --------------------------------------------------------------
RUN addgroup -g ${GID} ${USER_NAME} \
    && adduser -D -u ${UID} -G ${USER_NAME} -s /bin/sh -h /home/${USER_NAME} ${USER_NAME}

# --------------------------------------------------------------
WORKDIR $APP_DIR

# Copia os arquivos do composer.json e composer.lock para dentro do container
COPY --chown=${USER_NAME}:${USER_NAME} composer* .

# Altera o proprietário e o grupo do diretório da aplicação - definido pela variável $APP_DIR
RUN chown ${USER_NAME}:${USER_NAME} $APP_DIR

# Copio tudo que está na pasta src para dentro do container usando o usuário
COPY --chown=${USER_NAME}:${USER_NAME} ./src .

# Remove as dependências antigas do composer
RUN [ -d "vendor" ] && rm -rf vendor || true
RUN composer install --no-interaction

# --------------------------------------------------------------
# Cria alias para executar o comando do PHPUnit
# Alias `phpunit` que na verdade executa o comando `./vendor/bin/phpunit`
# https://phpunit.de/
# --------------------------------------------------------------
RUN ln -sf ${APP_DIR}/vendor/bin/phpunit /usr/local/bin/phpunit

# --------------------------------------------------------------

USER $USER_NAME
