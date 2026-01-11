<?php

namespace App\Models;

use CodeIgniter\Model;

class MessageModel extends Model
{
    protected $table = 'messages';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $returnType       = 'array';

    protected $allowedFields = ['name', 'email', 'message', 'status'];
    protected $useTimestamps = false;

    protected $createdField  = 'created_at';
    protected $updatedField  = null;

    // Optional: default order
    protected $orderBy = ['created_at' => 'DESC'];
}
