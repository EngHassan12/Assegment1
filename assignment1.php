<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP Assignment 1</title>
<style>
  body { font-family: Arial, sans-serif; margin: 20px; }
  h3 { margin-top: 28px; color: #1a4d8f; }
  table { border-collapse: collapse; }
  td, th { border: 1px solid #444; padding: 4px 10px; text-align: center; }
  th { background: #1a4d8f; color: #fff; }
</style>
</head>
<body>
<h2>PHP &amp; MySQL - Assignment 1</h2>

<?php
// ---------- Q1: Greatest and smallest of three numbers (no min/max) ----------
echo "<h3>Q1. Greatest and smallest of three numbers</h3>";
$a = 25; $b = 87; $c = 43;

$greatest = $a;
if ($b > $greatest) { $greatest = $b; }
if ($c > $greatest) { $greatest = $c; }

$smallest = $a;
if ($b < $smallest) { $smallest = $b; }
if ($c < $smallest) { $smallest = $c; }

echo "Numbers: $a, $b, $c<br>";
echo "Greatest: $greatest<br>";
echo "Smallest: $smallest<br>";

// ---------- Q2: Divisible by 3, 5, both, or none ----------
echo "<h3>Q2. Divisibility by 3 and 5</h3>";
$n = 45;
if ($n % 3 == 0 && $n % 5 == 0) {
    echo "$n is divisible by both 3 and 5";
} elseif ($n % 3 == 0) {
    echo "$n is divisible by 3";
} elseif ($n % 5 == 0) {
    echo "$n is divisible by 5";
} else {
    echo "$n is not divisible by 3 or 5";
}
echo "<br>";

// ---------- Q3: Odd numbers 2 to 20, even numbers 35 down to 7 ----------
echo "<h3>Q3. Odd numbers from 2 to 20</h3>";
for ($i = 2; $i <= 20; $i++) {
    if ($i % 2 != 0) { echo $i . " "; }
}
echo "<h3>Even numbers from 35 to 7</h3>";
for ($i = 35; $i >= 7; $i--) {
    if ($i % 2 == 0) { echo $i . " "; }
}
echo "<br>";

// ---------- Q4: Divisible by 2 and 5 at the same time, 50 to 2 ----------
echo "<h3>Q4. Numbers divisible by 2 and 5 (50 to 2)</h3>";
for ($i = 50; $i >= 2; $i--) {
    if ($i % 2 == 0 && $i % 5 == 0) { echo $i . " "; }
}
echo "<br>";

// ---------- Q5: Reverse a number (no strrev) ----------
echo "<h3>Q5. Reverse of a number</h3>";
$num = 12345;
$temp = $num;
$reverse = 0;
while ($temp > 0) {
    $digit = $temp % 10;
    $reverse = $reverse * 10 + $digit;
    $temp = intdiv($temp, 10);
}
echo "Reverse of $num = $reverse<br>";

// ---------- Q6: LCM ----------
echo "<h3>Q6. LCM of two numbers</h3>";
$x = 8; $y = 12;
$lcm = ($x > $y) ? $x : $y;
while (true) {
    if ($lcm % $x == 0 && $lcm % $y == 0) { break; }
    $lcm++;
}
echo "LCM of $x and $y = $lcm<br>";

// ---------- Q7: HCF (GCD) ----------
echo "<h3>Q7. HCF of two numbers</h3>";
$p = 18; $q = 24;
$m = $p; $k = $q;
while ($k != 0) {
    $t = $k;
    $k = $m % $k;
    $m = $t;
}
echo "HCF of $p and $q = $m<br>";

// ---------- Q8: Multiplication table up to 12 x 12 ----------
echo "<h3>Q8. Multiplication table (12 x 12)</h3>";
echo "<table><tr><th>x</th>";
for ($j = 1; $j <= 12; $j++) { echo "<th>$j</th>"; }
echo "</tr>";
for ($i = 1; $i <= 12; $i++) {
    echo "<tr><th>$i</th>";
    for ($j = 1; $j <= 12; $j++) {
        echo "<td>" . ($i * $j) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

// ---------- Q9: Prime or non-prime ----------
echo "<h3>Q9. Prime or non-prime</h3>";
function isPrime($number) {
    if ($number < 2) { return false; }
    for ($i = 2; $i * $i <= $number; $i++) {
        if ($number % $i == 0) { return false; }
    }
    return true;
}
$check = 29;
echo $check . (isPrime($check) ? " is a prime number" : " is not a prime number") . "<br>";

// ---------- Q10: Prime numbers from 10 to 50 ----------
echo "<h3>Q10. Prime numbers from 10 to 50</h3>";
for ($i = 10; $i <= 50; $i++) {
    if (isPrime($i)) { echo $i . " "; }
}
echo "<br>";
?>

</body>
</html>