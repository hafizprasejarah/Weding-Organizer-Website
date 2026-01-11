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

    // public function index()
    // {
    //     $packageModel = new PackageModel();

    //     $packages = $packageModel->findAll();

    //     foreach ($packages as &$package) {
    //         $package['description'] = json_decode($package['description'], true) ?? [];
    //     }

    //     return view('admin/package', [
    //         'packages' => $packages
    //     ]);
    // }
}
