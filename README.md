Doctrine Extensions Service Provider
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

