FROM php:7.4.1

ARG GIT_EMAIL=alejandro.such@gmail.com
ARG GIT_USER=alejandroSuch

RUN apt-get update && \
  apt-get install -y git unzip wget && \
  php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
  php composer-setup.php && \
  php -r "unlink('composer-setup.php');" && \
  mv composer.phar /usr/local/bin/ && \
  ln -s /usr/local/bin/composer.phar /usr/local/bin/composer && \
  composer self-update && \
  wget https://get.symfony.com/cli/installer -O - | bash && \
  mv $HOME/.symfony/bin/symfony /usr/local/bin/symfony && \
  git config --global user.email "${GIT_EMAIL}" && \
  git config --global user.name "${GIT_USER}" && \
  apt-get clean && \
  apt-get autoclean

WORKDIR /usr/src
