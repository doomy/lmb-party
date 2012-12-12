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

        $row_object2 = new stdClass();
        $row_object2->column1 = 'value3';
        $row_object2->column2 = 'value4';
        return array($row_object, $row_object2);
    }

    public function fetch_one_from_result($result, $format = 'object') {
        return $result[0];
    }

    public function fetch_multiple_from_result($result, $format = 'object') {
        switch($format) {
            case 'object':
                return $result;
            break;
            case 'assoc':
                $index = 0;
                foreach($result as $row_object) {
                    $rows[$index]['column1'] = $row_object->column1;
                    $rows[$index]['column2'] = $row_object->column2;
                    $index++;
                }
                return $rows;
            break;
        }
    }
}

class UnitTest_dbHandler extends UnitTestBase {
    public function init() {
        $this->db_handler = new mockDbHandler();
    }

    public function test_query_get_obj_onerow() {
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

    public function test_get_array_of_rows_as_objects_from_table() {
        $rows_array = $this->db_handler->get_array_of_rows_from_table(
            'test_table', array('column1', 'column2'), null, 'object'
        );
        return (($rows_array[0]->column1 == 'value1')&&($rows_array[1]->column1 == 'value3'));
    }

    public function test_get_array_of_rows_as_assoc_from_table() {
        $rows_array = $this->db_handler->get_array_of_rows_from_table(
            'test_table', null, null, 'assoc'
        );
        return (($rows_array[0]['column1'] == 'value1')&&($rows_array[1]['column1'] == 'value3'));
    }
}

$unit_test_runner = new UnitTestRunner;
$unit_test_runner->run_tests(new UnitTest_dbHandler($env));

?>
