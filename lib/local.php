<?php
class Local {
    //version 2
    public function __construct($lang, $dbh) {
        $this->dbh = $dbh;
        $this->_init_local_values($lang);
    }

    private function _init_local_values($lang) {
        $this->switch_lang_shortcut = $this->_get_localised_text_value($lang, "switch_lang_shortcut");
        $this->switch_lang_caption = $this->_get_localised_text_value($lang, "switch_lang_caption");
        $this->what_is_lmb_caption = $this->_get_localised_text_value($lang, "what_is_lmb_caption");
        $this->directions_caption = $this->_get_localised_text_value($lang, "directions_caption");
        $this->accomodation_caption = $this->_get_localised_text_value($lang, "accomodation_caption");
        $this->whatis_text1 = $this->_get_localised_text_value($lang, "whatis_text1");
        $this->whatis_text2 = $this->_get_localised_text_value($lang, "whatis_text2");
        $this->directions_text1 = $this->_get_localised_text_value($lang, "directions_text1");
        $this->directions_text2 = $this->_get_localised_text_value($lang, "directions_text2");
        $this->accomodation_text1 = $this->_get_localised_text_value($lang, "accomodation_text1");
        $this->accomodation_text2 = $this->_get_localised_text_value($lang, "accomodation_text2");
        $this->more_info_soon = $this->_get_localised_text_value($lang, "more_info_soon");;
        $this->switch_lang_shortcut = $this->_get_localised_text_value($lang, "switch_lang_shortcut");
        $this->switch_lang_caption = $this->_get_localised_text_value($lang, "switch_lang_caption");
        $this->what_is_lmb_caption = $this->_get_localised_text_value($lang, "what_is_lmb_caption");
        $this->directions_caption = $this->_get_localised_text_value($lang, "directions_caption");
        $this->accomodation_caption = $this->_get_localised_text_value($lang, "accomodation_caption");
        $this->whatis_text1 = $this->_get_localised_text_value($lang, "whatis_text1");
        $this->whatis_text2 = $this->_get_localised_text_value($lang, "whatis_text2");
        $this->directions_text1 = $this->_get_localised_text_value($lang, "directions_text1");
        $this->directions_text2 = $this->_get_localised_text_value($lang, "directions_text2");
        $this->accomodation_text1 = $this->_get_localised_text_value($lang, "accomodation_text1");
        $this->accomodation_text2 = $this->_get_localised_text_value($lang, "accomodation_text2");
        $this->more_info_soon = $this->_get_localised_text_value($lang, "more_info_soon");
    }

    private function _get_localised_text_value($lang, $label) {
        $row = $this->dbh->query_get_assoc_onerow(
            array("text"),
            "t_local",
            "lang = '$lang' AND str_id = '$label'"
        );
        return $row["text"];
    }
}

?>
