# TableTopFinder Language Files [![Build Status](https://travis-ci.org/jerodev/TableTopFinder-lang.svg?branch=master)](https://travis-ci.org/jerodev/TableTopFinder-lang)
This repository contains the translation files for [tabletopfinder.eu](https://www.tabletopfinder.eu/).

Consider adding your own language to the repository to browse the website in your own language and help us to expand the website.

## How can I help?
The [`src`](src/) folder contains all translations, separated by language. The name of the folder is the [ISO 639-1](https://en.wikipedia.org/wiki/ISO_639-1) language code.

Each folder contains a number of `php` files that return an array with key-value pairs. The key is the same for each language, the value is the translated string.

For example:

``` php
<?php

// src/nl/common.php

return [
  'key' => 'value'
  'one' => 'een',
  'two' => 'twee'
];
```

The [English language](src/en/) is the template for other languages, new keys are added to these files first.

### Couple of ground rules

- **Translations should not contain html**<br />
The translation string should not contain any html tags.
If formatting is needed for a specific string, markdown can be used. This is also the reason why some
strings are glued to the left of the editor.

- **Use php 5.4 short array syntax**<br />
We prefer to keep the files from being cluttered with unneeded strings, so please use the
[php5.4 short array syntax](http://php.net/manual/en/language.types.array.php#language.types.array.syntax).

## TODO
This is the current list of languages we are hoping to support:

| Language  | Code | % translated |
| - | - | - |
| <img src="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/flags/4x3/gb.svg" height="16" /> English | en | <pre>\|====================\| 100%</pre> |
| <img src="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/flags/4x3/nl.svg" height="16" /> Dutch   | nl | <pre>\|==================  \|  95%</pre> |
| <img src="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/flags/4x3/fr.svg" height="16" /> French  | fr | <pre>\|================    \|  81%</pre> |
| <img src="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/flags/4x3/de.svg" height="16" /> German  | de | <pre>\|====================\| 100%</pre> |
| <img src="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/flags/4x3/es.svg" height="16" /> Spanish | es | <pre>\|====                \|  22%</pre> |
| <img src="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/flags/4x3/it.svg" height="16" /> Italian | it | <pre>\|====================\| 100%</pre> |
| <img src="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/flags/4x3/dk.svg" height="16" /> Danish | da | <pre>\|====================\| 100%</pre> |
| <img src="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/flags/4x3/cz.svg" height="16" /> Czech | cs | <pre>\|====================\| 100%</pre> |

## Contributors
We are very grateful for anyone who wants to help us to translate the website,
so as a token of appreciation we will list contributors here and/or on the website if you want.
Feel free to mention this in your pull-request.
