<?php
function fibonacci($n)
{
    $fib = array();
    $fib[0] = 0;
    $fib[1] = 1;

    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }

    return $fib;
}

$n = 10;
$fib_sequence = fibonacci($n);

echo "Nieparzyste elementy ciągu Fibonacciego do $n:\n";
foreach ($fib_sequence as $key => $value) {
    if ($value % 2 !== 0) {
        echo ($key + 1) . ": " . $value . "\n";
    }
}
?>