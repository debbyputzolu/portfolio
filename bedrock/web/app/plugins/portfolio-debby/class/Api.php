<?php

namespace Portfolio;

class Api {

    protected $baseURI;

    public function __construct()
    {
        // Registering our Custom API
        add_action('rest_api_init', [$this, 'portfolio_api_initialize']);
    }

    public function portfolio_api_initialize()
    {
        // Retrieve the name of a folder from the file path
        $this->baseURI = dirname($_SERVER['SCRIPT_NAME']);
    }
}