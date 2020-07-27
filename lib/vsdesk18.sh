#!/usr/bin/env bash
apt-get update
locale-gen en_US.UTF-8
echo "СЛЕДУЮЩИЙ ШАГ!"
apt-get install -y software-properties-common
echo "СЛЕДУЮЩИЙ ШАГ!"
add-apt-repository -y ppa:ondrej/php
echo "СЛЕДУЮЩИЙ ШАГ!"
apt-get install -y git
echo "СЛЕДУЮЩИЙ ШАГ!"
apt-get install -y mc
echo "СЛЕДУЮЩИЙ ШАГ!"
apt-get install -y zip
echo "СЛЕДУЮЩИЙ ШАГ!"
apt-get install -y php7.0
echo "СЛЕДУЮЩИЙ ШАГ!"
apt-get install -y php7.0-common
echo "СЛЕДУЮЩИЙ ШАГ!"
apt-get install -y php7.0-curl
echo "СЛЕДУЮЩИЙ ШАГ!"
apt-get install -y php7.0-imap
echo "СЛЕДУЮЩИЙ ШАГ!"
apt-get install -y php7.0-ldap
echo "СЛЕДУЮЩИЙ ШАГ!"
apt-get install -y php7.0-gd
echo "СЛЕДУЮЩИЙ ШАГ!"
apt-get install -y php7.0-imagick
echo "СЛЕДУЮЩИЙ ШАГ!"
apt-get install -y php7.0-mcrypt
echo "СЛЕДУЮЩИЙ ШАГ!"
apt-get install -y php7.0-mbstring
echo "СЛЕДУЮЩИЙ ШАГ!"
apt-get install -y php7.0-mysql
echo "СЛЕДУЮЩИЙ ШАГ!"
apt-get install -y php7.0-mysqli
echo "СЛЕДУЮЩИЙ ШАГ!"
apt-get install -y php7.0-xml
echo "СЛЕДУЮЩИЙ ШАГ!"
apt-get install -y php7.0-zip
echo "СЛЕДУЮЩИЙ ШАГ!"
sudo apt-get install -y apache2
echo "СЛЕДУЮЩИЙ ШАГ!"
sudo apt-get install -y libapache2-mod-php7.0
echo "СЛЕДУЮЩИЙ ШАГ!"
sudo apt-get install -y mysql-server
echo "СЛЕДУЮЩИЙ ШАГ!"
sudo apt-get install -y mysql-client
echo "СЛЕДУЮЩИЙ ШАГ!"
sudo mysqladmin -u root create vsdesk
echo "ЗАДАЙТЕ И ЗАПОМНИТЕ ПАРОЛЬ ПОЛЬЗОВАТЕЛЯ VSDESK ДЛЯ ПОДКЛЮЧЕНИЯ К БД:"
read dbpass
mysql -u root -e "CREATE USER 'vsdesk'@'localhost' IDENTIFIED BY '$dbpass';"
mysql -u root -e "GRANT ALL PRIVILEGES ON * . * TO 'vsdesk'@'localhost';"
mysql -u root -e "FLUSH PRIVILEGES;"
echo "СЛЕДУЮЩИЙ ШАГ!"
sudo a2enmod rewrite
echo "СЛЕДУЮЩИЙ ШАГ!"
sudo service apache2 restart
echo "СЛЕДУЮЩИЙ ШАГ!"
sudo cp -f /var/www/vsdesk/lib/000-default.conf /etc/apache2/sites-available/000-default.conf
echo "СЛЕДУЮЩИЙ ШАГ!"
sudo cp -f /var/www/vsdesk/lib/ioncube_loader_lin_7.0.so /usr/lib/php/ioncube_loader_lin_7.0.so
echo "СЛЕДУЮЩИЙ ШАГ!"
sudo cp -f /var/www/vsdesk/lib/mysqld.cnf /etc/mysql/mysql.conf.d/mysqld.cnf
echo "СЛЕДУЮЩИЙ ШАГ!"
sudo cp -f /var/www/vsdesk/lib/php.ini /etc/php/7.0/apache2/php.ini
sudo cp -f /var/www/vsdesk/lib/php.ini /etc/php/7.0/cli/php.ini
sudo cp -f /var/www/vsdesk/lib/www-data /var/spool/cron/crontabs/www-data
chown www-data:www-data -R /var/www/
chown www-data:www-data /var/spool/cron/crontabs/www-data
echo "СЛЕДУЮЩИЙ ШАГ!"
sudo service apache2 restart
sudo service mysql restart
echo "ЗАВИСИМОСТИ УСПЕШНО УСТАНОВЛЕНЫ! ПЕРЕЙДИТЕ В ВЕБ-ИНТЕРФЕЙС ПО IP ДЛЯ ПРОДОЛЖЕНИЯ УСТАНОВКИ."
