<?php
/**
 * Created by PhpStorm.
 * User: Owlympus
 * Date: 20/06/2016
 * Time: 09:55
 */

/* Configuration file */
require_once __DIR__.'/config_BT.php';

/* Post datas retured */
if(!empty($_POST)){

    /* Payment Methode returned by BrainTree integration in the form */
    $pmn = $_POST['payment_method_nonce'];

    $result = Braintree_Transaction::sale([
        'amount' => '10.00',
        'paymentMethodNonce' => $pmn,
        'options' => [
            'submitForSettlement' => True
        ]
    ]);

    echo "<pre>";
    var_dump($_POST);
    echo "<br>";
    var_dump($result);
    echo "</pre>";

} ?>
<!DOCTYPE html>
<html>
<head>
    <title>BrainTree by Owlympus</title>

    <!--  JQuery for $.GET  -->
    <script src="ext_things/jquery-3.0.0.min.js"></script>

    <!--  You can remove this dope style -->
    <style>
        body{
            background-color: #6d6da2;
        }
        form{
            position: absolute;
            width: 400px;
            top: 10%;
            margin: 0 auto;
            left: 0;
            right: 0;
            padding: 20px;
            background: #FFF;
            border: 1px solid #BCD;
            box-shadow: 0 2px 10px -1px #000;
        }
    </style>
</head>
<body>

<!--  Simple form you can mod  -->
<form id="checkout" method="post" action="">

    <!--  BrainTree integration  -->
    <div id="payment-form"></div>
    <!--  BrainTree integration  -->

    <button type="submit" name="submit"> Pay $10 </button>
</form>

<!--  BrainTree script  -->
<script src="https://js.braintreegateway.com/js/braintree-2.25.0.min.js"></script>
<script>
    $.get("get_token.php")
        .done(function( data ) {
            braintree.setup(data, "dropin", {
                container: "payment-form"
            });
        });
</script>
</body>
</html>