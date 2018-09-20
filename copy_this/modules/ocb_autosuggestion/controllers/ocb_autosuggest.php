<?php

include '../../../bootstrap.php';
$autosuggest = oxNew('ocb_autosuggest');
$autosuggest->search();

class ocb_autosuggest
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
        $oConfig  = oxRegistry::getConfig();
        $term     = $oConfig->getRequestParameter('term');
        $oSearch  = oxNew('oxSearch');
        $oArtList = $oSearch->getSearchArticles($term);
        $currency = $oConfig->getActShopCurrencyObject()->sign;
        $aResult  = array();

        if ($oArtList != null) {
            foreach ($oArtList as $oArticle) {
                $aResult[] = array(
                    'label' => $oArticle->oxarticles__oxtitle->value,
                    'value' => $oArticle->oxarticles__oxartnum->value,
                    'price' => oxRegistry::getLang()->formatCurrency($oArticle->getPrice()->getPrice()) . $currency,
                    'link'  => $oArticle->getMainLink() . '?searchparam=' . $term,
                    'image' => $oArticle->getThumbnailUrl()
                );
            }
        }
        return $aResult;
    }
}
