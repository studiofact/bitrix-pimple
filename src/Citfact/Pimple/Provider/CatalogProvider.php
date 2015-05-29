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

class CatalogProvider implements ServiceProviderInterface
{
    /**
     * @inheritdoc
     */
    public function register(Container $pimple)
    {
        $pimple['bx.catalog'] = function () {
            return new \CCatalog();
        };

        $pimple['bx.catalog.discount'] = function () {
            return new \CCatalogDiscount();
        };

        $pimple['bx.catalog.discount_coupon'] = function () {
            return new \CCatalogDiscountCoupon();
        };

        $pimple['bx.catalog.export'] = function () {
            return new \CCatalogExport();
        };

        $pimple['bx.catalog.group'] = function () {
            return new \CCatalogGroup();
        };

        $pimple['bx.catalog.iblock_parameters'] = function () {
            return new \CCatalogIBlockParameters();
        };

        $pimple['bx.catalog.import'] = function () {
            return new \CCatalogImport();
        };

        $pimple['bx.catalog.product'] = function () {
            return new \CCatalogProduct();
        };

        $pimple['bx.catalog.product_groups'] = function () {
            return new \CCatalogProductGroups();
        };

        $pimple['bx.catalog.sku'] = function () {
            return new \CCatalogSKU();
        };

        $pimple['bx.catalog.store'] = function () {
            return new \CCatalogStore();
        };

        $pimple['bx.catalog.store_product'] = function () {
            return new \CCatalogStoreProduct();
        };

        $pimple['bx.catalog.vat'] = function () {
            return new \CCatalogVat();
        };

        $pimple['bx.catalog.extra'] = function () {
            return new \CExtra();
        };

        $pimple['bx.catalog.price'] = function () {
            return new \CPrice();
        };
    }
}
