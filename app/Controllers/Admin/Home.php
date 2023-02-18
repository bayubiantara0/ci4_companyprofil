<?php

namespace App\Controllers\Admin;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dasboard',
            'content' => 'admin/dasboard/index'
        ];

        echo view('admin/layout/wrapper', $data);
    }
}
