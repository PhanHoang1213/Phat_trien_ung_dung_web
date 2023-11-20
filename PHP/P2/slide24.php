<?php
$USD = 23000;
$AUD = 17000;
$JPY = 200;
$EUR = 27000;
$currency = $_GET['currency'];
$amount = $_GET['amount'];
echo "$amount $currency is equal";
switch ($currency) {
    case "USD":
        echo $amount * $USD;
        break;
    case "EUR":
        echo $amount * $EUR;
        break;
    case "AUD":
        echo $amount * $AUD;
        break;
    case "JPY":
        echo $amount * $JPY;
        break;
}
