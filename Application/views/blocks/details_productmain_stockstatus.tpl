[{if $oDetailsProduct->getStockStatus() == -1}]
    <span class="stockFlag notOnStock">
        <i class="fa fa-circle text-danger"></i>
        [{if $oDetailsProduct->oxarticles__oxnostocktext->value}]
            <link itemprop="availability" href="http://schema.org/OutOfStock"/>
            [{$oDetailsProduct->oxarticles__oxnostocktext->value}]
        [{elseif $oViewConf->getStockOffDefaultMessage()}]
            <link itemprop="availability" href="http://schema.org/OutOfStock"/>
            [{oxmultilang ident="MESSAGE_NOT_ON_STOCK"}]
        [{/if}]
        [{if $oDetailsProduct->getDeliveryDate()}]
            <link itemprop="availability" href="http://schema.org/PreOrder"/>
            [{oxmultilang ident="AVAILABLE_ON"}] [{$oDetailsProduct->getDeliveryDate()}]
        [{/if}]
    </span>
<!--stocklowmodule-->
[{elseif $oDetailsProduct->getStockStatus() == 1}]
    [{if $oView->getActiveLangAbbr() == "de"}]
        <link itemprop="availability" href="http://schema.org/InStock"/>
        <span class="stockFlag lowStock">
            <i class="fa fa-circle text-warning"></i>
            [{if $oDetailsProduct->getLowStockMessage($oDetailsProduct->oxarticles__oxid->value)}]
                [{$oDetailsProduct->getLowStockMessage($oDetailsProduct->oxarticles__oxid->value)}]
            [{else}]
                [{oxmultilang ident="LOW_STOCK"}]
            [{/if}]
        </span>
    [{else}]
        <link itemprop="availability" href="http://schema.org/InStock"/>
        <span class="stockFlag lowStock">
            <i class="fa fa-circle text-warning"></i> [{oxmultilang ident="LOW_STOCK"}]
        </span>
    [{/if}]
<!--stocklowmodule END-->
[{elseif $oDetailsProduct->getStockStatus() == 0}]
    <span class="stockFlag">
        <link itemprop="availability" href="http://schema.org/InStock"/>
        <i class="fa fa-circle text-success"></i>
        [{if $oDetailsProduct->oxarticles__oxstocktext->value}]
            [{$oDetailsProduct->oxarticles__oxstocktext->value}]
        [{elseif $oViewConf->getStockOnDefaultMessage()}]
            [{oxmultilang ident="READY_FOR_SHIPPING"}]
        [{/if}]
    </span>
[{/if}]
