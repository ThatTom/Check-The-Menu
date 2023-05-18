<?php

namespace App\Controllers;

class Blog extends BaseController
{
    public function index()
    {   
        return view('blog/index');
    }

    public function viewpost()
    {
        $data['postid'] = $this->request->uri->getSegment(2);
        return view('blog/viewpost', $data);
    }
}

?>