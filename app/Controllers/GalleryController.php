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

    public function tambhaview()
    {

        return view('admin/tambahgallery');
    }


    public function save()
    {
        $kategori = $this->request->getPost('kategori');
        $deskripsi = $this->request->getPost('deskripsi');
        $image = $this->request->getFile('gambar');

        if (!$image || !$image->isValid()) {
            return redirect()->back()->with('error', 'File tidak valid');
        }

        if (!$image->isValid() || $image->hasMoved()) {
            return redirect()->back()->with('error', 'Upload gagal');
        }

        if (!in_array($image->getMimeType(), ['image/jpeg', 'image/png', 'image/webp'])) {
            return redirect()->back()->with('error', 'Format gambar tidak didukung');
        }

        if ($image->getSize() > 10 * 1024 * 1024) {
            return redirect()->back()->with('error', 'Ukuran maksimal 2MB');
        }

        $newName = $image->getRandomName();

        $image->move('uploads/gallery', $newName);


        $Models = new GalleryModel();
        $Models->insert([
            'category' => $kategori,
            'description' => $deskripsi,
            'image' => $newName,
        ]);

        return redirect()->to('admin/gallery')->with('success', 'Gallery berhasil ditambahkan');
    }
}
