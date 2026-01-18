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

        if (in_array($status, ['pending', 'confirmed', 'cancelled'])) {
            $model->where('status', $status);
        }

        $bookings =  $model->select('bookings.*, packages.name AS package_name')
            ->join('packages', 'packages.id = bookings.package_id')
            ->orderBy('created_at', 'DESC')
            ->findAll();

        return view('admin/booking', [
            'title'    => 'bookings',
            'bookings' => $bookings
        ]);
    }

    public function confirm($id)
    {
        $model = new BookingModel();

        $model->update($id, [
            'status' => 'confirmed'
        ]);

        return redirect()->back()->with('success', 'Booking berhasil dikonfirmasi');
    }

    public function cancel($id)
    {
        $model = new BookingModel();

        $model->update($id, [
            'status' => 'cancelled'
        ]);

        return redirect()->back()->with('success', 'Booking berhasil dibatalkan');
    }
}
