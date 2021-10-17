# Lavender Entertainment Website Build V2

A website built for Lavender Entertainment to act as their official website for users to book events. 
All parts included should be working as of the upload of the latest build.

## Development Requirements
Listed below are the software requirements to appropriately develop and deploy the website:
* PHP: Version 7.4.24 or above
* CakePHP Framework : Version 4.2.8 or above
* Integrated Development Environment: PHPStorm/ VSCode or any IDE that lets you code in HTML,PHP and Javascript at the same time.
* Git: Version 2.32.0 or above
* Composer: Version 2.1.6  or above

## Installation

CakePHP and Composer

1. Download [Composer](https://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
2. Run `php composer.phar create-project --prefer-dist cakephp/app [app_name]`.

If Composer is installed globally, run

```bash
composer create-project --prefer-dist cakephp/app
```

In case you want to use a custom app dir name (e.g. `/myapp/`):

```bash
composer create-project --prefer-dist cakephp/app myapp
```

You can now either use your machine's webserver to view the default home page, or start
up the built-in webserver with:

```bash
bin/cake server -p 8765
```
IDE

Any IDE that supports PHP, HTML and Javascript can be used for the development of this website. We recommend PHPStorm since it integrates well with our project.

Visit `http://localhost/[local repository name here]` to see the website on your localhost.

## Update

Since this skeleton is a starting point for your application and various files
would have been modified as per your needs, there isn't a way to provide
automated upgrades, so you have to do any updates manually.

## Configuration

Read and edit the environment specific `config/app_local.php` and setup the 
`'Datasources'` and any other configuration relevant for your application.
Other environment agnostic settings can be changed in `config/app.php`.

## Layout

The Layout has been taken from the Vacation Rental Template by ColorLib which can be found [here](https://colorlib.com/wp/template/vacation-rental/). 

The Admin Dashboard has been built using this [template](https://startbootstrap.com/theme/sb-admin-2).

All the CSS and JS Files included are necessary and have been modified and built upon for this website

## APIs
Paypal and Google Maps API licenses are required for the full functioning of important elements of the website;