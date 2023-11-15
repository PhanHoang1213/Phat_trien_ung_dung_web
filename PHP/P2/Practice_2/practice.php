<?php
$USD = 23000;
$AUD = 17000;
$JPY = 200;
$EUR = 27000;
$amount = $_GET['amount'];
$currency = $_GET['currency'];
$VND = 0;
if ($currency == "USD") {
    $VND = $amount * $USD;
} elseif ($currency == "AUD") {
    $VND = $amount * $AUD;
} elseif ($currency == "JPY") {
    $VND = $amount * $JPY;
} else {
    $VND = $amount * $EUR;
}
echo "$amount $currency = $VND VND";
