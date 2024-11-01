если будешь перемещать файл index.php, то нужно указывать путь в файле
.docker/nginx/conf.d/vhost.conf
напротив диррективы root
сейчас там /var/www; Если ты например положишь файл index.php в папку паблик, нужно будет изменить на /var/www/public;

команды
docker-compose up -d запусить приложение
docker-compose down -выключить