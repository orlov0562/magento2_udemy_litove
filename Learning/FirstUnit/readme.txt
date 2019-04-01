Download:
https://blog.magestore.com/magento-download/
----------------------------------------

https://devdocs.magento.com/videos/fundamentals/create-a-new-module/
https://www.youtube.com/watch?v=Kk7du0r4CAQ
https://devdocs.magento.com/guides/v2.3/extension-dev-guide/routing.html
https://www.mageplaza.com/magento-2-module-development/view-block-layout-template-magento-2.html
http://www.codextblog.com/magento-2/make-ajax-call-magento-2-module/
https://www.magestore.com/magento-2-tutorial/how-to-create-and-upgrade-database-in-magento-2/
https://mage2.pro/t/topic/5332
https://magento.stackexchange.com/questions/132418/magento-2-how-to-add-css-and-js-in-custom-module-in-magento-2
----------------------------------------
http://magento2.sv/index.php/learning-first-unit/helloworld/index
----------------------------------------

Commands:
php bin/magento module:enable Learning_FirstUnit
php bin/magento setup:upgrade
grep Learning app/etc/config.php
php bin/magento deploy:mode:set developer
php bin/magento setup:di:compile
php bin/magento cache:flush

php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy
php bin/magento cache:clean

php bin/magento indexer:reindex
php bin/magento indexer:info

bin/magento setup:static-content:deploy
----------------------------------------

https://devdocs.magento.com/guides/v2.3/extension-dev-guide/routing.html

    %routerId - specifies the name of the router in Magento.
    See the reference tables in the Router class section.
    %routeId% - specifies the unique node id for this route in Magento.
    %frontName% - specifies the first segment after the base URL of a request.
    %moduleName% - specifies the name of your module.

Module path
http://magento2.sv/index.php/route_id/controller/action

----------------------------------------

https://magento.stackexchange.com/questions/174096/magento-2-ajax-admin
Don't forget to remove var/generation folder after adding new controller in Magento 2

----------------------------------------
https://www.integer-net.com/why-you-should-not-use-escapenotverified-in-magento-templates/
https://magento.stackexchange.com/questions/92963/magento-2-escapenotverified
/* @noEscape */ before output. Output doesn’t require escaping. Test is green.
/* @escapeNotVerified */ before output. Output escaping is not checked and should be verified. Test is green.
----------------------------------------