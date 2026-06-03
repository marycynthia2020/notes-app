# Notes App

A Laravel notes application with user registration, login/logout, protected note routes, validation, and basic CRUD operations for notes.

## Live Link

Live URL: `ADD_LIVE_LINK_HERE`

## Features

- User registration
- User login and logout
- Create, view, edit, update, and delete notes
- Route model binding for individual notes
- Form request validation for notes and user registration
- Authentication-protected routes
- Blade components for layout and navigation

## Tech Stack

- PHP
- Laravel
- Blade
- SQLite/MySQL depending on local `.env` configuration
- Tailwind CSS/Vite

## Routing

Routes are defined in:

```txt
routes/web.php
```

The app uses standard Laravel route methods:

```php
Route::get()
Route::post()
Route::put()
Route::delete()
```

### Main Routes

The root URL redirects to the notes page:

```php
Route::redirect('/', '/notes');
```

Notes routes include:

```php
GET      /notes              notes.index
GET      /notes/create       notes.create
POST     /notes              notes.store
GET      /notes/{note}       notes.show
GET      /notes/{note}/edit  notes.edit
PUT      /notes/{note}/edit  notes.update
DELETE   /notes/{note}       notes.destroy
```

Authentication routes include:

```php
GET      /register
POST     /register
GET      /login
POST     /login
DELETE   /logout
```

## Controllers

### NoteController

Located at:

```txt
app/Http/Controllers/NoteController.php
```

This controller handles note CRUD behavior.

Main methods:

```php
index()
create()
store()
show()
edit()
update()
destroy()
```

The controller uses the `Note` model and Laravel route model binding for methods like:

```php
show(Note $note)
edit(Note $note)
update(UpdateNoteRequest $request, Note $note)
destroy(Note $note)
```

## Authentication

Authentication is handled through custom auth controllers.

Registration controller:

```txt
app/Http/Controllers/Auth/RegisterUserController.php
```

Session/login controller:

```txt
app/Http/Controllers/Auth/SessionController.php
```

## Models

### User Model

Located at:

```txt
app/Models/User.php
```

The `User` model represents registered users.

It includes fillable fields such as:

```php
name
email
password
```

The password should be hashed before storage.

### Note Model

Located at:

```txt
app/Models/Note.php
```

The `Note` model represents notes created in the app.

It includes fillable fields such as:

```php
title
description
```


## Local Setup

Follow these steps to run the project locally.

### 1. Clone the Repository

```bash
git clone https://github.com/marycynthia2020/notes-app.git
cd notes
```

### 2. Install PHP Dependencies

```bash
composer install
```

### 3. Install JavaScript Dependencies

```bash
npm install
```

### 4. Create Environment File

```bash
cp .env.example .env
```

### 5. Generate Application Key

```bash
php artisan key:generate
```

### 6. Configure Database

Open `.env` and set your database connection.

### 7. Run Migrations

```bash
php artisan migrate
```

### 8. Start the Development Servers

```bash
composer run dev
```