<?php
class File {
//version 2

    public function set_name($name) {
        $this->name = $name;
    }
    
    public function get_name() {
        return $this->name;
    }
    
    public function put_contents($data) {
        if (!isset($this->name)) die('No filename specified!');
        file_put_contents($this->name, $data, FILE_APPEND);
    }
}
?>
