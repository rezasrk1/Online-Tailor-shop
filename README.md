

````markdown
# Online Tailor Shop Management System

A Laravel-based web application for managing tailor shop operations such as customer orders, measurements, stitching progress, and delivery.

## 🚀 Installation Guide

1. **Clone the repository**
   ```bash
   git clone https://github.com/rezasrk1/Online-Tailor-shop.git
````

2. **Navigate into the project folder**

   ```bash
   cd Online-Tailor-shop
   ```

3. **Create `.env` file from `.env.example`**

   ```bash
   cp .env.example .env
   ```

4. **Generate application key**

   ```bash
   php artisan key:generate
   ```

5. **Set up your database connection in `.env`**

   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=tailor_db
   DB_USERNAME=root
   DB_PASSWORD=
   ```

6. **Install PHP dependencies**

   ```bash
   composer install
   ```

7. **Run migrations and seed database**

   ```bash
   php artisan migrate:fresh --seed
   ```

   Alternatively, you can import the `tailor_db.sql` file located in the `/database` folder.

8. **Install frontend dependencies**

   ```bash
   npm install && npm run dev
   ```

9. **Serve the application**

   ```bash
   php artisan serve
   ```

10. **Open in browser**

```
http://127.0.0.1:8000/
```

11. **Login credentials (default)**

```
Username: admin
Password: admin
```

## 📸 Screenshots

![Login Page](/screenshots/login.png?raw=true "Login page")
![Dashboard](/screenshots/dashboard.png?raw=true "Dashboard page")
![Screenshot (775)](https://github.com/user-attachments/assets/72274438-2594-4812-ae8c-4e1fceb57588)

![Screenshot (794)](https://github.com/user-attachments/assets/819830e3-e6f7-46fd-b760-3928a6b1cdd2)



---

## ⚙️ Built With

* Laravel (Backend Framework)
* Blade (Frontend Templating)
* MySQL (Database)
* Bootstrap & jQuery (UI)
* NPM & Webpack (Asset compilation)

## 📜 License

This project is open-sourced under the [MIT license](https://opensource.org/licenses/MIT).

---

<p align="center">
  <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400">
</p>
```

---


   ```bash
   git add README.md
   ```
3. Commit the update:

   ```bash
   git commit -m "Updated README.md with correct instructions and personal repo"
   ```
4. Push to GitHub:

   ```bash
   git push origin master
   ```

   Or, if using the `main` branch:

   ```bash
   git push origin main
   ```

Let me know if you want this `README.md` file in `.txt` or `.md` format to download.
