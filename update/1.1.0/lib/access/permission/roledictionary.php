<?php
namespace Awz\Agelimit\Access\Permission;

abstract class RoleDictionary extends \Bitrix\Main\Access\Role\RoleDictionary
{
	public static function getAvailableRoles(): array
	{
		return [];
	}
}