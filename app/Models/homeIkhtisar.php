<?php
namespace App\Models;

use CodeIgniter\Model;

class homeIkhtisar extends Model
{

    protected $allowedFields = ['id', 'content', 'created'];

    protected $table = 'ikhtisar';

    public function getHero()
    {
        return $this->findAll();
    }

}