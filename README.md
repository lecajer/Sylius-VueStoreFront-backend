<p align="center">
    <a href="https://sylius.com" target="_blank">
        <img src="https://demo.sylius.com/assets/shop/img/logo.png" />
    </a>
</p>

<h1 align="center">Sylius Standard Edition with some additions</h1>

<p align="center">This is Sylius Standard Edition repository for starting new projects or pick some commits</p>
It is based on the [Sylius-Standard 1.11](https://github.com/Sylius/Sylius-Standard/tree/1.11) with the following additions :

- XDebug enabled
- Platform.sh configure to host the project, deploy with git push

Documentation
-------------

Documentation is available at [docs.sylius.com](http://docs.sylius.com).

Installation
------------

Use Docker if you want to use this repository

```bash
$ git clone
$ docker-compose up -d
$ docker-compose exec php bin/console sylius:install
$ symfony serve
$ open http://localhost:8000/
```

For more detailed instruction please visit [installation chapter in our docs](https://docs.sylius.com/en/1.11/getting-started-with-sylius/installation.html).

Troubleshooting
---------------

If something goes wrong, errors & exceptions are logged at the application level:

```bash
$ tail -f var/log/prod.log
$ tail -f var/log/dev.log
```


About
-----

Sylius is the first decoupled eCommerce platform based on [**Symfony**](http://symfony.com) and [**Doctrine**](http://doctrine-project.org).
The highest quality of code, strong testing culture, built-in Agile (BDD) workflow and exceptional flexibility make it the best solution for application tailored to your business requirements.
Enjoy being an eCommerce Developer again!

Powerful REST API allows for easy integrations and creating unique customer experience on any device.

We're using full-stack Behavior-Driven-Development, with [phpspec](http://phpspec.net) and [Behat](http://behat.org)
