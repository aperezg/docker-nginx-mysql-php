FROM alpine:edge

MAINTAINER Idir Ouhab Meskine <ouhab.idir@gmail.com>

RUN apk update \
    && apk add --update nginx \
	&& rm -rf /var/cache/apk/*

COPY config/nginx.conf /etc/nginx/nginx.conf
COPY config/base.conf /etc/nginx/conf.d/default.conf

EXPOSE 80

CMD ["nginx", "-g", "daemon off;"]
