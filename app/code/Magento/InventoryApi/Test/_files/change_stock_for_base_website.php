<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

use Magento\TestFramework\Helper\Bootstrap;
use Magento\InventoryApi\Api\StockRepositoryInterface;
use Magento\InventorySalesApi\Api\Data\SalesChannelInterfaceFactory;
use Magento\InventorySalesApi\Api\Data\SalesChannelInterface;

$objectManager = Bootstrap::getObjectManager();
/** @var StockRepositoryInterface $stockRepository */
$stockRepository = $objectManager->get(StockRepositoryInterface::class);
/** @var SalesChannelInterfaceFactory $salesChannelFactory */
$salesChannelFactory = $objectManager->get(SalesChannelInterfaceFactory::class);




$stock = $stockRepository->get(20);
$extensionAttributes = $stock->getExtensionAttributes();
$salesChannel = $salesChannelFactory->create();
$salesChannel->setCode('base');
$salesChannel->setType(SalesChannelInterface::TYPE_WEBSITE);
$extensionAttributes->setSalesChannels([$salesChannel]);
$stockRepository->save($stock);
