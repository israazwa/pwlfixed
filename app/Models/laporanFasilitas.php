<?php
namespace App\Models;

use CodeIgniter\Model;

class laporanFasilitas extends Model
{

    protected $allowedFields = ['id', 'email', 'foto', 'nama', 'jenis', 'content', 'masalah', 'created', 'confirm'];

    protected $table = 'laporanFasilitas';

    public function getdata()
    {
        return $this->findAll();
    }

}