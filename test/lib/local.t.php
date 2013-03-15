<?php
include_once('../../lib/env.php');
$env = new Env('../../');
include_once ($env->basedir . 'lib/test/unit_test_base.php');
include_once ($env->basedir . 'lib/local.php');

class mockDbhLocal {
    public function get_array_of_rows_from_table() {
        return array();
    }
}

class UnitTest_Local extends UnitTestBase {
    public function test_construct() {
        $dbh = new mockDbhLocal();
        return ($local = new Local('en', $dbh));
    }
}

$unit_test_runner = new UnitTestRunner;
$unit_test_runner->run_tests(new UnitTest_Local($env));

?>
