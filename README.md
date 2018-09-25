# Zipper

> Makes a zip archive from the content of a directory.

## Installation

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```console
$ composer require shadesoft/zipper
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

## Usage

```php
\ShadeSoft\Zipper\Zipper::zip('/path/to/directory', '/path/to/zip/file');
\ShadeSoft\Zipper\Zipper::zip('/path/to/directory', '/path/to/zip/file', 'CP852'); // file names in zip file will be converted to East-European
```
