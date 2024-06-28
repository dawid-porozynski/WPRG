<?php
session_start();
$cookie_name = "s27270";
$cookie_value = "15-06-2024";
setcookie("s27270", "$15-06-2024", time()+3600);

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $_SESSION['first_name'] = $_GET['firstName'];
    $_SESSION['last_name'] = $_GET['lastName'];
    $_SESSION['email'] = $_GET['email'];
    $_SESSION['errorDesc'] = $_GET['errorDesc'];
}
?>

<!DOCTYPE html>
<html lang="pl"> 
<head>
    <meta charset="UTF-8">
    <title>Podsumowanie</title>
</head>
<body>
    <h1>Podsumowanie zgłoszenia błędu</h1>
    <p>Imię: <?php echo htmlspecialchars($_SESSION['firstName']); ?></p>

    <p>Nazwisko: <?php echo htmlspecialchars($_SESSION['lastName']); ?></p>
    <p>Email: <?php echo htmlspecialchars($_SESSION['email']); ?></p>
    <p>Opis błędu: <?php echo htmlspecialchars($_SESSION['errorDesc']); ?></p>
    
    <form action="confirm.php" method="POST">
 
 
    </form>
</body>
</html>
