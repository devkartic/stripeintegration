<?php

require 'config.php';

?>

<form action="charge.php" method="post">
    <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
            data-key="<?php echo $stripeArray['publishable_key']?>"
            data-amount="5000"
            data-description="One year's subscription"
    ></script>
</form>