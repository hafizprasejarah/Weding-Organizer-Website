<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BookingModel;
use App\Models\GalleryModel;
use App\Models\PackageModel;
use App\Models\ServiceModel;
use App\Models\UserModel;
use App\Models\MessageModel;
use CodeIgniter\HTTP\ResponseInterface;

class AdminDashboardController extends BaseController
{
    public function index()
    {
   
        $serviceModel = new ServiceModel();
        $galleryModel = new GalleryModel();
        $packageModel = new PackageModel();
        $messageModel = new MessageModel();
        $bookingModel = new BookingModel();

        $data = [
            'total_booking' => $bookingModel->countAllResults(), 
            'total_service' => $serviceModel->countAllResults(),
            'total_gallery' => $galleryModel->countAllResults(),
            'total_message' => $messageModel->countAllResults(),
            'total_package' => $packageModel->countAllResults(),

            'bookingData' => $bookingModel->select('bookings.*, packages.name AS package_name')
            ->join('packages', 'packages.id = bookings.package_id')
            ->orderBy('bookings.created_at', 'DESC')->findAll(5)
        ];


        return view('admin/dashboard', $data);
    }
}
