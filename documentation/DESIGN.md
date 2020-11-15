# Software Design Document

## Design Overview

The software is developed using [XAMPP](https://www.apachefriends.org/index.html). Apache HTTP Server, MySQL database, and interpreters for scripts written in the PHP are used on backend. HTML, CSS and JavaScript is used to develop a user-friendly frontend.

## Design Structure

**Database**
1. Users Table (User Id - primary key)
2. Chemicals Inventory Table (Item Id - primary key)
3. Orders Table (Order Id - primary key)

**Components**

- *index.php* - start page of application which asks for user id and name.
- */user*
	- *inventory.php* - main page of application which displays the list of chemicals available with administration with their description and features.
	- *cart.php* - to show list of items user has selected and their quantity.
	- *authenticate.php* - for user authentication
- */admin*
	- admin.html - main page for admin
	- authenticate.php - for admin authentication
- *database.sql* - MySQL dump file for database of the software.
- */config* - PHP scripts to connect to local MySQL server and database.
- */js* - contains JavaScripts for user friendly interface.
- */css* - contains all styling sheets used in frontend.

**Features and Usage**

- User
	- Login using User Id and Name.
	- Select the required items and enter their quantity.
	- If requested quantities are available with admin (i.e. database) the request will proceed, else user will be notified to wait until item becomes available.
	- Cart system to check and verify final list of items to be ordered.

- Admin
	- Login using Admin Id and Name.
	- Modify and Update Items table as required.
	- Check order requests in Orders Table.

## References

1. [https://www.ionos.com/digitalguide/server/tools/xampp-tutorial-create-your-own-local-test-server/](https://www.ionos.com/digitalguide/server/tools/xampp-tutorial-create-your-own-local-test-server/)
2. [https://medium.com/@_sathishshan/accessing-remote-database-server-from-local-phpmyadmin-client-97d4bee5242e](https://medium.com/@_sathishshan/accessing-remote-database-server-from-local-phpmyadmin-client-97d4bee5242e)
3. [Sample documentation by Prof. TAG](https://students.iitmandi.ac.in/moodle/mod/folder/view.php?id=26353)
