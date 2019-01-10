<?php
/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = [
    'id'          => 'pnstocklow',
    'title'       => 'StockLow', 
    'version'     => '1.0',
    'author'      => 'Philipp Nopper',
    'email'       => 'juniordevlearning@gmail.com'
    'extend'     => [
        \OxidEsales\Eshop\Application\Model\Article::class => pn\StockLow\Application\Model\StockLowArticle::class
    ],
    'blocks'      => [
        [
            'template' => 'page/details/inc/productmain.tpl',
            'block'    => 'details_productmain_stockstatus',
            'file'     => 'Application/views/blocks/details_productmain_stockstatus.tpl',
        ],
        [
            'template' => 'article_stock.tpl',
            'block'    => 'admin_article_stock_form',
            'file'     => 'Application/views/blocks/admin/admin_article_stock_form.tpl',
        ]
    ],
    'events'       => array(
        'onActivate'   => '\pn\StockLow\Core\Events::onActivate',
    ),
];
