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

class StatisticProvider implements ServiceProviderInterface
{
    /**
     * @inheritdoc
     */
    public function register(Container $pimple)
    {
        $pimple['bx.statistic'] = function () {
            return new \CStatistics();
        };

        $pimple['bx.statistic.adv'] = function () {
            return new \CAdv();
        };

        $pimple['bx.statistic.auto_detect'] = function () {
            return new \CAutoDetect();
        };

        $pimple['bx.statistic.country'] = function () {
            return new \CCountry();
        };

        $pimple['bx.statistic.guest'] = function () {
            return new \CGuest();
        };

        $pimple['bx.statistic.hit'] = function () {
            return new \CHit();
        };

        $pimple['bx.statistic.page'] = function () {
            return new \CPage();
        };

        $pimple['bx.statistic.path'] = function () {
            return new \CPath();
        };

        $pimple['bx.statistic.phrase'] = function () {
            return new \CPhrase();
        };

        $pimple['bx.statistic.referer'] = function () {
            return new \CReferer();
        };

        $pimple['bx.statistic.searcher'] = function () {
            return new \CSearcher();
        };

        $pimple['bx.statistic.searcher_hit'] = function () {
            return new \CSearcherHit();
        };

        $pimple['bx.statistic.session'] = function () {
            return new \CSession();
        };

        $pimple['bx.statistic.event'] = function () {
            return new \CStatEvent();
        };

        $pimple['bx.statistic.event_type'] = function () {
            return new \CStatEventType();
        };

        $pimple['bx.statistic.stop_list'] = function () {
            return new \CStopList();
        };

        $pimple['bx.statistic.traffic'] = function () {
            return new \CTraffic();
        };

        $pimple['bx.statistic.user_online'] = function () {
            return new \CUserOnline();
        };
    }
}