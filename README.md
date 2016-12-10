# diakritik_api
[EN] PHP API for adding diacritic to non-diacritic text. (Work only for Slovak language)

[SK] PHP API pre prídavanie diakritiky do bez interpunkcie textu. (Funguje iba pre Slovenčinu)

I'm writing this README file bilingual (English / Slovak) so each paragraph will be written first in English (taged with EN), than in Slovak (taged with SK).

Tento README (ČÍTAJ MA) súbor píšem dvojjazyčne (Angličtina / Slovenčina) takže každý paragraf bude napísaný naprv v angličtine (označený [EN], potom v Slovenčine (označený [SK]).

# [EN] Description
This api works by using [Diakritik](http://diakritik.korpus.sk/) from Slovak korpus. That means all rights for adding diacritics to text belongs to them.
So if they are adding diacritics you may ask why I had written my API. The reason is they haven't got any api, they have got only some formular with graphic interface - you cannot send an GET request to their engine and get back raw text.

## How does API work?
### Get text
Get text in which we want to add diacritic.
You can insert text by 3 ways. You can send text as GET parameter, POST parameter or load API without any parameters and fill the form (textarea) and submit it.
### Add diacritics
API sends GET request do [Diakritik](http://diakritik.korpus.sk/) and get back text with added diacritics.
### Show the result
Show the result (text with added diacritics) depending on "plugin" parameter.

## How to use API
### Formular way
Load link to API url in any webbrowser. Fill text without diacritics inside textarea and click on submit button. The result with correct encoding (API sends HTML meta tag) will be showed to you.
### GET way
Load API with "text=some text" parameter for example index.php?text=some%20text%without%20diacritics
There are also "plugin" parameter. If you send "plugin=ano" parameter to api, result will be showed in raw format (without HTML meta tag).

## Browser "plugin"
You can also use API with browser "plugin"(javascript bookmark) which I had programmed. [Diakritik Plugin - Javascript Bookmark](https://github.com/nitram147/diakritik_bookmark)

# [SK] Popis
API funguje za použitia [Diakritik](http://diakritik.korpus.sk/) zo Slovenského korpusu. To znamená že všetky práva na pridávanie diakritiky prislúchajú Slovenskému korpusu.
Mohli by ste sa spýtať prečo som naprogramoval toto API, keď už slovenský korpus pridáva diakritiku. Dôvod je ten že [Diakritik](http://diakritik.korpus.sk/) od Slovenského korpusu disponuje iba grafickým prostredím - nemôžete poslať GET požiadavok a dostať späť text v čistom formáte.

## Ako API funguje
### Získanie textu
Získa text do ktorého chceme pridať diakritiku. Vieme ho vložiť 3 cestami. Ako GET parameter, POST parameter alebo načítať aby bez parametrov a vyplniť text bez diakritiky do formuláru.
### Pridanie diakritiky
API pošle GET požiadavok na [Diakritik](http://diakritik.korpus.sk/) a získa späť text s pridanou diakritikou.
### Zobrazenie výsledku
Výsledok (text s pridanou diakritikou) je zobrazený v závislosti na "plugin" parametry.

## Ako používať API
### Formulár
Načítame link na naše API v hocijakom webovom prehliadači. Vyplníme textové pole vo formuláry textom a stlačíme tlačítko "pošli". Výsledok sa nám zobrazí v prehliadači (API pošle aj HTML meta hlavičku so správnym encodingom).
### GET požiadavok
Načítame API s parametrom "text=nejaky text" napríklad index.php?text=nejaky%20text%20bez%20diakritiky
K dispozícii je aj "plugin" parameter. Ak pošlete parameter "plugin=ano" API vráti výsledok vo formáte čistého textu (bez HTML meta hlavičky).

## "Plugin" do prehliadača
Pre jednoduchšie využitie API som naprogramoval aj "plugin" do prehliadača vo formáte záložky s JavaScriptom. [Záložka](https://github.com/nitram147/diakritik_bookmark)
