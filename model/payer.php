<?php
require_once("/home/nazif/Farm_Man/payement/chipdeals-mobile-money-api.php");

$momo = new Momo();
$momo->setApiKey("test-4922a9dc-3292-4c7a-ba3a-f4ece1c1376b");

$collection = $momo
  ->collect()
  ->amount(50) //Amount of the transaction
  ->currency("XOF") // Any valid currency
  ->from("22962130072") // Sender phone number with country code préfix
  ->firstName("Iyam") // First name of the sender
  ->lastName("EVERICH") // Last name of the sender
  ->create();


?>