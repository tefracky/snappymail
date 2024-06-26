<?php

/*
 * This file is part of MailSo.
 *
 * (c) 2014 Usenko Timur
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace MailSo\Mime\Enumerations;

/**
 * @category MailSo
 * @package Mime
 * @subpackage Enumerations
 */
//enum DkimStatus:string
//final class DkimStatus extends \BackedEnumString
abstract class DkimStatus
{
	const NONE = 'none';
	const PASS = 'pass';
	const FAIL = 'fail';
	const POLICY = 'policy';
	const NEUTRAL = 'neutral';
	const TEMP_ERROR = 'temperror';
	const PREM_ERROR = 'permerror';

	public static function verifyValue(string $sStatus) : bool
	{
		return \in_array($sStatus, array(
			self::NONE,
			self::PASS,
			self::FAIL,
			self::POLICY,
			self::NEUTRAL,
			self::TEMP_ERROR,
			self::PREM_ERROR,
		));
	}

	public static function normalizeValue(string $sStatus) : string
	{
		$sStatus = \strtolower(\trim($sStatus));
		return self::verifyValue($sStatus) ? $sStatus : self::NONE;
	}
}
