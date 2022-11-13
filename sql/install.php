<?php
/**
* 2007-2022 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2022 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/
$sql = array();

$sql[] = 'CREATE TABLE IF NOT EXISTS `ps_ide` (
    `id_ide` int(11) NOT NULL AUTO_INCREMENT, 
    `is_free` NUMBER(1), 
    `version` VARCHAR2(10), 
    `name` VARCHAR2(20),
    `manufacturer` VARCHAR2(20),
    `image_path` VARCHAR2(30),
    FOREIGN KEY (`fk_id_product`) REFERENCES ps_product(`id_product`),
    PRIMARY KEY  (`id_ide`)
) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8;';




$sql[] = 'CREATE TABLE IF NOT EXISTS `ps_ide_lang` (
    `id_lang` int(11) NOT NULL AUTO_INCREMENT, 
    `description` VARCHAR2(10), 
    FOREIGN KEY (`id_ide`) REFERENCES ps_ide(`id_ide`),
    PRIMARY KEY  (`id_lang`)
) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8;';

foreach ($sql as $query) {
    if (Db::getInstance()->execute($query) == false) {
        return false;
    }
}
