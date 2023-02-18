<?php

namespace App\Controllers\Admin;

class Kategori extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Kategori',
            'content'        => 'admin/kategori/index'
        ];
        echo view('admin/layout/wrapper', $data);
    }
}
