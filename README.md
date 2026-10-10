# IT0049 TFA2 database update

This is an update overlay for the working CodeIgniter 4 project from TFA1. It replaces the customer and user arrays with MySQL records returned by CodeIgniter Models and Query Builder. It includes the requested database schema and five sample rows in each table.

## Step 1: Merge the activity files into your project

Extract this ZIP. Copy/merge its `app` folder into the `app` folder at the root of your working CodeIgniter project. Copy the `database` folder to that project root. Do not replace `app/Config/Routes.php`, `spark`, `composer.json`, `vendor`, or your `.env` file.

The two controller files replace the TFA1 static-array versions. The views keep the same page routes and layout but now use the database column names.

## Step 2: Start MySQL and create the sample database

Start the MySQL service you use for local development. If you use XAMPP, start **MySQL** from the XAMPP Control Panel. Open phpMyAdmin, choose **Import**, select `database/pos_db.sql`, and run the import. The script creates `pos_db`, the `customers` and `users` tables, and five sample records in each table. It is safe to import again without duplicating these sample rows.

The script creates a new database named `pos_db`. It does not drop an existing database or delete existing records.

## Step 3: Configure the database connection

Open the `.env` file in the root of your working project. Keep your existing working base URL and add or update these settings:

```ini
app.baseURL = 'http://localhost:8080/'

database.default.hostname = localhost
database.default.database = pos_db
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
database.default.DBPrefix =
database.default.port = 3306
```

Use the MySQL username, password, and port configured on your machine. Do not upload `.env` to GitHub.

## Step 4: Check the models and controller flow

- `app/Models/CustomerModel.php` maps to `customers`.
- `app/Models/UserModel.php` maps to `users`.
- `Customers::index()` and `Users::index()` call each Model's `orderBy(...)->findAll()` method.
- The views loop through the returned rows with `foreach`.

No raw `SELECT` query is used by the controllers.

## Step 5: Run and check the pages

Open a terminal in your CodeIgniter project root (the directory containing `spark`) and run:

```powershell
php spark serve
```

Open these addresses and confirm that the records appear:

- `http://localhost:8080/`
- `http://localhost:8080/about`
- `http://localhost:8080/customers`
- `http://localhost:8080/users`

The customer page should show full name, email, phone, and created date. The user page should show username, full name, and created date.

## Schema detail to note

The TFA2 `users` schema does not contain a `role` column, though the earlier TFA1 sample list did. This update follows the supplied TFA2 schema exactly, so the database-backed User Accounts page shows the columns that exist: username, full name, and created date. If your instructor expects roles to remain visible, ask whether they want a `role` column added to the specified schema before changing it.

## Step 6: Update GitHub after testing

Do not upload `vendor` or `.env`. Keep the SQL export `database/pos_db.sql` in the repository. In VS Code Source Control, review the changed files, enter a commit message such as `Replace account arrays with MySQL models`, commit, and sync/push to `https://github.com/krimgit/krimprojects`.

The hosted application is a separate submission requirement. A live host must also have MySQL configured and populated with the same schema and sample data.
