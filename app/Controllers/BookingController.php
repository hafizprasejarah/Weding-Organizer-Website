<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BookingModel;
use CodeIgniter\HTTP\ResponseInterface;

class BookingController extends BaseController
{
    public function index()
    {
        $model = new BookingModel();
        $status = $this->request->getGet('status'); // read | unread

        if (in_array($status, ['pending', 'confirmed','canceled'])) {
            $model->where('status', $status);
        }

        return view('admin/booking', [
            'title'    => 'bookings',
            'bookings' => $model
                ->orderBy('created_at', 'DESC')
                ->findAll()
        ]);
    }
}
