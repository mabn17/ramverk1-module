# Anax weather module

badges

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

### Automatic Installation (optionall)

If you want an automatic installation run `script/install.bash`. Make sure you stand in the root directory of anax when you run it. **Dont** forget to change the values inside `config/weather`. 

## Configuration files for weather

We need to copy the configuration files for the weather module.

```
rsync -av vendor/anax/weather/config/keys.php config
```

**Note:** Remember to change the values to your own API keys.

## Views & Documentation

We need to copy the API documentation and the weather module views.

```
rsync -av vendor/anax/weather/view/weather view/anax/v2/
```

If you would like to change the documentation to markdown then create a new file in `anax/content/`. The route will have the same name as your .md file has.

## Router files

You need to include the router file in your router configuration `anax/config/router/`. There is a sample you can use in `/config/router/902_vader.php`.

```
rsync -av vendor/anax/weather/config/router/902_vader.php config/router/
```

## DI Services

You need to add the configuration file for di.

You need to add the configuration for the di services `anax/config/di/`. There is a sample you can use in `config/di/weather.php`.

```
rsync -av vendor/anax/weather/config/di/weather.php config/di/
```

## License

```
.
..: Copyright (c) 2018 - 2019 Martin Borg (martin.d@live.se)
```