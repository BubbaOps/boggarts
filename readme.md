# Laughing at Boggarts

> _To repel or destroy a boggart, it must be laughed at._ <br>
> ~ Harry Potter and the Prisoner of Azkaban
____

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

`composer require bubba/bogarts`

### Usage

### Object Notation

```php
use \Bubba\Boggarts\Excise;
$source = 'Some string that contains evil­ fae';
$exorcist = Excise::make(config: include 'config/bogarts.php');
$exorcist->text($source);
$result = $exorcist->finalize();

echo $result;
// 'Some string that contains evil fae'
```

### Fluent Notation

```php
use \Bubba\Boggarts\Excise;
$source = 'Some string that contains evil­ fae';
$result = Excise::make(config: include 'config/bogarts.php')
    ->text($source)
    ->finalize();

echo $result;
// 'Some string that contains evil fae'
```

## :heart: Sponsor Me, Maybe

[Sponsor me](https://github.com/sponsors/bubba-h57)
