<?php

use state\FrontendData;
use state\FrontendContext;

class TestFrontendContext extends PHPUnit_Framework_TestCase {
    
    public function testShowHeaderHomepage()
    {
        $context = new FrontendContext([
            'homepage' => 1,
        ]);

        $this->assertEquals("Homepage:showHeader", $context->showHeader());
    }

    public function testShowContentHomepage()
    {
        $context = new FrontendContext([
            'homepage' => 1,
        ]);

        $this->assertEquals("Homepage:showContent", $context->showContent());
    }

    public function testShowHeaderSuppage()
    {
        $context = new FrontendContext([
            'homepage' => 0,
        ]);

        $this->assertEquals("Subpage:showHeader", $context->showHeader());
    }

    public function testShowContentSuppage()
    {
        $context = new FrontendContext([
            'homepage' => 0,
        ]);

        $this->assertEquals("Subpage:showContent", $context->showContent());
    }
}
