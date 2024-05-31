<?php
$visit_count = isset($_COOKIE['visit_count']) ? $_COOKIE['visit_count'] : 0;
$visit_count++;
setcookie('visit_count', $visit_count, time() + (86400 * 30));

$target_visits = 10;

if ($visit_count >= $target_visits) {
    echo "You have visited this page {$visit_count} times.";
} else {
    echo "Visit number: {$visit_count}";
}
?>
