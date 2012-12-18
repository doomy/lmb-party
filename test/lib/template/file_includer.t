<?php
include_once('../../../lib/env.php');
$env = new Env('../../../');
include_once ($env->basedir . 'lib/test/unit_test_base.php');
include_once ($env->basedir . 'lib/template/file_includer.php');

class mock_FileIncluder extends FileIncluder {
    public function __construct($env) {
        $this->included_files = array();
    }

    public function include_file($file, $type=null)
    {
        $this->included_files[] = $file;
    }
}

class UnitTest_FileIncluder extends UnitTestBase {

    public function test_construct() {
        return ($file_includer = new FileIncluder(''));
    }
    
    public function test_include_multiple() {
        $mock_file_includer = new mock_FileIncluder('');
        $mock_files = array('file1.aaa', 'file2.bbb');
        $mock_file_includer->include_multiple($mock_files);
        return ($mock_file_includer->included_files == $mock_files);
    }
}

$unit_test_runner = new UnitTestRunner;
$unit_test_runner->run_tests(new UnitTest_FileIncluder($env));

?>
