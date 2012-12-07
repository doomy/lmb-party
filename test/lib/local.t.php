<?php
include_once('../../lib/env.php');
$env = new Env('../../');
include_once ($env->basedir . 'lib/test/unit_test_base.php');
include_once ($env->basedir . 'lib/local.php');

class mockDbHandler {
    public function query_get_assoc_onerow() {
        return array("text" => "More info soon.");
    }
}

class UnitTest_Local extends UnitTestBase {
    public function test_construct() {
        return ($local = new Local('en', new mockDbHandler));
    }

    public function test_set_values() {
        $local = new Local('en', new mockDbHandler);
        return ($local->more_info_soon == 'More info soon.');
    }
}

$unit_test_runner = new UnitTestRunner;
$unit_test_runner->run_tests(new UnitTest_Local($env));

?>
