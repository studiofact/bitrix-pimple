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

class BlogProvider implements ServiceProviderInterface
{
    /**
     * @inheritdoc
     */
    public function register(Container $pimple)
    {
        $pimple['bx.blog'] = function () {
            return new \CBlog();
        };

        $pimple['bx.blog.candidate'] = function () {
            return new \CBlogCandidate();
        };

        $pimple['bx.blog.category'] = function () {
            return new \CBlogCategory();
        };

        $pimple['bx.blog.comment'] = function () {
            return new \CBlogComment();
        };

        $pimple['bx.blog.group'] = function () {
            return new \CBlogGroup();
        };

        $pimple['bx.blog.post'] = function () {
            return new \CBlogPost();
        };

        $pimple['bx.blog.site_path'] = function () {
            return new \CBlogSitePath();
        };

        $pimple['bx.blog.track_back'] = function () {
            return new \CBlogTrackBack();
        };

        $pimple['bx.blog.user'] = function () {
            return new \CBlogUser();
        };

        $pimple['bx.blog.user_group'] = function () {
            return new \CBlogUserGroup();
        };
    }
}