<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
/**
 * ------------------------------------------------------------------
 * LavaLust - an opensource lightweight PHP MVC Framework
 * ------------------------------------------------------------------
 *
 * MIT License
 * Copyright (c) 2020 Ronald M. Marasigan
 * ------------------------------------------------------------------
 */

/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file contains the settings needed to access your database.
| -------------------------------------------------------------------
*/

$database['main'] = array(
    'driver'    => 'mysql',
    'hostname'  => 'sql12.freesqldatabase.com',  // ✅ Host
    'port'      => '3306',                       // ✅ Port
    'username'  => 'sql12802185',                // ✅ Database username
    'password'  => 'gUsP2dF9Xd',                 // ✅ Database password
    'database'  => 'sql12802185',                // ✅ Database name
    'charset'   => 'utf8mb4',
    'dbprefix'  => '',
    // Optional for SQLite
    'path'      => '',
    
    // Optional: SSL config (useful for some remote MySQL servers)
    'options'   => [
        PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false
    ],
);
?>