<?php
/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2012 Leo Feyer
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
 * @copyright  Joe Ray Gregory
 * @author     Joe Ray Gregory <http://www.may17.de>
 * @package    m17CenterImage
 * @license    LGPL
 */

class M17CenterImage extends Frontend {
    public function addCenterImage($objTemplate)
    {
        if ($objTemplate->type == 'text' && ($objTemplate->floating == 'below-center' || $objTemplate->floating == 'above-center'))
        {
            $objTemplate->addBefore = $this->getBeforeOrAfter($objTemplate->floating);
        } else if($objTemplate->type == 'image' && $objTemplate->m17CenterSingleImage) {
            $objTemplate->class = $objTemplate->class.' center-single-image';
        }
    }

    private function getBeforeOrAfter($state)
    {
        if($state === 'above-center')
        {
            return true;
        }
        else if($state === 'below-center')
        {
            return false;
        }
    }
}