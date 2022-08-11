# PHP Homoglyph Attack Generator

This app is meant to make it easier to generate homographs based on Homoglyphs than having to search for look-a-like character in Unicode, then coping and pasting. Please use only for legitimate pen-test purposes and user awareness training. I also recommend webapp developers use it to test out possible user impersonation attacks in their code. This is still a work in progress, so please send me suggestions (especially for new Homoglyphs to add). While this tool was designed with making IDNA/Punycode names for putting into DNS to display foreign characters in a browsers URL bar, it can be used for other things. Try ignoring the IDNA/Punycode stuff and just making look alike user names for systems that accept Unicode. I made this tool to easily generate homographs based on homoglyphs in Unicode and to test out how different apps display them. It seems like a lot of modern browsers have gotten better at warning the users of attack, but I'd love to hear experiences about other apps that accept Unicode/Punycode/Internationalized Domain Names, especially webapps.

Based on: https://www.irongeek.com/homoglyph-attack-generator.php

## Requirements

PHP 7.4 and leter

Modules: mbstring, iconv, intl


## Composer

You can install the bindings via [Composer](http://getcomposer.org/). Run the following command:

```bash
composer require pavlo-dot-dev/homoglyph-attack-generator
```

## Dependencies

The bindings require the following extensions in order to work properly:

-   [`mbstring`](https://secure.php.net/manual/en/book.mbstring.php) (Multibyte String)
-   [`iconv`](https://www.php.net/manual/en/book.iconv.php)
-   [`intl`](https://www.php.net/manual/en/intro.intl.php) (Internationalization extension)

If you use Composer, these dependencies should be handled automatically. If you install manually, you'll want to make sure that these extensions are available.

## Getting Started

Simple usage looks like:

```php
$generator = new \PavloDotDev\HomoglyphAttackGenerator\Generator();
$results = $generator->generate('cocacola', true);
print_r($results);
```

```php
$generator = new \PavloDotDev\HomoglyphAttackGenerator\Generator();
$results = $generator->generate('cocacola', false);
print_r($results);
```

