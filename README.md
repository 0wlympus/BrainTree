# Braintree PHP Client Library

The Braintree PHP library provides integration access to the Braintree Gateway.

![alt tag](http://img15.hostingpics.net/pics/232770Capturedecran20160620a130801.png)

## Dependencies

PHP version >= 5.4.0 is required.

The following PHP extensions are required:

* curl
* dom
* hash
* openssl
* xmlwriter

## Quick Start Example

Changes your values in :

```
BrainTree/config_BT.php
```

=> [Get your ID here](https://articles.braintreepayments.com/control-panel/important-gateway-credentials#api-credentials)


```php
<?php

require_once __DIR__.'/lib/Braintree.php';

Braintree_Configuration::environment('sandbox');
Braintree_Configuration::merchantId('your_merchant_id');
Braintree_Configuration::publicKey('your_public_key');
Braintree_Configuration::privateKey('your_private_key');
```

## HHVM Support

The Braintree PHP library will run on HHVM >= 3.4.2.

## Legacy PHP Support

Version [2.40.0](https://github.com/braintree/braintree_php/releases/tag/2.40.0) is compatible with PHP 5.2 and 5.3. You can find it on the releases page.

## Documentation

 * [Official documentation](https://developers.braintreepayments.com/php/sdk/server/overview)

## Testing

The unit specs can be run by anyone on any system, but the integration specs are meant to be run against a local development server of our gateway code. These integration specs are not meant for public consumption and will likely fail if run on your system. To run unit tests use rake: `rake test:unit`.

The benefit of the `rake` tasks is that testing covers default `hhvm` and `php` interpreters. However, if you want to run tests manually simply use the following command:
```
phpunit tests/unit/
```

## Open Source Attribution

A list of open source projects that help power Braintree can be found [here](https://www.braintreepayments.com/developers/open-source).

## License

See the LICENSE file.