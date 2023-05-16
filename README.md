# VinniesTrattoria_FullStackWebsite

This is a full stack website project called Vinnie's Trattoria, which incorporates HTML, CSS, JavaScript, Bootstrap, PHP, AJAX, and MySQL. The project aims to enhance the user experience by providing new pages and incorporating various technologies.

![Screenshot](FLOWCHART.jpg)

The main page of the website is index.php, which serves as the entry point. It offers an admin route and a user route to access the restaurant page. Additionally, it utilizes AJAX to call a PHP file that creates the database and inserts an SQL file.

The project consists of seven tables, namely:

Blog: Contains information about the blogs added to the website, including ID, Title, Author, Content, Date Created, and Image URL.
Reviews: Stores information about the reviews added to the website, including ID, Name, Email, Review, and Image URL.
Job_app_files: Stores the files of job applicants who have applied to join the team. It includes ID, Name, Data, and Created fields, with files stored in the form of BLOB datatype.
Newsletter: Contains the emails of people who have subscribed to the newsletter.
Menu: Stores menu items available at the restaurant. It includes ID, Name, Description, Price, and Category fields. Menu items are added through AJAX and JSON parsing from a menu CSV file.
Users: Stores login credentials for the admin to access the admin panel. It includes ID, Username, and Password fields.
User review: A JOIN table that contains the email of the user who left a review and a password credential. It enables users to enter the user panel where their reviews and information are displayed.
The project's code is organized as follows:

CSS: Contains general.css, which applies simple styling to the website's header and navbar.
JavaScript: Includes various scripts such as gallery.js for navigating through images, header.js for creating a collapsible navbar for HTML pages, and phpheader.js for PHP pages. These scripts enhance the user interface and provide interactive features.
DBCREATE: Contains dbcreate.php, responsible for creating the database and inserting the SQL file. The 306.sql file creates and populates the necessary tables.
DBMS: Consists of db.php, which establishes a connection with the database, and dbconfig.php, which stores database-related information.
PHP: Contains subdirectories for different functionalities of the website.
BLOGPHP: Implements features related to the blog section, including displaying blogs, adding blogs, and managing the newsletter.
REVIEWPHP: Manages the review section, allowing users to add, edit, and delete reviews.
MENUPHP: Handles the menu functionality, displaying menu items, implementing live search with AJAX, and importing menu items from a CSV file.
ADMIN: Provides an admin login and admin panel to manage the website's tables, including delete, edit, and download actions.
JOBFILE: Handles the hiring process, enabling users to upload their CV files.
HTML: Includes various HTML pages such as home.html, about_us.html, delivery.html, gallery.html, contact.html, and credits.html. Each page serves a specific purpose and provides relevant information to the users.
IMAGES: Contains all the images used in the project.
FLOWCHART: Includes a design flowchart PDF for better understanding of the project's structure and navigation.
The project incorporates a wide range of functionalities, including CRUD operations, table joins, session management, AJAX functions, live search algorithms, JSON parsing, dynamic display, jQuery UI, jQuery effects, error trapping, validation methods, and more.

Feel free to explore and enjoy the Vinnie's Trattoria website!
