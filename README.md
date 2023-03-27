# Laughing at Boggarts

> _To repel or destroy a boggart, it must be laughed at._ <br>
> ~ Harry Potter and the Prisoner of Azkaban
____
[![Latest Version on Packagist](https://img.shields.io/packagist/v/bubbaops/boggarts.svg?style=flat-square)](https://packagist.org/packages/bubbaops/boggarts)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/bubbaops/boggarts/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/bubbaops/boggarts/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/bubbaops/boggarts/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/bubbaops/boggarts/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/bubbaops/boggarts.svg?style=flat-square)](https://packagist.org/packages/bubbaops/boggarts)

## What even is this?

[Bare Bones Software](http://www.barebones.com/) famous [BBEdit](http://www.barebones.com/products/bbedit/) HTML and
text editor for macOS has had a “Zap Gremlins” feature since its first public release on April 12th, 1992! Sublime text
later rolled out it's own [Gremlins plugin](https://packagecontrol.io/packages/Gremlins), and today you can find
a [VSCode Gremlins](https://packagecontrol.io/packages/Gremlins) plugin.

These plugins help identify invisible and ambiguous Unicode whitespace characters _(zero width spaces, no-break spaces,
and others.)_ and have been referred to as gremlins all the way back to the early 1990's.

If you do any amount of text processing, you have no doubt run into these buggers and have probably played the game
where
you copy the text into an editor that will show them to you, they continue to attempt to hide, and ultimately you delete
the offending thing, then copy the result back into your source material to run again.

If you are clever, you have likely worked through various iterations of attempting to simply convert your entire string
to [ISO-8859](https://en.wikipedia.org/wiki/ISO/IEC_8859-1), perhaps created a function to remove them, and add a new
one everytime you run into one, or something along those lines.

We've had enough and have decided it's time for a first class solution to the problem. We also decided on an alternative
name. The new name is fairly synonymous with the concept of a gremlin, but it has a richer history and, quite frankly, I
just like it better. That movie gave me nightmares as a kid, and I don't want anything to do with them now.

## Features

* Configuration for fine-grained control over your boggarts.
* Laravel Integration.
* Easy to use.
* Can delete all configured bogies from your text.
* Can optionally replace configured bogies with your choice of characters.
* Comes pre-configured with a very nice set of boggarts to start off with.
* Has an awesome name with references to current pop culture!
* Solves a growing security issue for you.

## Installation

You can install the package via composer:

```bash
composer require bubbaops/boggarts
```

#### Laravel Projects

You can publish the config file with:

```bash
php artisan vendor:publish --tag="boggarts-config"
```

## Usage

```php
$text = "    Just imagine this text full of me an nasty boggarts invisible to you!       ";
$text = \BubbaOps\Boggarts\Facades\Excise::clip($text);
// Results "Just imagine this text full of mean nasty boggarts invisible to you!" 
// All cleaned up and ready to go our for a fun night.
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Bubba Hines](https://github.com/BubbaOps)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## :heart: Sponsor Me, Maybe

[Sponsor me](https://github.com/sponsors/bubba-h57)
