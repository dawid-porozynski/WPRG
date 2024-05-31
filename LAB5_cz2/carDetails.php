<?php
include 'databaseConnection.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM samochody WHERE id = $id");
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Car Details</title>
</head>
<body>
    <table>
        <tr>
            <td><a href="index.php">Home</a></td>
            <td><a href="allCars.php">All Cars</a></td>
            <td><a href="addCar.php">Add Car</a></td>
        </tr>
    </table>
    <h2>Car Details</h2>
    <p>ID: <?php echo $row['id']; ?></p>
    <p>Brand: <?php echo $row['marka']; ?></p>
    <p>Model: <?php echo $row['model']; ?></p>
    <p>Price: <?php echo $row['cena']; ?></p>
    <p>Year: <?php echo $row['rok']; ?></p>
    <p>Description: <?php echo $row['opis']; ?></p>
    <a href="index.php">Back to Home</a>
</body>
</html>
<?php $conn->close(); ?>
