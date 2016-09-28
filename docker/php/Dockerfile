FROM alpine:edge

MAINTAINER Idir Ouhab Meskine <ouhab.idir@gmail.com>

RUN echo "http://dl-cdn.alpinelinux.org/alpine/edge/testing" >> /etc/apk/repositories \
	&& apk update \
	&& apk upgrade \
	&& apk add --update \
		   php7-fpm \
		   php7-mcrypt \
		   php7-pdo \
		   php7-pdo_mysql \
		   php7-curl \
		   php7-openssl \
		   php7-gettext \
		   php7-bcmath \
		   php7-zip \
		   php7-mysqli \
		   php7-json \
		   php7-soap \
	# Clean up
	&& rm -rf /var/cache/apk/* \
	# Symbolic link php
	&& ln -s /usr/bin/php7 /usr/bin/php

COPY config/php.ini /etc/php7/conf.d/50-setting.ini
COPY config/php-fpm.conf /etc/php7/php-fpm.conf

EXPOSE 9000

CMD ["php-fpm7", "-F"]
