# SEUSL Library Management System

![image](https://github.com/user-attachments/assets/c58dfca3-e78a-462e-933c-e3d0ebddf726)


This is an Online Library Management System developed using PHP, HTML, CSS, SQL (MySQL), and XAMPP Server. The system allows both admins and users (students/teachers) to manage books in the library, request books, and view reports. Admin users have access to features like adding new books, issuing books, managing student accounts, and approving book requests. Regular users can log in, request books, and manage their account details.

## Features

### Admin Features
1. **Admin Login**  
   Admin can log in to access the library management system using their credentials.

2. **Add Book**  
   Admin can add book details and upload related files. The data is stored in the SQL database.

3. **Book Report**  
   Displays a list of all the books available in the library for the admin to view.

4. **Book Request Approval**  
   Admin can approve book requests made by users (students/teachers). The request includes details such as the user's name, book name, and the duration for which the book is requested.

5. **Add Student**  
   Admin can add new students or teachers to the system and register them to access the library.

6. **Student Report**  
   Displays a report of all students and teachers in the system.

7. **Issue Book**  
   Admin can issue books to users (students/teachers).

8. **Issue Book Report**  
   Admin can view details about issued books, including the book name, user details, issue date, return date, fine, and issue type.

9. **Logout**  
   Admin can log out of the system.

### User Features
1. **User Login**  
   Students and teachers can log in using their registered Gmail credentials.

2. **My Account**  
   Users can view and manage their account details.

3. **Request Book**  
   Users can request books from the library. Admin approval is required to finalize the request.

4. **Book Report**  
   Displays a list of books that the user has borrowed. Users can return the books from this section.

5. **Logout**  
   Users can log out of the system.

## Technologies Used
- **Frontend**: HTML, CSS
- **Backend**: PHP
- **Database**: MySQL
- **Server**: XAMPP

## Installation Instructions

1. Clone this repository to your local machine.
  
2. Install XAMPP and start Apache and MySQL services.

3. Create a database in MySQL with the name `library_management`.

4. Import the SQL file (`library_management.sql`) into your MySQL database to create the necessary tables.

5. Update the database connection settings in `config.php` with your database credentials.

6. Open `index.php` or `admin_login.php` in your browser and you can start using the system.

## Screenshots

![image](https://github.com/user-attachments/assets/a6e91e50-745a-4fbe-af50-40074e30a1d3)
![image](https://github.com/user-attachments/assets/5ff83a8e-a2cb-41c1-a48d-6c3d6f766241)
![image](https://github.com/user-attachments/assets/c58dfca3-e78a-462e-933c-e3d0ebddf726)
![image](https://github.com/user-attachments/assets/3f8a7892-dae5-460b-ae16-52c37df07f28)
![image](https://github.com/user-attachments/assets/6cf1fb70-9b28-40b1-99f2-950467a117b7)


