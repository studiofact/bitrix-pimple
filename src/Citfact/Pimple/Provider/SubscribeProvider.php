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

class SubscribeProvider implements ServiceProviderInterface
{
    /**
     * @inheritdoc
     */
    public function register(Container $pimple)
    {
        $pimple['bx.subscribe'] = function () {
            return new \CSubscription();
        };

        $pimple['bx.subscribe.posting'] = function () {
            return new \CPosting();
        };

        $pimple['bx.subscribe.posting_template'] = function () {
            return new \CPostingTemplate();
        };

        $pimple['bx.subscribe.rubric'] = function () {
            return new \CRubric();
        };
    }
}