<?php
include_once('../../lib/env.php');
$env = new Env('../../');
include_once ($env->basedir . 'lib/test/unit_test_base.php');
include_once ($env->basedir . 'lib/local.php');

class mockDbHandler_Local {
    public function query_get_obj_onerow() {
        $row_object = new stdClass;
        $row_object->text = "More info soon.";
        return $row_object;
    }
}

class UnitTest_Local extends UnitTestBase {
    public function test_construct() {
        return ($local = new Local('en', new mockDbHandler_Local));
    }

    public function test_set_values() {
        $local = new Local('en', new mockDbHandler_Local);
        return ($local->more_info_soon == 'More info soon.');
    }
}

$unit_test_runner = new UnitTestRunner;
$unit_test_runner->run_tests(new UnitTest_Local($env));

?>
