<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        return view('about/about');
    }

    public function tiers()
    {
        return view('about/tiers');
    }
}

?>