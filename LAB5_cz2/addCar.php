<?php
include 'databaseConnection.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $marka = $_POST['marka'];
    $model = $_POST['model'];
    $cena = $_POST['cena'];
    $rok = $_POST['rok'];
    $opis = $_POST['opis'];
    $conn->query("INSERT INTO samochody (marka, model, cena, rok, opis) VALUES ('$marka', '$model', '$cena', '$rok', '$opis')");
    header("Location: allCar.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
head>
    <title>Add Car</title>
</head>
<body>
    <table>
        <tr>
            <td><a href="index.php">Home</a></td>
            <td><a href="allCars.php">All Cars</a></td>
            <td><a href="addCar.php">Add Car</a></td>
        </tr>
    </table>
    <h2>Add Car</h2>
    <form method="post" action="">
        Brand: <input type="text" name="marka" required><br>
        Model: <input type="text" name="model" required><br>
        Price: <input type="text" name="cena" required><br>
        Year: <input type="text" name="rok" required><br>
        Description: <textarea name="opis" required></textarea><br>
        <input type="submit" value="Add Car">
    </form>
</body>
</html>
<?php $conn->close(); ?>
