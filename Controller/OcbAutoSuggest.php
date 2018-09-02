<?php

namespace OxidCommunity\OcbAutoSuggest\Controller;

use OxidCommunity\OcbAutoSuggest\Controller\OcbAutoSuggest;
use OxidEsales\Eshop\Core\Registry;
use OxidEsales\Eshop\Application\Model\Search;

include '../../../../bootstrap.php';
$autosuggest = oxNew(OcbAutoSuggest::class);
$autosuggest->search();

class OcbAutoSuggest
{

    public function search()
    {
        echo (json_encode($this->_getProductResult()));
    }

    /**
     * Selects the productdata and returns a minimal array
     *
     * @return array
     */

    protected function _getProductResult()
    {
        $oConfig  = Registry::getConfig();
        $term     = $oConfig->getRequestParameter('term');
        $oSearch  = oxNew(Search::class);
        $oArtList = $oSearch->getSearchArticles($term);
        $currency = $oConfig->getActShopCurrencyObject()->sign;
        $aResult  = [];

        if ($oArtList != null) {
            foreach ($oArtList as $oArticle) {
                $aResult[] = [
                    'label' => $oArticle->oxarticles__oxtitle->value,
                    'value' => $oArticle->oxarticles__oxartnum->value,
                    'price' => Registry::getLang()->formatCurrency($oArticle->getPrice()->getPrice()) . $currency,
                    'link'  => $oArticle->getMainLink() . '?searchparam=' . $term,
                    'image' => $oArticle->getThumbnailUrl()
                ];
            }
        }
        return $aResult;
    }
}
