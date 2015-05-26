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

class MainProvider implements ServiceProviderInterface
{
    /**
     * @inheritdoc
     */
    public function register(Container $pimple)
    {
        $pimple['bx.main'] = function () {
            return new \CMain();
        };

        $pimple['bx.main.database'] = function () {
            return new \CDatabase();
        };

        $pimple['bx.main.dbresult'] = function () {
            return new \CDBResult();
        };

        $pimple['bx.main.agent'] = function () {
            return new \CAgent();
        };

        $pimple['bx.main.event'] = function () {
            return new \CEvent();
        };

        $pimple['bx.main.event_message'] = function () {
            return new \CEventMessage();
        };

        $pimple['bx.main.event_type'] = function () {
            return new \CEventType();
        };

        $pimple['bx.main.file'] = function () {
            return new \CFile();
        };

        $pimple['bx.main.user'] = function () {
            return new \CUser();
        };

        $pimple['bx.main.group'] = function () {
            return new \CGroup();
        };

        $pimple['bx.main.site'] = function () {
            return new \CSite();
        };

        $pimple['bx.main.language'] = function () {
            return new \CLanguage();
        };

        $pimple['bx.main.main_page'] = function () {
            return new \CMainPage();
        };

        $pimple['bx.main.menu'] = function () {
            return new \CMenu();
        };

        $pimple['bx.main.module'] = function () {
            return new \CModule();
        };

        $pimple['bx.main.option'] = function () {
            return new \COption();
        };

        $pimple['bx.main.page_option'] = function () {
            return new \CPageOption();
        };

        $pimple['bx.main.page_cache'] = function () {
            return new \CPHPCache();
        };

        $pimple['bx.main.admin_file_dialog'] = function () {
            return new \CAdminFileDialog();
        };

        $pimple['bx.main.component_engine'] = function () {
            return new \CComponentEngine();
        };

        $pimple['bx.main.disk_quota'] = function () {
            return new \CDiskQuota();
        };

        $pimple['bx.main.user_type_entity'] = function () {
            return new \CUserTypeEntity();
        };

        $pimple['bx.main.user_field_enum'] = function () {
            return new \CUserFieldEnum();
        };

        $pimple['bx.main.admin_page'] = function () {
            return new \CAdminPage();
        };

        $pimple['bx.main.application_exception'] = function () {
            return new \CApplicationException();
        };

        $pimple['bx.main.component'] = function () {
            return new \CbxComponent();
        };

        $pimple['bx.main.component_template'] = function () {
            return new \CbxComponentTemplate();
        };

        $pimple['bx.main.ratings'] = function () {
            return new \CRatings();
        };

        $pimple['bx.main.user_counter'] = function () {
            return new \CUserCounter();
        };

        $pimple['bx.main.sanitizer'] = function () {
            return new \CBXSanitizer();
        };

        $pimple['bx.main.admin_notify'] = function () {
            return new \CAdminNotify();
        };

        $pimple['bx.main.virtual_io'] = function () {
            return new \CBXVirtualIo();
        };

        $pimple['bx.main.smile'] = function () {
            return new \CSmile();
        };

        $pimple['bx.main.smile_set'] = function () {
            return new \CSmileSet();
        };
    }
}