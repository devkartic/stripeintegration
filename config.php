<?php

require '../vendor/autoload.php';

$stripeArray = array(
    'publishable_key' => "pk_test_51JsNusKVqDrMN1sVssobAHFTxJrce8WDkHaGf4Yiqz3TIvCgiQs5lS8Y2nYEVc4dDniM0bPICex6xVrBs44E3Gmq00BLOrFhLW",
    'secret_key' => "sk_test_51JsNusKVqDrMN1sVUgL8gN4LdQMWmpm52bQOA4naHuk8Ku3smdl7Wk02dBhZ1jG8QWy5hTHIXk77VgNdQMHbsKNF000xbElgf2"
);

\Stripe\Stripe::setApiKey($stripeArray['secret_key']);




