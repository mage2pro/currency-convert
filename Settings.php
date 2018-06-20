<?php
namespace Dfe\CurrencyConvert;
// 2018-06-20
/** @method static Settings s() */
final class Settings extends \Df\Config\Settings {
	/**
	 * 2018-06-20
	 * @return string|null
	 */
	function accessKey() {return $this->p();}

	/**
	 * 2018-06-20
	 * @override
	 * @see \Df\Config\Settings::prefix()
	 * @used-by \Df\Config\Settings::v()
	 * @return string
	 */
	protected function prefix() {return 'df_api/fixer';}
}