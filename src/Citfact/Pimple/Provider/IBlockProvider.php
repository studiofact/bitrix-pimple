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

class IBlockProvider implements ServiceProviderInterface
{
    /**
     * @inheritdoc
     */
    public function register(Container $pimple)
    {
        $pimple['bx.iblock'] = function () {
            return new \CIBlock();
        };

        $pimple['bx.iblock.cml_export'] = function () {
            return new \CIBlockCMLExport();
        };

        $pimple['bx.iblock.cml_import'] = function () {
            return new \CIBlockCMLImport();
        };

        $pimple['bx.iblock.element'] = function () {
            return new \CIBlockElement();
        };

        $pimple['bx.iblock.fortmat_properties'] = function () {
            return new \CIBlockFormatProperties();
        };

        $pimple['bx.iblock.price_tools'] = function () {
            return new \CIBlockPriceTools();
        };

        $pimple['bx.iblock.property'] = function () {
            return new \CIBlockProperty();
        };

        $pimple['bx.iblock.property_enum'] = function () {
            return new \CIBlockPropertyEnum();
        };

        $pimple['bx.iblock.result'] = function () {
            return new \CIBlockResult();
        };

        $pimple['bx.iblock.rss'] = function () {
            return new \CIBlockRSS();
        };

        $pimple['bx.iblock.section'] = function () {
            return new \CIBlockSection();
        };

        $pimple['bx.iblock.type'] = function () {
            return new \CIBlockType();
        };

        $pimple['bx.iblock.xml_file'] = function () {
            return new \CIBlockXMLFile();
        };
    }
}