WordPress Books Manager Assignment

Overview

This project is a custom WordPress plugin developed as part of the WordPress Developer Assignment.

The plugin allows administrators to manage a collection of books using a Custom Post Type (CPT) and restricts access to logged-in users only.

Features Implemented

1. Custom Post Type: Books
- Registered a custom post type called "Books"
- Supports:
  - Title
  - Description/Editor
  - Author field
  - Genre dropdown
  - Published Date field

2. Restricted Access
Only logged-in users can access:
- Single Book Pages
- Books Listing Page

Non-logged-in users see the message:

> "You must be logged in to view this content. Please log in or register."

Implemented using:
- `template_redirect`
- `is_user_logged_in()`

3. Front-End Features

Single Book Template
Displays:
- Book Title
- Author
- Genre
- Published Date
- Description

Books Listing Shortcode
Shortcode:

[books_list]

Features:
- Displays all books
- Shows title, author, and genre
- Pagination enabled
- 5 books per page

4. Responsive Design
- Custom CSS added
- Mobile responsive layout
- Improved readability on desktop and mobile devices

Folder Structure

books-manager/
│
├── assets/
│   └── css/
│       └── style.css
│
├── includes/
│   ├── cpt.php
│   ├── meta-fields.php
│   ├── access-control.php
│   └── shortcode.php
│
├── templates/
│   └── single-books.php
│
└── books-manager.php
```

Installation Steps

1. Install WordPress locally
2. Copy plugin folder into:

wp-content/plugins/

3. Activate the plugin from WordPress Admin
4. Create a page and add shortcode:

[books_list]

5. Add sample books from WordPress dashboard

Technologies Used

- WordPress
- PHP
- CSS
- WP_Query
- WordPress Hooks & Filters

Access Restriction Logic

The plugin uses:

php
is_user_logged_in()

to restrict access for non-authenticated users.

Hook used:

php
template_redirect

Assignment Requirements Covered

- Custom Post Type
- Custom Meta Fields
- Restricted Access
- Front-End Book Listing
- Single Book Template
- Pagination
- Responsive Styling
- WordPress Hooks & APIs
