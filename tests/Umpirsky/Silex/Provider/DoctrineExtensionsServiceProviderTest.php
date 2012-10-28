<?php

/**
 * This file is part of DoctrineExtensionsServiceProvider.
 *
 *  (c) Саша Стаменковић <umpirsky@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Umpirsky\Silex\Provider;

use Silex\Application;
use Palma\Silex\Provider\DoctrineORMServiceProvider;
use Umpirsky\Silex\Provider\DoctrineExtensionsServiceProvider;
use Gedmo\Timestampable\TimestampableListener;

/**
 * @author Саша Стаменковић <umpirsky@gmail.com>
 */
class DoctrineExtensionsServiceProviderTest extends \PHPUnit_Framework_TestCase
{
    protected $app;

    protected function setUp()
    {
        $this->app = new Application();
        $this->app->register(new DoctrineORMServiceProvider());
    }

    public function testRegister()
    {
        $this->app->register(new DoctrineExtensionsServiceProvider(), array(
            'doctrine_orm.extensions' => array(
                new TimestampableListener()
            )
        ));
    }
}
