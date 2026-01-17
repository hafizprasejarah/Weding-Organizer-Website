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
        $model = new GalleryModel();

        $data = [
            'title'   => 'gallery',
            'gallery' => $model->orderBy('created_at', 'DESC')->paginate(9),
            'pager'   => $model->pager
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

        if ($image->getError() === UPLOAD_ERR_NO_FILE) {
            return redirect()->back()->with('error', 'Gambar wajib diupload');
        }

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
            return redirect()->back()->with('error', 'Ukuran maksimal 10MB');
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


    public function edit($id)
    {
        $model = new GalleryModel();
        $gallery = $model->find($id);

        if (!$gallery) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Gallery tidak ditemukan');
        }

        return view('admin/edit/editgallery', [
            'gallery' => $gallery
        ]);
    }


    public function update($id)
    {
        $model = new GalleryModel();
        $gallery = $model->find($id);

        if (!$gallery) {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }

        $kategori  = $this->request->getPost('kategori');
        $deskripsi = $this->request->getPost('deskripsi');
        $image     = $this->request->getFile('gambar');

        $dataUpdate = [
            'category'    => $kategori,
            'description' => $deskripsi,
        ];

        if ($image && $image->isValid() && !$image->hasMoved()) {

            if (!in_array($image->getMimeType(), ['image/jpeg', 'image/png', 'image/webp'])) {
                return redirect()->back()->with('error', 'Format gambar tidak didukung');
            }

            if ($image->getSize() > 10 * 1024 * 1024) {
                return redirect()->back()->with('error', 'Ukuran maksimal 10MB');
            }

            $newName = $image->getRandomName();
            $image->move('uploads/gallery', $newName);

            $oldImage = 'uploads/gallery/' . $gallery['image'];
            if (file_exists($oldImage)) {
                unlink($oldImage);
            }

            $dataUpdate['image'] = $newName;
        }

        $model->update($id, $dataUpdate);

        return redirect()->to('admin/gallery')->with('success', 'Gallery berhasil diperbarui');
    }

    public function delete($id)
    {
        $model = new GalleryModel();
        $gallery = $model->find($id);


        if (!$gallery) {
            return redirect()->back()->with('error', 'Gallery tidak ditemukan');
        }

        $oldImage = 'uploads/gallery/' . $gallery['image'];
        if (file_exists(filename: $oldImage)) {
            unlink($oldImage);
        }

        $model->delete($id);

        return redirect()->to('/admin/gallery')
            ->with('success', 'Gallery berhasil dihapus');
    }
}
