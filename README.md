# Laravel Multi Auth App with Courses CRUD

This Laravel application demonstrates a multi-auth system with different user types (Admin, Teacher, Student) and includes a simple CRUD functionality for Courses.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine.

### Prerequisites

Make sure you have the following software installed on your machine:

- [PHP](https://www.php.net/) (>= 8.1)
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/) (for Laravel Mix)
- [MySQL](https://www.mysql.com/) or another database of your choice

### Installing

1. Clone the repository:

   ```bash
   git clone https://github.com/your-username/laravel-multi-auth-courses.git



2. Navigate to the project directory:<br>
cd your_project <br>
3. Install dependencies:<br>
composer install && npm install && npm run dev<br>
4. Copy the .env.example file to create a new .env file:<br>
cp .env.example .env<br>
5. Generate application key:<br>
php artisan key:generate<br>
6. Configure your database connection in the .env file:
DB_CONNECTION=mysql<br>
DB_HOST=127.0.0.1<br>
DB_PORT=3306<br>
DB_DATABASE=your_database<br>
DB_USERNAME=your_username<br>
DB_PASSWORD=your_password<br>


7. Run database migrations and seed the database:
php artisan migrate --seed<br>
8. Start the development server:<br>
php artisan serve<br>
Visit http://127.0.0.1:8000 in your browser to access the application.<br>

#### User Accounts
Use the following credentials to log in as different user types:

##### Admin:
Email: admin@devbunch.com
Password: 12345678

##### Teacher:
Email: teacher@devbunch.com
Password: 12345678

##### Student:
Email: student@devbunch.com
Password: 12345678

#### User Roles and Permissions

##### Admin:
Can perform CRUD operations on Courses<br>

##### Teacher:
Can perform CRUD operations on Courses<br>

##### Student:
Can only view Courses<br>
