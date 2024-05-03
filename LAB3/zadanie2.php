<?php
function factorialRecursive($n) {
    if ($n <= 1) {
        return 1;
    } else {
        return $n * factorialRecursive($n - 1);
    }
}

function factorialIterative($n) {
    $factorial = 1;
    for ($i = 2; $i <= $n; $i++) {
        $factorial *= $i;
    }
    return $factorial;
}

function measureTime($function, $argument) {
    $start_time = microtime(true);
    $result = $function($argument);
    $end_time = microtime(true);
    $execution_time = ($end_time - $start_time) * 1000; // in milliseconds
    return [$result, $execution_time];
}

if (isset($_GET['number'])) {
    $number = $_GET['number'];
    
    list($resultRecursive, $timeRecursive) = measureTime('factorialRecursive', $number);
    
    list($resultIterative, $timeIterative) = measureTime('factorialIterative', $number);
    
    echo "<h2>Factorial of $number:</h2>";
    echo "<p>Recursive: $resultRecursive (took $timeRecursive ms)</p>";
    echo "<p>Iterative: $resultIterative (took $timeIterative ms)</p>";
    
    if ($timeRecursive < $timeIterative) {
        echo "<p>Recursive function was faster by " . ($timeIterative - $timeRecursive) . " ms.</p>";
    } elseif ($timeRecursive > $timeIterative) {
        echo "<p>Iterative function was faster by " . ($timeRecursive - $timeIterative) . " ms.</p>";
    } else {
        echo "<p>Both functions took the same amount of time to execute.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Calculator</title>
</head>
<body>
    <h2>Factorial Calculator</h2>
    <form action="" method="GET">
        Enter a number: <input type="number" name="number">
        <input type="submit" value="Calculate">
    </form>
</body>
</html>
