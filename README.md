# XMPie-WSDL-Wrapper
**SoapClient Class Extensions for the XMPie WSDL API**

## Table of Contents
- [Purpose](#purpose)
- [Supported XMPie Applications and Versions](#supported-xmpie-applications-and-versions)
- [Installation](#installation)
- [Basic Usage](#basic-usage)
- [Plain PHP SOAP vs XMPie-WSDL-Wrapper SOAP](#plain-php-soap-vs-xmpie-wsdl-wrapper-soap)
- [Concepts](#concepts)


## Purpose
XMPie provides an Application Programming Interface (API) as a way to interact with 
the uStore and uProduce Applications. The API is available in the form of Microsoft Web Services.
Microsoft Web Services are based on a core set of standards, describing the syntax and semantics of software communication:

- Extensible Markup Language (XML) - provides the common syntax for representing data 
- Simple Object Access Protocol (SOAP) - provides the semantics for data exchange  
- Web Services Description Language (WSDL) - provides a mechanism for describing the capabilities of a Web service 

The project provides a PHP Wrapper to the WSDL interface, thus providing an Object Oriented Programming (OOP)
methodology to interact with the XMPie Web Services.


## Supported XMPie Applications and Versions
| Application   | Versions                   | 
| ------------- |:-------------------------- |
| uStore        | 8.6, 9.0                   |
| uProduce      | 9.0.2                      |


## Installation
The recommended method of installation is via Composer.

```json
{
"require": {
    "php": ">=7.0.0",
    "fxaps/xmpie-wsdl-wrapper": "*"
  }
}
```

## Basic Usage
By including the RequestMaker and ServiceMaker into your code,
you have the ability to access all XMPie Web Services via PHP method chaining.

```php
<?php
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\_Loader\RequestMaker;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\_Loader\ServiceMaker;

$RequestMaker = new RequestMaker();
$ServiceMaker = new ServiceMaker();

$Request = $RequestMaker->Licensing_SSP()->GetAvailableClicks()->setInUsername('amelia')->setInPassword('my$3cret'));
$Service = $ServiceMaker->Licensing_SSP();
$Response = $Service->GetAvailableClicks($Request);

print_r($Response);
```

Make sure you load the right vesion of RequestMaker and ServiceMaker for your installation of uProduce and uStore.
If you need to query the uProduce and uStore Web Services on the same page, don't forget to alias the namespaces.

```php
<?php
//to query the uProduce API v9.0.2
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\_Loader\RequestMaker as uProduceRequestMaker;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\_Loader\ServiceMaker as uProduceServiceMaker;

//to query the uStore API v9.0.0
use XMPieWsdlClient\XMPie\uStore\v_9_0\_Loader\RequestMaker as uStoreRequestMaker;
use XMPieWsdlClient\XMPie\uStore\v_9_0\_Loader\ServiceMaker as uStoreServiceMaker;
```

## Plain PHP SOAP vs XMPie-WSDL-Wrapper SOAP

### Plain PHP SOAP
To interact with the XMPie Web Service (or any SOAP Service) you could use the
built in PHP SoapClient class, similar to the following:

```php
<?php
$p = new stdClass();
$p->inUsername = 'amelia';
$p->inPassword = 'my$3cret';

$licensingService = new SoapClient("http://..../Licensing_SSP.asmx?wsdl");
$result = $licensingService->GetAvailableClicks($p);
print_r($result);
```

There biggest drawbacks of the above are:

1. **Missing Methods.** Methods are marked as missing in IDE's such a PhpStorm or WebStorm. See `GetAvailableClicks` in the image below.
   Missing methods are due to the fact that SoapClient uses a lot of magic methods - methods which are hard to debug.  
   ![Missing Method](https://github.com/fxaps/XMPie-WSDL-Wrapper/blob/master/docs/images/MissingMethod.png?raw=true)
   
2. **No type hinting.** You can probably guess that `inUsername` should be a string
   but what about more obscure parameters such as `inProps` or `inMacTypeHex`?
   Is that a String, Array or Int?

3. **No code completion.** Constantly referring to the API documentation to get the exact spelling and case can be
   a tedious process. Was that `CreateNewFromCPKG` or `CreateNewFromCpkg`?

### XMPie-WSDL-Wrapper SOAP
1. **No Missing Methods.** XMPie-WSDL-Wrapper replaces SoapClient magic methods
   with concrete Classe, Methods and Properties.

2. **Type hinting.** All class methods and properties are properly DocBlocked (e.g. `@var ArrayOfProperty $inProps`) so
   you can be sure of passing the expected variable type.

3. **Code completion.** Need we say more?

4. **Method chaining.** Familiarise yourself with method chaining to make your code more readable and efficient.


## Concepts
XMPie-WSDL-Wrapper is based on the work of [wsdl2phpgenerator](https://github.com/wsdl2phpgenerator/wsdl2phpgenerator).
The wsdl2phpgenerator utility is used to generate PHP Classes, Methods and Properties from the XMPie WSDL files.
Those resulting PHP Classes are wrapped by XMPie-WSDL-Wrapper to provide an easy and simple way to
access **any** of the XMPie Web Services through a common interface.

Through XMPie-WSDL-Wrapper, you make use of **Request** and **Response** cycles via a **Service**.

- **Request:** The parameters of the data you are requesting. 
- **Service:** This API that will serve you the data.
- **Response:** The data you asked for in your Request.

In other words, you create a **Request** which you send to a **Service** to get back a **Response**.


### The *Request* Object
Before you can get data, you need to format your request into a structure the Web Service understands. 
Formatting the parameters - such as username, password and JobId - is the job of the Request Object Class.

To create a instance of the Request Object Class:
```php
<?php
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\_Loader\RequestMaker;
$RequestMaker = new RequestMaker();
```

Through the instance `$RequestMaker`, we can create a structured `$Request` Object for *any* XMPie WSDL.

```php
<?php
//I need some info about UserID 1...
$Request = $RequestMaker->User_SSP()->GetAllProperties()->setInUsername('amelia')->setInPassword('my$3cret')->setInUserID(1);

//I need all the messages from JobID 14809...
$Request = $RequestMaker->Job_SSP()->GetMessages()->setInUsername('amelia')->setInPassword('my$3cret')->setInJobID(14809);

//I need some information about CampaignID 457...
$Request = $RequestMaker->Campaign_SSP()->GetAllProperties()->setInUsername('amelia')->setInPassword('my$3cret')->setInCampaignID(457);
```

It is important to note that the `$Request` Object above *does not* hold the data we are requesting from the API,
it merely holds the request parameters in a format that is ready to send to a *Service*.


### The *Service* Object
To get the data, you need to employ the Service Object Class.
We send the `$Request` Object we created above to an instance of the Service Object Class.

To create an instance of the Service Object Class:
```php
<?php
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\_Loader\ServiceMaker;
$ServiceMaker = new ServiceMaker();
```

Through the instance `$ServiceMaker`, we can create a SoapClient `$Service` Object for *any* XMPie WSDL.

```php
<?php
//I need a SoapClient for the User Service...
$Service = $ServiceMaker->User_SSP();

//I need a SoapClient for the Job Service...
$Service = $ServiceMaker->Job_SSP();

//I need a SoapClient for the Campaign Service...
$Service = $ServiceMaker->Campaign_SSP();
```

The `$ServiceMaker` Object helps you retrieve an instance of SoapClient specific to an XMPie Service.
As such you can construct ServiceMaker() in a *similar* manner to SoapClient.

**SoapClient construction** `SoapClient::__construct ( mixed $wsdl [, array $options ] )`.

**ServiceMaker construction** `ServiceMaker::__construct ( array $options, string $wsdl = 'http://localhost' )`.

Notice how the parameters are reversed, this is due to keeping consistency with
[wsdl2phpgenerator](https://github.com/wsdl2phpgenerator/wsdl2phpgenerator) off which this project is based.

`$options` defaults to `[]` - refer to [SoapClient](http://php.net/manual/en/soapclient.soapclient.php) for options.  
`$wsdl` defaults to `http://localhost` - change to a remote URL as required.

```php
<?php
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\_Loader\ServiceMaker;

//The properties
$options = [];
$wsdl = 'https://www.myserver.com';

//Options 1 = set properties via constructor
$ServiceMaker = new ServiceMaker($options, $wsdl);

//Option 2 - set properties via setter methods
$ServiceMaker = new ServiceMaker();
$ServiceMaker->setUProduceUrl($wsdl);
$ServiceMaker->setOptions($options);

//Our Service now uses the properties defined above
$ServiceUser = $ServiceMaker->User_SSP();
$ServiceJob = $ServiceMaker->Job_SSP();
$ServiceCampaign = $ServiceMaker->Campaign_SSP();
```

We can send our `$Request` to `$Service` and receive `$Response`.
```php
<?php
$Response = $ServiceUser->GetAllProperties($Request);
```

The `$Response` Object above holds a response (no kidding) from the API and the next step is to work with that *Response*.


### The *Response* Object
There is no need to explicitly make a `$Response` instance - it's a product of calling a *Service*.
One thing to note about the`$Response` object, it contains the *entire* response (i.e all the 'packaging')
from the API. Most of the time you only need the *result* (i.e. the 'goods') from inside the `$Response`.
Each `$Response` contains a handy `get<method_name>Result()` method to extract the result/s from $Response.

```php
<?php
$Response = $ServiceUser->GetAllProperties($Request);
$result = $Response->getGetAllPropertiesResult();
print_r($result);
```
The variable `$result` contains the all the properties of the requested user and
you can now work with `$result` in your PHP code.


### Full Simple Example

```php
<?php
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\_Loader\RequestMaker;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\_Loader\ServiceMaker;

/*
 * Create instances of RequestMaker and ServiceMaker.
 * They can be used many times, as you will see below.
 */
$RequestMaker = new RequestMaker();
$ServiceMaker = new ServiceMaker();


//Call 1 - I need to know how many clicks I have left
$Request = $RequestMaker->Licensing_SSP()->GetAvailableClicks()->setInUsername('amelia')->setInPassword('my$3cret');
$Service = $ServiceMaker->Licensing_SSP();
$Response = $Service->GetAvailableClicks($Request);
$result = $Response->getGetAvailableClicksResult();
print_r($result);


//Call 2 - I need information about UserID 1
$Request = $RequestMaker->User_SSP()->GetAllProperties()->setInUsername('amelia')->setInPassword('my$3cret')->setInUserID(1);
$Service = $ServiceMaker->User_SSP();
$Response = $Service->GetAllProperties($Request);
$result = $Response->getGetAllPropertiesResult();
print_r($result);


//Call 3 - I need all the messages from JobID 14809...
$Request = $RequestMaker->Job_SSP()->GetMessages()->setInUsername('amelia')->setInPassword('my$3cret')->setInJobID(14809);
$Service = $ServiceMaker->Job_SSP();
$Response = $Service->GetMessages($Request);
$result = $Response->getGetMessagesResult();
print_r($result);


//Call 4 - I need some information about CampaignID 457...
$Request = $RequestMaker->Campaign_SSP()->GetAllProperties()->setInUsername('amelia')->setInPassword('my$3cret')->setInCampaignID(457);
$Service = $ServiceMaker->Campaign_SSP();
$Response = $Service->GetAllProperties($Request);
$result = $Response->getGetAllPropertiesResult();
print_r($result);
```

In each of the calls above, you see the same 3 steps:
1. Create a **Request** 
2. Send the **Request** to a **Service** 
3. Get back a **Response** (from which we extract the result and use in our PHP code).

### Full Advanced Examples
Refer to the `docs` folder in this project to see examples of:
- Configuring the `RequestMaker` on instantiation.  
  - Auto-populating the `username` and `password` parameters
- Configuring the `ServiceMaker` on instantiation.  
  - Configure `SoapClient` Options.
  - Switch from `http://localhost` to other servers.
- Ways to write even less code.

## Licensing and Support
This project is licensed under the MIT License - you are free to use the code in this project
under the terms of this [License](https://github.com/fxaps/XMPie-WSDL-Wrapper/blob/master/LICENSE).

Please note however, the XMPie SDK (and associated code samples) are licensed products from XMPie.
Consult your local [XMPie Dealer](www.xmpie.com) to make a purchase.

Because the XMPie SDK is a licensed product, any requests to 'help me do something' will be ignored. 
An example of what will be ignored:
- Can you please show me how to execute an InDesign Document?
- How do I get the download path of a Job?
- How do I upload a Campaign into the Dashboard?

If there is a bug in the code, please raise an [issue](https://github.com/fxaps/XMPie-WSDL-Wrapper/issues).


