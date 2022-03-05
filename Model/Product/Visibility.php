<?php

namespace Darvishani\ProductVisibility\Model\Product;

class Visibility extends \Magento\Catalog\Model\Product\Visibility
{
    const PRODUCT_Visibility= 5 ;

    public static function getAllOptions()
    {
        $options= parent::getAllOptions();
        $options[]=['value' => self::PRODUCT_Visibility, 'label' => __('Product')];

        return $options;
    }

}
