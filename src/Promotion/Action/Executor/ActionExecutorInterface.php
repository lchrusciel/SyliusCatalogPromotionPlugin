<?php

namespace Locastic\SyliusCatalogPromotionPlugin\Promotion\Action\Executor;

use Locastic\SyliusCatalogPromotionPlugin\Entity\CatalogPromotionInterface;
use Locastic\SyliusCatalogPromotionPlugin\Entity\ChannelPricingInterface;

interface ActionExecutorInterface
{
    public function execute(ChannelPricingInterface $channelPricing, array $configuration, CatalogPromotionInterface $catalogPromotion): void;
}