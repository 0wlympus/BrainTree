<?php
/**
 * Created by PhpStorm.
 * User: Owlympus
 * Date: 20/06/2016
 * Time: 10:10
 */

require_once __DIR__.'/config_BT.php';

echo($clientToken = Braintree_ClientToken::generate());