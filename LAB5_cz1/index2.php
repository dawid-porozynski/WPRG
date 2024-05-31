<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['card_number'] = $_POST['card_number'];
    $_SESSION['order_name'] = $_POST['order_name'];
    $_SESSION['num_people'] = $_POST['num_people'];
    header("Location: index1.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Page 1</title>
</head>
<body>
    <form method="post" action="">
        Card Number: <input type="text" name="card_number" required><br>
        Order Name: <input type="text" name="order_name" required><br>
        Number of People: <input type="number" name="num_people" required><br>
        <input type="submit" value="Next">
    </form>
</body>
</html>
