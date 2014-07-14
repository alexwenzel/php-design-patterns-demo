<?php namespace state;

class FrontendContext {

    public $state;

    public function __construct($data)
    {
        if ($data['homepage'] === 1) {
            $this->state = new HomepageState();
        }
        else {
            $this->state = new SubpageState();
        }
    }

    public function showHeader()
    {
        return $this->state->showHeader();
    }

    public function showContent()
    {
        return $this->state->showContent();
    }

}