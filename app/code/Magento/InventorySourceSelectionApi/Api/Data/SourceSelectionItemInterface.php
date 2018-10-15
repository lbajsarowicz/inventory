<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\InventorySourceSelectionApi\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

/**
 * Represents source selection result for the specific source and SKU
 *
 * @api
 */
interface SourceSelectionItemInterface extends ExtensibleDataInterface
{
    /**
     * Get source code
     *
     * @return string
     */
    public function getSourceCode(): string;

    /**
     * Get item SKU
     *
     * @return string
     */
    public function getSku(): string;

    /**
     * Get quantity which will be deducted for this source
     *
     * @return float
     */
    public function getQtyToDeduct(): float;

    /**
     * Get available quantity for this source
     *
     * @return float
     */
    public function getQtyAvailable(): float;

    /**
     * Retrieve existing extension attributes object
     *
     * Null for return is specified for proper work SOAP requests parser
     *
     * @return \Magento\InventorySourceSelectionApi\Api\Data\SourceSelectionItemExtensionInterface|null
     */
    public function getExtensionAttributes();

    /**
     * Set an extension attributes object
     *
     * @param \Magento\InventorySourceSelectionApi\Api\Data\SourceSelectionItemExtensionInterface $extensionAttributes
     * @return void
     */
    public function setExtensionAttributes(SourceSelectionItemExtensionInterface $extensionAttributes);
}
