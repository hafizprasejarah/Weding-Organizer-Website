<?php

namespace App\Controllers;

use App\Models\BookingModel;
use App\Models\ContactModel;
use App\Models\GalleryModel;
use App\Models\PackageModel;

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
    public function submit()
    {
        $model = new ContactModel();
        $ip    = $this->request->getIPAddress();

        $count = $model->where('ip_address', value: $ip)
            ->where('created_at >=', date('Y-m-d H:i:s', strtotime('-1 hour')))
            ->countAllResults();

        if ($count >= 3) {
            return $this->response->setJSON([
                'status'  => 'error',
                'message' => 'Terlalu banyak pesan dari IP ini. Silakan coba lagi dalam 1 jam.'
            ]);
        }

        $model->insert([
            'name'       => $this->request->getPost('name'),
            'email'      => $this->request->getPost('email'),
            'message'    => $this->request->getPost('message'),
            'ip_address' => $ip,
            'status'     => 'unread',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        return $this->response->setJSON([
            'status'  => 'success',
            'message' => 'Pesan berhasil dikirim Terima kasih sudah menghubungi kami.'
        ]);
    }
    public function packages(): string
    {
        $model = new PackageModel();

        $packages = $model
            ->orderBy('created_at', 'DESC')
            ->findAll();

        if (!$packages) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Package tidak ditemukan');
        }

        foreach ($packages as &$package) {
            $package['description'] = json_decode($package['description'], true) ?? [];
        }

        return view('package', [
            'title' => 'package',
            'packages' => $packages
        ]);
    }


    public function contact(): string
    {

        return view('contact', [
            'title' => 'contact'
        ]);
    }
    public function book_now(): string
    {
        $model = new PackageModel();


        $packages = $model
            ->select('id, name, description')
            ->findAll();


        foreach ($packages as &$package) {
            $package['description'] = !empty($package['description'])
                ? json_decode($package['description'], true)
                : [];
        }
        unset($package);

        return view('book_now', [
            'packages' => $packages,
            'title'    => 'booking'
        ]);
    }


    public function submitbooking()
    {
        $model = new BookingModel();
        $ip    = $this->request->getIPAddress();

        $count = $model->where('ip_address', value: $ip)
            ->where('created_at >=', date('Y-m-d H:i:s', strtotime('-1 hour')))
            ->countAllResults();

        if ($count >= 3) {
            return $this->response->setJSON([
                'status'  => 'error',
                'message' => 'Terlalu banyak pesan dari IP ini. Silakan coba lagi dalam 1 jam.'
            ]);
        }

        $model->insert([
            'name'          => $this->request->getPost('name'),
            'email'         => $this->request->getPost('email'),
            'phone'         => $this->request->getPost('phone'),
            'wedding_date'  => $this->request->getPost('date'),
            'package_id'    => $this->request->getPost('package_id'),
            'status'        => 'pending',
            'ip_address'    => $ip,
        ]);

        return $this->response->setJSON([
            'status'  => 'success',
            'message' => 'Pesan berhasil dikirim Terima kasih sudah menghubungi kami.'
        ]);
    }
}
