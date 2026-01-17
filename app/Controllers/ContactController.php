<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ContactModel;

class ContactController extends BaseController
{
    public function index()
    {
        $model  = new ContactModel();
        $status = $this->request->getGet('status'); // read | unread

        if (in_array($status, ['read', 'unread'])) {
            $model->where('status', $status);
        }

        return view('admin/contact', [
            'title'    => 'contacts',
            'contacts' => $model
                ->orderBy('created_at', 'DESC')
                ->findAll()
        ]);
    }

    public function show($id)
    {
        $model = new ContactModel();
        $model->update($id, row: ['status' => 'read']);

        return view('admin/detail', [
            'contact' => $model->find($id)
        ]);
    }

    public function delete($id)
    {
        $model = new ContactModel();
        $model->delete($id);

        return redirect()->back()->with('success', 'Pesan dihapus');
    }
}
