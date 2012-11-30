<?php
class Local {
    //version 1
    public function __construct($lang) {
        switch($lang) {

            case "en":
                $this->switch_lang_shortcut = "cs";
                $this->switch_lang_caption = "ČESKY";
                $this->what_is_lmb_caption = "What is LMB Party?";
                $this->directions_caption = "Directions";
                $this->accomodation_caption = "Accomodation";

                $this->whatis_text1 =
                    "LMB party is a traditional outdoors whole-weekend
                    lasting megaparty hapenning annually by the end of
                    april, placed outside civilisation within Karlstejn and
                    Beroun's surrounding areas.";
                $this->whatis_text2 =
                    "We serve draft beer at the place for a reasonable coin,
                    some grilled food is sold at the place too. The
                    atmosphere of the event is backed up by loud reproduced
                    music, typically of Rock & Metal genres.";

                $this->directions_text1 =
                    "The place is reachable either by public transportation
                    (train, bus), or by a car. There is enough parking space
                    at the area of the event. The exact address of the place
                    is Tetín 70 (There is two types of house numbering";
                $this->directions_text2 =
                    "Nearest villages & towns reachable by public
                    transportation are Tetín (1 km, bus from Beroun),
                    Srbsko (2km, train from Prague & Beroun), Beroun (3 km,
                    bus & train from Prague). In the case of arrival of a
                    larger group, we can arrange a car to help you with your
                    baggage.";

                $this->accomodation_text1 =
                    "Due to every year's increasing amount of attendees and
                    limited capacity of the object itself I am unfortunately
                    not able to provide an accomodation to all guests of the
                    party. Most of the beds inside are usually reserved";

                $this->accomodation_text2 =
                    "for the LMB crew as a privilege and thanks for their
                    help. The rest of the places are usually taken pretty
                    fast, but you can take your chances. Most of the people
                    usually spend the night either in a tent or in their
                    cars. And some - of course - sleep wherever they fall
                    down.";

                $this->more_info_soon = "More information to come soon.";
            break;

            case "cs":
                $this->switch_lang_shortcut = "en";
                $this->switch_lang_caption = "ENGLISH";
                $this->what_is_lmb_caption = "Co je LMB Party?";
                $this->directions_caption = "Doprava a umístění";
                $this->accomodation_caption = "Ubytování";

                $this->whatis_text1 =
                    "LMB party je tradiční outdoorový celovíkendový
                    megamejdan pořádaný anuálně ke konci dubna,
                    situovaný na samotě v poetickém prostředí mezi
                    Karlštejnskem a Berounskem.

                    Na místě bývá zajištěn výčep s točeným pivem";
                $this->whatis_text2 =
                    "za příjemné ceny, občerstvení z grilu, a hlasitá
                    reprodukovaná hudba zpravidla rockového a metalového ražení.";

                $this->directions_text1 =
                    "Místo je dostupné jak hromadnou dopravou (vlak, bus), tak
                    autem. Na místě je dostatečné množství prostoru k
                    parkování. Přesná adresa objektu je <strong>Tetín č.p.
                    70</strong>(nesplést s domem uvnitř Tetína s totožným
                    číslem";
                $this->directions_text2 =
                    "evidenčním, uprostřed obce. Areál se nachází za vesnicí!).

                    Nejbližší obce dostupné hromadnou dopravou jsou
                    Tetín (1 km, bus z Berouna), Srbsko (2 km, vlak z Prahy
                    a Berouna), Beroun (3 km, vlak a bus z Prahy). Při
                    příjezdu větší skupiny možno domluvit odvoz zavazadel.";

                $this->accomodation_text1 =
                    "Vzhledem k rostoucí návštěvnosti akce a kapacitní
                    omezenosti objektu bohužel nejsem schopen zajistit
                    tuto možnost pro všechny návštěvníky. Většinu míst
                    uvnitř zpravidla přednostně poskytuji jako";

                $this->accomodation_text2 =
                    "privilegium a poděkování přípravnému týmu a zbylá místa
                    bývají obsazena velmi rychle. Zbytek hostů ubytování
                    řeší typicky stanem popřípadě noclehem v autě. Občas se
                    i najde pár tvorů, co si lože najdou v
                    jakékoli poloze na jakémkoli místě, jakož i těch,
                    kteří tuto situaci řeší kompletním vypuštěním spánku
                    z víkendového programu :)";

                $this->more_info_soon = "Více informací již brzy.";
            break;
        }
    }
}

?>
