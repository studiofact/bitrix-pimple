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

class SocialNetworkProvider implements ServiceProviderInterface
{
    /**
     * @inheritdoc
     */
    public function register(Container $pimple)
    {
        $pimple['bx.socialnetwork.user_relations'] = function () {
            return new \CSocNetUserRelations();
        };

        $pimple['bx.socialnetwork.user_perms'] = function () {
            return new \CSocNetUserPerms();
        };

        $pimple['bx.socialnetwork.user_group'] = function () {
            return new \CSocNetUserToGroup();
        };

        $pimple['bx.socialnetwork.user'] = function () {
            return new \CSocNetUser();
        };

        $pimple['bx.socialnetwork.smile'] = function () {
            return new \CSocNetSmile();
        };

        $pimple['bx.socialnetwork.messages'] = function () {
            return new \CSocNetMessages();
        };

        $pimple['bx.socialnetwork.log_events'] = function () {
            return new \CSocNetLogEvents();
        };

        $pimple['bx.socialnetwork.log'] = function () {
            return new \CSocNetLog();
        };

        $pimple['bx.socialnetwork.group_subject'] = function () {
            return new \CSocNetGroupSubject();
        };

        $pimple['bx.socialnetwork.features_perms'] = function () {
            return new \CSocNetFeaturesPerms();
        };

        $pimple['bx.socialnetwork.features'] = function () {
            return new \CSocNetFeatures();
        };

        $pimple['bx.socialnetwork.group'] = function () {
            return new \CSocNetGroup();
        };

        $pimple['bx.socialnetwork.tools'] = function () {
            return new \CSocNetTools();
        };

        $pimple['bx.socialnetwork.text_parser'] = function () {
            return new \CSocNetTextParser();
        };
    }
}