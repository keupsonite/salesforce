<?php
/**
* 2012-2015 ZL Development
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@zakarialounes.fr so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to https://www.zakarialounes.fr for more information.
*
*  @author    ZL Development <me@zakarialounes.fr>
*  @copyright 2012-2015 ZL Development
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*/

$sql = array();

$sql[] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'salesforce` (
    `id_salesforce` int(11) NOT NULL AUTO_INCREMENT,
    PRIMARY KEY  (`id_salesforce`)
) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;';

foreach ($sql as $query)
	if (Db::getInstance()->execute($query) == false)
		return false;
