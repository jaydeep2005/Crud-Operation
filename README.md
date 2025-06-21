
# Student Management - CRUD Operation (PHP + MySQL)

This is a **CRUD Operation** project built with **PHP** and **MySQL**. It performs **Create**, **Read**, **Update**, and **Delete** functions for managing student data, including name, email, phone number, and course.

---

## 📁 Project Features

* ✅ **Create**: Add new student records.
* 📖 **Read**: View a list of all students.
* ✏️ **Update**: Edit existing student details.
* ❌ **Delete**: Remove student entries.

---

## 🧱 Database Structure

* **Database Name**: `crud_operation`
* **Table Name**: `students`

### Table Columns:

| Field  | Type     | Description            |
| ------ | -------- | ---------------------- |
| id     | INT (AI) | Primary Key            |
| name   | VARCHAR  | Student's Name         |
| email  | VARCHAR  | Student's Email        |
| phone  | VARCHAR  | Student's Phone Number |
| course | VARCHAR  | Course Enrolled        |

---

## ⚙️ Installation Steps

1. **Download** or **clone** this repository.
2. **Unzip** the folder (if zipped).
3. Import the provided database into your MySQL server:

   * Use phpMyAdmin or MySQL CLI to create a database named `crud_operation`.
   * Create a table named `students` with the required columns.
4. Create a folder named `includes` inside the root project directory.
5. Move the `header.php` and `footer.php` files into the `includes` folder.
6. Ensure your `dbcon.php` file is updated with the correct database credentials.
7. Launch `index.php` in your browser via a local server like XAMPP or WAMP.

---

## 💡 Technologies Used

* PHP (Core PHP)
* MySQL (Database)
* HTML & CSS (Frontend)

---

## 📌 File Structure

```
crud-operation/
│
├── includes/
│   ├── header.php
│   └── footer.php
│
├── dbcon.php
├── index.php
├── student-create.php
├── student-edit.php
├── student-view.php
├── code.php
├── message.php
└── README.md
```
