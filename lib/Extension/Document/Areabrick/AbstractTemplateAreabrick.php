<?php

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */

namespace Pimcore\Extension\Document\Areabrick;

/**
 * Base brick with template autoloading capabilities.
 *
 * Depending on the result of getTemplateLocation() and getTemplateSuffix() the tag handler builds the
 * following references:
 *
 * - @<bundle>/[A|a]reas/<brickId>/view.<suffix>
 *      -> resolves to <bundle>/templates/[A|a]reas/<brickId>/view.<suffix> (Symfony >= 5 structure)
 *         or <bundle>/Resources/views/[A|a]reas/<brickId>/view.<suffix> (Symfony <= 4 structure)
 * - areas/<brickId>/view.<suffix>
 *      -> resolves to <project>/templates/areas/<brickId>/view.<suffix>
 */
abstract class AbstractTemplateAreabrick extends AbstractAreabrick
{
    /**
     * {@inheritdoc}
     */
    public function getTemplate()
    {
        // return null by default = auto-discover
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getTemplateLocation()
    {
        return static::TEMPLATE_LOCATION_GLOBAL;
    }

    /**
     * {@inheritdoc}
     */
    public function getTemplateSuffix()
    {
        return static::TEMPLATE_SUFFIX_TWIG;
    }
}
