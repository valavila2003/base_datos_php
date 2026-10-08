<?php
/**
 * Archivo de conexión a la base de datos usando PDO
 */

$host     = 'localhost';
$db       = 'adso_3491206';
$user     = 'root';
$pass     = '';
$charset  = 'utf8mb4'; /* permite caracteres especiales */

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$opciones = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
/* de la linea 20 a 25 lo que hace es verificar */
try {
    $pdo = new PDO($dsn, $user, $pass, $opciones);
} catch (PDOException $e) {
    die('Error de conexión: ' . $e->getMessage());
}
?>


/*todo lo que inicia con simbolo $ en php es una variable */