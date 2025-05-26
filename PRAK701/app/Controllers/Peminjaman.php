<?php

namespace App\Controllers;

use App\Models\PeminjamanModel;
use App\Models\MemberModel;
use App\Models\BukuModel;
use CodeIgniter\Controller;

class Peminjaman extends Controller {
    public function index() {
        $model = new PeminjamanModel();
        $data['peminjaman'] = $model->withRelations();
        return view('peminjaman/index', $data);
    }

    public function create() {
        $data['members'] = (new MemberModel())->findAll();
        $data['buku'] = (new BukuModel())->findAll();
        return view('peminjaman/form', $data);
    }

    public function store() {
        $model = new PeminjamanModel();
        $data = $this->request->getPost();
        if (!$this->validate([
            'member_id' => 'required',
            'buku_id' => 'required',
            'tanggal_pinjam' => 'required',
            'tanggal_kembali' => 'required'
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
        $model->save($data);
        return redirect()->to('/peminjaman');
    }

    public function edit($id) {
        $model = new PeminjamanModel();
        $data['peminjaman'] = $model->find($id);
        $data['members'] = (new MemberModel())->findAll();
        $data['buku'] = (new BukuModel())->findAll();
        return view('peminjaman/form', $data);
    }

    public function update($id) {
        $model = new PeminjamanModel();
        $data = $this->request->getPost();
        $data['id'] = $id;
        $model->save($data);
        return redirect()->to('/peminjaman');
    }

    public function delete($id) {
        $model = new PeminjamanModel();
        $model->delete($id);
        return redirect()->to('/peminjaman');
    }
}