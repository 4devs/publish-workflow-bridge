Publish Workflow Bridge
=======================


Installation
------------

Publish Workflow uses Composer, please checkout the [composer website](http://getcomposer.org) for more information.

The simple following command will install `publish-workflow-bridge` into your project. It also add a new
entry in your `composer.json` and update the `composer.lock` as well.


```bash
composer require fdevs/publish-workflow-bridge
```

Documentation
-------------
### Use with symfony framework

add bundle to AppKernel

```php
<?php
//app/AppKernel.php
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    /**
     * {@inheritdoc}
     */
    public function registerBundles()
    {
        $bundles = [
            new FDevs\Bridge\PublishWorkflow\FDevsPublishWorkflowBundle(),
        ];
    }

}
```


License
-------

This library is under the MIT license. See the complete license in the Library:

    Resources/meta/LICENSE

Reporting an issue or a feature request
---------------------------------------

Issues and feature requests are tracked in the [Github issue tracker](https://github.com/4devs/publish-workflow-bridge/issues).

---
Created by [4devs](http://4devs.pro/) - Check out our [blog](http://4devs.io/) for more insight into this and other open-source projects we release.
