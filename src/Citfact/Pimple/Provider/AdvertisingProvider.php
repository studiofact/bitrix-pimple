<?php

/*
 * This file is part of the Studio Fact package.
 *
 * (c) Kulichkin Denis (onEXHovia) <onexhovia@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Citfact\Pimple\Provider;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class AdvertisingProvider implements ServiceProviderInterface
{
    /**
     * @inheritdoc
     */
    public function register(Container $pimple)
    {
        $pimple['bx.advertising.banner'] = function () {
            return new \CAdvBanner();
        };

        $pimple['bx.advertising.contract'] = function () {
            return new \CAdvContract();
        };

        $pimple['bx.advertising.type'] = function () {
            return new \CAdvType();
        };
    }
}
