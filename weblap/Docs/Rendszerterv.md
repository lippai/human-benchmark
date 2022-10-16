
Rendszerterv:

---------------------------------

#A rendszer célja:

	A weblapunk célja a felhasználók kognitív képességeinek tesztelése és fejlesztése különböző játékos feladatokkal. 
	Az oldal több féle tesztet is tartalmaz, amelyek mindegyike más-más képességekre támaszkodik.
	Többek között a vizuális és verbális memória, a reakció és a gépelési sebességet. 
	Ezek mind olyan mentális tevékenységek amely az agy legtöbb részét leköti. Segít az aktívabb és erősebb kognitív kapcsolatok kialakításában,
	amelyek javítják az agy általános kapacitását és működését.

---------------------------------

#Projekt terv:

	Projektmunkások és felelősségek:
		Backend munkálatok:
			Lippai Attila, Szabó László, Kóródi Marcell

		Frontend munkálatok:
			Szabó László

	A projekt részletfeladatokra van felosztva, mindenki egy adott tesztért felelős.

---------------------------------

#Üzleti folyamatok modellje:

	Üzleti szereplők: felhasználó, fejlesztők
	Üzleti folyamatok:
		-gombok használata (újrakezdés, adatbevitel, pontszám mentése)
		-megfelelő adatok bevitele
		-eredmény lekérése
		-tesztek közötti váltás
		-hibakezelés
	(üzleti ábra)

---------------------------------

#Követelmények:

	A készített program egy böngészőben megnyitható html.
	A html oldal tartalmazza a teszteket elérő ikonokat és rövid leírásukat. A kijelölt teszt ikonjára kattintva, megjelenik a kívánt teszt
	a játéknak a címével és annak egy rövid de egyszerű leírásával. A felhasználó egy gombnyomással elindíthatja a játékot. A játékok nem vesznek igénybe pár percnél többet és bármikor újrajátszhatóak. Ha a felhasználó a játékot nem rendeltetésszerűen használja, akkor az eredmény értékelhetetlen és a tesztet újra kell kezdeni. A sikeres kimenetelű tesztnél a felhasználó egy eredményt kap, amire lehetősége van elmenteni. 

	Mindegyik teszt játéknak külön, részletes követelményei vannak.

	Reakció teszt:
		- a tesztnek jól láthatóan érzékeltetnie kell az állapotváltozást, amire a felhasználó reagál és az idejét rögzíteni.

	Gépelési gyorsaság teszt:
		- a tesztnek visszajelzést kell adnia a felhasználónak, hogy a szövegnek megfelelő karaktereket ütötte-e be és annak az idejét rögzíteni.

	Szám memória teszt:
		-a teszt csak a megfelelő számsorrendet fogadhatja el a felhasználótól, amire meghatározott ideje van megadni.

	Célzás teszt:
		-a teszt csak a kijelölt helyen lévő kattintást fogadhatja el, annak az idejét rögzíteni.

	Verbális memória teszt:
		- a tesztnek az eddig meg nem jelenített szavakat "új" szóként, a megjelenített szavakat "látott" szavakként kell elkülönítenie.

	Vizuális memória teszt:
		- a teszt csak a felvillant négyzeteket fogadhatja el, a nem felvillant négyzetek kijelölése helytelen.

---------------------------------

#Funkcionális terv:

	A cél a tesztek kitöltésének játékos hangulat megteremtése. A játékok letisztultak, érthetőek és könnyen játszhatóak legyenek.
	A felhasználót arra bátorítani, hogy a játékot többször is kipróbálja jobb eredmény elérésének reményében.

	Rendszerszereplők:

		-felhasználó

	Rendszerhasználati esetek és lefutatásaik:

		- játék kiválasztása a főmenüből

		- játék futtatása, újraindítása, pont elmentése, játékból való kilépés

		- pont lista megtekintése

	Menü hierarchiák:

		-játék kiválasztása

	Képernyők tervek:

	(kép a menüről)
	(kép az egyik játékról)

---------------------------------

#Fizikai környezet:

	-Az alkalmazás web platformra készül

	-Rendelkezik tűzfallal és minden hálózati porton elérhető.

	-Megvásárolt komponensek nincsenek.

	-Fejlesztői eszközök: Visual Studio Code

---------------------------------

Implementációs terv:

	A szoftver egy html oldal, a funkcionalitást a JavaScipt kezeli, a stílus és elrendezést pedig a CSS fájlok biztosítják.

	Reakció teszt:

		- A reakció teszt indításakor az ablak alapszínét véletlenszerűen legenerált másodperc múlva megváltoztatjuk.
		A változás idejét rögzítjük. A kattintás és az ablak színének változásának idejének a különbsége adja az eredményt.
		Ez háromszor ismédlődik meg és a legjobb eredményt fog rögzítésre kerülni.
		Ha a kattintás a színváltozás előtt történik, akkor érvénytelen a teszt és újra kell próbálni.


	Szám memória:

		- A szám memória teszt indításakor egy véletlenszerű egy elemű számsor jelenik meg egy meghatározott rövig ideig. 
		Ezután az idő után a számsor eltűnik és megjelenik egy input ablak, amiben a felhasználónak meg kell adni a megfelelő számokat.
		Ha a helyes számokat adta meg, akkor a következő szintre lépünk és a számsor növekszik plusz egy számmal,
		a bekérendő szám megjelenítésének az idejét, növeljük egy kis mértékkel.
		Ha nem a megfelelő számokat adtuk meg, akkor a jelenlegi szint kerül be eredménynek.
	
    Célzás teszt:

		- A célzás teszten, egy előre meghatározott számú célkeresztek jelennek meg egyessével. A cél ezekre minnél hamarabb rákattintani.
		A sikeres kattintás esetén a célkereszt eltűnik és egy újabb célkereszt jelenik meg véletlenszerű helyen a képernyőn. Ameddig nem kattintunk rá a célkeresztre, addig az nem tűnik el. Ha az összes célkereszt elfogyott, akkor a célkereszt megjelenése és a kattintás közötti időknek, az átlagát kapja meg a játékos.

	Gépelés teszt:

		- A gépelés gyorsaság teszten, egy véletlenszerű hosszúságú szöveg jelenik meg, amit a lehető leghamarabb be kell gépelni. Egy stopper indul el, amint az első karaktert begépeltük. A szövegben nem szerepelhet helyesírási hiba, csak a megfelelő karaktereket fogja beszámítiani. A szövegben vissza lehet menni és kijavítani a hibásan begépelt karaktereket. A szöveg végén eredményként egy "words per minute" átlagot kapunk vissza, ami az átlag begépelt karaktereket jelzi percenként.

	Vizuális memória teszt:

		- A vizuális memória tesztnél egy előre meghatározott számú négyzetekből felvillan véletlenszerűen pár négyzet egy másodpercre.
		Utána az összes felvillant négyzetnek a helyét kell kijelölni. A rossz négyzet kijelölésért hiba pont jár, 3 hiba pont után vége a játéknak. Csak akkor léphetünk a következő szintre, ha az összes megfelelő négyzetet kijelöltük. A szintek előrehaladásával a négyzetek száma egyre több lesz. A játék végén a szint száma fog eredményként eltárolódni.

	Verbális memória teszt:

		- A verbális memória tesztnél egy véletlenszerű szó fog megjelenni, amiről el kell dönteni hogy láttuk-e már vagy sem. Ha sikerül eltalálni egy szóról hogy új-e vagy sem, akkor minden egyes szó után egy pontot kapunk. Ha rosszul döntöttünk akkor egy életet elveszítünk a 3-ból. Ha elfogyott az összes életünk, akkor a játék végén a helyesen döntött szavak számát fogjuk eredményként kapni.



---------------------------------

Tesztterv:
	
	A tesztek segítségével tudunk megbizonyosodni arról, hogy a programunk megfelelően működik. A teszteket a fejlesztők hajtják végre manuálisan.
	Ha a program eltérő értéket ad vissza a várt eredményről vagy láthatóan nem megfelelőképpen működik akkor azt a fejlesztők kijavítják.

	A cél a program zökkenőmentes futtatása az elvárt követelményeknek megfelelően.

---------------------------------

Telepítési terv:

	-A szoftver eléréséhez egy böngésző szükséges és internet elérés. Nem igényel külön szoftvert.
