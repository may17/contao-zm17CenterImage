<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Joe Ray Gregory 2011 - 2013
 * @author     Joe Ray Gregory <j.r.gregory@gmx.de>
 * @license    LGPL http://opensource.org/licenses/lgpl-3.0.html
 */
 
array_insert($GLOBALS['TL_DCA']['tl_content']['fields']['floating']['options'], 1, 'above-center');
array_push($GLOBALS['TL_DCA']['tl_content']['fields']['floating']['options'], 'below-center');

$GLOBALS['TL_DCA']['tl_content']['fields']['floating']['eval']['cols'] = 5;

/*
    Add new Field for Image Centering
*/

$GLOBALS['TL_DCA']['tl_content']['palettes']['image'] = str_replace
(
    'caption',
    'caption,m17CenterSingleImage',
    $GLOBALS['TL_DCA']['tl_content']['palettes']['image']
);

$GLOBALS['TL_DCA']['tl_content']['fields']['m17CenterSingleImage'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['m17CenterSingleImage'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50')
);