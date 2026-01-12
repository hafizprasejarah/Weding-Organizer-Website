<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PackageModel;

class PackageController extends BaseController
{
    public function index()
    {
        $packageModel = new PackageModel();

        // Ambil semua package
        $packages = $packageModel->findAll();

        foreach ($packages as &$package) {
            $desc = json_decode($package['description'], true);

            $package['description'] = $desc[0] ?? '-';
        }

        return view('admin/package', [
            'packages' => $packages
        ]);
    }

    public function tambhaview()
    {

        return view('admin/tambahpackages');
    }


    public function tambahlogic()
    {
        $name        = $this->request->getPost('name');
        $price       = $this->request->getPost('price');
        $descriptions = $this->request->getPost('description');


        if (!$name || !$price || empty($descriptions)) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Data tidak lengkap');
        }

        $descriptions = array_values(array_filter($descriptions));

        if (empty($descriptions)) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Deskripsi tidak boleh kosong');
        }

        $packageModel = new PackageModel();

        $data = [
            'name'        => $name,
            'price'       => $price,
            'description' => json_encode($descriptions, JSON_UNESCAPED_UNICODE),
        ];

        $packageModel->insert($data);

        return redirect()->to('/admin/package')
            ->with('success', 'Paket berhasil ditambahkan');
    }


    public function edit($id)
    {
        $packageModel = new PackageModel();
        $package = $packageModel->find($id);

        if (!$package) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Package tidak ditemukan');
        }

        $package['description'] = json_decode($package['description'], associative: true);


        return view('admin/edit/editpackages', [
            'package' => $package
        ]);
    }

    public function update($id)
    {
        $packageModel = new PackageModel();

        $descriptions = array_filter($this->request->getPost('description'));

        $packageModel->update($id, [
            'name'        => $this->request->getPost('name'),
            'price'       => $this->request->getPost('price'),
            'description' => json_encode($descriptions),
        ]);

        return redirect()->to('/admin/package')
            ->with('success', 'Paket berhasil diperbarui');
    }

    public function delete($id)
    {
        $packageModel = new PackageModel();

        $package = $packageModel->find($id);
        
        if (!$package) {
            return redirect()->back()->with('error', 'Paket tidak ditemukan');
        }

        $packageModel->delete($id);

        return redirect()->to('/admin/package')
            ->with('success', 'Paket berhasil dihapus');
    }
}
