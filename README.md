# Stock-Low-Module für Oxid Eshop 6.0

## Beschreibung
Beim Aktivieren des Moduls wird in der Tabelle oxArticles ein extra Feld pnlowstocktext angelegt. Dieses Feld kann dann im Admin unter Artikel verwalten -> Artikel -> "wähle einen Artikel aus" -> Lager befüllt werden.


## Installation

Verbinde dich mit deinem Webserver über SSH und navigiere in das Shopverzeichnis "source/modules/" dort folgenden Befehl ausführen: composer require jdl/stock-low-module:dev-master. 
Anschließend alle Meldungen mit y bestätigen. Nun kann das Modul im Admin aktiviert werden. Wenn es im Admin Probleme gibt kann es helfen den tmp ordner zu leeren und die views neu zu generieren.


## Anmerkungen
- Nur mit php 7.0 getestet
- Der Text kann momentan nur in einer Sprache ausgegeben werden, das Modul ist also noch nicht für Multilinguale Shops geeignet
- Bei Fragen, Problemen, oder Anmerkungen gerne eine Mail an juniordevlearning@gmail.com


