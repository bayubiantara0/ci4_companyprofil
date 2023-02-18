<?php

namespace App\Controllers\Admin;

class Berita extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Berita, Profil dan Layanan',
            'content' => 'admin/berita/index'
        ];

        echo view('admin/layout/wrapper', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Tambah Berita',
            'content' => 'admin/berita/tambah'
        ];

        echo view('admin/layout/wrapper', $data);
    }
}
