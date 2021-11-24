### Instalation
login:
username: bod
password: password
---
rename folder `/application/config.production` to `config`

customize file `database.php` in config folder with your own.

```php
<?php

defined('BASEPATH') OR exit('No direct script access allowed');
$active_group = 'default';
$query_builder = true;
$db['default'] = ['dsn' => '',
    'hostname' => 'your_host',
    'username' => 'your_username',
    'password' => 'your_password',
    'database' => 'database_name',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => false,
    'db_debug' => false,
    'cache_on' => false,
    'cachedir' => '',
    'char_set' => 'utf8mb4',
    'dbcollat' => 'utf8mb4_general_ci',
    'swap_pre' => '',
    'encrypt' => false,
    'compress' => false,
    'stricton' => false,
    'failover' => [],
    'save_queries' => true
];

```

rename file `index.production` to `index.php`

rename file `./application/libraries/Multi_menu.production` to `Multi_menu.php`

rename file `htaccess.production` to `.htaccess`

create directory with name logs in `/application/`

    $ mkdir ./application/logs

give RW access folder logs in application folder

    $ chmod 777 ./application/logs/

create directory with name sessions in `/application/`

    $ mkdir ./application/sessions

give RW access folder sessions in application folder

    $ chmod 777 ./application/sessions/
    
create directory with name flags in `/assets/images/systems/`

    $ mkdir ./assets/images/systems/flags

give RW access folder flags in application folder

    $ chmod 777 ./assets/images/systems/flags/

### Database
---
follow these steps for import database, database files in folder `./db_template/sql/`

1. `cms_database.sql`
1. `cms_table_*.sql`
1. `cms_view_*.sql`
1. `cms_routines.sql`
1. `cms_extra.sql`

### Requirements
---
1. php version 7.4 or above
1. Database (eg: MySQL, PostgreSQL, SQLite)
1. Web Server (eg: Apache, Nginx, IIS)
1. php extensions `mbstring`
1. php extensions `gd`
1. php extensions `zlib`
1. php extensions `bcmath`
1. php extensions `zip`

### libraries
---
1. PHP Curl Class works with PHP 7.0, 7.1, 7.2, 7.3, 7.4, and 8.0
1. studio-42/elfinder 2.1
1. pusher/pusher-php-server 7.0
1. mpdf/mpdf 8.0
1. amCharts4

### contributors
---
- [Facebook](https://facebook.com/nohackeron)
- [Instagram](https://instagram.com/priyambodoss)