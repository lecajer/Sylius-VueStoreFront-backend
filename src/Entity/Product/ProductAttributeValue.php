<?php

declare(strict_types=1);

namespace App\Entity\Product;

use BitBag\SyliusVueStorefront2Plugin\Model\ProductAttributeValueTrait;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Index;
use Sylius\Component\Product\Model\ProductAttributeValue as BaseProductAttributeValue;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_product_attribute_value", indexes={@Index(name="locale_code", columns={"locale_code"})}))
 */
class ProductAttributeValue extends BaseProductAttributeValue
{
    use ProductAttributeValueTrait;
}
