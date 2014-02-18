# EmarrefResqueBundle

Adds resque capabilities to a Symfony application using [nrk/predis](https://github.com/nrk/predis) and [mjphaynes/php-resque](https://github.com/mjphaynes/php-resque).

## Installation

Add EmarrefResqueBundle to your project's composer.json.

```json
{
    "require": {
        "emarref/resque-bundle": "~0.1"
    }
}
```

Install the bundle using composer.

`$ php composer.phar update emarref/resque-bundle`

Register the bundle in your Kernel.

```php
// app/AppKernel.php
//...
class AppKernel extends Kernel
{
    //...
    public function registerBundles()
    {
        $bundles = array(
            ...
            new Emarref\Bundle\ResqueBundle\EmarrefResqueBundle(),
        );
        //...

        return $bundles;
    }
    //...
}
```

## Usage

Running the symfony console command with no arguments will show you the available commands for manipulating workers etc.

`$ php app/console`

See the documentation for [mjphaynes/php-resque](https://github.com/mjphaynes/php-resque) for information on how to use resque from within your app.
