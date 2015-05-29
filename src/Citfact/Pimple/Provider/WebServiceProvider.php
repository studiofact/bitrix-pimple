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

class WebServiceProvider implements ServiceProviderInterface
{
    /**
     * @inheritdoc
     */
    public function register(Container $pimple)
    {
        $pimple['bx.webservice.xml_creator'] = function () {
            return new \CXMLCreator();
        };

        $pimple['bx.webservice.soap_fault'] = function () {
            return new \CSOAPFault();
        };

        $pimple['bx.webservice.soap_request'] = function () {
            return new \CSOAPRequest();
        };

        $pimple['bx.webservice.soap_server_responser'] = function () {
            return new \CSOAPServerResponser();
        };

        $pimple['bx.webservice.soap_server'] = function () {
            return new \CSOAPServer();
        };

        $pimple['bx.webservice.soap_client'] = function () {
            return new \CSOAPClient();
        };

        $pimple['bx.webservice.soap_codec'] = function () {
            return new \CSOAPCodec();
        };

        $pimple['bx.webservice.wsdl_creator'] = function () {
            return new \CWSDLCreator();
        };

        $pimple['bx.webservice.soap_response'] = function () {
            return new \CSOAPResponse();
        };

        $pimple['bx.webservice.wssoap_responser'] = function () {
            return new \CWSSOAPResponser();
        };
    }
}
