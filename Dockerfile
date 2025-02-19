FROM prestashop/prestashop:latest

RUN echo "ServerName 172.22.0.3" >> /etc/apache2/apache2.conf