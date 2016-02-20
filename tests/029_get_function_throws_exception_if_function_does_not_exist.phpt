--TEST--
getFunction() throws FunctionCallException if function does not exist.
--SKIPIF--
<?php include("should_run_online_tests.inc"); ?>
--FILE--
<?php
$config = include "sapnwrfc.config.inc";
$c = new \SAPNWRFC\Connection($config);

try {
    $c->getFunction('Z_I_DONT_EXIST');
} catch(\SAPNWRFC\FunctionCallException $e) {
    echo 'ok';
}
--EXPECT--
ok
