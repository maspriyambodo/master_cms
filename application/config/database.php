<?php

defined('BASEPATH') OR exit('No direct script access allowed');
$active_group = 'default';
$query_builder = true;
$db['default'] = ['dsn' => '',
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => 'priyambodo',
    'database' => 'db_cms',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => false,
    'db_debug' => (ENVIRONMENT !== 'production'),
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
