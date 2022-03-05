<?php

namespace Darvishani\ProductVisibility\Plugin;

use Magento\Catalog\Helper\Product;

class ChangeCanShowProduct
{

    const PRODUCT_Visibility= 5 ;

    /**
     * @param Product $subject
     * @param bool $result
     * @param int|ModelProduct $product
     * @param string $where
     * @return bool
     */
    public function afterCanShow(Product $subject, bool $result, $product, $where = 'catalog'): bool
    {
        if($result==false){
            if($product->getData('visibility')==self::PRODUCT_Visibility){
                $result=  true;
            }
        }
        return $result;
    }
}
