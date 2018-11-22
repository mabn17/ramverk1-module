# Anax weather application

badges

Anax weather module implementing a weather application.

This Weather application can be used to see the weeks weather and/or the weather for the past month. Use this together with an Anax installation.

This application has a graphical part in witch the user searches for a given location and resives the data of the weeks weather and the past 30 days.

It also contains a REST api with HTTP method GET. The route takes a location as an argument and returns a JSON response with the same and more details as the graphical interface. See more in [View/explainJson.php](/view/explainJson.php).

# Install and setup Anax

First install your own version of Anax.

# Install the weather app as part of Anax

Install using composer and then integrate the module with your Anax installation.

## Install with composer

We install the Weather app as a module from Packagist.

```
composer require anax/weather
```

### Automatic Installation (optionall)

If you want an automatic installation run `script/install.bash`. Make sure you stand in the root directory of anax when you run it. **Dont** forget to change the values inside `config/weather`. 

## Configuration files for weather

We need to copy the configuration files for the weather application.

```
rsync -av vendor/anax/remserver/config/remserver* config
```

**Note:** Remember to change the values to your own API keys.

## Views & Documentation

We need to copy the API documentation and the weather application views.

If you would like to change the documentation to markdown then create a new file in `anax/content/`. The route will have the same name as your .md file has.

```
rsync -av vendor/anax/remserver/content/index.md content/remserver.md
```

## Router files

You need to include the router file in your router configuration `anax/config/router/`. There is a sample you can use in `/config/router/902_vader.php`.

```
rsync -av vendor/anax/remserver/config/route/remserver.php config/route
```

## DI Services

You need to add the configuration file for di.

You need to add the configuration for the di services `anax/config/di/`. There is a sample you can use in `config/di/weather.php`.

```
rsync
```

## License

```
.
..: Copyright (c) 2018 - 2019 Martin Borg (martin.d@live.se)
```