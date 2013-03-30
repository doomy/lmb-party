UPDATE t_local SET text = "
    Akce je umístěna nedaleko Hl. m. Prahy mezi okolím Karlštejnska a městem
    Beroun. Místo je dostupné jak hromadnou dopravou (vlak, bus), tak autem.
    Na místě je zajištěno dostatečné množství prostoru k parkování.
    Přesná adresa objektu je <strong>Tetín č.p. 70</strong>(nesplést s domem uvnitř Tetína s
    totožným číslem evidenčním, uprostřed obce. Areál se nachází za vesnicí!).
    Nejbližší obce dostupné hromadnou dopravou jsou Tetín (1 km, bus z Berouna),
    Srbsko (2 km, vlak z Prahy a Berouna), Beroun (3 km, vlak a bus z Prahy).
    Při příjezdu větší skupiny možno domluvit odvoz zavazadel. Pro nízký zájem
    letos nechystám žádný oficiální sraz v Praze, pokud by byl zájem, prosím
    ozývejte se mi a našlo-li by se vás dostatek, nějak bychom to zkusili
    vymyslet.
" WHERE str_id = "directions_text1" AND lang = "cz";

UPDATE t_local set text = "" WHERE str_id = "directions_text2" AND lang = "cz";

UPDATE t_local SET text = "
  The event is placed not very far (cca 40 km) from Czech rep’s capital Prague.
  The place is reachable either by public transportation (train, bus), or by a
  car. There is enough parking space at the area of the event. The exact address
  of the place is <strong>Tetín 70</strong> (although it is technically not a part
  of the village - there is two types of house numbering in the village,
  look for the one outside town.)  Nearest villages & towns reachable by public
  transportation are Tetín (1 km, bus from Beroun), Srbsko
  (2km, train from Prague & Beroun), Beroun (3 km, bus & train from Prague).
  In the case of arrival of a larger group, we can arrange a car to help you
  with your baggage.
" WHERE str_id = "directions_text1" AND lang = "en";


UPDATE t_local set text = "" WHERE str_id = "directions_text2" AND lang = "en";

