FROM alpine:edge

MAINTAINER Adrian Perez <adrian.perez@gmail.com>

COPY ./config/docker-entrypoint.sh /

RUN echo "http://dl-cdn.alpinelinux.org/alpine/edge/testing" >> /etc/apk/repositories \
	&& apk update \
	&& apk upgrade \
	&& apk add --update \
	 	   mysql \
	# Clean up
	&& rm -rf /var/cache/apk/* \
	# Configure mysql directories
	&& addgroup mysql mysql \
 	&& rm -rf /var/lib/mysql \
 	&& mkdir -p /var/lib/mysql \
 	&& chown -R mysql:mysql /var/lib/mysql \
 	&& chown -R mysql:mysql /etc/mysql/ \
	&& chmod +x /docker-entrypoint.sh 

VOLUME /var/lib/mysql /var/log/mysql /etc/mysql/ /tmp

EXPOSE 3306

USER mysql

ENTRYPOINT ["/docker-entrypoint.sh"]
CMD [ "mysqld", "--user=mysql" ]
