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

class PullProvider implements ServiceProviderInterface
{
    /**
     * @inheritdoc
     */
    public function register(Container $pimple)
    {
        $pimple['bx.pull.stack'] = function () {
            return new \CPullStack();
        };

        $pimple['bx.pull.watch'] = function () {
            return new \CPullWatch();
        };

        $pimple['bx.pull.options'] = function () {
            return new \CPullOptions();
        };

        $pimple['bx.pull.manager'] = function () {
            return new \CPushManager();
        };
    }
}