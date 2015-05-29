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

class WikiProvider implements ServiceProviderInterface
{
    /**
     * @inheritdoc
     */
    public function register(Container $pimple)
    {
        $pimple['bx.wiki'] = function () {
            return new \CWiki();
        };

        $pimple['bx.wiki.parser'] = function () {
            return new \CWikiParser();
        };

        $pimple['bx.wiki.security'] = function () {
            return new \CWikiSecurity();
        };

        $pimple['bx.wiki.socnet'] = function () {
            return new \CWikiSocnet();
        };

        $pimple['bx.wiki.diff'] = function () {
            return new \CWikiDiff();
        };

        $pimple['bx.wiki.utils'] = function () {
            return new \CWikiUtils();
        };
    }
}
