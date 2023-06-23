<?php

defined('BASEPATH') or exit('No direct script access allowed');

$host_database = '127.0.0.1' ;
$host_port = 3306 ;

$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
    'dsn' => '',
    'hostname' => $host_database,
    'port' => '1433',    
    'username' => 'sa',
    'password' => '12345',
    'database' => 'tpsonline',
    'dbdriver' => 'sqlsrv',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),//production
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);


// echo '<pre>';
// print_r($db['default']);
// echo '</pre>';

// echo 'Connecting to database: ' .$db['default']['database'];

// $mysqli_connection = new MySQLi($db['default']['hostname'],
//                                 $db['default']['username'],
//                                 $db['default']['password'], 
//                                 $db['default']['database']);

// if ($mysqli_connection->connect_error) {
//    echo "Not connected, error: " . $mysqli_connection->connect_error;
// }
// else {
//    echo "Connected.";
// }
// die( 'file: ' .__FILE__ . ' Line: ' .__LINE__);



$db['jobpjt'] = array(
    'dsn' => '',
    'hostname' => $host_database,
    'port' => $host_port,
    'username' => 'root',
    'password' => 'root',
    'database' => 'job-pjt',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);

$db['mbatps'] = array(
    'dsn' => '',
    'hostname' => $host_database,
    'port' => $host_port,
    'username' => 'root',
    'password' => 'root',
    'database' => 'mba_tps',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);

$db['ptmsagate'] = array(
    'dsn' => '',
    'hostname' => $host_database,
    'port' => $host_port,
    'username' => 'root',
    'password' => 'root',
    'database' => 'ptmsa_gate',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);

$db['ptmsadbo'] = array(
    'dsn' => '',
    'hostname' => $host_database,
    'port' => $host_port,
    'username' => 'root',
    'password' => 'root',
    'database' => 'ptmsa_dbo',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);

$db['tpsonline'] = array(
    'dsn' => '',
    'hostname' => $host_database,
    'port' => $host_port,
    'username' => 'root',
    'password' => 'root',
    'database' => 'tpsonline',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);

$db['db_tpsonline'] = array(
    'dsn' => '',
    'hostname' => $host_database,
    'port' => $host_port,
    'username' => 'root',
    'password' => 'root',
    'database' => 'db_tpsonline',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);

$db['tribltps'] = array(
    'dsn' => '',
    'hostname' => $host_database,
    'port' => 3307,
    'username' => 'root',
    'password' => 'root',
    'database' => 'tribl_tps',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);


