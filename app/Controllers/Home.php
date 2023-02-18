<?php

namespace App\Controllers;

use App\Models\Berita_models;
use App\Models\Gallery_models;

class Home extends BaseController
{
    public function index()
    {
        $m_berita = new Berita_models();
        $m_gallery = new Gallery_models();
        $berita2 = $m_berita->beranda();
        $gallery = $m_gallery->galeri();

        $data = [
            'berita2'=>$berita2,
            'gallery'=>$gallery,
            'content'=>'home/index'
        ];

        echo view('layout/wrapper', $data);
    }
}
