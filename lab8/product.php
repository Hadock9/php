<?php
require("../config.php");
require("../db.php");

$successMessage = '';
$errorMessage = '';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "SELECT * FROM sklad WHERE id = ?";
    $stmt = $db_server->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        $row = null; // Якщо товар не знайдено
    }
    $stmt->close();
}

// Обробка покупки товару
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action'])) {
    $action = $_POST['action'];
    if ($action == 'buy') {
        $quantity = intval($_POST['quantity']);

        // Оновлення кількості товару
        $sql = "UPDATE sklad SET quantity = quantity - ? WHERE id = ?";
        $stmt = $db_server->prepare($sql);
        $stmt->bind_param("ii", $quantity, $id);
        
        if ($stmt->execute()) {
            $successMessage = "Товар успішно куплено!";
        } else {
            $errorMessage = "Помилка: " . $stmt->error;
        }
        
        $stmt->close();
    } elseif ($action == 'restock') {
        $restock_quantity = intval($_POST['restock_quantity']);

        // Оновлення кількості товару
        $sql = "UPDATE sklad SET quantity = quantity + ? WHERE id = ?";
        $stmt = $db_server->prepare($sql);
        $stmt->bind_param("ii", $restock_quantity, $id);
        
        if ($stmt->execute()) {
            $successMessage = "Склад успішно поповнено!";
        } else {
            $errorMessage = "Помилка: " . $stmt->error;
        }
        
        $stmt->close();
    }
}

$db_server->close();
?>

<!DOCTYPE html>
<html lang='uk'>
<head>
    <meta charset='UTF-8'>
    <title><?php echo $row ? htmlspecialchars($row['name']) : 'Товар не знайдено'; ?></title>
</head>
<body>
    <?php if ($row): ?>
        <h1><?php echo htmlspecialchars($row['name']); ?></h1>
        <img src="<?php echo htmlspecialchars($row['image']); ?>" alt="<?php echo htmlspecialchars($row['name']); ?>" width='300'>
        <p>Ціна: <?php echo htmlspecialchars($row['price']); ?> грн</p>
        <p>Наявна кількість: <?php echo htmlspecialchars($row['quantity']); ?></p>

        <?php if ($errorMessage): ?>
            <p style="color: red;"><?php echo $errorMessage; ?></p>
        <?php endif; ?>
        <?php if ($successMessage): ?>
            <p style="color: green;"><?php echo $successMessage; ?></p>
        <?php endif; ?>

        <form method='POST' action=''>
            <label for='quantity'>Кількість:</label>
            <input type='number' name='quantity' min='1' max='<?php echo htmlspecialchars($row['quantity']); ?>' required>
            <input type='hidden' name='action' value='buy'>
            <input type='submit' value='Купити'>
        </form>

        <form method='POST' action=''>
            <label for='restock_quantity'>Поповнити склад на:</label>
            <input type='number' name='restock_quantity' min='1' required>
            <input type='hidden' name='action' value='restock'>
            <input type='submit' value='Поповнити склад'>
        </form>

    <?php else: ?>
        <p>Товар не знайдено.</p>
    <?php endif; ?>
</body>
</html>
