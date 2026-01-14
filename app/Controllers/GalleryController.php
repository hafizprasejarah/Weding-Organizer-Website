<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GalleryModel;
use CodeIgniter\HTTP\Message;
use CodeIgniter\HTTP\ResponseInterface;

class GalleryController extends BaseController
{
    public function index()
    {

        $models = new GalleryModel();

        $gallery = $models->findAll();

        // if (empty($gallery)) {
        //     throw new \CodeIgniter\Exceptions\PageNotFoundException(message: 'gallery tidak ditemukan');
        // }

        $data = [
            'title' => 'gallery',
            'gallery' => $gallery
        ];

        return view('admin/gallery', $data);
    }

    public function tambhaview(){
        
        return view('admin/tambahgallery');
    }
}
