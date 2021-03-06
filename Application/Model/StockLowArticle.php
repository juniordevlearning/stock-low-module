<?php

namespace pn\StockLow\Application\Model;

use OxidEsales\EshopCommunity\Core\DatabaseProvider;


class StockLowArticle extends StockLowArticle_parent
{
    public function getLowStockMessage($oxid)
    {
        $lowStock = DatabaseProvider::getDb()->select("Select pnlowstocktext from oxarticles where oxid = '$oxid'");
        $lowStockMessage = $lowStock->fetchAll();

        return $lowStockMessage[0][0];
    }

    public function getLowStockMessageEn($oxid)
    {
        $lowStock = DatabaseProvider::getDb()->select("Select pnlowstocktext_1 from oxarticles where oxid = '$oxid'");
        $lowStockMessage = $lowStock->fetchAll();

        return $lowStockMessage[0][0];
    }
}