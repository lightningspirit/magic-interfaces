[![Latest Stable Version](https://poser.pugx.org/lightningspirit/magic-interfaces/v/stable.svg)](https://packagist.org/packages/lightningspirit/magic-interfaces)
[![Build Status](https://travis-ci.org/lightningspirit/magic-interfaces.svg?branch=master)](https://travis-ci.org/lightningspirit/magic-interfaces)
[![License](https://poser.pugx.org/lightningspirit/magic-interfaces/license.svg)](https://packagist.org/packages/lightningspirit/magic-interfaces)
[![Total Downloads](https://poser.pugx.org/lightningspirit/magic-interfaces/downloads.svg)](https://packagist.org/packages/lightningspirit/magic-interfaces)
[![Gitter](https://badges.gitter.im/Join Chat.svg)](https://gitter.im/lightningspirit/magic-interfaces?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

# PHP Interfaces for magic methods

This package provides interfaces that define PHP [magic methods](http://php.net/manual/en/language.oop5.magic.php).

Using interfaces to test for existing implementations is often recognized as a best practice.

When testing objects for [magic methods](http://php.net/manual/en/language.oop5.magic.php) implementation,
those interfaces can be useful.

### Motivation

Instead of:

```
if (method_exists('__invoke', $object)) {
    $object();
}
```
one can now write:

```
if ($object instanceof Invokable) {
    $object();
}
```

### Usage example

Create a class that implements some magic interfaces.

```
/**
 * Implement some magic methods by using interfaces
 */
class Example implements Invokable, Stringifiable {

}
```

