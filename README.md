Please note: This project is not supported. We are not activily using the PHP implementation - Project was paused before it was fully completed. Work is required on tests and upgrade to latest version of the Open RTB specification.

# OpenRTB 2.3.1 for PHP

This library has been created for PHP developers using the OpenRTB protocol. It provides a very lightweight wrapper to create, validate, and hydrate **Bid Requests** and **Bid Responses**. Getting started could not be easier, find our package on packagist: https://packagist.org/packages/venatus/openrtb

Install by adding { .. "venatus/openrtb": "0.1" .. } to your composer.json file.

The wrapper requires Guzzle. This can be used to further extends the library where required. More information about Guzzle can be found here: http://guzzle.readthedocs.org/en/latest/

### Installing via Composer

The recommended way to install Guzzle is through
[Composer](http://getcomposer.org).

```bash
# Install Composer
curl -sS https://getcomposer.org/installer | php
```

Next, run the Composer command to install the latest stable version of Guzzle:

```bash
composer.phar require venatus/openrtb
```

After installing, you need to require Composer's autoloader:

```php
require 'vendor/autoload.php';
```

### PHP Examples

```php
<?php
require 'vendor/autoload.php';

//Create instance of a Bid Response
$bidResponse = new \openrtb\BidResponse();

//Set the Bid Response id
$bidResponse->set('id','ABC123');

//Create instance of a Bid model
$bid = new \openrtb\models\Bid();

//Set the Bid Response attributes
$bid->set('id','ABC123');
$bid->set('impid','ABC123');
$bid->set('price',1.2);

//Create instance of a Seat Bid model
$seatBid = new \openrtb\models\SeatBid();

//Attach the Bid model to the Seat Bid model
$seatBid->set('bid',array(
  $bid
));

//Attach Seat Bid model to the Bid Response
$bidResponse->set('seatbid',$seatBid);

//Output the Bid Reponse as JSON
var_dump($bidResponse->getDataAsJson());
```

### License

The MIT License (MIT)

Copyright (c) 2015 Venatus Media Ltd

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
