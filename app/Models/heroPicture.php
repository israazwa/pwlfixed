<?php
namespace App\Models;

use CodeIgniter\Model;

class heroPicture extends Model
{

    protected $allowedFields = ['id', 'content', 'created'];

    protected $table = 'homehero';

    public function getHero()
    {
        return $this->findAll();
    }

}