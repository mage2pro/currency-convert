The «[**European Central Bank Currency Converter**](https://mage2.pro/t/375)» extension for Magento 2 retrieves currency exchange rates from the **European Central Bank** as a more reliable alternative to the built-in Magento **WebserviceX.NET** currency converter, which [sometimes does not work](https://www.google.com/search?q=WebserviceX.NET+does+not+work) (see also the issue [2757](https://github.com/magento/magento2/issues/2757)).

![](https://mage2.pro/uploads/default/original/1X/e1cec0d1a2bb931c266cc4f312e4e2d850ad94e2.png)

## How to install
```
composer require mage2pro/currency-convert:*
bin/magento setup:upgrade
rm -rf pub/static/* && bin/magento setup:static-content:deploy <locale, e.g.: en_GB>
rm -rf var/di var/generation && bin/magento setup:di:compile
```
If you have some problems while executing these commands, then check the [detailed instruction](https://mage2.pro/t/263).

## Support
- [The extension's **forum** branch](https://mage2.pro/t/375).
- [Where and how to report a Mage2.PRO extension's issue?](https://mage2.pro/t/2034)
- I also provide a **[generic Magento 2 support](https://mage2.pro/t/topic/755)** and [Magento 2 installation service](https://mage2.pro/t/748).

## Want to be notified about the extension's updates?
- [Subscribe](https://mage2.pro/t/2540) to the extension's [forum branch](https://mage2.pro/t/375).
- Subscribe to my [Twitter](https://twitter.com/mage2_pro) and [YouTube](https://www.youtube.com/channel/UCvlDAZuj01_b92pzRi69LeQ) channels.

## Need a new feature?
I provide the [**customization service**](https://mage2.pro/t/2020) for my payment extensions.

## Need a payment extension for Magento 2?

- «[**2Checkout**](https://mage2.pro/c/extensions/2checkout)» payment extension.
- «[**歐付寶 allPay**](https://mage2.pro/c/extensions/allpay)» payment extension (Taiwan).
- «[**Checkout.com**](https://mage2.pro/c/extensions/checkout-com)» payment extension
- «[**Ginger Payments**](https://mage2.pro/c/extensions/ginger-payments)» extension (the Netherlands, Belgium).
- «[**iPay88**](https://mage2.pro/c/extensions/ipay88)» payment extension (Malaysia, Indonesia, Philippines, Thailand, Singapore, China).
- «[**iyzico**](https://mage2.pro/c/extensions/iyzico)» payment extension (Turkey).
- «[**Kassa Compleet**](https://mage2.pro/c/extensions/kassa-compleet)» payment extension by ING Bank (the Netherlands).
- «[**Klarna**](https://mage2.pro/c/extensions/klarna)» payment extension (Austria, Denmark, Finland, Germany, Norway, Sweden).
- «[**mPAY24**](https://mage2.pro/c/extensions/mpay24)» payment extension (Austria, Germany).
- «[**Omise**](https://mage2.pro/c/extensions/omise)» payment extension (Thailand, Japan).
- «[**Paymill**](https://mage2.pro/c/extensions/paymill)» payment extension (the European Union).
- «[**Paystation**](https://mage2.pro/c/extensions/paystation)» payment extension (New Zealand).
- «[**Robokassa**](https://mage2.pro/c/extensions/robokassa)» payment extension (Russia).
- «[**SecurePay**](https://mage2.pro/c/extensions/securepay)» payment extension (Australia).
- «[**Spryng**](https://mage2.pro/c/extensions/spryng)» payment extension (the European Union).
- «[**Square**](https://mage2.pro/c/extensions/square)» payment extension (USA, Canada).
- «[**Stripe**](https://mage2.pro/c/extensions/stripe)» payment extension.

## See also my other Magento 2 extensions:

- «[**Price Format**](https://mage2.pro/c/extensions/price-format)» (set a custom display format for the prices and other currency values: discounts, taxes, sales amounts).
- «[**Sales Documents Numeration**](https://mage2.pro/c/extensions/sales-documents-numeration)» (use a custom numeration for the sales documents: orders, invoices, shipments, and credit memos).
- «[**Login with Amazon**](https://mage2.pro/c/extensions/amazon-login)» (a single sign-on extension). 
- «[**Backend Login with Google Account**](https://mage2.pro/c/extensions/google-backend-login)» (a single sign-on extension for the Magento 2 backend). 
- «[**Facebook Login**](https://mage2.pro/c/extensions/facebook-login)» (a single sign-on extension).
- «[**Blackbaud NetCommunity**](https://mage2.pro/c/extensions/blackbaud-netcommunity)» (an  integration with an online fundraising software).  
- «[**Markdown Editor**](https://mage2.pro/c/extensions/markdown)» (an alternative content editor for the Magento 2 backend).
- «[**Twitter Timeline**](https://mage2.pro/c/extensions/twitter-timeline)» (shows your latest tweets in your store's frontend sidebar).
- «[**Facebook Like & Share**](https://mage2.pro/c/extensions/facebook-like)» (shows the Facebook's «Like» and «Share» buttons on the frontend product pages).

## Need a custom payment extension?
I provide a [custom payment gateway integration service](https://mage2.pro/t/917).