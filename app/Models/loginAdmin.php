<?php
namespace App\Models;

use CodeIgniter\Model;

class loginAdmin extends Model
{

    protected $allowedFields = ['username', 'password', 'updated'];

    protected $table = 'admin';

    public function getdata()
    {
        return $this->findAll();
    }

}