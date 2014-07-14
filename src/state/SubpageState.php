<?php namespace state;

class SubpageState implements StateInterface {
    public function showHeader() { return "Subpage:showHeader";}
    public function showContent() { return "Subpage:showContent";}
}