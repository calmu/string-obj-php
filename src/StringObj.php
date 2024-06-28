<?php
declare(strict_types=1);

namespace CalStringObj;

use JsonSerializable;

/**
 * ++++++++++++++++
 *  Simply use the string as an object
 * ++++++++++++++++
 *
 * Class StringObj
 * @package CalStringObj
 * @author huang_calvin@163.com
 * @dateTime 2021-6-28 17:16
 *
 */
class StringObj implements JsonSerializable
{
	public function __construct(protected string $str = ''){}

	public function __toString(): string
	{
		return $this->str;
	}

	/**
	 * @return string
	 */
	public function getStr(): string
	{
		return $this->str;
	}

	/**
	 * @param string $str
	 */
	public function setStr(string $str): void
	{
		$this->str = $str;
	}

	public function jsonSerialize(): string
	{
		return $this->str;
	}
}