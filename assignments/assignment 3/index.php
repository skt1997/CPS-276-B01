<?php
require_once "Calculator.php";
$Calculator = new Calculator();
$result = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $operator = $_POST['operator'];
    $a = $_POST['number1'];
    $b = $_POST['number2'];
    $result = $Calculator->calc($operator, $a, $b);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="number" name="number1" required>
        
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        
        <input type="number" name="number2" required>
        
        <input type="submit" value="Calculate">
    </form>

    <?php if ($result): ?>
        <p><strong>Result:</strong> <?php echo $result; ?></p>
    <?php endif; ?>
</body>
</html>