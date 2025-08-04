# Laravel CRUD Project

A beginner-level Laravel 12 project implementing a simple **CRUD system** (Create, Read, Update, Delete) for blog posts. The application uses **Blade templates** for the frontend and is styled with **Bootstrap 5**.

---

## 🚀 Features

- View all posts in a table.
- Add a new post with title, body, user, and category.
- Edit existing posts.
- Delete posts with confirmation.
- View individual post details.
- Each post is linked to a user and a category.
- Validation on form inputs.
- Flash messages for success feedback.

---

## 🧱 Tech Stack

- **Backend:** Laravel 12
- **Frontend:** Blade + Bootstrap 5
- **Database:** MySQL (or any Laravel-supported DB)
- **Others:** Laravel Eloquent ORM

---

## 📂 Routes Overview

```php
GET     /             --> welcome page  
GET     /include      --> test include view  
GET     /user         --> show user info via UserController  
Resource: /posts      --> Full CRUD via PostController  
```

---

## 📄 PostController Highlights

- Uses `Post::with('user', 'category')` for eager loading.
- Views:
  - `posts.main` — Lists all posts
  - `posts.new_post` — Add new post form
  - `posts.edit` — Edit post form
  - `posts.show` — View single post
- Validation included in `store()` and `update()`
- Soft confirmation before delete

---

## 🛠 Setup Instructions

```bash
# Clone the repo
git clone https://github.com/your-username/your-repo-name.git

# Go into project directory
cd your-repo-name

# Install PHP dependencies
composer install

# Copy and edit .env
cp .env.example .env

# Generate app key
php artisan key:generate

# Create database & run migrations
php artisan migrate

# Serve the app
php artisan serve
```

---

## ✅ Sample Form Fields (Post)

- Title (text)
- Body (textarea)
- Checked (boolean checkbox)
- User (dropdown)
- Category (dropdown)

---

## 📁 Project Structure (simplified)

```
app/
├── Http/
│   └── Controllers/
│       ├── PostController.php
│       ├── UserController.php
│       └── CategoryController.php

resources/
└── views/
    └── posts/
        ├── main.blade.php
        ├── new_post.blade.php
        ├── edit.blade.php
        └── show.blade.php

routes/
└── web.php
```

---

## 👤 Author

- **Name:** Omar Aly
- **Project Type:** Educational / Beginner CRUD App


