# Stock-Low-Module für Oxid Eshop 6.0

## Beschreibung
Beim Aktivieren des Moduls wird in der Tabelle oxArticles ein extra Feld pnlowstocktext angelegt. Dieses Feld kann dann im Admin unter Artikel verwalten -> Artikel -> "wähle einen Artikel aus" -> Lager befüllt werden.


## Installation

Verbinde dich mit deinem Webserver über SSH und navigiere in das Shopverzeichnis "source/modules/" dort folgenden Befehl ausführen: composer require jdl/stock-low-module. 
Anschließend alle Meldungen mit y bestätigen und im Admin das Modul aktivieren. Danach noch einmal unter Service -> Tools die Views updaten und fertig.


## Anmerkungen
- Nur mit php 7.0 getestet
- Der Text kann momentan nur in einer Sprache ausgegeben werden, das Modul ist also noch nicht für Multilinguale Shops geeignet
- Bei Fragen, Problemen, oder Anmerkungen gerne eine Mail an juniordevlearning@gmail.com


