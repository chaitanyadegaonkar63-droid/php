# 📘 Student Management System (PHP + MySQL)

A simple and clean **Student Management System** built using **PHP**, **MySQL**, and **HTML/CSS**. This project allows an admin to manage student records including adding, editing, deleting, and viewing details.

---

## 🚀 Features

* 🔐 **Admin Login System** (Session-based)
* ➕ **Add Student**
* 📝 **Edit Student Details**
* ❌ **Delete Student**
* 📄 **View All Students**
* 🗂️ **MySQL Database Integration**
* 🎨 **Simple UI with CSS**

---

## 📁 Project Structure

```
student-management-system/
│
├── config/
│   └── db.php
│
├── login.php
├── logout.php
├── dashboard.php
│
├── students/
│   ├── add.php
│   ├── edit.php
│   ├── delete.php
│   └── list.php
│
├── assets/
│   └── style.css
│
└── database.sql
```

---

## 🛠️ Technologies Used

* **PHP** (Core Logic)
* **MySQL** (Database)
* **HTML5** + **CSS3** (Frontend)
* **Sessions** for Authentication

---

## 🗄️ Database Setup

Run the following SQL file in **phpMyAdmin**:

```
CREATE DATABASE sms;
USE sms;

CREATE TABLE admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
);

INSERT INTO admin (username, password) VALUES (
    'admin', MD5('admin123')
);

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    roll VARCHAR(50),
    class VARCHAR(50)
);
```

---

## ⚙️ Installation & Setup

### **1️⃣ Clone the Repository**

```
git clone https://github.com/your-username/php.git
```

### **2️⃣ Move to XAMPP htdocs Folder**

```
C:/xampp/htdocs/student-management-system/
```

### **3️⃣ Import Database**

1. Open **phpMyAdmin**
2. Create database: `sms`
3. Import `database.sql`

### **4️⃣ Update Database Config**

Edit `config/db.php` if needed:

```php
$conn = mysqli_connect("localhost", "root", "", "sms");
```

### **5️⃣ Start the App**

Open in browser:

```
http://localhost/student-management-system/login.php
```

---

## 🔑 Login Details

| Username | Password |
| -------- | -------- |
| admin    | admin123 |

---

## 📸 Screenshots (Add your own)

You can upload screenshots of:

* Login Page
* Dashboard
* Add Student Page
* Student List Page

---

## 📤 Deploying Online (Optional)

You can deploy on:

* 000webhost (Free)
* InfinityFree (Free)
* Hostinger (Paid)
* Render/Railway (Cloud)

---

## 🤝 Contributing

Pull requests are welcome! For major changes, open an issue first to discuss.

---

## 📜 License

This project is **open-source** and free to use.

---

## ⭐ Show Your Support

If you like this project:

* ⭐ Star the repo
* 🍴 Fork it
* 💬 Share feedback
