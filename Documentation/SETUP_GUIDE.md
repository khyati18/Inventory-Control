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

1. Install phpmyadmin
```
sudo apt install phpmyadmin php-mbstring php-gettext
```
- For the server selection, choose apache2
- Select Yes when asked whether to use dbconfig-common to set up the database
- You will then be asked to choose and confirm a MySQL application password for phpMyAdmin
2. Enable mbstring
```
sudo phpenmod mbstring
```
3. Restart apache
```
sudo systemctl restart apache2
```
4. Open phpmyadmin
```
http://your_domain_or_IP/phpmyadmin (http://127.0.0.1:8000/phpmyadmin)
```

*For error refer: [https://www.digitalocean.com/community/tutorials/how-to-install-and-secure-phpmyadmin-on-ubuntu-18-04](https://www.digitalocean.com/community/tutorials/how-to-install-and-secure-phpmyadmin-on-ubuntu-18-04)*

## Potential Errors

1. Error: XAMPP: Starting Apache…fail 

*Solution* - Restart Apache using `systemctl restart apache2.service`