-- disable root user for security reasons
DROP USER 'root'@'localhost';
DROP USER 'root'@'%';

FLUSH PRIVILEGES;