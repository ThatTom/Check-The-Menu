<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $session = session();

        $session->set('userState', 0);

        $passdata['userState'] = $session->get('userState');

        return view('index', $passdata);
    }
}

?>