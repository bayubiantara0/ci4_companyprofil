<?php

namespace App\Controllers\Admin;

class Dasboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dasboard',
            'content'        => 'admin/dasboard/index'
        ];
        echo view('admin/layout/wrapper', $data);
    }
}
