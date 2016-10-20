This project contains sample README and PHP files to quickstart a "container-interop/service-provider". Use it as a base to start your own service-provider package.

[![Latest Stable Version](https://poser.pugx.org/yourvendorname/yourpackagename/v/stable)](https://packagist.org/packages/yourvendorname/yourpackagename)
[![Latest Unstable Version](https://poser.pugx.org/yourvendorname/yourpackagename/v/unstable)](https://packagist.org/packages/yourvendorname/yourpackagename)
[![License](https://poser.pugx.org/yourvendorname/yourpackagename/license)](https://packagist.org/packages/yourvendorname/yourpackagename)

# XXX universal module

This package integrates XXX in any [container-interop](https://github.com/container-interop/service-provider) compatible framework/container.

## Installation

```
composer require yourvendorname/yourpackagename
```

Once installed, you need to register the [`YourVendor\XXXServiceProvider`](src/XXXServiceProvider.php) into your container.

If your container supports Puli integration, you have nothing to do. Otherwise, refer to your framework or container's documentation to learn how to register *service providers*.

## Introduction

This service provider is meant to **[fill purpose here]**.

## Expected values / services

This *service provider* expects the following configuration / services to be available:

| Name                        | Compulsory | Description                            |
|-----------------------------|------------|----------------------------------------|
| `configuration_value`       | *no*       | Definition                             |
| `service_name`              | *yes*      | Definition                             |


## Provided services

This *service provider* provides the following services:

| Service name                | Description                          |
|-----------------------------|--------------------------------------|
| `service_name`              | Definition                           |

## Extended services

This *service provider* extends those services:

| Name                        | Compulsory | Description                            |
|-----------------------------|------------|----------------------------------------|
| `service_name`              | *yes*      | Definition                             |


<small>Project template courtesy of <a href="https://github.com/thecodingmachine/service-provider-template">thecodingmachine/service-provider-template</a></small>
