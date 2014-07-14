<?php namespace state;

class HomepageState implements StateInterface {
    public function showHeader() { return "Homepage:showHeader";}
    public function showContent() { return "Homepage:showContent";}
}