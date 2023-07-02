<?php

namespace App\Models;

use CodeIgniter\Model;

class FilmModel extends Model
{
    protected $table = 'film';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = 'true';
    protected $protectFields = false;
    protected $allowedFields = ['nama_film', 'id_genre', 'duration', 'cover'];

    public function getAllData()
    {
        return $this->join('genre', 'film.id_genre = genre.id')->findAll();
    }

    public function getDataByID($id)
    {
        return $this->find($id);
    }

    public function getDataBy($data)
    {
        return $this->where('judul', $data)->findAll();
    }

    public function getOrderBy($data)
    {
        return $this->orderBy('tanggal', 'desc')->findAll();
    }

    public function getLimit()
    {
        return $this->limit(10)->findAll();
    }

    public function getFilmAll()
    {
        $builder = $this->db->table('artikel');
        $builder->select('film.*');
        $builder->select('genre.*');
        $query = $builder->get();
        return $query->getResult();
    }
}
