# Use a imagem oficial do PHP com Apache, versão 8.2.4
FROM php:8.2.4-apache

# Atualize a lista de pacotes e instale dependências
RUN apt-get update && \
    apt-get install -y \
        libzip-dev \
        unzip \
        libonig-dev

# Instale extensões PHP necessárias
RUN docker-php-ext-install pdo pdo_mysql zip mbstring

# Instale o Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Defina o diretório de trabalho
WORKDIR /var/www/html

# Limpe o diretório antes de copiar o projeto
RUN rm -rf /var/www/html/*

# Copie o arquivo do Laravel para o contêiner
COPY . /var/www/html

# Dê as permissões adequadas ao diretório
RUN chown -R www-data:www-data /var/www/html

# Instale as dependências do Laravel e otimize o carregamento do autoloader
RUN composer install

# Gere a chave do aplicativo Laravel
RUN php artisan key:generate

# Configuração do VirtualHost para apontar para a pasta public
COPY apache-site.conf /etc/apache2/sites-available/000-default.conf

# Habilite o módulo de reescrita do Apache
RUN a2enmod rewrite

RUN sed -i 's/;extension=curl/extension=curl/' /usr/local/etc/php/php.ini-development

# Exponha a porta 80
EXPOSE 80

# Inicialize o servidor Apache
CMD ["apache2-foreground"]
