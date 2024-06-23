<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# SMI - Student Management with Inertia (vue)

This is a Laravel project with vue with inertia. This project contains only CRUD of class, section, and student with one of the best practices. This README file will guide you through setting up the project, making it live, and managing the Vue.js build process using npm.

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:


## Prerequisites

Before you begin, ensure you have met the following requirements:
- PHP >= 8.2
- Composer
- Node.js & npm
- MySQL or any other supported database

## Installation

### 1. Clone the repository

```
git clone https://github.com/developernajib/student-management-inertia.git
```
```
cd boston-new
```

### 2. Install PHP dependencies
```
composer install
```
### 3. Install Node.js dependencies
```
npm install
```
### 4. Set up the environment file
Copy the .env.example file to .env and configure your environment variables:

```
cp .env.example .env
```
Update the .env file with your database and other necessary configurations.

### 5. Generate application key
```
php artisan key:generate
```
### 6. Run database migrations
```
php artisan migrate -seed
```
## Running the Project

### 1. Serve the Laravel application
To serve the application locally, use:
```
php artisan serve
```
This will start the server at http://localhost:8000.

### 2. Building Vue.js Files for Production
To build the Vue.js files for production, run:
```
npm run build
```
This command will compile and minify the Vue.js files for production use.

### 3. Watching for Changes in Vue.js Files
If you are actively developing the Vue.js part of the project, you can watch for changes and recompile the files automatically:
```
npm run dev
```
This command will keep watching your Vue.js files and recompile them whenever you make changes.
