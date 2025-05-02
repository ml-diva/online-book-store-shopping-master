# online-book-store-shopping-master

Project Summary: Online Book Store (PHP + MySQL)
This is a simple web-based online book store project created using PHP, MySQL, and Bootstrap. It allows users to browse and search for books, add them to the cart, and place orders. There's also a basic admin panel to manage books and orders.

Database Setup
The database file is provided in the database folder.

It includes several tables like users, books, orders, etc.

To connect to the database, the connection settings (like host, username, password) can be updated in one place:

File: /functions/database_functions.php

Function: db_connect()

Default database settings:

Host: localhost

Username: root

Password: (empty)

Database: www_project

Admin Panel
To access the admin section, click "Admin Login" at the bottom of the homepage.

Login credentials:

Username: admin

Password: admin

The admin can add, edit, or delete books and view customer orders.

Limitations / Incomplete Features
Contact form and purchase processing are not fully implemented.

The purchase page is only a placeholder and does not include real payment integration due to security reasons.

Search Functionality
Users can search books through a form on the homepage.

When the user submits a search query, the backend generates a SQL query and retrieves matching books from the database.

Book Categories
Books are organized into categories and subcategories, making browsing easier for users.

How to Install & Run the Project
Download the project files and unzip them.

Copy the project folder to your web server:

For XAMPP: move it into the htdocs folder.

For WAMP: move it into the www folder.

Open your browser and go to:
localhost/online-book-store-project-in-php

Database setup:

Open phpMyAdmin

Create a new database named: www_project

Import the SQL file: www_project.sql from the database folder.

Admin Login (From Front Page Sidebar)
Username: admin@admin.com

Password: admin
