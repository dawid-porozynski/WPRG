<?php
session_start();
if (!isset($_SESSION['card_number'])) {
    header("Location: index2.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Page 3</title>
</head>
<body>
    <h2>Summary</h2>
    Card Number: <?php echo htmlspecialchars($_SESSION['card_number']); ?><br>
    Order Name: <?php echo htmlspecialchars($_SESSION['order_name']); ?><br>
    Number of People: <?php echo htmlspecialchars($_SESSION['num_people']); ?><br>
    <h3>People Details</h3>
    <?php for ($i = 1; $i <= $_SESSION['num_people']; $i++): ?>
        <p>Person <?php echo $i; ?> Name: <?php echo htmlspecialchars($_SESSION["person_{$i}_name"]); ?><br>
        Person <?php echo $i; ?> Age: <?php echo htmlspecialchars($_SESSION["person_{$i}_age"]); ?></p>
    <?php endfor; ?>
</body>
</html>
