<?php

include_once ('../../lib/env.php');
$env = new Env('../../');
include_once ($env->basedir . 'lib/test/unit_test_base.php');
include_once ($env->basedir . 'lib/file.php');

class UnitTest_File extends UnitTestBase {
     public function __construct($env) {
         $this->file = new File;
         include_once($env->basedir.'lib/dir.php');
         $this->dir = new Dir($env);
     }

    public function test_set_name_get_name() {
        $this->file->set_name('testing_file_name.tst');
        return ($this->file->get_name() == ('testing_file_name.tst'));
    }
    
    public function test_put_contents() {
        $this->file->set_name('testing_file_name.tst');
        $this->file->put_contents('test contents');
        $result = (file_get_contents('testing_file_name.tst') == 'test contents');
        $this->dir->delete_file('testing_file_name.tst');
        return $result;
    }
}

$unit_test_runner = new UnitTestRunner;
$unit_test_runner->run_tests(new UnitTest_File($env));

?>
