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

class SaleProvider implements ServiceProviderInterface
{
    /**
     * @inheritdoc
     */
    public function register(Container $pimple)
    {
        $pimple['bx.sale.auxiliary'] = function () {
            return new \CSaleAuxiliary();
        };

        $pimple['bx.sale.basket'] = function () {
            return new \CSaleBasket();
        };

        $pimple['bx.sale.delivery'] = function () {
            return new \CSaleDelivery();
        };

        $pimple['bx.sale.delivery_handler'] = function () {
            return new \CSaleDeliveryHandler();
        };

        $pimple['bx.sale.discount'] = function () {
            return new \CSaleDiscount();
        };

        $pimple['bx.sale.location'] = function () {
            return new \CSaleLocation();
        };

        $pimple['bx.sale.location_group'] = function () {
            return new \CSaleLocationGroup();
        };

        $pimple['bx.sale.order'] = function () {
            return new \CSaleOrder();
        };

        $pimple['bx.sale.order_props'] = function () {
            return new \CSaleOrderProps();
        };

        $pimple['bx.sale.order_props_group'] = function () {
            return new \CSaleOrderPropsGroup();
        };

        $pimple['bx.sale.order_props_value'] = function () {
            return new \CSaleOrderPropsValue();
        };

        $pimple['bx.sale.order_props_variant'] = function () {
            return new \CSaleOrderPropsVariant();
        };

        $pimple['bx.sale.order_tax'] = function () {
            return new \CSaleOrderTax();
        };

        $pimple['bx.sale.order_user_props'] = function () {
            return new \CSaleOrderUserProps();
        };

        $pimple['bx.sale.order_user_props_value'] = function () {
            return new \CSaleOrderUserPropsValue();
        };

        $pimple['bx.sale.pay_system'] = function () {
            return new \CSalePaySystem();
        };

        $pimple['bx.sale.pay_system_action'] = function () {
            return new \CSalePaySystemAction();
        };

        $pimple['bx.sale.person_type'] = function () {
            return new \CSalePersonType();
        };

        $pimple['bx.sale.recurring'] = function () {
            return new \CSaleRecurring();
        };

        $pimple['bx.sale.status'] = function () {
            return new \CSaleStatus();
        };

        $pimple['bx.sale.tax'] = function () {
            return new \CSaleTax();
        };

        $pimple['bx.sale.tax_rate'] = function () {
            return new \CSaleTaxRate();
        };

        $pimple['bx.sale.user_account'] = function () {
            return new \CSaleUserAccount();
        };

        $pimple['bx.sale.user_cards'] = function () {
            return new \CSaleUserCards();
        };

        $pimple['bx.sale.user_transact'] = function () {
            return new \CSaleUserTransact();
        };
    }
}
