<?php
class Local {
    //version 4
    public function __construct($lang, $dbh) {
        $this->dbh = $dbh;
        $this->_init_local_values($lang);
    }

    private function _init_local_values($lang) {
        $this->lang = $lang;
        $rows = $this->dbh->get_array_of_rows_from_table(
            't_local', array('str_id', 'text'), "lang='$lang'", 'object'
        );

        foreach($rows as $row) {
            $label = $row->str_id;
            $this->$label = $row->text;
        }
    }
}

?>
