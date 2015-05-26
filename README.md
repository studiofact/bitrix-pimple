## Требования:

 - PHP версия >= 5.3.3
 - Bitrix версия >= 14

## Установка

Создайте или обновите ``composer.json`` файл и запустите ``php composer.phar update``
``` json
  {
      "require": {
          "citfact/bitrix-pimple": "dev-master"
      }
  }
```

Подключите composer автолоадер 
``` php
// init.php

require_once $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';
```

## Пример использования

``` php
use Pimple\Container;
use Citfact\Pimple\Provider;

$container = new Container();
$container->register(new Provider\CatalogProvider());
$container->register(new Provider\IBlockProvider());
```

## Провайдеры

### AdvertisingProvider

- `bx.advertising.banner` - `CAdvBanner`
- `bx.advertising.contract` - `CAdvContract`
- `bx.advertising.type` - `CAdvType`

### BlogProvider

- `bx.blog` - `CBlog`
- `bx.blog.candidate` - `CBlogCandidate`
- `bx.blog.category` - `CBlogCategory`
- `bx.blog.comment` - `CBlogComment`
- `bx.blog.group` - `CBlogGroup`
- `bx.blog.post` - `CBlogPost`
- `bx.blog.site_path` - `CBlogSitePath`
- `bx.blog.track_back` - `CBlogTrackBack`
- `bx.blog.user` - `CBlogUser`
- `bx.blog.user_group` - `CBlogUserGroup`

### CatalogProvider

- `bx.catalog` - `CCatalog`
- `bx.catalog.discount` - `CCatalogDiscount`
- `bx.catalog.discount_coupon` - `CCatalogDiscountCoupon`
- `bx.catalog.export` - `CCatalogExport`
- `bx.catalog.group` - `CCatalogGroup`
- `bx.catalog.iblock_parameters` - `CCatalogIBlockParameters`
- `bx.catalog.import` - `CCatalogImport`
- `bx.catalog.product` - `CCatalogProduct`
- `bx.catalog.product_groups` - `CCatalogProductGroups`
- `bx.catalog.sku` - `CCatalogSKU`
- `bx.catalog.store` - `CCatalogStore`
- `bx.catalog.store_product` - `CCatalogStoreProduct`
- `bx.catalog.vat` - `CCatalogVat`
- `bx.catalog.extra` - `CExtra`
- `bx.catalog.price` - `CPrice`

### CurrencyProvider

- `bx.currency` - `CCurrency`
- `bx.currency.lang` - `CCurrencyLang`
- `bx.currency.rates` - `CCurrencyRates`

### IBlockProvider

- `bx.iblock` - `CIBlock`
- `bx.iblock.cml_export` - `CIBlockCMLExport`
- `bx.iblock.cml_import` - `CIBlockCMLImport`
- `bx.iblock.element` - `CIBlockElement`
- `bx.iblock.fortmat_properties` - `CIBlockFormatProperties`
- `bx.iblock.price_tools` - `CIBlockPriceTools`
- `bx.iblock.property` - `CIBlockProperty`
- `bx.iblock.property_enum` - `CIBlockPropertyEnum`
- `bx.iblock.result` - `CIBlockResult`
- `bx.iblock.rss` - `CIBlockRSS`
- `bx.iblock.section` - `CIBlockSection`
- `bx.iblock.type` - `CIBlockType`
- `bx.iblock.xml_file` - `CIBlockXMLFile`

### LearningProvider

- `bx.learning.course` - `CCourse`
- `bx.learning.chapter` - `CChapter`
- `bx.learning.lesson` - `CLesson`
- `bx.learning.question` - `CLQuestion`
- `bx.learning.answer` - `CLAnswer`
- `bx.learning.test` - `CTest`
- `bx.learning.test_attempt` - `CTestAttempt`
- `bx.learning.test_result` - `CTestResult`
- `bx.learning.grade_book` - `CGradeBook`
- `bx.learning.certification` - `CCertification`
- `bx.learning.student` - `CStudent`
- `bx.learning.course_package` - `CCoursePackage`
- `bx.learning.course_import` - `CCourseImport`

### MainProvider

- `bx.main` - `CMain`
- `bx.main.database` - `CDatabase`
- `bx.main.dbresult` - `CDBResult`
- `bx.main.agent` - `CAgent`
- `bx.main.event` - `CEvent`
- `bx.main.event_message` - `CEventMessage`
- `bx.main.event_type` - `CEventType`
- `bx.main.file` - `CFile`
- `bx.main.user` - `CUser`
- `bx.main.group` - `CGroup`
- `bx.main.site` - `CSite`
- `bx.main.language` - `CLanguage`
- `bx.main.main_page` - `CMainPage`
- `bx.main.menu` - `CMenu`
- `bx.main.module` - `CModule`
- `bx.main.option` - `COption`
- `bx.main.page_option` - `CPageOption`
- `bx.main.page_cache` - `CPageCache`
- `bx.main.php_cache` - `CPHPCache`
- `bx.main.admin_file_dialog` - `CAdminFileDialog`
- `bx.main.component_engine` - `CComponentEngine`
- `bx.main.disk_quota` - `CDiskQuota`
- `bx.main.user_type_entity` - `CUserTypeEntity`
- `bx.main.user_field_enum` - `CUserFieldEnum`
- `bx.main.admin_page` - `CAdminPage`
- `bx.main.application_exception` - `CApplicationException`
- `bx.main.component` - `CbxComponent`
- `bx.main.component_template` - `CbxComponentTemplate`
- `bx.main.ratings` - `CRatings`
- `bx.main.user_counter` - `CUserCounter`
- `bx.main.sanitizer` - `CBXSanitizer`
- `bx.main.admin_notify` - `CAdminNotify`
- `bx.main.virtual_io` - `CBXVirtualIo`
- `bx.main.smile` - `CSmile`
- `bx.main.smile_set` - `CSmileSet`

### PullProvider

- `bx.pull.stack` - `CPullStack`
- `bx.pull.watch` - `CPullWatch`
- `bx.pull.options` - `CPullOptions`
- `bx.pull.manager` - `CPushManager`

### SaleProvider

- `bx.sale.auxiliary` - `CSaleAuxiliary`
- `bx.sale.basket` - `CSaleBasket`
- `bx.sale.delivery` - `CSaleDelivery`
- `bx.sale.delivery_handler` - `CSaleDeliveryHandler`
- `bx.sale.discount` - `CSaleDiscount`
- `bx.sale.location` - `CSaleLocation`
- `bx.sale.location_group` - `CSaleLocationGroup`
- `bx.sale.order` - `CSaleOrder`
- `bx.sale.order_props` - `CSaleOrderProps`
- `bx.sale.order_props_group` - `CSaleOrderPropsGroup`
- `bx.sale.order_props_value` - `CSaleOrderPropsValue`
- `bx.sale.order_props_variant` - `CSaleOrderPropsVariant`
- `bx.sale.order_tax` - `CSaleOrderTax`
- `bx.sale.order_user_props` - `CSaleOrderUserProps`
- `bx.sale.order_user_props_value` - `CSaleOrderUserPropsValue`
- `bx.sale.pay_system` - `CSalePaySystem`
- `bx.sale.pay_system_action` - `CSalePaySystemAction`
- `bx.sale.person_type` - `CSalePersonType`
- `bx.sale.recurring` - `CSaleRecurring`
- `bx.sale.status` - `CSaleStatus`
- `bx.sale.tax` - `CSaleTax`
- `bx.sale.tax_rate` - `CSaleTaxRate`
- `bx.sale.user_account` - `CSaleUserAccount`
- `bx.sale.user_cards` - `CSaleUserCards`
- `bx.sale.user_transact` - `CSaleUserTransact`

### SearchProvider

- `bx.search` - `CSearch`
- `bx.search.custom_rank` - `CSearchCustomRank`
- `bx.search.tags` - `CSearchTags`
- `bx.search.site_map` - `CSiteMap`

### SocialNetworkProvider

- `bx.socialnetwork.user_relations` - `CSocNetUserRelations`
- `bx.socialnetwork.user_perms` - `CSocNetUserPerms`
- `bx.socialnetwork.user_group` - `CSocNetUserToGroup`
- `bx.socialnetwork.user` - `CSocNetUser`
- `bx.socialnetwork.smile` - `CSocNetSmile`
- `bx.socialnetwork.messages` - `CSocNetMessages`
- `bx.socialnetwork.log_events` - `CSocNetLogEvents`
- `bx.socialnetwork.log` - `CSocNetLog`
- `bx.socialnetwork.group_subject` - `CSocNetGroupSubject`
- `bx.socialnetwork.features_perms` - `CSocNetFeaturesPerms`
- `bx.socialnetwork.features` - `CSocNetFeatures`
- `bx.socialnetwork.group` - `CSocNetGroup`
- `bx.socialnetwork.tools` - `CSocNetTools`
- `bx.socialnetwork.text_parser` - `CSocNetTextParser`

### StatisticProvider

- `bx.statistic` - `CStatistics`
- `bx.statistic.adv` - `CAdv`
- `bx.statistic.auto_detect` - `CAutoDetect`
- `bx.statistic.country` - `CCountry`
- `bx.statistic.guest` - `CGuest`
- `bx.statistic.hit` - `CHit`
- `bx.statistic.page` - `CPage`
- `bx.statistic.path` - `CPath`
- `bx.statistic.phrase` - `CPhrase`
- `bx.statistic.referer` - `CReferer`
- `bx.statistic.searcher` - `CSearcher`
- `bx.statistic.searcher_hit` - `CSearcherHit`
- `bx.statistic.session` - `CSession`
- `bx.statistic.event` - `CStatEvent`
- `bx.statistic.event_type` - `CStatEventType`
- `bx.statistic.stop_list` - `CStopList`
- `bx.statistic.traffic` - `CTraffic`
- `bx.statistic.user_online` - `CUserOnline`

### SubscribeProvider

- `bx.subscribe` - `CSubscription`
- `bx.subscribe.posting` - `CPosting`
- `bx.subscribe.posting_template` - `CPostingTemplate`
- `bx.subscribe.rubric` - `CRubric`

### SupportProvider

- `bx.support.ticket` - `CTicket`
- `bx.support.ticket_dictionary` - `CTicketDictionary`

### WebServiceProvider

- `bx.webservice.xml_creator` - `CXMLCreator`
- `bx.webservice.soap_fault` - `CSOAPFault`
- `bx.webservice.soap_request` - `CSOAPRequest`
- `bx.webservice.soap_server_responser` - `CSOAPServerResponser`
- `bx.webservice.soap_server` - `CSOAPServer`
- `bx.webservice.soap_client` - `CSOAPClient`
- `bx.webservice.wsdl_creator` - `CWSDLCreator`
- `bx.webservice.soap_codec` - `CSOAPCodec`
- `bx.webservice.soap_response` - `CSOAPResponse`
- `bx.webservice.wssoap_responser` - `CWSSOAPResponser`

### WikiProvider

- `bx.wiki` - `CWiki`
- `bx.wiki.parser` - `CWikiParser`
- `bx.wiki.security` - `CWikiSecurity`
- `bx.wiki.socnet` - `CWikiSocnet`
- `bx.wiki.diff` - `CWikiDiff`
- `bx.wiki.utils` - `CWikiUtils`
