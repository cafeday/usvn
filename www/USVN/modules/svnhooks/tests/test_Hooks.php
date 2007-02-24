<?php
/**
* @package svnhooks
* @since 0.5
*/

require_once 'www/USVN/modules/svnhooks/models/Hooks.php';

class Test_SvnHooks_Hooks extends PHPUnit2_Framework_TestCase
{
    public function test_startCommit()
    {
		$hook = new USVN_modules_svnhooks_Hooks();
		$hook->startCommit("007", "test");
    }

    public function test_preCommit()
    {
		$hook = new USVN_modules_svnhooks_Hooks();
		$hook->preCommit("007", "test", "Ceci est un commit", array(array('M', 'tata'), array('A', 'tutu')));
    }
}