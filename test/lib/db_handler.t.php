<?php
include_once('../../lib/env.php');
$env = new Env('../../');
include_once ($env->basedir . 'lib/test/unit_test_base.php');
include_once ($env->basedir . 'lib/db_handler.php');

class mockDbHandler extends dbHandler {
    public function __construct() {
    }
    
    public function query($sql) {
        $row_object = new stdClass();
        $row_object->column1 = 'value1';
        $row_object->column2 = 'value2';
        return array($row_object);
    }
    
    public function fetch_from_result($result, $format = 'object') {
        return $result[0];
    }
}

class UnitTest_dbHandler extends UnitTestBase {
    public function test_query_get_obj_onerow() {
        $this->db_handler = new mockDbHandler();
        $row_object = $this->db_handler->query_get_obj_onerow(
            array('column1', 'column2'),
            'test_table'
        );
        
        return (
            ($row_object->column1 == 'value1')
            &&
            ($row_object->column2 == 'value2')
        );
    }
}

$unit_test_runner = new UnitTestRunner;
$unit_test_runner->run_tests(new UnitTest_dbHandler($env));

?>
