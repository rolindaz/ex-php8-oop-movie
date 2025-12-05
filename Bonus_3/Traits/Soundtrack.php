<?php

trait Soundtrack
{
    public $title;
    public $composer;
    public $label;
    public $available_on = [];
    public function checkSpotifyAvailability()
    {
        return in_array("Spotify", $this->available_on);
    }
}
