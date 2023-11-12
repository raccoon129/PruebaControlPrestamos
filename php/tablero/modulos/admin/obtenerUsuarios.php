<?php
// getUsuarios.php
include 'conexionAdmonUsuarios.php'; // Incluye la conexión a la base de datos

$stmt = $pdo->query('SELECT id, nombre, rol FROM usuarios');
$usuarios = $stmt->fetchAll();

header('Content-Type: application/json');
echo json_encode($usuarios);