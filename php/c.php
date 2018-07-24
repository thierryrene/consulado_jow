<?php

require_once 'vendor/autoload.php';

date_default_timezone_set('America/Sao_Paulo');

// define('SERVERNAME', 'db');
define('SYSTEM_NAME', 'Havana');
define('USERNAME', 'root');
define('PASSWORD', '*casa123');
define('DB', 'consulado_db');
define('DEBUG', false);
define('HOST', $_SERVER['SERVER_NAME']);

function connect() {
  try {
    $pdo = new PDO('mysql:host=' . SERVERNAME . ';dbname=' . DB, USERNAME, PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('set names utf8');
  } catch (PDOexception $e) {
    echo "erro: {$e->getMessage()}";
  }
  return $pdo;
}

$pdo = connect();

require_once 'functions.php';

// // Using Medoo namespace
// use Medoo\Medoo;

// if ($_SERVER['HTTP_HOST'] != 'thierryrenematoswebdev.me') {
//     $database = new Medoo([
//         'database_type' => 'mysql',
//         'database_name' => 'consulado_db',
//         'server'        => '127.0.0.1',
//         'username'      => 'root',
//         'password'      => ''
//     ]);    
// } else {
//     $database = new Medoo([
//         'database_type' => 'mysql',
//         'database_name' => 'consulado_db',
//         'server'        => '127.0.0.1',
//         'username'      => 'root',
//         'password'      => '*casa123'
//     ]);
// }

// echo "<pre>";
// var_dump($_SERVER);
// echo "</pre>";