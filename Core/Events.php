<?php

namespace pn\StockLow\Core;

class Events
{
    protected function addStockLowColumn()
    {
        $query = "ALTER TABLE oxarticles
        ADD column pnlowstocktext varchar(255) not null,
        ADD column pnlowstocktext_1 varchar(255) not null after pnlowstocktext;";

      \OxidEsales\Eshop\Core\DatabaseProvider::getDb()->execute($query);
    }

    public function onActivate()
    {
        self::addStockLowColumn();
    }
}