<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wynik sprawdzenia liczby pierwszej</title>
</head>
<body>
    <h2>Wynik sprawdzenia liczby pierwszej</h2>
    <?php
    function is_prime($number) {
        if ($number <= 1) {
            return false;
        }
        if ($number <= 3) {
            return true;
        }
        if ($number % 2 == 0 || $number % 3 == 0) {
            return false;
        }
        $i = 5;
        while ($i * $i <= $number) {
            if ($number % $i == 0 || $number % ($i + 2) == 0) {
                return false;
            }
            $i += 6;
        }
        return true;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['number'];
        if (!filter_var($number, FILTER_VALIDATE_INT) || $number <= 0) {
            echo "Podana wartość nie jest dodatnią liczbą całkowitą.";
        } else {
            $iterations = 0;
            if (is_prime($number)) {
                echo "$number jest liczbą pierwszą.";
            } else {
                echo "$number nie jest liczbą pierwszą.";
            }
        }
    } else {
        echo "Nieprawidłowe żądanie.";
    }
    ?>
    <br><br>
    Liczba iteracji pętli: <?php echo $iterations ?? "0"; ?>
</body>
</html>
