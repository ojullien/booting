# Booting

![PHP Composer](https://github.com/oseille/booting/workflows/PHP%20Composer/badge.svg?branch=master)

Abstract part of a booting application process, using the Chain of Responsibility pattern. The Chain is responsible for configuring the environment (development or production) and initializing the application.

The **Oseille\Booting\Boot** chain hierarchy accept a configuration array and return a PSR-11 container. The **Oseille\Booting\Init** chain hierarchy accept a PSR-11 container and return the App.

_We are using a Chain of Responsability because we need fexibility; we can add or remove stages depending on what we need for the application._

## Table of Contents

- [Requirements](#requirements) | [Installation](#installation) | [Documentation](#documentation) | [Test](#test) | [Contributing](#contributing) | [License](#license)

## Requirements

- PHP: ^7.4
- psr/container: "^1.0"

## Installation

This package requires PHP 7.4. For specifics, please examine the package [composer.json](https://github.com/oseille/booting/blob/master/composer.json) file.

You may check if your PHP and extension versions match the platform requirements using `composer diagnose` and `composer check-platform-reqs`. (This requires [Composer](https://getcomposer.org/) to be available as composer.)

This package is installable and PSR-4 autoloadable via [Composer](https://getcomposer.org/) as oseille/booting. For no dev, use `composer install --no-dev` and for dev, use `composer install`.

Alternatively, [download a release](https://github.com/oseille/booting/releases), or clone this repository, then map the Oseille\Booting namespace to the package src/ directory.

## Documentation

We do not provide exhaustive documentation. Please read the code and the comments ;) You can find some code in the [PBRaiders project](https://github.com/pbraiders) and [SWOR project](https://github.com/ojullien/swor-server)

## Test

To run the unit tests at the command line, issue `composer install` and then `./vendor/bin/phpunit` at the package root. (This requires [Composer](https://getcomposer.org/) to be available as composer.)

## Contributing

Thanks you for taking the time to contribute. Please fork the repository and make changes as you'd like.

If you have any ideas, just open an [issue](https://github.com/oseille/booting/issues) and tell me what you think. Pull requests are also warmly welcome.

If you encounter any **bugs**, please open an [issue](https://github.com/oseille/booting/issues).

Be sure to include a title and clear description,as much relevant information as possible, and a code sample or an executable test case demonstrating the expected behavior that is not occurring.

## License

**Booting** is open-source and is licensed under the [MIT license](LICENSE).
