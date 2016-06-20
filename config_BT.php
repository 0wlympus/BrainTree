<?php
/**
 * Created by PhpStorm.
 * User: Owlympus
 * Date: 20/06/2016
 * Time: 11:57
 */

require_once __DIR__.'/lib/Braintree.php';

/* Get yours here : https://articles.braintreepayments.com/control-panel/important-gateway-credentials#api-credentials */

Braintree_Configuration::environment('sandbox');
Braintree_Configuration::merchantId('your_merchant_id');
Braintree_Configuration::publicKey('your_public_key');
Braintree_Configuration::privateKey('your_private_key');