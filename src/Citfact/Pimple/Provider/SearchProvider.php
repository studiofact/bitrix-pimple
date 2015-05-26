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

class SearchProvider implements ServiceProviderInterface
{
    /**
     * @inheritdoc
     */
    public function register(Container $pimple)
    {
        $pimple['bx.search'] = function () {
            return new \CSearch();
        };

        $pimple['bx.search.custom_rank'] = function () {
            return new \CSearchCustomRank();
        };

        $pimple['bx.search.tags'] = function () {
            return new \CSearchTags();
        };

        $pimple['bx.search.site_map'] = function () {
            return new \CSiteMap();
        };
    }
}