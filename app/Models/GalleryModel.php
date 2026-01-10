<?php

namespace App\Models;

use CodeIgniter\Model;

class GalleryModel extends Model
{
    protected $table            = 'gallery';
    protected $primaryKey       = 'id';
    protected $allowedFields    = [
        'image',
        'category',
        'status',
        'created_at',
    ];


    protected $useTimestamps = true;
}
