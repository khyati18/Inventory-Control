# Project Requirement Specifications

## Project Aim

A web application which will provide a GUI for easy tracking and management of inventory (i.e. Chemicals with fixed price and limited quantity). The software will control the quantity of items in the inventory in accordance with request from the users.


## Features and Functions

- Inputs id and name of the user as login credentials.
- User id should be unique for each user from which we can get all information about the user like name, designation, department etc.
- A list of chemicals is shown to the user, from which he/she will select the chemicals he wants to purchase.
- Price of chemicals should be visible to users but not the quantity left with administration.
- User must select the quantity of each selected chemical that he wishes to buy.
- If the quantity is available with administration, a confirmation mail of purchase will be sent to both user and admin.
- Else if, required quantity is not available then the user will be notified to wait until the item becomes available.
- The list of items ordered will get deducted automatically from the inventory.
- Can see the status of their previous orders.

- *Admin*
	- Can update quantity of chemicals left
	- Modify prices
	- Insert items to the inventory
	- Accept and Reject orders
	- Send remarks on oreders

## Software

The software server can run on any recent version of Linux, such as Ubuntu, Debian, Fedora Core,Redhat Enterprise, etc. It requires:
1. Apache 4.5 or later
2. PHP 5.6
3. MariaDB 10.3 or later

The Inventory-Control user-interface works with any of the following graphical browsers on any hardware and OS:
1. Firefox 5.0
2. Internet Explorer 7.2
3. Chrome 2.0
4. Safari 3.6
5. Opera 2.3

### Types of Users

- Managers (Administration)
- Internal IIT Mandi User
- External Academic User
- Industrial User

### Assumptions

- User is already a registered buyer of chemicals.
- If atleast one of the items selected by the user is not available then his/her request won't proceed further.
- The confirmation mails will be sent when the user checks out from the cart. (Not to be applied in software)

## Database Description

1. Users Table
This will contain the user information so that we can get the details of the user after login. Required user details are -
	- Id
	- Name
	- Email
	- Name of Supervisor /Lab-incharge /Facility-incharge /Group head/ PI/ Co-PI/ CI/ others
	- Supervisor Email
	- Internal/External User
2. Chemicals Inventory Table
This will be the list of chemicals available with the administration. Required chemical details are -
	- Item Id
	- Chemical Description
	- Company
	- Weight
	- Available Quantity
	- Price(per gm)
3. Order Table
All request sent ny user will be added here. 
	- User Id
	- Order details
	- Extra Remarks
	- Order Status

<i>This database information was provided by the client.<i>
