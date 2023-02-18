<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        $data = [
            'content'=>'home/about'
        ];

        echo view('layout/wrapper', $data);
    }
}
