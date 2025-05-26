<?php

namespace App\Controllers;

use App\Models\MemberModel;
use CodeIgniter\Controller;

class Member extends Controller {
    public function index() {
        $model = new MemberModel();
        $data['member'] = $model->findAll();
        return view('member/index', $data);
    }

    public function create() {
        return view('member/form');
    }

    public function store() {
        $model = new MemberModel();
        $data = $this->request->getPost();
        if (!$this->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'tanggal_mendaftar' => 'required',
            'tanggal_terakhir_bayar' => 'required'
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
        $model->save($data);
        return redirect()->to('/member');
    }

    public function edit($id) {
        $model = new MemberModel();
        $data['member'] = $model->find($id);
        return view('member/form', $data);
    }

    public function update($id) {
        $model = new MemberModel();
        $data = $this->request->getPost();
        $data['id'] = $id;
        $model->save($data);
        return redirect()->to('/member');
    }

    public function delete($id) {
        $model = new MemberModel();
        $model->delete($id);
        return redirect()->to('/member');
    }
}
