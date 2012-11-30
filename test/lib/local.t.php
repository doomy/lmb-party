<?php
include_once('../../lib/env.php');
$env = new Env('../../');
include_once ($env->basedir . 'lib/test/unit_test_base.php');
include_once ($env->basedir . 'lib/local.php');

class UnitTest_Local extends UnitTestBase {
    public function test_construct() {
        return ($local = new Local());
    }
}

$unit_test_runner = new UnitTestRunner;
$unit_test_runner->run_tests(new UnitTest_Local($env));

?>
