<?php
declare(strict_types=1);

use CalStringObj\StringObj;

if (!function_exists('cal_string_obj')) {
	/**
	 * ++++++++++++++++
	 *  描述
	 * ++++++++++++++++
	 *
	 * @param string $str
	 * @return StringObj
	 * @author huang_calvin@163.com
	 * @dateTime 2023-6-3 10:56
	 */
	function cal_string_obj(string $str): StringObj
	{
		return new StringObj($str);
	}
}