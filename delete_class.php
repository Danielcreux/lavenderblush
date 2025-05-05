<?php
header("Content-Type: text/plain");
session_start();

// Verificar si el usuario está logueado
if (!isset($_SESSION['user_id'])) {
    http_response_code(403);
    echo "No autorizado.";
    exit;
}

// Verificar si hay un proyecto seleccionado
$projectId = $_SESSION['project_id'] ?? 0;
if (!$projectId) {
    http_response_code(400);
    echo "No hay proyecto seleccionado.";
    exit;
}

// Leer los datos JSON enviados
$data = file_get_contents("php://input");
$requestData = json_decode($data, true);

if ($requestData === null || !isset($requestData['className'])) {
    http_response_code(400);
    echo "Datos JSON inválidos.";
    exit;
}

$className = $requestData['className'];

try {
    $dbFile = __DIR__ . '/data.sqlite';
    $db = new PDO('sqlite:' . $dbFile);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Verificar que el proyecto pertenece al usuario
    $stmt = $db->prepare("SELECT id FROM projects WHERE id = ? AND user_id = ?");
    $stmt->execute([$projectId, $_SESSION['user_id']]);
    if (!$stmt->fetch()) {
        http_response_code(403);
        echo "Proyecto no válido.";
        exit;
    }

    // Eliminar la clase de la base de datos (solo del proyecto actual)
    $stmt = $db->prepare("DELETE FROM classes WHERE class_name = ? AND project_id = ?");
    $stmt->execute([$className, $projectId]);

    echo "Clase eliminada exitosamente.";
} catch (Exception $e) {
    http_response_code(500);
    echo "Error al eliminar la clase: " . $e->getMessage();
}
?>