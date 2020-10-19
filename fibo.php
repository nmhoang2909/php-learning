<?php
function fibo($number) {
    if ($number <= 2) {
        return 1;
    } else {
        return (fibo($number - 2) + fibo($number - 1));
    }
}

echo 'Fibo ' . fibo(10);
?>