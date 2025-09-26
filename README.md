# 🔐 Multi-User Authentication System  
*(Laravel Breeze + MySQL)*  

![Laravel](https://img.shields.io/badge/Laravel-9.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)  
![PHP](https://img.shields.io/badge/PHP-8.0-777BB4?style=for-the-badge&logo=php&logoColor=white)  
![MySQL](https://img.shields.io/badge/MySQL-8.0-4479A1?style=for-the-badge&logo=mysql&logoColor=white)  
![License](https://img.shields.io/badge/License-MIT-green?style=for-the-badge)  

---

## 📖 Overview
This project is a **role-based multi-user authentication system** built with **Laravel Breeze** and **MySQL**.  
It includes **separate dashboards** for **Users** and **Admins** with different privileges.  

---

## 🚀 Features

### 👤 User
- View and update profile (name, email, password).  
- Logout anytime.  
- Access a personalized dashboard with **last login time**.  

### 🕵️ Guest
- Register to create a new account.  
- Login to access the user dashboard.  

### 🛠️ Admin
- Access **Admin Dashboard** with:  
  - Last login time  
  - Total number of users  
- Delete any user anytime.  
- View profile & logout.  

---

## 🔑 Default Login Credentials

**User Account**
```
Email: danish@gmail.com
Password: 12345678
```

**Admin Account**
```
Email: admin@gmail.com
Password: 1234
```

---

## ⚙️ Installation Guide

### 1️⃣ Clone the Repository
```bash
git clone https://github.com/your-username/multi-user-auth-system.git
cd multi-user-auth-system
```

### 2️⃣ Install Dependencies
```bash
composer install
npm install
```

### 3️⃣ Configure Environment
- Copy `.env.example` to `.env`
```bash
cp .env.example .env
```
- Update DB credentials in `.env` file.

### 4️⃣ Run Migrations & Seed Data
```bash
php artisan migrate
php artisan db:seed
```

### 5️⃣ Compile Frontend Assets
```bash
npm run dev
```

### 6️⃣ Start Development Server
```bash
php artisan serve
```

Now visit: **http://127.0.0.1:8000**

---

## 🗄️ Database
- MySQL database file is included in the **outer project folder** for quick setup.  

---

## 📸 Screenshots


### 🔑 User Login Page  
![User Login](screenshots/user_login.png)  

### 📊 User Dashboard  
![User Dashboard](screenshots/user_dashboard.png)  

### 🛠️ Admin Login  
![Admin Login](screenshots/admin_login.png)  

### 🛠️ Admin Dashboard  
![Admin Dashboard](screenshots/admin_dashboard.png)  


---

## 💡 Author
👨‍💻 Developed by **Danish**  
  
=======
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.
