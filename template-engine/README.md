## Template Engine 
very simple template package

## Requirements
- PHP 5.3 and above.

## Installation
### 1. Using Composer
You can install the library via [Composer](https://getcomposer.org/). If you don't already have Composer installed, first install it by following one of these instructions depends on your OS of choice:
* [Composer installation instruction for Windows](https://getcomposer.org/doc/00-intro.md#installation-windows)
* [Composer installation instruction for Mac OS X and Linux](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx)

After composer is installed, Then run the following command in template-engine directory

```
php composer.phar install
```

### 2. Manually

If you're not using Composer, you can also clone `omise/omise-php` repository into the directory of sample code that you just installed this repository:

```
git clone https://github.com/foysal-mamun/php
```

Then keep only "template-engine" and remove all other directories.

``` php
require_once __DIR__ . '/src/TemplateEngine/CustomTemplateEngine.php';
```

## Usage

``` php
use TemplateEngine\CustomTemplateEngine;

$eng = new CustomTemplateEngine();

// test by passing array
echo $eng->render("../views/test.html", array(
	"title" => "Testing template engine", "name" => "lifo array", "email" => "lifo_array@yahoo.com"
));
```

or
``` php
use TemplateEngine\CustomTemplateEngine;

$eng = new CustomTemplateEngine();

$object = new StdClass;
$object->name = "lifo obj";
$object->email = "lifo-obj@yahoo.com";
$object->title = "Testing template engine";
// test by object
echo $eng->render("../views/test.html", $object);
```
