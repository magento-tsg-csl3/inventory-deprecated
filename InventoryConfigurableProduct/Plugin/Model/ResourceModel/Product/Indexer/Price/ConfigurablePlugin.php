<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\InventoryConfigurableProduct\Plugin\Model\ResourceModel\Product\Indexer\Price;

use Magento\ConfigurableProduct\Model\ResourceModel\Product\Indexer\Price\Configurable;
use Magento\Framework\App\ResourceConnection;
use Magento\Framework\DB\Select;
use Magento\InventoryApi\Api\Data\SourceItemInterface;

/**
 * Plugin for Configurable to join inventory source items.
 */
class ConfigurablePlugin
{
    /**
     * @var Configurable
     */
    private $configurable;

    /**
     * @var ResourceConnection
     */
    private $resourceConnection;

    /**
     * @param Configurable $configurable
     * @param ResourceConnection $resourceConnection
     */
    public function __construct(
        Configurable $configurable,
        ResourceConnection $resourceConnection
    ) {
        $this->configurable = $configurable;
        $this->resourceConnection = $resourceConnection;
    }

    /**
     * Join inventory source item table to get in_stock items
     *
     * @param Configurable $subject
     * @param Select $result
     * @return Select
     */
    public function afterJoinStockItemsTable(Configurable $subject, Select $result): Select
    {
        $result->join(
            ['isi' => $this->resourceConnection->getTableName('inventory_source_item')],
            'isi.source_item_id = l.product_id',
            []
        );
        $result->orWhere('isi.status = ?', SourceItemInterface::STATUS_IN_STOCK);

        return $result;
    }
}
