## Myara Skeleton

This is a skeleton application for [CodeIgniter](https://codeigniter.com/user_guide/) Projects, is configured to run with [Blade](https://laravel.com/docs/5.3/blade) templating.

## Installation

### Requirements

* [Apache](http://www.apache.org/) with [mod_rewrite](http://httpd.apache.org/docs/current/mod/mod_rewrite.html) enabled + [PHP](http://php.net) Version 5.6 or newer
* [Composer](http://getcomposer.org) for dependencies like [Blade](https://laravel.com/docs/5.3/blade)
* CodeIgniter v3 System folder renamed to cibase3 on top for this project (this can be changed on index.php file)

### How to install
* [Download](https://github.com/bcit-ci/CodeIgniter/archive/3.1-stable.zip) or copy the CodeIgniter 3.* and rename the system folder to cibase3 and move to /var/www (the location can be changed in skeleton index.php file)
* [Download](https://bitbucket.org/myara/skeleton/get/master.zip) or clone the Skeleton
* execute composer update on the folder of skeleton
* change the permission for write in application/cache
 
For databases:
* MySQL (5.1+), mysqli and pdo drivers
* Oracle via the oci8 and pdo drivers
* PostgreSQL via the postgre and pdo drivers
* MS SQL via the mssql, sqlsrv (version 2005 and above only) and pdo drivers
* SQLite via the sqlite (version 2), sqlite3 (version 3) and pdo drivers
* CUBRID via the cubrid and pdo drivers
* Interbase/Firebird via the ibase and pdo drivers
* ODBC via the odbc and pdo drivers (you should know that ODBC is actually an abstraction layer)

## Contributors

@rbm0407
@myara Staff

## License

GPL v3