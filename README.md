# randomcodegenerate

composer require satish/randomcodegenerate

How to use the random code generate

<?php
require_once './vendor/autoload.php';

$objRandomCodes = new RandomCodes\RandomCodes();
echo $objRandomCodes->generateCode();// 12 digit random number generate

echo $objRandomCodes->generateAlphabets($length = 8, $isCapital = true);

echo $objRandomCodes->generateNumericCode($length = 8, $incZero = true);

echo $objRandomCodes->generateAlphaNumeric($length = 8, $isCapital = true);
