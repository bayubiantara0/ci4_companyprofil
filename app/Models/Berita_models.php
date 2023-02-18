<?php
namespace App\Models;

use CodeIgniter\Model;

class Berita_models extends Model
{
    protected $table = 'berita';
    protected $primarykey = 'id_berita';
    protected $allowedFields = [];

    public function beranda()
    {
        $builder = $this->db->table('berita');
        $builder->select('berita.*, kategori.nama_kategori, kategori.slug_kategori, users.nama');
        $builder->join('kategori','kategori.id_kategori = berita.id_kategori','LEFT');
        $builder->join('users','users.id_user = berita.id_user','LEFT');
        $builder->where( [  'status_berita' => 'Publish',
                            'jenis_berita'  => 'Berita']);
        $builder->orderBy('berita.tanggal_publish','DESC');
        $builder->limit(4);
        $query = $builder->get();
        return $query->getResultArray();
    }
}