<?php

/*
 * This file is part of the Studio Fact package.
 *
 * (c) Kulichkin Denis (onEXHovia) <onexhovia@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Citfact\Pimple;

use Pimple\Container as BaseContainer;

class Container extends BaseContainer
{
    /**
     * @var Container
     */
    protected static $instance = null;

    /**
     * Returns current instance of the Container.
     *
     * @return Debug
     */
    public static function getInstance()
    {
        if (!isset(static::$instance)) {
            static::$instance = new static();
        }

        return static::$instance;
    }
}