<?php
namespace Dfe\CurrencyConvert;
use Magento\Directory\Model\Currency\Import\AbstractImport;
class Ecb extends AbstractImport {
	/**
	 * 2016-01-01
	 * @override
	 * @see \Magento\Directory\Model\Currency\Import\AbstractImport::_convert()
	 * @used-by \Magento\Directory\Model\Currency\Import\AbstractImport::fetchRates()
	 * @param string $currencyFrom
	 * @param string $currencyTo
	 * @return float
	 */
	protected function _convert($currencyFrom, $currencyTo) {
		return df_float(dfa($this->rates($currencyFrom), $currencyTo, 0.0));
	}

	/**
	 * 2016-01-01
	 * @param string $base
	 * @return array(string => float)
	 */
	private function rates($base) {return dfc($this, function($base) {return dfa(
		df_http_json('http://api.fixer.io/latest', ['base' => $base]), 'rates', []
	);}, [$base]);}
}