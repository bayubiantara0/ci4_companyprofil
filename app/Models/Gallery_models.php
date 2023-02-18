<?php namespace App\Models;

use CodeIgniter\Model;

class Gallery_models extends Model
{
    public function galeri()
    {
        $builder = $this->db->table('galeri');
        $builder->where('jenis_galeri','Galeri');
        $builder->orderBy('galeri.id_galeri','DESC');
        $query = $builder->get();
        return $query->getResultArray();
    }
}