<?php
include_once('../../lib/env.php');
$env = new Env('../../');
include_once ($env->basedir . 'lib/test/unit_test_base.php');
include_once ($env->basedir . 'lib/local.php');

class mockDbHandler_Local {

    public function get_array_of_rows_from_table () {
        $row = new stdClass;
        $row->str_id = 'test_more_info_soon';
        $row->text = 'More info soon.';

        return array ($row);
    }
}

class UnitTest_Local extends UnitTestBase {
    public function test_construct() {
        return ($local = new Local('en', new mockDbHandler_Local));
    }

    public function test_set_values() {
        $local = new Local('en', new mockDbHandler_Local);
        return ($local->test_more_info_soon == 'More info soon.');
    }
}

$unit_test_runner = new UnitTestRunner;
$unit_test_runner->run_tests(new UnitTest_Local($env));

?>
