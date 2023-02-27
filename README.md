The «[**European Central Bank Currency Converter**](https://mage2.pro/t/375)» extension for Magento 2 retrieves currency exchange rates from the **European Central Bank** as a more reliable alternative to the built-in Magento **WebserviceX.NET** currency converter, which [sometimes does not work](https://www.google.com/search?q=WebserviceX.NET+does+not+work) (see also the issue [2757](https://github.com/magento/magento2/issues/2757)).  
The module is **free** and **open source**.

![](https://mage2.pro/uploads/default/original/1X/e1cec0d1a2bb931c266cc4f312e4e2d850ad94e2.png)

## How to install
[Hire me in Upwork](https://upwork.com/fl/mage2pro), and I will: 
- install and configure the module properly on your website
- answer your questions
- solve compatiblity problems with third-party checkout, shipping, marketing modules
- implement new features you need 

### 2. Self-installation
```
bin/magento maintenance:enable
rm -f composer.lock
composer clear-cache
composer require mage2pro/currency-convert:*
bin/magento setup:upgrade
bin/magento cache:enable
rm -rf var/di var/generation generated/code
bin/magento setup:di:compile
rm -rf pub/static/*
bin/magento setup:static-content:deploy -f en_US <additional locales>
bin/magento maintenance:disable
```

## How to update
```
bin/magento maintenance:enable
composer remove mage2pro/currency-convert
rm -f composer.lock
composer clear-cache
composer require mage2pro/currency-convert:*
bin/magento setup:upgrade
bin/magento cache:enable
rm -rf var/di var/generation generated/code
bin/magento setup:di:compile
rm -rf pub/static/*
bin/magento setup:static-content:deploy -f en_US <additional locales>
bin/magento maintenance:disable
```