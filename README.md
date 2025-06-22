# PHP Text File Uploader

This repository hosts a simple PHP web application designed to facilitate the uploading of text files to a server, with file information stored in a MySQL database.

## 📄 Overview

This project provides a basic, yet functional, web interface for users to upload `.txt` files. Upon successful upload, the original filename and the server path where the file is stored are recorded in a database. The application includes fundamental routing to handle different page requests.

## ✨ Features

* **Text File Upload**: Easily upload `.txt` files through a simple HTML form.
* **Unique File Naming**: Uploaded files are renamed with a unique ID on the server to prevent naming conflicts.
* **Database Storage**: Stores the original filename and the server path of the uploaded file in a MySQL database.
* **Basic Routing**: A simple PHP-based routing system handles requests for the upload page and a 404 "Page Not Found" error.
* **Dedicated Upload Folder**: Files are stored in a designated `text-files` directory on the server.

### Prerequisites

* **Web Server**: Apache or Nginx with PHP support (e.g., XAMPP, WAMP, MAMP).
* **PHP**: Version 7.4 or higher.
* **MySQL Database**: To store file metadata.

## 🤝 Contributing

Feel free to fork this repository, make improvements, and submit pull requests.

## 📄 License

This project is open-sourced under the [MIT License](LICENSE).
