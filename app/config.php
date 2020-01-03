<?php
Use Core\Database;

//App Root
define('APPROOT', dirname(dirname(__FILE__)));

//URL Root
define('URLROOT', 'http://localhost:8000');

//Database Configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '123456789');
define('DB_NAME', 'chototDB');
define('DB_CHARSET', 'utf8');

//Define file database
define('FIELD_PURPOSE', Database::get('SELECT * FROM Purpose'));
define('FIELD_TYPEOWN', Database::get('SELECT * FROM TypeOwn'));
