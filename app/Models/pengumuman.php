<?php
namespace App\Models;

use CodeIgniter\Model;

class pengumuman extends Model
{

    protected $allowedFields = ['tgl', 'content', 'cp', 'pj', 'created', 'link'];

    protected $table = 'pengumumanadmin';

    public function getdata()
    {
        return $this->findAll();
    }

}