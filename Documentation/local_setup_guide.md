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
4. On your browser open - [http://localhost:8000/Inventory-Control/](http://localhost:8000/Inventory-Control)


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

*For UI of database you can install Navicat.