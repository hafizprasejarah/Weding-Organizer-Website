<?php

namespace App\Controllers;

use App\Models\GalleryModel;

class PublicController extends BaseController
{
    public function index(): string
    {
        return view('home', [
            'title' => 'home'
        ]);
    }

    public function service(): string
    {

        return view('service', [
            'title' => 'services'
        ]);
    }

    public function gallery(): string
    {
        $model = new GalleryModel();
        $data = [
            'title' => 'gallery',
            'gallery' => $model
            ->orderBy('created_at', 'DESC')
            ->paginate(8, 'gallery'),
            'pager'   => $model->pager,
        ];

        return view('gallery', $data);
    }

    public function packages(): string
    {

        return view('packages', [
            'title' => 'packages'
        ]);
    }
}
