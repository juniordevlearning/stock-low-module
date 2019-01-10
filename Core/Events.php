<?php

namespace pn\StockLow\Core;

class Events
{
    protected function addStockLowColumn()
    {
        $query = "ALTER TABLE oxarticles
        ADD pnlowstocktext varchar(255);";

      \OxidEsales\Eshop\Core\DatabaseProvider::getDb()->execute($query);
    }

    public function onActivate()
    {
        self::addStockLowColumn();
    }
}