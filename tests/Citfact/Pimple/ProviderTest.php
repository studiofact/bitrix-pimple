<?php

/*
 * This file is part of the Studio Fact package.
 *
 * (c) Kulichkin Denis (onEXHovia) <onexhovia@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Citfact\Pimple;

use Pimple\Container;
use Citfact\Pimple\Provider;

class ProviderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Pjax
     */
    protected $container = null;

    protected function setUp()
    {
        $this->container = new Container();
        $this->container->register(new Provider\AdvertisingProvider());
        $this->container->register(new Provider\BlogProvider());
        $this->container->register(new Provider\CatalogProvider());
        $this->container->register(new Provider\CurrencyProvider());
        $this->container->register(new Provider\IBlockProvider());
        $this->container->register(new Provider\LearningProvider());
        $this->container->register(new Provider\MainProvider());
        $this->container->register(new Provider\PullProvider());
        $this->container->register(new Provider\SaleProvider());
        $this->container->register(new Provider\SearchProvider());
        $this->container->register(new Provider\SocialNetworkProvider());
        $this->container->register(new Provider\StatisticProvider());
        $this->container->register(new Provider\SubscribeProvider());
        $this->container->register(new Provider\SupportProvider());
        $this->container->register(new Provider\WebServiceProvider());
        $this->container->register(new Provider\WikiProvider());
    }

    /**
     * @dataProvider getProviderData
     */
    public function testProvider($id, $instance)
    {
        $this->assertInstanceOf($instance, $this->container[$id]);
    }

    /**
     * @return array
     */
    public function getProviderData()
    {
        return array(
            array('bx.advertising.banner', '\CAdvBanner'),
            array('bx.advertising.contract', '\CAdvContract'),
            array('bx.advertising.type', '\CAdvType'),
            array('bx.blog', '\CBlog'),
            array('bx.blog.candidate', '\CBlogCandidate'),
            array('bx.blog.category', '\CBlogCategory'),
            array('bx.blog.comment', '\CBlogComment'),
            array('bx.blog.group', '\CBlogGroup'),
            array('bx.blog.post', '\CBlogPost'),
            array('bx.blog.site_path', '\CBlogSitePath'),
            array('bx.blog.track_back', '\CBlogTrackBack'),
            array('bx.blog.user', '\CBlogUser'),
            array('bx.blog.user_group', '\CBlogUserGroup'),
            array('bx.catalog', '\CCatalog'),
            array('bx.catalog.discount', '\CCatalogDiscount'),
            array('bx.catalog.discount_coupon', '\CCatalogDiscountCoupon'),
            array('bx.catalog.export', '\CCatalogExport'),
            array('bx.catalog.group', '\CCatalogGroup'),
            array('bx.catalog.iblock_parameters', '\CCatalogIBlockParameters'),
            array('bx.catalog.import', '\CCatalogImport'),
            array('bx.catalog.product', '\CCatalogProduct'),
            array('bx.catalog.product_groups', '\CCatalogProductGroups'),
            array('bx.catalog.sku', '\CCatalogSKU'),
            array('bx.catalog.store', '\CCatalogStore'),
            array('bx.catalog.store_product', '\CCatalogStoreProduct'),
            array('bx.catalog.vat', '\CCatalogVat'),
            array('bx.catalog.extra', '\CExtra'),
            array('bx.catalog.price', '\CPrice'),
            array('bx.currency', '\CCurrency'),
            array('bx.currency.lang', '\CCurrencyLang'),
            array('bx.currency.rates', '\CCurrencyRates'),
            array('bx.iblock', '\CIBlock'),
            array('bx.iblock.cml_export', '\CIBlockCMLExport'),
            array('bx.iblock.cml_import', '\CIBlockCMLImport'),
            array('bx.iblock.element', '\CIBlockElement'),
            array('bx.iblock.fortmat_properties', '\CIBlockFormatProperties'),
            array('bx.iblock.price_tools', '\CIBlockPriceTools'),
            array('bx.iblock.property', '\CIBlockProperty'),
            array('bx.iblock.property_enum', '\CIBlockPropertyEnum'),
            array('bx.iblock.result', '\CIBlockResult'),
            array('bx.iblock.rss', '\CIBlockRSS'),
            array('bx.iblock.section', '\CIBlockSection'),
            array('bx.iblock.type', '\CIBlockType'),
            array('bx.iblock.xml_file', '\CIBlockXMLFile'),
            array('bx.learning.course', '\CCourse'),
            array('bx.learning.chapter', '\CChapter'),
            array('bx.learning.lesson', '\CLesson'),
            array('bx.learning.question', '\CLQuestion'),
            array('bx.learning.answer', '\CLAnswer'),
            array('bx.learning.test', '\CTest'),
            array('bx.learning.test_attempt', '\CTestAttempt'),
            array('bx.learning.test_result', '\CTestResult'),
            array('bx.learning.grade_book', '\CGradeBook'),
            array('bx.learning.certification', '\CCertification'),
            array('bx.learning.student', '\CStudent'),
            array('bx.learning.course_package', '\CCoursePackage'),
            array('bx.learning.course_import', '\CCourseImport'),
            array('bx.main', '\CMain'),
            array('bx.main.database', '\CDatabase'),
            array('bx.main.dbresult', '\CDBResult'),
            array('bx.main.agent', '\CAgent'),
            array('bx.main.event', '\CEvent'),
            array('bx.main.event_message', '\CEventMessage'),
            array('bx.main.event_type', '\CEventType'),
            array('bx.main.file', '\CFile'),
            array('bx.main.user', '\CUser'),
            array('bx.main.group', '\CGroup'),
            array('bx.main.site', '\CSite'),
            array('bx.main.language', '\CLanguage'),
            array('bx.main.main_page', '\CMainPage'),
            array('bx.main.menu', '\CMenu'),
            array('bx.main.module', '\CModule'),
            array('bx.main.option', '\COption'),
            array('bx.main.page_option', '\CPageOption'),
            array('bx.main.page_cache', '\CPageCache'),
            array('bx.main.php_cache', '\CPHPCache'),
            array('bx.main.admin_file_dialog', '\CAdminFileDialog'),
            array('bx.main.component_engine', '\CComponentEngine'),
            array('bx.main.disk_quota', '\CDiskQuota'),
            array('bx.main.user_type_entity', '\CUserTypeEntity'),
            array('bx.main.user_field_enum', '\CUserFieldEnum'),
            array('bx.main.admin_page', '\CAdminPage'),
            array('bx.main.application_exception', '\CApplicationException'),
            array('bx.main.component', '\CBitrixComponent'),
            array('bx.main.component_template', '\CBitrixComponentTemplate'),
            array('bx.main.ratings', '\CRatings'),
            array('bx.main.user_counter', '\CUserCounter'),
            array('bx.main.user_counter', '\CUserCounter'),
            array('bx.main.sanitizer', '\CBXSanitizer'),
            array('bx.main.admin_notify', '\CAdminNotify'),
            array('bx.main.virtual_io', '\CBXVirtualIo'),
            array('bx.main.smile', '\CSmile'),
            array('bx.main.smile_set', '\CSmileSet'),
            array('bx.pull.stack', '\CPullStack'),
            array('bx.pull.watch', '\CPullWatch'),
            array('bx.pull.options', '\CPullOptions'),
            array('bx.pull.manager', '\CPushManager'),
            array('bx.sale.auxiliary', '\CSaleAuxiliary'),
            array('bx.sale.basket', '\CSaleBasket'),
            array('bx.sale.delivery', '\CSaleDelivery'),
            array('bx.sale.delivery_handler', '\CSaleDeliveryHandler'),
            array('bx.sale.discount', '\CSaleDiscount'),
            array('bx.sale.location', '\CSaleLocation'),
            array('bx.sale.location_group', '\CSaleLocationGroup'),
            array('bx.sale.order', '\CSaleOrder'),
            array('bx.sale.order_props', '\CSaleOrderProps'),
            array('bx.sale.order_props_group', '\CSaleOrderPropsGroup'),
            array('bx.sale.order_props_value', '\CSaleOrderPropsValue'),
            array('bx.sale.order_props_variant', '\CSaleOrderPropsVariant'),
            array('bx.sale.order_tax', '\CSaleOrderTax'),
            array('bx.sale.order_user_props', '\CSaleOrderUserProps'),
            array('bx.sale.order_user_props_value', '\CSaleOrderUserPropsValue'),
            array('bx.sale.pay_system', '\CSalePaySystem'),
            array('bx.sale.pay_system_action', '\CSalePaySystemAction'),
            array('bx.sale.person_type', '\CSalePersonType'),
            array('bx.sale.recurring', '\CSaleRecurring'),
            array('bx.sale.status', '\CSaleStatus'),
            array('bx.sale.tax', '\CSaleTax'),
            array('bx.sale.tax_rate', '\CSaleTaxRate'),
            array('bx.sale.user_account', '\CSaleUserAccount'),
            array('bx.sale.user_cards', '\CSaleUserCards'),
            array('bx.sale.user_transact', '\CSaleUserTransact'),
            array('bx.search', '\CSearch'),
            array('bx.search.custom_rank', '\CSearchCustomRank'),
            array('bx.search.tags', '\CSearchTags'),
            array('bx.search.site_map', '\CSiteMap'),
            array('bx.socialnetwork.user_relations', '\CSocNetUserRelations'),
            array('bx.socialnetwork.user_perms', '\CSocNetUserPerms'),
            array('bx.socialnetwork.user_group', '\CSocNetUserToGroup'),
            array('bx.socialnetwork.user', '\CSocNetUser'),
            array('bx.socialnetwork.smile', '\CSocNetSmile'),
            array('bx.socialnetwork.messages', '\CSocNetMessages'),
            array('bx.socialnetwork.log_events', '\CSocNetLogEvents'),
            array('bx.socialnetwork.log', '\CSocNetLog'),
            array('bx.socialnetwork.group_subject', '\CSocNetGroupSubject'),
            array('bx.socialnetwork.features_perms', '\CSocNetFeaturesPerms'),
            array('bx.socialnetwork.features', '\CSocNetFeatures'),
            array('bx.socialnetwork.group', '\CSocNetGroup'),
            array('bx.socialnetwork.tools', '\CSocNetTools'),
            array('bx.socialnetwork.text_parser', '\CSocNetTextParser'),
            array('bx.statistic', '\CStatistics'),
            array('bx.statistic.adv', '\CAdv'),
            array('bx.statistic.auto_detect', '\CAutoDetect'),
            array('bx.statistic.country', '\CCountry'),
            array('bx.statistic.guest', '\CGuest'),
            array('bx.statistic.hit', '\CHit'),
            array('bx.statistic.page', '\CPage'),
            array('bx.statistic.path', '\CPath'),
            array('bx.statistic.phrase', '\CPhrase'),
            array('bx.statistic.referer', '\CReferer'),
            array('bx.statistic.searcher', '\CSearcher'),
            array('bx.statistic.searcher_hit', '\CSearcherHit'),
            array('bx.statistic.session', '\CSession'),
            array('bx.statistic.event', '\CStatEvent'),
            array('bx.statistic.event_type', '\CStatEventType'),
            array('bx.statistic.stop_list', '\CStopList'),
            array('bx.statistic.traffic', '\CTraffic'),
            array('bx.statistic.user_online', '\CUserOnline'),
            array('bx.subscribe', '\CSubscription'),
            array('bx.subscribe.posting', '\CPosting'),
            array('bx.subscribe.posting_template', '\CPostingTemplate'),
            array('bx.subscribe.rubric', '\CRubric'),
            array('bx.support.ticket', '\CTicket'),
            array('bx.support.ticket_dictionary', '\CTicketDictionary'),
            array('bx.webservice.xml_creator', '\CXMLCreator'),
            array('bx.webservice.soap_fault', '\CSOAPFault'),
            array('bx.webservice.soap_request', '\CSOAPRequest'),
            array('bx.webservice.soap_server_responser', '\CSOAPServerResponser'),
            array('bx.webservice.soap_server', '\CSOAPServer'),
            array('bx.webservice.soap_client', '\CSOAPClient'),
            array('bx.webservice.wsdl_creator', '\CWSDLCreator'),
            array('bx.webservice.soap_codec', '\CSOAPCodec'),
            array('bx.webservice.soap_response', '\CSOAPResponse'),
            array('bx.webservice.wssoap_responser', '\CWSSOAPResponser'),
            array('bx.wiki', '\CWiki'),
            array('bx.wiki.parser', '\CWikiParser'),
            array('bx.wiki.security', '\CWikiSecurity'),
            array('bx.wiki.socnet', '\CWikiSocnet'),
            array('bx.wiki.diff', '\CWikiDiff'),
            array('bx.wiki.utils', '\CWikiUtils'),
        );
    }
}