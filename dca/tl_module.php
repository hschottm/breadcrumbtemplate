<?php

/**
 * @copyright  Helmut Schottmüller 2012-2013
 * @author     Helmut Schottmüller <https://github.com/hschottm/breadcrumbtemplate>
 * @package    breadcrumbtemplate
 * @license    LGPL
 */

/**
 * Table tl_module 
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['breadcrumb'] = str_replace(';{protected_legend', ';{template_legend:hide},breadcrumbTpl;{protected_legend', $GLOBALS['TL_DCA']['tl_module']['palettes']['breadcrumb']);


$GLOBALS['TL_DCA']['tl_module']['fields']['breadcrumbTpl'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['breadcrumbTpl'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options_callback'        => array('tl_module_breadcrumb', 'getBreadcrumbTemplates'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

class tl_module_breadcrumb extends tl_module
{
	/**
	 * Return all navigation templates as array
	 * @param DataContainer
	 * @return array
	 */
	public function getBreadcrumbTemplates(DataContainer $dc)
	{
		$intPid = $dc->activeRecord->pid;

		if (\Input::get('act') == 'overrideAll')
		{
			$intPid = $this->Input->get('id');
		}

		return $this->getTemplateGroup('mod_breadcrumb', $intPid);
	}
}

?>