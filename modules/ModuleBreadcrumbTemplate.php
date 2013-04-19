<?php

/**
 * @copyright  Helmut Schottmüller 2012-2013
 * @author     Helmut Schottmüller <https://github.com/hschottm/breadcrumbtemplate>
 * @package    breadcrumbtemplate
 * @license    LGPL
 */

namespace Contao;

/**
 * Class ModuleBreadcrumbTemplate
 *
 * Front end module "breadcrumb".
 * @copyright  Helmut Schottmüller 2012-2013
 * @author     Helmut Schottmüller <https://github.com/hschottm/breadcrumbtemplate>
 * @package    Controller
 */
class ModuleBreadcrumbTemplate extends ModuleBreadcrumb
{
	/**
	 * Display a wildcard in the back end
	 * @return string
	 */
	public function generate()
	{
		$this->strTemplate = $this->breadcrumbTpl;
		return parent::generate();
	}
}

?>