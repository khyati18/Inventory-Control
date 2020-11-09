## How to deloy application locally

1. Clone repository
```
git clone https://github.com/khyati18/Inventory-Control
```
2. Copy the cloned directory to htdocs folder
```
sudo cp -r /path_to_cloned_directory/Invetory-Control /opt/lampp/htdocs
```
3. Start xampp on your pc
```
sudo /opt/lampp/lampp start
```
4. On your browser open - [http://localhost/Inventory-Control/](http://localhost/Inventory-Control)


## Connecting to database

First Install MySQL locally

1. Open new terminal
2. Go to MySQL server
```
mysql -u root -p
```
(Enter your password)

3. Add the database
```
source > /path_to_git_directory/Inventory-Control/database.sql;
```
4. Now check if it has been added
```
show databases;
```
5. Now use our database 
```
use inventory;
```
6. Update your MySQL root user password in [db_connection.php](./config/db_connection.php)

## For Admin Only - Connect to phpmyadmin server 

1. Download phpmyadmin - [https://files.phpmyadmin.net/phpMyAdmin/4.9.0.1/phpMyAdmin-4.9.0.1-all-languages.zip](https://files.phpmyadmin.net/phpMyAdmin/4.9.0.1/phpMyAdmin-4.9.0.1-all-languages.zip)
2. Extract into /var/www/
3. Go to phpmyadmin directory /var/www/phpmyadmin/
4. You have a PHPMyAdmin configuration file /var/www/phpmyadmin/config.inc.php or else you have with the name of
config.sample.inc.php rename it to config.inc.ph
5. add the below lines in the config.ini.php with your system credentials
```
$i++;
$cfg[‘Servers’][$i][‘host’] = ‘HostName’;
$cfg[‘Servers’][$i][‘user’] = ‘UserName’;
$cfg[‘Servers’][$i][‘password’] = ‘Password’;
$cfg[‘Servers’][$i][‘port’] = ‘3306’
$cfg[‘Servers’][$i][‘auth_type’] = ‘config’;
```
6. Inside run /var/www/phpmyadmin this command
```
php -S localhost:8080 
```
7. Now open your brower to make admin changes - [localhost:8080](localhost:8080)

## Potential Errors

1. Error: XAMPP: Starting Apache…fail 

*Solution* - Restart Apache using `systemctl restart apache2.service`