<?php

namespace Locastic\SyliusCatalogPromotionPlugin\Entity;

use Sylius\Component\Core\Model\ChannelPricingInterface as BaseChannelPricingInterface;

interface ChannelPricingInterface extends BaseChannelPricingInterface
{
    public function applyCatalogPromotionAction(CatalogPromotionInterface $catalogPromotion, int $promoAmount): void;

    public function detachCatalogPromotionAction(): void;

    public function getPreCatalogPrice(): ?int;

    public function setPreCatalogPrice(int $catalogPromoPrice): void;

    public function getAppliedCatalogPromotion(): ?CatalogPromotionInterface;
}
