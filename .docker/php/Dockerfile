
FROM php:8.1-apache

RUN apt-get update \ 
    && apt-get install --yes --no-install-recommends \
    libssl-dev \
        libaio1 \
        cron \
        wget \
        unzip \
        libldap-dev \
        libxml2-dev \
        libonig-dev \
        libpng-dev \
        zlib1g-dev \
        procps \
        python3 \
        python3-pip \
        supervisor \
        vim

# Install Oracle instantclient and oci8 extension
RUN mkdir /opt/oracle \
    && curl 'https://download.oracle.com/otn_software/linux/instantclient/19600/instantclient-basic-linux.x64-19.6.0.0.0dbru.zip' --output /opt/oracle/instantclient-basic-linux.zip \
    && curl 'https://download.oracle.com/otn_software/linux/instantclient/19600/instantclient-sdk-linux.x64-19.6.0.0.0dbru.zip' --output /opt/oracle/instantclient-sdk-linux.zip \
    && unzip '/opt/oracle/instantclient-basic-linux.zip' -d /opt/oracle \
    && unzip '/opt/oracle/instantclient-sdk-linux.zip' -d /opt/oracle \
    && rm /opt/oracle/instantclient-*.zip \
    && mv /opt/oracle/instantclient_* /opt/oracle/instantclient \
    && docker-php-ext-configure oci8 --with-oci8=instantclient,/opt/oracle/instantclient \
    && docker-php-ext-install oci8 \
        && docker-php-ext-configure pdo_oci --with-pdo-oci=instantclient,/opt/oracle/instantclient \
    && docker-php-ext-install pdo_oci \
    && echo /opt/oracle/instantclient/ > /etc/ld.so.conf.d/oracle-insantclient.conf \
    && ldconfig

ENV LD_LIBRARY_PATH  /opt/oracle/instantclient:${LD_LIBRARY_PATH}

# Install extensions MongoDB
RUN pecl install mongodb \
    && docker-php-ext-enable mongodb

# Install extensions PHP
RUN docker-php-ext-configure ldap
RUN docker-php-ext-install ldap
RUN docker-php-ext-install soap
RUN docker-php-ext-install gd
RUN apt-get install -y \
        libzip-dev \
        zip \
  && docker-php-ext-install zip

RUN apt-get install -y libpq-dev \
    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install pdo pdo_pgsql pgsql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN mkdir /var/www/html/public

RUN sed -ri -e 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/*.conf

RUN mkdir -p /php_app/bootstrap/cache

