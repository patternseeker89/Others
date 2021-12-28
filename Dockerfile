FROM php:8.0-cli

RUN apt-get update
RUN apt-get install -y vim nano

# Install Composer
COPY --from=composer /usr/bin/composer /usr/bin/composer

COPY . /usr/src
WORKDIR /usr/src

RUN composer install
RUN composer dump-autoload

CMD ["/bin/bash"]
