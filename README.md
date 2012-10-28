Doctrine Extensions Service Provider [![Build Status](https://secure.travis-ci.org/umpirsky/DoctrineExtensionsServiceProvider.png)](http://travis-ci.org/umpirsky/DoctrineExtensionsServiceProvider)
====================================

Silex service provider for Doctrine extensions.

# Parameters

* **doctrine_orm.extensions**: Array of extensions (event subscribers).

# Usage

```php
<?php

$app->register(new DoctrineExtensionsServiceProvider(), array(
    'doctrine_orm.extensions' => array(
        new TimestampableListener()
    )
));
```

