<?php

namespace pn\StockLow\Application\Model;

use OxidEsales\EshopCommunity\Core\DatabaseProvider;


class StockLowArticle extends StockLowArticle_parent
{
    public function getLowStockMessage($oxid)
    {
        $lowStock = DatabaseProvider::getDb()->select("Select oxlowstocktext from oxarticles where oxid = '$oxid'");
        $lowStockMessage = $lowStock->fetchAll();

        return $lowStockMessage[0][0];
    }
}