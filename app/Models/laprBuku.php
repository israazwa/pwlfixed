<?php

namespace App\Models;
use CodeIgniter\Model;

class laprBuku extends Model
{
    protected $allowedFields = ['id', 'email', 'foto', 'nama', 'jenis', 'content', 'masalah', 'created', 'confirm'];

    protected $table = 'laporanbuku';

    public function getdata()
    {
        return $this->findAll();
    }
}


?>