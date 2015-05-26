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

class CurrencyProvider implements ServiceProviderInterface
{
    /**
     * @inheritdoc
     */
    public function register(Container $pimple)
    {
        $pimple['bx.currency'] = function () {
            return new \CCurrency();
        };

        $pimple['bx.currency.lang'] = function () {
            return new \CCurrencyLang();
        };

        $pimple['bx.currency.rates'] = function () {
            return new \CCurrencyRates();
        };
    }
}