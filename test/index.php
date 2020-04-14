<?php
require_once '../src/RandomCodes.php';
$objRandomCodes = new RandomCodes\RandomCodes();
echo $objRandomCodes->generateCode();// 12 digit random number generate
echo "<br />";
echo $objRandomCodes->generateAlphabets($length = 8, $isCapital = true);
echo "<br />";
echo $objRandomCodes->generateNumericCode($length = 8, $incZero = true);
echo "<br />";
echo $objRandomCodes->generateAlphaNumeric($length = 8, $isCapital = true);
echo "<br />";