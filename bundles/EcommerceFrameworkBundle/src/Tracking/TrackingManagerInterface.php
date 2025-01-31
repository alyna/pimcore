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

namespace Pimcore\Bundle\EcommerceFrameworkBundle\Tracking;

interface TrackingManagerInterface extends
    CategoryPageViewInterface,
    ProductImpressionInterface,
    ProductViewInterface,
    CartUpdateInterface,
    CartProductActionAddInterface,
    CartProductActionRemoveInterface,
    CheckoutInterface,
    CheckoutStepInterface,
    CheckoutCompleteInterface,
    TrackEventInterface
{
    /**
     * Returns the current javascript tracking codes for all trackers
     *
     * @return string
     */
    public function getTrackedCodes(): string;

    /**
     * Forwards all tracked tracking codes to the next request via FlashMesssageBag
     *
     * @return $this
     */
    public function forwardTrackedCodesAsFlashMessage(): static;
}
