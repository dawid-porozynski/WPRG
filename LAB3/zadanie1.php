<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>
    <h2>Result:</h2>

    <?php
    function dayOfWeek($date) {
        $dayOfWeek = date('N', strtotime($date));
        $dayNames = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
        return $dayNames[$dayOfWeek - 1];
    }

    function userAge($date) {
        $today = new DateTime();
        $birthDate = new DateTime($date);
        $difference = $today->diff($birthDate);
        return $difference->y;
    }

    function daysUntilBirthday($date) {
        $currentYear = date('Y');
        $birthday = date('Y-m-d', strtotime($date));
        $birthdayThisYear = date('Y') . date('-m-d', strtotime($date));
        if (strtotime($birthdayThisYear) < strtotime('today')) {
            $birthdayThisYear = date('Y', strtotime('+1 year')) . date('-m-d', strtotime($date));
        }
        $daysUntilBirthday = (strtotime($birthdayThisYear) - strtotime('today')) / (60 * 60 * 24);
        return $daysUntilBirthday;
    }

    if(isset($_GET['birthDate'])) {
        $birthDate = $_GET['birthDate'];
        echo "You were born on " . dayOfWeek($birthDate) . ".<br>";
        echo "You are " . userAge($birthDate) . " years old.<br>";
        echo "There are " . daysUntilBirthday($birthDate) . " days until your next birthday.";
    }
    ?>
</body>
</html>
