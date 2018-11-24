# Anax weather module

[![Latest Stable Version](https://poser.pugx.org/mabn17/weather/v/stable)](https://packagist.org/packages/mabn17/weather)

[![Build Status](https://travis-ci.org/mabn17/ramverk1-module.svg?branch=master)](https://travis-ci.org/mabn17/ramverk1-module) [![Build Status](https://scrutinizer-ci.com/g/mabn17/ramverk1-module/badges/build.png?b=master)](https://scrutinizer-ci.com/g/mabn17/ramverk1-module/build-status/master) [![Code Intelligence Status](https://scrutinizer-ci.com/g/mabn17/ramverk1-module/badges/code-intelligence.svg?b=master)](https://scrutinizer-ci.com/code-intelligence) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/mabn17/ramverk1-module/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/mabn17/ramverk1-module/?branch=master)

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/4262d51ce4d0497ab650d1396bc947ba)](https://www.codacy.com/app/mabn17/ramverk1-module?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=mabn17/ramverk1-module&amp;utm_campaign=Badge_Grade) [![Code Coverage](https://scrutinizer-ci.com/g/mabn17/ramverk1-module/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/mabn17/ramverk1-module/?branch=master)

Anax weather module implementing a weather application.

This Weather module can be used to see the weeks weather and/or the weather for the past month. Use this together with an Anax installation.

This module has a graphical part in witch the user searches for a given location and resives the data of the weeks weather and the past 30 days.

It also provides a REST api with HTTP method GET. The route takes a location as an argument and returns a JSON response with the same and more details as the graphical interface. See more in [View/explainJson.php](https://github.com/mabn17/ramverk1-module/blob/master/view/weather/explainJson.php).

# Install and setup Anax

First install your own version of [Anax](https://packagist.org/packages/anax/anax-ramverk1-me).

# Install the weather app as part of Anax

Install using composer and then integrate the module with your Anax installation.

## Install with composer

We install the Weather app as a module from [Packagist](https://packagist.org/packages/mabn17/weather).

```
composer require mabn17/weather
```

## Configuration files for weather

We need to copy the configuration files for the weather module.

```
rsync -av vendor/mabn17/weather/config/keys.php config/
```

**Note:** Remember to change the value to your own [DarkSky](https://darksky.net/) API key.

## Views & Documentation

We need to copy the API documentation and the weather module views.

```
rsync -av vendor/mabn17/weather/view/weather view/anax/v2/
```

If you would like to change the documentation to markdown then create a new file in `anax/content/`. The route will have the same name as your .md file has.

## Controllers and Models

Move the files in `vendor/mabn17/weather/src/Controller/` into `src/Controller/` then change ```$page->add(/view/weather/name)``` to the commented line in both controller classes.

Move `vendor/mabn17/weather/src/Weather` folder into the `src/` folder.

```
rsync -av vendor/mabn17/weather/src/Controller/ src/Controller/
rsync -av vendor/mabn17/weather/src/Weather src/
```

## Router files

You need to include the router file in your router configuration `anax/config/router/`. There is a sample you can use in `vendor/mabn17/config/router/902_vader.php`.

```
rsync -av vendor/mabn17/anax/weather/config/router/902_vader.php config/router/
```

## DI Services

You need to add the configuration file for di.

You need to add the configuration for the di services `anax/config/di/`. There is a sample you can use in `vendor/mabn17config/di/weather.php`.

```
rsync -av vendor/mabn17/weather/config/di/weather.php config/di/
```

## License

```
.
..: Copyright (c) 2018 - 2019 Martin Borg (martin.d@live.se)
```