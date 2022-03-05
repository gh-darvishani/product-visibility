<?php

namespace Darvishani\ProductVisibility\Plugin;

use Magento\Catalog\Model\Product\Visibility;

class AddNewProductVisibility
{
    const PRODUCT_Visibility= 5 ;

    /**
     * @param Visibility $subject
     * @param array $result
     * @return array
     */
    public function afterToOptionArray(Visibility $subject, array $result): array
    {
         $result[] = ['value' => self::PRODUCT_Visibility, 'label' => __('Product')];
         return $result;
    }
}
