<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podsumowanie rezerwacji</title>
</head>
<body>
    <h2>Podsumowanie rezerwacji</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number_of_people = $_POST['number_of_people'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $address = $_POST['address'];
        $credit_card = $_POST['credit_card'];
        $email = $_POST['email'];
        $stay_date = $_POST['stay_date'];
        $arrival_time = $_POST['arrival_time'];
        $extra_bed = isset($_POST['extra_bed']) ? "Tak" : "Nie";
        $amenities = implode(", ", $_POST['amenities']);

        echo "<p>Liczba osób: $number_of_people</p>";
        echo "<p>Imię: $name</p>";
        echo "<p>Nazwisko: $surname</p>";
        echo "<p>Adres: $address</p>";
        echo "<p>Numer karty kredytowej: $credit_card</p>";
        echo "<p>E-mail: $email</p>";
        echo "<p>Data pobytu: $stay_date</p>";
        echo "<p>Godzina przyjazdu: $arrival_time</p>";
        echo "<p>Potrzeba dostawienia łóżka dla dziecka: $extra_bed</p>";
        echo "<p>Udogodnienia: $amenities</p>";

        if ($number_of_people > 1) {
            echo "<h3>Dane osób rezerwujących:</h3>";
            for ($i = 1; $i < $number_of_people; $i++) {
                echo "<h4>Osoba $i:</h4>";
                echo "<p>Imię: <input type='text' name='person_name[]' required></p>";
                echo "<p>Nazwisko: <input type='text' name='person_surname[]' required></p>";
            }
        }
    } else {
        echo "Nieprawidłowe żądanie.";
    }
    ?>
</body>
</html>
