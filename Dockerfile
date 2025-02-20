FROM prestashop/prestashop:8.1

# Resolve AH00558 apache error
RUN echo "ServerName 172.22.0.3" >> /etc/apache2/apache2.conf
