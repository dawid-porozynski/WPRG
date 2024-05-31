<?php
include 'databaseConnection.php';
$result = $conn->query("SELECT * FROM samochody ORDER BY rok DESC");
?>
<!DOCTYPE html>
<html>
<head>
    <title>All Cars</title>
</head>
<body>
    <table>
        <tr>
            <td><a href="index.php">Home</a></td>
            <td><a href="allCars.php">All Cars</a></td>
            <td><a href="addCar.php">Add Car</a></td>
        </tr>
    </table>
    <h2>All Cars</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Brand</th>
            <th>Model</th>
            <th>Price</th>
            <th>Details</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['marka']; ?></td>
            <td><?php echo $row['model']; ?></td>
            <td><?php echo $row['cena']; ?></td>
            <td><a href="carDetails.php?id=<?php echo $row['id']; ?>">Details</a></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
<?php $conn->close(); ?>
