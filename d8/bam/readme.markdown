- [BAM - Drupal 8 Developer Preparation](#bam---drupal-8-developer-preparation)
- [About Ajax Error](#about-ajax-error)
- [T1 Intro](#t1-intro)
- [T2 Build a dummy module](#t2-build-a-dummy-module)
  * [Add a Form Alter Hook](#add-a-form-alter-hook)
  * [Add a Controller to add a page manually](#add-a-controller-to-add-a-page-manually)
- [T3 : OOP](#t3---oop)
  * [Procedural Example](#procedural-example)
  * [Oop Examples](#oop-examples)
    + [Extending a Class](#extending-a-class)
    + [Creating an Interface](#creating-an-interface)
    + [Creating an Abstract Class](#creating-an-abstract-class)
  * [Public vs. Private vs. Protected Visibility](#public-vs-private-vs-protected-visibility)
- [T4: Namespacing and Autoloading](#t4--namespacing-and-autoloading)
  * [Conflicts in Naming Classes](#conflicts-in-naming-classes)
  * [Namespaces Example](#namespaces-example)
    + [index.php](#indexphp)
    + [Builder.php defines namespace](#builderphp-defines-namespace)
    + [ContactUsController.php defines namespace](#contactuscontrollerphp-defines-namespace)
    + [Page.php](#pagephp)
      - [DefaultPage.php and PrintedPage.php](#defaultpagephp-and-printedpagephp)
    + [Form.php and Validator.php](#formphp-and-validatorphp)
  * [Autoloading](#autoloading)
    + [Creating an Autoloader](#creating-an-autoloader)
  * [PHP FIG / Drupal 8 and PSR-4 Autoloading](#php-fig---drupal-8-and-psr-4-autoloading)
  * [PSR-0 Example](#psr-0-example)
- [T5: Composer](#t5--composer)
  * [Install](#install)
    + [About JSON](#about-json)
  * [Using composer](#using-composer)
  * [Drupal 8 and composer](#drupal-8-and-composer)
- [T6: Symfony](#t6--symfony)
  * [Create your own PHP Framework](#create-your-own-php-framework)
    + [Index.php without symfony](#indexphp-without-symfony)
    + [Http Foundation Component](#http-foundation-component)
      - [Request Examples](#request-examples)
      - [Response Examples](#response-examples)
      - [Creating an init file](#creating-an-init-file)
      - [Creating a Front Controller](#creating-a-front-controller)
      - [Converting our pages to php templates](#converting-our-pages-to-php-templates)
      - [Using Variables in php templates](#using-variables-in-php-templates)
    + [Routing Component](#routing-component)
      - [Adding a Render Template Controller](#adding-a-render-template-controller)
    + [Http Kernel Controller](#http-kernel-controller)
    + [Creating our Framework](#creating-our-framework)
      - [Model and Controller class](#model-and-controller-class)
- [T7 (Extra): Unit Testing](#t7--extra---unit-testing)
  * [Introduction](#introduction)
  * [Dependency Injection (DI)](#dependency-injection--di-)
  * [About our Test class](#about-our-test-class)
  * [About what can be tested](#about-what-can-be-tested)
- [T7 Symfony (part 2)](#t7-symfony--part-2-)
  * [Observer Pattern / Event Dispatcher](#observer-pattern---event-dispatcher)
    + [Adding Event Dispatcher to our Framework](#adding-event-dispatcher-to-our-framework)
    + [Adding a Second Listener with low priority](#adding-a-second-listener-with-low-priority)
  * [Adding a Event Subscriber](#adding-a-event-subscriber)
  * [Adding Caching (aka Reverse Proxy)](#adding-caching--aka-reverse-proxy-)
  * [Http Kernel Component](#http-kernel-component)
    + [Adding Error Reporting](#adding-error-reporting)
  * [Add a Response Listener](#add-a-response-listener)
  * [Dependency Injection Container Component / Singleton Pattern](#dependency-injection-container-component---singleton-pattern)
    + [Creating Global Variables with Dependency Injection Store](#creating-global-variables-with-dependency-injection-store)
- [T8 - Phpstorm](#t8---phpstorm)
- [T9 - YAML Files](#t9---yaml-files)
  * [YAML File for Routes](#yaml-file-for-routes)
    + [Importing / Parsing Yaml Files](#importing---parsing-yaml-files)
  * [Parsing generic YAML File as an Array](#parsing-generic-yaml-file-as-an-array)
  * [YAML File for DI's](#yaml-file-for-di-s)
- [T10 Dependency Injection Container in Drupal 8](#t10-dependency-injection-container-in-drupal-8)
- [T11 Symfony Components in Drupal 8](#t11-Symfony-Components-in-Drupal-8)
  * [Introduction](#introduction-1)
    + [About Hook Menu](#about-hook-menu)
    + [About PSR-4](#about-psr-4)
  * [Adding a Page](#adding-a-page)
  * [Using a Service from inside our Controller](#using-a-service-from-inside-our-controller)
    + [Finding Services for DI's](#finding-services-for-di-s)
  * [Creating a Service inside our module](#creating-a-service-inside-our-module)
    + [Calling our service](#calling-our-service)
  * [Events and Subscribers](#events-and-subscribers)
    + [Searching for Subscribers in Drupal's Codebase](#searching-for-subscribers-in-drupal-s-codebase)
    + [Creating a Subscriber Class](#creating-a-subscriber-class)
- [T12 Symfony Components in Drupal 8 - Part 2](#t12-symfony-components-in-drupal-8---part-2)
  * [Get route in our Subscriber](#get-route-in-our-subscriber)
  * [About {@inheritdoc}](#about---inheritdoc-)
  * [Creating a Redirect using an request event](#creating-a-redirect-using-an-request-event)
    + [Creating our custom event](#creating-our-custom-event)
      - [Creating our event using the Generic Event Class from Symfony](#creating-our-event-using-the-generic-event-class-from-symfony)
      - [Subscribe to our custom event](#subscribe-to-our-custom-event)
      - [Creating our event using an Event Class](#creating-our-event-using-an-event-class)
  * [Overriding Services](#overriding-services)
  * [Subrequest (Using the Http Kernel component)](#subrequest--using-the-http-kernel-component-)
- [T13 Upgrading / Migrationg from D7 to D8](#t13-upgrading---migrationg-from-d7-to-d8)
  * [About Knowledge](#about-knowledge)
  * [Our Example module](#our-example-module)
  * [Converting our D7 module to D8](#converting-our-d7-module-to-d8)
  * [Good Documentation](#good-documentation)
    + [Step 1: Info File](#step-1--info-file)
    + [Step 2: Finding a Example: Block Plugin](#step-2--finding-a-example--block-plugin)
  * [About Annotations](#about-annotations)
  * [Plugins in Drupal](#plugins-in-drupal)
  * [Creating a Block Plugin](#creating-a-block-plugin)
    + [Moving our hook init code to a subscriber](#moving-our-hook-init-code-to-a-subscriber)
    + [About D7 variable_get()](#about-d7-variable-get--)
    + [About Drupal get title](#about-drupal-get-title)
    + [Upgrading $_GET['q']](#upgrading---get--q--)
    + [Upgrading hook_block_view()](#upgrading-hook-block-view--)
    + [Upgrading format_interval()](#upgrading-format-interval--)
  * [Configuration Form](#configuration-form)
    + [Module configuration form](#module-configuration-form)
    + [Default Config Values](#default-config-values)
      - [Creating a Default config file](#creating-a-default-config-file)
      - [Submit Form](#submit-form)
    + [Add Config Page](#add-config-page)
    + [implement the method getEditableConfigNames](#implement-the-method-geteditableconfignames)
    + [Test the configuration](#test-the-configuration)
  * [Registering a Menu Link](#registering-a-menu-link)
  * [Registering a link in the module listing page](#registering-a-link-in-the-module-listing-page)
  * [Using a Block Configuration in our Block](#using-a-block-configuration-in-our-block)
  * [Saving a Block Instance](#saving-a-block-instance)
    + [Using the configuration from the Block Instance](#using-the-configuration-from-the-block-instance)
  * [Clean up the module](#clean-up-the-module)
    + [Updating Permissions](#updating-permissions)
    + [Updating Hook Help](#updating-hook-help)
  * [About hook cron](#about-hook-cron)
- [T14 Twig](#t14-twig)
  * [Introduction](#introduction-2)
  * [Drupal Twig Coding Standards](#drupal-twig-coding-standards)
  * [Creation of the Template file](#creation-of-the-template-file)
  * [Registering our twig file with hook theme](#registering-our-twig-file-with-hook-theme)
  * [Using our template file](#using-our-template-file)
  * [About Twig debug and auto-reload](#about-twig-debug-and-auto-reload)
  * [Drupal t Translate function](#drupal-t-translate-function)
    + [Drupal t Translate function with substitutions:](#drupal-t-translate-function-with-substitutions-)
  * [Pass Variables to Twig](#pass-variables-to-twig)
      - [Debug available variables](#debug-available-variables)
  * [Twig Loops](#twig-loops)

<small><i><a href='http://ecotrust-canada.github.io/markdown-toc/'>Table of contents generated with markdown-toc</a></i></small>

# BAM - Drupal 8 Developer Preparation

# About Ajax Error

To debug an Ajax error just do the following:
 - open inspector > network
 - click the link that is not working
 - open the js > preview: You will see the error =)
 
# T1 Intro

We will cover:
 - Build a simple module
 - OOP
 - Namespacing
 - Autoloading
 - Symfony integration
 - Controllers
 - Composer
 - Custom Code
 - Migrate Modules (Upgrading from D7 to D8)
 - Unit and functional testing
 - Plugins
 
# T2 Build a dummy module

Example: `01-glue`

In D8 to enable a module you need only one file:
 - *.info.yml file

## Add a Form Alter Hook

Example: `02-glue`. This example adds a alter hook to the *.module file.

Usually Hooks will be added to the module file.  

## Add a Controller to add a page manually

Example: `03-glue-controller`

 - Drupal uses PSR-4 so we need: 
   - `/src/Controller/mycontroller.php`: It will have a method that prints the markup. We could also return other type of data like JSON, XML, etc.
   - `routing.yml`: It defines our link and the method that will handle that url.

We can add a Controller using the *Drupal Console*. It will add the following files
```
 modules/glue/src/Controller/MyController.php
 modules/glue/glue.routing.yml
```

Now, if you go to `glue/hello/hola` it will print `hola`.

# T3 : OOP

## Procedural Example 

Example: `04-procedural-form`

We begin to implement a form that is procedural (no oop).
If we look at it, we see that our page and form could be objects.


## Oop Examples

Example: `05-oop-simple-form`

Tips: 
 - Be Agile (adaptable code) but
   - Only create new Object Types when you need them!
   - DRY: Do not repeat yourself!

### Extending a Class

Example: `06-oop-extending-a-class`
Test Url: http://my-drupal.loc/example/?print=1

We add the class `PrintedPage` that extends the Page class so that it inheritances all its functions and properties.

Now inside the *ContactUsController* we check if the `print` variable is set.


### Creating an Interface

Example: `07-oop-interface`

We add the interface named Page with its
    function build();
    function theme();

and now our *DefaultPage* and *PrintedPage* classes implement the Page interface requiring them to define those functions.

### Creating an Abstract Class

Example: `08-oop-abstract`

We define an abstract class named Page. It also has defined an abstract function named theme (that must be implented if we extend the Page class)
Being abstract means that the class Page can't be used if not being extended.

Tips:
 - Caution with using abstract classes: It really can consume more horse power.
 - Build your app as if it was an public api.
 
## Public vs. Private vs. Protected Visibility

Example: `09-oop-public-api`

Type of visibility:

 - PUBLIC: The Form class has public properties, so they can be used inside of the Form class or classes that extend the class.
 - PROTECTED: The properties can't be accessed from instances of the class.
 - PRIVATE: The properties can't be accessed from instances nor from classes that extend the class.
   As an example we have the validate and submit functions inside the Form class set to private because we do not need to call that class from outside of the class.

Tips: 
 - Each Class should go to its own File!
 - Each class File will be named as its containing class. If not possible you will need to use *namespacing*.
 - Make your properties not to public.
 - In the future you can always make them visible if needed (it's easier like that)

Note:
 - `__DIR__` points to the current directory.


# T4: Namespacing and Autoloading

## Conflicts in Naming Classes

Example: `09-name-conflict`

In Form we declare:

````
require_once __DIR__ . '/Validator.php';
require_once __DIR__ . '/ThirdPartyValidator.php';
````

The problem is that both classes use the same "Validator" Class, so when executing index.php this error will occur:

```
Fatal error: Cannot declare class Validator, because the name is already in use in 
/shared/httpd/my-drupal/web/example/lib/ThirdPartyValidator.php on line 3
```

Solution: Use **namespaces**

## Namespaces Example

Example: `11-namespaces`

Namespaces are like virtual directories.
When you define a namespace it is like defining a virtual directory.
When you want to use a namespace you will use the *use* statement.

### index.php

We tell to use *Builder* and *ContactUsController* Classes from the `BAM\OOPExampleSite` namespace.

```
use BAM\OOPExampleSite\Builder;
use BAM\OOPExampleSite\ContactUsController;
```

### Builder.php defines namespace

```
namespace BAM\OOPExampleSite;
```

### ContactUsController.php defines namespace

We define the same namespace as for Builder.php.

But we tell to use *PrintedPage* and *DefaultPage* 
from the `BAM\OOPExampleSite\Page` namespaces.

```
namespace BAM\OOPExampleSite;

use BAM\OOPExampleSite\Page\PrintedPage;
use BAM\OOPExampleSite\Page\DefaultPage;
```

### Page.php

```
namespace BAM\OOPExampleSite;
```

#### DefaultPage.php and PrintedPage.php

We define a special subdirectory namespace.
But we also tell to use the `BAM\OOPExampleSite\Page` class to be able to extend the Page Class.
 


```
namespace BAM\OOPExampleSite\Page;
use BAM\OOPExampleSite\Page;

class DefaultPage extends Page {...}
class PrintedPage extends Page {...}
```

### Form.php and Validator.php

They both use

```
namespace BAM\OOPExampleSite;
```

So the classes that they define belong to this namespaces.

When calling the Validator class from Form.php the Validator.php class will be used.

If we wanted to use the other validator we would use (It takes always the last Class defined).

```
use ThirdParty\Utilities\Validator;
```

If we want to use both Validators we could define
```
use ThirdParty\Utilities\Validator as OtherValidator;
```

Keeping in mind that the third party validator has this namespace defined:

```
namespace ThirdParty\Utilities;
```

To call the Validators you can use one of the following

```
// Using Full qualified names
\ThirdParty\Utilities\Validator::notEmpty($value);

// Using Aliases
OtherValidator::notEmpty($value);

// Using Use Statements
Validator::notEmpty($value);
```

## Autoloading

Instead of using *require* and *use* statements 
it would be great to just use the *use* statements 
so that the classes get auto-loaded.

### Creating an Autoloader

Example: `12-autoloader`


We add the following to our index.php

```
function my_autoloader($namespace)
{
  $namespace_array = explode("\\", $namespace);
  $class = end($namespace_array);
  $file_location = __DIR__ . '/lib/' . $class . '.php';
  include $file_location;
}

spl_autoload_register('my_autoloader');

```

This will be executed every time we execute a Class for the first time.
It is NOT a good idea to use your own autoloader.
You should use an third party autoloader.
Drupal uses caching for autoloading classes.

## PHP FIG / Drupal 8 and PSR-4 Autoloading

https://www.php-fig.org/

Standards to structure your PHP Application

PSR stands for PHP Standard Recommendation.

PSR-4 is for autoloading

Drupal 8 uses PSR-4

https://www.php-fig.org/psr/psr-4/

https://www.drupal.org/docs/develop/standards/psr-4-namespaces-and-autoloading-in-drupal-8 

So in Drupal our modules will have the following structure:
modules/$modulename/src/ 
with the following namespace 
Drupal\$modulename\

https://buildamodule.com/video/drupal-8-developer-prep-working-with-symfony-components-in-drupal-8-part-1-using-and-creating-services-why-hook-menu-was-removed-and-why-drupal-switched-to-psr-4-autoloading

## PSR-0 Example

Example: `13-PSR-0-Example`

This shows how to use our example with PSR-0 Autoloading (Drupal uses PSR-4 so it would have more simple directory structure)

# T5: Composer

 - Has autoloader out of the box
 - Can download packages from [packagist](https://packagist.org/)
   - Have a look at all the packages available. 
   - **It's amazing!** how you can integrate those packaged to your PHP Application.
 - It uses Semantic Versioning for version numbers. More info at [semver](https://semver.org/)
 
## Install

Example: `14-composer`

We put in our examples folder a `composer.json` file

and run `composer install`

packages will be automatically downloaded to the `vendor` directory and a `composer.lock` file will be generated.

### About JSON


JSON is JavaScript Object Notation: It basically stores information in JS Array Notation.

## Using composer

Example: `15-composer-use`

Once we have downloaded all the packages we can use them from our Php Application (index.php). We just:
 - Require our autoloader from composer.
 - Use our downloaded package using the *use* statement.

```
$loader = require 'vendor/autoload.php';

use Doctrine\Common\Inflector\Inflector;

$singular = 'mouse';
$plural = Inflector::pluralize($singular);

print 'The plural of ' . $singular . '  is ' . $plural . '. Squeek(s)!';
```

## Drupal 8 and composer

Drupal 8 uses composer in a similar way as we have seen in the previous example.

It has a composer.json file with the required packages and an autolaoad future

# T6: Symfony

Fabien Potencier created a nice tutorial called [Create your own framework... on top of the Symfony2 Components](http://fabien.potencier.org/create-your-own-framework-on-top-of-the-symfony2-components-part-1.html)
Updated Tutorial can be found at [symfony.com/doc/current/create_framework](https://symfony.com/doc/current/create_framework/index.html)

We will just progress through the original (obsolete) tutorial.

## Create your own PHP Framework

### Index.php without symfony

Example: `16-vanilla-php`

http://my-drupal.loc/example/?name=Pierre

We have to take care of
  - undefined name variable
  - js that could be injected
  - define character encoding
 
 
### Http Foundation Component

The first component that we will import is the Http Foundation Component. 
We will add a composer.json to require that component and install it with composer.
It will download more than 100 files in the `vendor` directory!

We will use 2 classes from this component:
 - Request.php
 - Response.php

```
Symfony Diagram:
REQUEST ----> Process Data ----> RESPONSE
```

Notes: 
 - You can output how you want the Response class (HTML, XML, JSON, etc.)
 - Using Http Foundation gives you access to Global Variables in a secure way

#### Request Examples

```
// Simulate a request:
$request = Request::create('/index.php?name=Fabien');

// The URI being requested
print $request->getPathInfo();
 
// Retrieve GET variables respectively
print $request->query->get('name');
print $request->query->get('name', 'Universe');
 
// Retrieve SERVER variables
print $request->server->get('HTTP_HOST');
 
// Retrieve an HTTP request header, with normalized, lowercase keys
print $request->headers->get('host');
 
print $request->getMethod(); // GET, POST, PUT, DELETE, HEAD
var_dump($request->getLanguages()); // An array of languages the client accepts


// Example with getting a client IP address to as a security check:
$request->getClientIp();


```

#### Response Examples

``` 
$response = new Response();
 
$response->setContent('Hello again, world, it is ' . time() . '!');
$response->setStatusCode(404);
$response->headers->set('Content-Type', 'text/plain');// Renders the page as text, not as html
 
// configure the HTTP cache headers
$response->setMaxAge(10);
```

#### Creating an init file

Example: `18-symfony-init-file`
http://my-drupal.loc/example/index.php
http://my-drupal.loc/example/bye.php

We create a init file that creates the Request and Response classes.
Now we have 2 pages that uses that init file.

#### Creating a Front Controller

Example: `19-symfony-front-controller`

We want to route all request to one file. 
We will add an .htaccess that redirects all traffic to front.php

In that file we define the `/hello` and `/bye` routes.

Now `hello.php` and `bye.php` just define a response class, 
they do not require the `init.php` nor do they need to send the response.

#### Converting our pages to php templates

Example: `20-symfony-php-templates`

Now we use in the front.php the following code that turn on the output buffer from standard php:

```
ob_start();
include $map[$path];
$response->setContent(ob_get_clean());
```

In the pages we just use php when we need to access to variables.
Later on we will use twig, so that we do not need to use php templates anymore.

#### Using Variables in php templates

Example: `21-symfony-php-variables`

To use variables in php templates we can use the *extract* function.
We extract the variables from our front.php and use them in the hello.php page.

If $name is not defined it will still give us some error.
To test this go to http://example.loc/hello?name=world

### Routing Component

Example: `22-symfony-routing-component`

Our routing code in *front.php* is very rudimentary. 
Let's use the symfony routing component for that.

We will import it updating our composer.json file.

To do that we run `composer update` instead of `composer install`.

We move our routing to a separate file called `app.php`.
Now we need to `use Symfony\Component\Routing;` in app.php and front.php.

We now use a matcher class to match routes.
We also have added some examples howto generate URL's.

#### Adding a Render Template Controller

Example: `23-symfony-render-template-controller`

Now we add an controller to the front.php class.
We also need to pass that controller name in our app.php class.

It uses Closures/Anonymous functions (in JS it is called callback).

As an example we will add a new route called `/is_leap_year/{year}`

### Http Kernel Controller

Example: `24-symfony-http-kernel-component`

At our app.php we instantiate for every route a new controller. 
Let's improve that with the Http Kernel Controller Component (it is not only a controller resolver).

We add the $resolver and $controller to our front.php class.


### Creating our Framework

Example: `25-symfony-framework`

We create a new Framework called Simplex. 
It will be at /src/Simplex/Framework.php.

Now we pass our $matcher and $resolver to our framework.

Now our code is easier to understand :)

We also add our Framework to composer to be autoloaded (using PSR-0 (keep in mind that D8 uses PSR-4))

````
"autoload": {
  "psr-0": { "Simplex": "src/" }
}
````

As usual you need to run composer update to make this happen.


#### Model and Controller class

Example: `26-calendar-namnespace`

We improve app.php so that it uses an independent controller class.

We create the `calendar` namespace with 2 classes:
 - LeapYear (Model Class)
 - LeapYearController (Controller Class): This will use the Model Class.
 
We also update our composer.json so that the new package is PSR-0 compatible

# T7 (Extra): Unit Testing

Example: `27-phpunit`

## Introduction

We will use *PHP unit* to test our classes.

Common types of testing:
 - Unit Testing
 - Functional Testing:
   - For Drupal we do it in the Browser usually with *Simple Test* or *[Behat](https://blog.eleven-labs.com/en/behat-structure-functional-tests/)*
   - For JS we can use Selenium
 - Regression Testing: Makes sure that a bug does not come back (you would test this using unit or functional testing).
 

To test our Application we will have:
 - Test files at  `/src/Simplex/Tests`
 - One Test configuration file at `/phpunit.xml`

To test our application just run `phpunit` from `/`

The tricky part is `getMockBuilder` that will get an interface to know the methods that can be tested.

After having instances of $matcher and $resolver using the getMockBuilder we use DI to create an instance of our Framework.

## Dependency Injection (DI)

We have created instances of $matcher and $resolver from outside of our code. That is DI!!!
We are passing *mock objects*.

Right now when calling our Framework from our Test class we get an error because we created mock objects instead of *UrlMatcher* and *ControllerResolver* classes respectively.

So we need to *type-hint* our mock classes!!!

To do so we just need to change our Framework to use the UrlMatcherInterface and ContollerResolverInterface instead of the previous ones.

This can be done do because the previous classes extend the Inter;

## About our Test class

 - any method that begins with test* will be run as a test.
 
## About what can be tested

[Manual](https://phpunit.de/manual/6.5/en/writing-tests-for-phpunit.html)
[Assertions](https://phpunit.de/manual/6.5/en/appendixes.assertions.html)


# T7 Symfony (part 2)

## Observer Pattern / Event Dispatcher

Example: `28-symfony-event-dispatcher-component`

In Drupal we can use hooks to enhance functionality (This is using an Observer Pattern).
In Symfony this is called the *Event Dispatcher* and we can import adding the component to our composer.json.

### Adding Event Dispatcher to our Framework

First we add the following to our Framework.php file:

 - We add an Event Dispatcher to our /src/Simplex/Framework.php file.
 - Now we pass a $dispatcher in the constructor. This is DI!!! We do type-hinting!!!
 - Now we use a $response variable inside our code (before we just returned it)
 - We dispatch the $response object (so that other parts of the application can use it) and after that we return it (like before)
 
Second we add a new class `src/Simplex/ResponseEvent.php`.
 - It is just a wrapper for $response and $request
 - Extend from Event
 - The constructor takes $response and $request
 - It has getters for the $request and $request
 - This class is used from Framework.php when dispatching the event (named 'response').
 
   ```
   $this->dispatcher->dispatch('response', new ResponseEvent($response, $request));
   ```

Third we add the following to our front.php file
 - add dispatcher EventDispatcher
 - add listener (the one from ResponseEvent.php). It has the same name: 'response'. It uses an callback function for the $event.
 - get the $response from ResponseEvent.php
 - after that we have some example code: If it is a valid page we add the Google Analytics code.
 - we also add the end pass the dispatcher when instantiating our framework.
 
### Adding a Second Listener with low priority

Example: `29-second-listener`

We add a second listener at front.php

```
$dispatcher->addListener('response', (...) , -255);
```

We put all in separate classes so we do not need anymore to use callback functions.


## Adding a Event Subscriber

Example: `30-event-subscriber`

A Event Subscriber will have various Event Listeners attached to it.
Now the priority will be attached directly to the Event Listener.

We change `addListener` to `addSubscriber` in our front.php file.

Now our Event Listeners will implement `EventSubsciberInterface` (this will help to test the class providing special methods).
The interface will provide the `getSubscribedEvents`, that will return all the subscribed events.

## Adding Caching (aka Reverse Proxy)

Example: `31-cache`

We add a HttpCache object to our front.php file.
We implement HttpKernelInterface in our Framework.php file.

We enable caching in our LeapYearController adding
```
$response->setTtl(10);//set time to live
```

## Http Kernel Component

Example: `32-http-kernel-component`

Now we will use Http kernel Component in our Framework.php file.
This makes the file super simple because the Http kernel component has already the constructor and the handler for the $response and $request classes.

At front.php we call the framework, but because we want to use our $matcher and Http Kernel component does not have a way to pass it, we inject that using DI:

```
$dispatcher->addSubscriber(new HttpKernel\EventListener\RouterListener($matcher));
```

### Adding Error Reporting

Example: `33-error-reporting`

We add error reporting to our front.php file

```
$dispatcher->addSubscriber(new HttpKernel\EventListener\ExceptionListener($errorHandler));
```

Other examples would be

```
// Example of adding a listener that will run Response::prepare() before the response is sent:
$dispatcher->addSubscriber(new HttpKernel\EventListener\ResponseListener('UTF-8'));

// Example of adding support for a streamed response:
$dispatcher->addSubscriber(new HttpKernel\EventListener\StreamedResponseListener());

```

We add a throw exception in our LeapYearController to test this functionality (if you enter a negative Year it will give an error)

## Add a Response Listener

Example: `34-response-listener`

Now we will return strings, and there will be a Listener to see if that string already exists.

 - *LeapYearController* returns strings now.
 - We create our StringResponseListener class that implements the EventSubscriberInterface with
  - onView() method
  - getSubscribedEvents()
 - Framework.php will add that new subscriber
 
   ```
   $dispatcher->addSubscriber(new StringResponseListener());
   ```
 
## Dependency Injection Container Component / Singleton Pattern

Example: `35-symfony-dependency-injection-component` 

We add the dependency to our composer.json file
We add the file /src/container.php and register our Framwork class using:
```
$sc->register('framework', 'Simplex\Framework')
  ->setArguments(array(new Reference('dispatcher'), new Reference('resolver')))
```
where dispatcher and resolver are also DI's.

We add DI to front.php: We instantiate using the Singleton pattern (only one instance can be used)
```
$response = $sc->get('framework')->handle($request);
```

Tips (to understand our Container class)
 - *new reference* allows to create new DI's
 - *->addMethodCall* allows to run methods at the time of instantiation of an object.
 

**Important:**
 - Never use DI inside an Class. Always use DI to instantiate a class but not the other way.
 - Remember: Containers are used outside a class, never within them!
 

### Creating Global Variables with Dependency Injection Store


In container.php we use *->setParameter* and *%name-of-variable%* to use global variables.

# T8 - Phpstorm 

- `Ctr + Shift + N` : Find Files
- `Ctr + Shift + F` or `Shift + Shift`: Search in Files 

# T9 - YAML Files

 - YAML is Language independent
 - Separation of concerns:
    - Backend vs. 
    - Configuration vs. 
    - Frontend
 
## YAML File for Routes

Example: `36-routes-yaml`

To be able to use yaml configuration files you would import the following with the composer.json file

```
    "symfony/yaml": "2.4.*",
    "symfony/config": "2.4.*"
```


For Routes we were using this code:

```
$routes->add('leap_year', new Routing\Route('/is_leap_year/{year}', array(
  'year' => null,
  '_controller' => 'Calendar\\Controller\\LeapYearController::indexAction',
)));
```

### Importing / Parsing Yaml Files

As a example we will parse our routes yaml file

```
$locator = new FileLocator(__DIR__);
$loader = new YamlFileLoader($locator);
$routes = $loader->load('routes.yml');
$sc->setParameter('routes', $routes);
```

When using yaml files it will look like this:

```
leap_year:
  path:     /is_leap_year/{year}
  defaults: {'year': null, _controller: 'Calendar\Controller\LeapYearController::indexAction' }
```

 
## Parsing generic YAML File as an Array

Example: `37-yaml-syntax`

In this example `/src/cointainer.php` parses the `yaml-syntax.yml` file

```
$var = Yaml::parse(__DIR__ . '/yaml-syntax.yml'); // Generic processing
var_dump($var);
die();
```

## YAML File for DI's

Example: `38-yaml-services`

Original File: `/src/original-container.php` (that was creating the DI's)
New File: `/src/services.yml` (configures the DI's)
New File: `/src/container.php` (that uses the services.yml file)

Now to load our DI's we just do:

```
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader as DICLoader;
(...)
$loader = new DICLoader($sc, $locator);
$loader->load('services.yml');
```


# T10 Dependency Injection Container in Drupal 8

 - The DI Container in D8 is it's Backbone:
   - Listeners / Subscribers
   - Event Dispatchers
   - Request / Response
   - Http Kernel
   - Contollers 

In Drupal the services.yml files are (usually) prefixed with the module name (Please Have a nice search in Drupal Core)

The backbone of the backbone of this is the following file: `/core/core.services.yml`

Example:

```
  cache_factory:
    class: Drupal\Core\Cache\CacheFactory
    arguments: ['@settings', '%cache_default_bin_backends%']
    calls:
      - [setContainer, ['@service_container']]
```

Where:
 - @settings is an other reference to a service called settings (because of the `@` symbol)

To search for services in the codebase you can search for `\Drupal::service(`

If you are curious you will see that the method is in the Drupal.php class

```
  public static function service($id) {
    return static::getContainer()->get($id);
  }
```


# T11 Symfony Components in Drupal 8

We will create a new module called `blindd8`

## Introduction

### About Hook Menu

In D8 we do not have hook menu. Now we have:
 - routing.yml
 - menu_links.yml
 
### About PSR-4

Search in the code base `psr-4`

You will see autoload configurations to /src in composer.json files.
The magic happens in `DrupalKernel.php` inside the `protected function getModuleNamespacesPsr4($module_file_names) {(...)}`

## Adding a Page

Example: `39-blindd8`

As we did with our glue example we will create:

   - `/src/Controller/mycontroller.php`: It will have a method that prints the markup. We could also return other type of data like JSON, XML, etc.
   - `routing.yml`: It defines our link and the method that will handle that url.

We can add a Controller using the *Drupal Console*. 
It will add the following files:
```
/src/Controller/MyController.php
*.routing.yml
```

Now, if you go to `my-route` it will print `hola` (thanks to PSR-4 Autoloading).

## Using a Service from inside our Controller

Example: `39-blindd8`

Can be tested at `http://my-drupal.loc/blindd8/my-string`

We will add DI to a service from within our `MyController` class.

We use: `\Drupal::currentUser()` that is another way of using `\Drupal::service('current_user');` 

You can see the service and the controller class:
```
/src/Controller/MyController.php
*.routing.yml
```

### Finding Services for DI's

Just search for services defined in `$module.services.yml` files.

## Creating a Service inside our module

Example: `39-blindd8`

Can be tested at `http://my-drupal.loc/blindd8`

We can use Drupal Console for that.

Once generated it will have created the following files:

 1 - modules/blindd8/blindd8.services.yml
 2 - modules/blindd8/src/DefaultService.php
 
 We also create a method called `tag` in our Service file.

### Calling our service

Example: `39-blindd8`

Can be tested at `http://my-drupal.loc/blindd8tag/`

We will call our service from our controller class from a new method called `tag`

```
        $myservice = \Drupal::service('blindd8.default');
        $tagline = $myservice->getTagline();
```

## Events and Subscribers

We will create now an Event and a listener to that event.

We will register for some kind of Event, and when that Event is triggered a particular method of our class will be triggered (this is similar to hooks).

### Searching for Subscribers in Drupal's Codebase

Just search for `Subscriber` in the codebase and you should find the namespace `\Drupal\Core\EventSubscriber`

You will find a method called `getSubscribedEvents(` that uses a type of Event.

These types of events are defined at `KernelEvents.php`

### Creating a Subscriber Class

Example: `40-subscribe-event`

We generate a Subscriber with the Drupal Console running 
`drupal generate:event:subscriber`. 


It will add the service on the following file:

```
 /blindd8.services.yml
```

It will generate the following files:

```
 /src/EventSubscriber/Subscriber.php
```
We will name our service `blindd8.default` in `blindd8.service.yml` file using a event tag of type *event_subscriber*.
We will use an Event of type  `kernel.response`. We subscribe to that event using

```
  static function getSubscribedEvents() {
    $events['kernel.response'] = ['kernel_response'];
    return $events;
  }
```

Now we add the following code in the response:

```
$response = $event->getResponse();
$response->setContent('Blind date, get it?!');
$response->setStatusCode('404');
```

Now we will always have a Error 404 when visiting our drupal site.

Tip:
 - To see the methods of $event just put a breakpoint in the previous code.

# T12 Symfony Components in Drupal 8 - Part 2

## Get route in our Subscriber

Example: `40-subscribe-event`

Right now our Subscriber will be executed for all response events. 
We do not want that. We can add an if statement to improve our code.
There we will add the name of the rout. We could add names that we have defined at our yml file.
We will just use system.404 route, that is the route for 404 errors.

```
        if ($route == 'system.404') {...}
```



## About {@inheritdoc}

For overwritten methods we can use the `{@inheritdoc}`.
In Phpstorm these methods have a green round icon with an Up Arrow.

Example:

```
/**
 * {@inheritdoc}
 */
static function getSubscribedEvents() {
  $events['kernel.response'] = ['kernel_response'];
  return $events;
}
```

## Creating a Redirect using an request event

Example:`40-subscribe-event` 

path: `http://my-drupal.loc/blindd8redirect` will redirect to `/`.

We add an request event in our Subscriber.php class.

If we want to see more examples just search for `RedirectResponse` in the code base.

Important: 
 - You will need to use the `GetResponseEvent` in the method that will be called. 
 - Also a object of type Symfony\Component\HttpFoundation\RedirectResponse.

Please have a look at this blog post [Automatic Redirect by Path in Drupal 8](http://agileadam.com/2017/08/automatic-redirect-by-path-in-drupal-8/) for more examples.


### Creating our custom event

#### Creating our event using the Generic Event Class from Symfony

Example:`41-dispatch-event` 
path: `http://my-drupal.loc/blindd8event`
Class: MyController.php
Method: genericEvent()

We will register our event in the *event dispatcher* using:
`\Drupal::service('event_dispatcher')->dispatch('blindd8.notable_event', $event);`

#### Subscribe to our custom event

Example:`42-subscribe-event` 
path: `http://my-drupal.loc/blindd8event`

We add in our getSubscribedEvents in our Subscriber class to the new created event 

```
$events['blindd8.notable_event'][] = array('onNotableEvent');
```

#### Creating our event using an Event Class

Example: `43-event-class`
path: `http://my-drupal.loc/blindd8event`

Good Example for Boilerplate code is `ConfigCollectionInfo` that extends the Event Class.

We need two methods: setString and getString in our `BlindD8NotableEvent.php` class.
We update the code to use that class.

## Overriding Services

You can find examples searching for `extends ServiceProviderBase`

Example: `44-override-service`
path: '/blindd8tag'

`DefaultService2.php` overrides `DefaultService.php`

The overriding is done in the `BlindD8ServiceProvider`
 
Keep in mind that an interface that will be overriden should use a Interface, so that we do not need to copy / paste the class into a new file.

## Subrequest (Using the Http Kernel component)

Example: `45-subrequest`
path: '/blindd8subrequest'

Usually you will not use this component directly, only Drupal Core uses it.

But you can use the Http Kernel to do sub-requests.

In the example `45-subrequest` you will see an admin page embedded in our page.

# T13 Upgrading / Migrationg from D7 to D8

## About Knowledge

3 types of knowledge:
 - how Drupal works (taxonomies, etc.)
 - how symfony works (Services, etc.)
 - how D8 works (Plugins, configurations, etc.)
 
## Our Example module

Example: `46-d7-trails-module`
Name: trails

The modules is a block that shows the pages visitited by a user. Features:
 - You can select the number of items to show (using a dropbox)
 - You can limit the number of items to show in the dropbox 
 
Expanation of the code:
 - we have a hook init that when reloading the page adds an item to the arrays block
 - we have 2 permissions:
   - admin trails
   - access trails blocks
 - we have a hook menu where we define new pages 
 - hook help
 - hook block info
 - hook block configure
 - hook block save
 - hook block view
 - hook cron
 
## Converting our D7 module to D8 

We just copy our Drupal 7 module to our Drupal 8 /modules path and see what happens. 
As soon as an error happens we will fix it.

The first think we try is to install the module (we need an info.yml file).

## Good Documentation
 
 - Drupal Core
 - Drupal Contributed Modules
 - [Drupal API](https://www.drupal.org/docs/8/api). In our example we will work with block so your would need to understand the [block API](https://api.drupal.org/api/drupal/core%21modules%21block%21block.api.php/group/block_api/8.6.x)
 - [Drupal Change Records](https://www.drupal.org/list-changes/drupal). Search in Branch 8.x
 - [Google](https://www.google.com/search?q=upgrade+drupal+7+module++to++8)
 - [Drupal Guide to convert modules](https://www.drupal.org/docs/8/converting-drupal-7-modules-to-drupal-8)

### Step 1: Info File

[Official Documentation](https://www.drupal.org/docs/8/converting-drupal-7-modules-to-drupal-8/step-1-convert-mymoduleinfo-to-mymoduleinfoyml) 
 
### Step 2: Finding a Example: Block Plugin

We could use the "Powered by Drupal" block as an simple example. We'll just search for that string in the codebase (in other cases you would need to narrow down an other string).

We find the "SystemPoweredByBlock.php" that extends from `BlockBase`.

## About Annotations

`Doctrine` parses out the annotations metadata. Example for the Powered by Drupal

```php
/**
 * Provides a 'Powered by Drupal' block.
 *
 * @Block(
 *   id = "system_powered_by_block",
 *   admin_label = @Translation("Powered by Drupal")
 * )
 */
class SystemPoweredByBlock extends BlockBase { (...) } 
```

## Plugins in Drupal

In D8 at the very top we have Plugins (`Drupal\system\Plugin\`) and then under that we have Blocks (`Drupal\system\Plugin\Block`).

Our Powered By Drupal is a Block Plug

All Plugins use annotations metadata to provide data.

Keep in mind that "SystemPoweredByBlock.php" is able to create infinite number of blocks of that type (instances).


## Creating a Block Plugin

We do the following (we could also use the Drupal Console):

 - Create the /src/Plugin/Block folder.
 - Copy the Powered by Drupal Block to our module.
 - We will rename that file <module><type-of-block>Block.php, in our case : `TrailsHistoryBlock`

Now we just clear our caches and add the block from the Drupal UI.
 
### Moving our hook init code to a subscriber

We will use our example from trails (example `40-subscribe-event`).

So we do the following:
 - Create a request method at `/src/EventSubscriber/Subscriber.php`
 - Copy the code from hook init to that method.
 - Create services file
 
 
### About D7 variable_get()

variable_get() has been removed from D8. Now we use the [State API](https://www.drupal.org/node/1787278)

Example:

``` 
Drupal 7:

  variable_set('my_data', 'foo');
  $data = variable_get('my_data', array());// array is default value
  variable_del('my_data');
  
Drupal 8: 

  \Drupal::state()->set('my_data', 'foo');
  $data = \Drupal::state()->get('my_data', array());// array is default value
  $data = \Drupal::state()->getMultiple('my_data', 'my_data2');
  \Drupal::state()->delete('my_data');

```

Naming convention: <module-name>.<variable-name>

### About Drupal get title

Now we use

``` 
  $request = \Drupal::request();
  $route_match = \Drupal::routeMatch();
  $title = \Drupal::service('title_resolver')->getTitle($request, $route_match->getRouteObject());
```

### Upgrading $_GET['q'] 

To get the current path we can use:

```
$query = \Drupal::request()->query->get('q');
```

### Upgrading hook_block_view()

Example: `48-trails`

Just insert the code in the build method of your Block Plugin.

### Upgrading format_interval()

https://www.drupal.org/node/2173787


## Configuration Form

Now we need to create the configuration pages for our example.

### Module configuration form

Example: `49-trails-config-form`

We need to adapt trails_menu() defining a route and a menu link.

We can do the following
 - search for a good example (a minimalisitc example in Drupal Core)
 - use the Drupal Console using [generate:form:config](https://hechoendrupal.gitbooks.io/drupal-console/content/en/commands/generate-form-config.html)
 
We will use the first option: search for an existing form. So we will take the form from [Configuration > Image Toolkit](http://my-drupal.loc/admin/config/media/image-toolkit)  

We search in our codebase for "Select an image processing toolkit" and get the following file:
/web/core/modules/system/src/Form/ImageToolkitForm.php

We see that the Form extends from `ConfigFormBase`

We copy that form to our module as /src/Form/SettingsForm.php

We remove unused code until the build_form() method.

Then we copy our old code from the build from to our new build_form() and see what we need.
 - We adapt our old form to the new structure 
 - We adapt deprecated functions (For example [drupal_map_assoc()](https://www.drupal.org/node/2207453))

### Default Config Values

In Drupal 8 we use an other method to store variable configuration.

Example:
      $current_toolkit = $this->config('system.image')->get('toolkit');
      
The value "toolkit" from the "system.image" configuration comes from an configuration yml file:
File Name: system.image

``` 
toolkit: gd
```

So the value is "gd" before installing the module. Once installed we get that value from the DB

#### Creating a Default config file

we create that file in /config/install/trails.settings.yml

#### Submit Form

Now that we have the default value (get) we can do the submit method (set).

### Add Config Page

Now we do the routing.

For an example we can search for files using the file name `ImageToolKit` 
We will find the routing in the `system.routing.yml` file.

So we create a new route for path: 
/admin/config/people/trails


### implement the method getEditableConfigNames 

Don't forget to implement that method!!!

```
protected function getEditableConfigNames() {
    return [
        'trails.settings',
    ];
}
```

### Test the configuration

Once implemented uninstall / install the moodule to see if the default value is working.

## Registering a Menu Link

Example: `50-trails-block-instance-settings`

This is done in the `<module-name>.links.menu.yml` file

We want to show our URL in the /admin/config page

To find how this is done we search in the codebase for a string (For example we search for "Choose which image toolkit")

We see that it is generated in the `system.links.menu.yml` file.

We copy the array of that file and adapt it to our needs to our new `trails.links.menu.yml`
To find the parent route we search for the string "Configure default user account". That link has the correct parent. 

So we will have this content in our `trails.links.menu.yml` file:

```
trails.settings:
  title: 'Trails'
  parent: user.admin_index
  route_name: trails.settings
  description: 'Configure Trails module.'
```

After clearing the caches the link will show in the /admin/config page

## Registering a link in the module listing page

Just add in the `trails.info.yml` file the following route of our module:
```
configure : trails.settings
```


## Using a Block Configuration in our Block

When creating our Block from Block Layout we are not able to configure "max_number". 
To do that we need to create a new method called `buildConfigurationForm()` in the following class:
Class: /src/Plugin/Block/TrailsHistoryBlock

To find an example we search for "buildConfigurationForm("

Also, in Drupal 7 we were using the block_configure hook for that.

So we copy our original code from Drupal 7 to our new buildConfigurationForm() method.

The tricky part is the default value:

```php
'#default_value' => $this->configuration['num_to_show'] ?: 5,
```

The fist time this is run it will not have a default value, that's why we need to assign 5 to it.

Also an other tricky part is to get the value from our settings page. In our Settings Block we would use $this->config but in our Block we would use \Drupal::config:

```php
$max_in_settigns = \Drupal::config('trails.settings')->get('max_in_settings');
```

## Saving a Block Instance

Example: `51-save-block-instance-configuration`

When saving our block it is not saving the value "num_to_show" so it is giving an error of *Notice: Undefined index: num_to_show in Drupal\trails\Plugin\Block\TrailsHistoryBlock->buildConfigurationForm()*.

For that to happen we need the `submitConfigurationForm()` in our Block Instance `/src/Plugin/Block/TrailsHistoryBlock`.
We copy a method from the code base and adapt it to our needs.

### Using the configuration from the Block Instance

For that we modify our build() method.

We are using: `$num_items = \Drupal::state()->get('trails.num_items', 5)`
but we want to use: `$this->configuration['num_to_show'] ?: 5`

## Clean up the module

### Updating Permissions

Example:`53-trails-clean-up`

We create the file trails.permissions.yml

[About Permissions](https://www.drupal.org/node/2311427)

### Updating Hook Help

We update the signature from
```
function trails_help($path, $arg) {
```
to
```
function trails_help($route_name, RouteMatchInterface $route_match) {
```

and will use routes instead of path.

## About hook cron

Just run and debug the code and make changes where you need them.

# T14 Twig

## Introduction

In D7 we
 1. Create template file
 2. Register it with hook theme
 
In D8 we need also to:
 3. Use `#theme` in render array or use `drupal_render`.

## Drupal Twig Coding Standards

Documentation:

https://www.drupal.org/docs/develop/coding-standards/twig-coding-standards 
[Comparison of PHPTemplate and Twig theming paradigms](https://www.drupal.org/node/1918824)

## Creation of the Template file

Example: `53-twig`

In our example, our block module (the build function), has markup that should go in template files.

To find a nice example we search in the codebase for `feed-icon.html.twig`

Let's copy that file in our module as `/templates/trails-list.html.twig`.

## Registering our twig file with hook theme

To search examples search for the following:
 - code with `theme_hook` for the boilerplate
We just create a theme hook in our trails.module file.

```
/**
 * Implements hook_theme().
 */
function trails_theme() {
    return [
        'trails_list' => [
            'render element' => 'elements',
            'template' => 'trails-list',
        ],
    ];
}
```
## Using our template file

we do that registering the template in a render array

We can modify our build function and return an render array 

We change
```
    return ['#markup' => $output];
```
to
```
    return ['#theme' => 'trails-list'];
```

## About Twig debug and auto-reload

Search for "twig" in the change record and then for "debug" in the list of drupal changes.

https://www.drupal.org/node/1922666

usually you will just enable debug in the services file.

If it does not work have a look at the following links:
https://www.drupal.org/docs/8/theming/twig/debugging-compiled-twig-templates
https://www.drupal.org/node/2598914

## Drupal t Translate function

https://www.drupal.org/docs/develop/coding-standards/twig-coding-standards 

```
<div>
  {{ 'Original'|t }} 
</div>
```

### Drupal t Translate function with substitutions:

https://www.drupal.org/node/1918824


Example:

``` 
PHPTemplate: 
<?php print t('Welcome, @username', array('@username' => $user->name)); ?>

Twig: 
{{ 'Welcome, @username'|t({ '@username': user.name }) }}
```

## Pass Variables to Twig

In the theme hook we add the following:
```
   'variables' => ['num_items' => NULL, 'title' => NULL],
```

An in the block build return we add the following (using hash tag!!!):

``` 
    return ['#theme' => 'trails_list', '#num_items' => $num_items];
```

And at the twig file we can use that variable using {{ num_items }}. In our case we will have:

``` 
<p> {{  'Below are the last @num pages you have visited.' | t({ '@num': num_items })  }} </p>
```

#### Debug available variables

```
{{ dump(_context|keys) }}
```
and then
``` 
{{ dump(num_items) }}
```

## Twig Loops

Now that we have our items array in our twig file we want to loop over it!

``` 
{% for item in items %}
    <li>{{ item.title }} - {{ item.time }} {{ 'ago'|t }}</li>
{% endfor %}
```
