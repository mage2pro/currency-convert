<?php
namespace Dfe\CurrencyConvert;
# 2018-06-20
/** @method static Settings s() */
final class Settings extends \Df\Config\Settings {
	/**
	 * 2018-06-20
	 * @return string|null
	 */
	function accessKey() {return $this->b('customAccessKey') ? $this->p() : 'f3ec8c540499e4bcd75de4ee09fcbed1';}

	/**
	 * 2018-06-20
	 * @override
	 * @see \Df\Config\Settings::prefix()
	 * @used-by \Df\Config\Settings::v()
	 */
	protected function prefix():string {return 'df_api/fixer';}
}