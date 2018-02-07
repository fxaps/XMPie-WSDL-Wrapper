# XMPie-WSDL-Wrapper
**SoapClient Class Extensions for the XMPie WSDL API**

## Table of Contents
- [Purpose](#purpose)
- [Installation](#installation)
- [Basic Usage](#basic-usage)
- [Plain PHP SOAP vs XMPie-WSDL-Wrapper SOAP](#plain-php-soap-vs-xmpie-wsdl-wrapper-soap)
- [Concepts](#concepts)


## Purpose
XMPie provides an Application Programming Interface (API) as a way to interact with 
the uStore and uProduce Applications. The API is available in the form of Microsoft Web services.
Microsoft Web Services are based on a core set of standards, describing the syntax and semantics of software communication:

- Extensible Markup Language (XML) - provides the common syntax for representing data 
- Simple Object Access Protocol (SOAP) - provides the semantics for data exchange  
- Web Services Description Language (WSDL) - provides a mechanism for describing the capabilities of a Web service 

The project provides an PHP Wrapper to the WSDL interface, thus providing an Object Oriented Programming (OOP)
Methodology to interacting with the XMPie API.


## Installation
The recommended method of installation is via Composer.

```json
{
"require": {
    "php": ">=7.0.0",
    "arajcany/xmpie-wsdl-wrapper": "*"
  }
}
```

## Basic Usage
By including the ServiceMaker and RequestMaker into you code, you have the ability to access all the WSDL methods via method chaining.

```php
<?php
//to query the uProduce API v9.0.2
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\_Loader\RequestMaker;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\_Loader\ServiceMaker;

$RM = new RequestMaker();
$SM = new ServiceMaker();

$Request = $RM->Licensing_SSP()->GetAvailableClicks()->setInUsername('amelia')->setInPassword('my$3cret');
$Response = $SM->Licensing_SSP()->GetAvailableClicks($Request);
print_r($Response);

?>
```

If you need to query the uProduce and uStore API's in the same page, don't forget to alias the namespaces.

```php
<?php
//to query the uProduce API v9.0.2
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\_Loader\RequestMaker as uProduceRequestMaker;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\_Loader\ServiceMaker as uProduceServiceMaker;

//to query the uStre API v9.0.0
use XMPieWsdlClient\XMPie\uStore\v_9_0\_Loader\RequestMaker as uStoreRequestMaker;
use XMPieWsdlClient\XMPie\uStore\v_9_0\_Loader\ServiceMaker as uStoreServiceMaker;

//uProduce
$RM = new uProduceRequestMaker();
$SM = new uProduceServiceMaker();
$Request = $RM->Licensing_SSP()->GetAvailableClicks()->setInUsername('amelia')->setInPassword('my$3cret');
$Response = $SM->Licensing_SSP()->GetAvailableClicks($Request);
print_r($Response);

//uStore
$RM = new uStoreRequestMaker();
$SM = new uStoreServiceMaker();
$Request = $RM->UserWS()->GetUserByEmail()->setUsername('amelia.admin@uStore.com')->setPassword('my$3cret')->setEmail('some.user@store.com');
$Response = $SM->UserWS()->GetUserByEmail($Request);
print_r($Response);

?>
```

## Plain PHP SOAP vs XMPie-WSDL-Wrapper SOAP

### Plain PHP SOAP
To interact with the XMPie API (or any SOAP Service) you could use the
built in PHP SoapClient class, similar to the following:

```php
<?php
$p = new stdClass();
$p->inUsername = 'amelia';
$p->inPassword = 'my$3cret';

$licensingService = new SoapClient("http://..../Licensing_SSP.asmx?wsdl");
$result = $licensingService->GetAvailableClicks($p);
print_r($result);

?>
```

There biggest drawbacks of the above are:

1. Methods are marked as missing in IDE's such a PhpStorm or WebStorm. See `GetAvailableClicks` in the image below.
   Missing methods are due to the fact that SoapClient uses a lot of magic methods - methods which are hard to debug.
   ![Missing Method](https://github.com/arajcany/XMPie-WSDL-Wrapper/blob/master/images/MissingMethod.png?raw=true)
   
2. No type hinting. You can probably guess that `inUsername` should be a string
   but what about more obscure parameters such as `inProps` or `inMacTypeHex`?
   Is that a String, Array or Int?

3. No code completion. Constantly referring to the API documentation to get the exact spelling and case can be
   a tedious process. Was that `CreateNewFromCPKG` or `CreateNewFromCpkg`?

### XMPie-WSDL-Wrapper SOAP
1. No Missing Methods. XMPie-WSDL-Wrapper replaces SoapClient magic methods with concrete Classes/Methods/Properties.

2. Type hinting. All class methods and properties are properly DocBlocked (e.g. `@var ArrayOfProperty $inProps`) so
   you can be sure of passing the expected variable type.

3. Code completion. Need we say more?

4. Method chaining. More on this later.


## Concepts
XMPie-WSDL-Wrapper is based on the work of [wsdl2phpgenerator](https://github.com/wsdl2phpgenerator/wsdl2phpgenerator).
The wsdl2phpgenerator utility is used to generate PHP Classes for the XMPie WSDL files.
Those resulting PHP Classes are then wrapped by XMPie-WSDL-Wrapper to provide a simple way to access **any** of the XMPie
API Services through a common interface.

Through XMPie-WSDL-Wrapper, you access the XMPie API via **Request** and **Response** cycles via a **Service**.

- **Service:** This is the actual XMPie API that you interact with.
- **Request:** Information about the data you are requesting from the Service. 
- **Response:** The actual data you get back from your Request.

In other words, you **Request** data from a **Service** and get back a **Response**.

### The *Request* Object
### The *Service* Object
### The *Response* Object


