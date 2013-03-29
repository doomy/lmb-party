UPDATE t_local SET text = "
  LMB party je tradiční outdoorový celovíkendový megamejdan s atmosférou malého 
  festivalu pořádaný anuálně ke konci dubna, situovaný na samotě v poetickém 
  prostředí mezi Karlštejnskem a Berounskem. Na místě bývá zajištěn výčep s 
  točeným pivem za příjemné ceny, občerstvení z grilu, a hlasitá reprodukovaná 
  hudba zpravidla rockového a metalového ražení. Akce je otevřená pro všechny, 
  máte-li tedy pocit, že se na akci tohohle charakteru budete bavit, buďtež 
  srdečně zváni.
" WHERE str_id = "whatis_text1" AND lang = "cz";

UPDATE t_local set text = "" WHERE str_id = "whatis_text2" AND lang = "cz";

UPDATE t_local set text = "" WHERE str_id = "whatis_text2" AND lang = "en";

UPDATE t_local SET text = "
  LMB party is a traditional outdoors whole-weekend lasting megaparty with an 
  feel of a small festival hapenning annually by the end of april, 
  placed outside civilisation within Karlstejn and Beroun's surrounding areas. 
  We serve draft beer at the place for a reasonable coin, some grilled food is 
  sold at the place too. During the whole weekend we play reproduced music, 
  typically of Rock & Metal genres. The event is open for anyone, so if you feel 
  you might enjoy this kind of party, be very welcome
" WHERE str_id = "whatis_text1" AND lang = "en";
