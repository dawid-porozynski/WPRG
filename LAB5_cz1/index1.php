<?php
session_start();
if (!isset($_SESSION['num_people'])) {
    header("Location: index2.php");
    exit();
}

$num_people = $_SESSION['num_people'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    for ($i = 1; $i <= $num_people; $i++) {
        $_SESSION["person_{$i}_name"] = $_POST["person_{$i}_name"];
        $_SESSION["person_{$i}_age"] = $_POST["person_{$i}_age"];
    }
    header("Location: page3.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Page 2</title>
</head>
<body>
    <form method="post" action="">
        <?php for ($i = 1; $i <= $num_people; $i++): ?>
            Person <?php echo $i; ?> Name: <input type="text" name="person_<?php echo $i; ?>_name" required><br>
            Person <?php echo $i; ?> Age: <input type="number" name="person_<?php echo $i; ?>_age" required><br>
        <?php endfor; ?>
        <input type="submit" value="Next">
    </form>
</body>
</html>
