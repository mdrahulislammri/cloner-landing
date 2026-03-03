<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$name = trim($_POST['name'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$address = trim($_POST['address'] ?? '');
$quantity = (int)($_POST['quantity'] ?? 1);

if ($name === '' || $phone === '' || $address === '' || $quantity < 1) {
    header('Location: index.php?error=Invalid+input');
    exit;
}

$dbHost = getenv('DB_HOST') ?: '127.0.0.1';
$dbName = getenv('DB_NAME') ?: 'akifa_landing';
$dbUser = getenv('DB_USER') ?: 'root';
$dbPass = getenv('DB_PASS') ?: '';

try {
    $pdo = new PDO(
        "mysql:host={$dbHost};dbname={$dbName};charset=utf8mb4",
        $dbUser,
        $dbPass,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );

    $stmt = $pdo->prepare(
        'INSERT INTO orders (name, phone, address, quantity) VALUES (:name, :phone, :address, :quantity)'
    );
    $stmt->execute([
        ':name' => $name,
        ':phone' => $phone,
        ':address' => $address,
        ':quantity' => $quantity,
    ]);

    header('Location: index.php?success=1#order');
} catch (Throwable $e) {
    header('Location: index.php?error=Database+connection+failed#order');
}
exit;
